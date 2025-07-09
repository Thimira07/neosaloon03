<?php
/**
 * Neo Salon - Newsletter Subscription Handler
 * Handles AJAX newsletter subscription requests
 */

// Set content type for JSON response
header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Include database connection
require_once 'includes/db_connect.php';

// Get POST data
$input = json_decode(file_get_contents('php://input'), true);
$email = isset($input['email']) ? trim($input['email']) : '';

// Alternative: Get from form data
if (empty($email) && isset($_POST['email'])) {
    $email = trim($_POST['email']);
}

// Validate email
if (empty($email)) {
    echo json_encode(['success' => false, 'message' => 'Email address is required']);
    exit;
}

if (!validateEmail($email)) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address']);
    exit;
}

// Check if table exists, if not create it
$createTableQuery = "
CREATE TABLE IF NOT EXISTS newsletter_subscriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    is_active BOOLEAN DEFAULT TRUE,
    unsubscribe_token VARCHAR(255) UNIQUE,
    ip_address VARCHAR(45),
    user_agent TEXT
)";

if (!$conn->query($createTableQuery)) {
    error_log("Error creating newsletter table: " . $conn->error);
}

// Check if email already exists
$checkQuery = "SELECT id, is_active FROM newsletter_subscriptions WHERE email = ?";
$checkStmt = $conn->prepare($checkQuery);

if (!$checkStmt) {
    error_log("Prepare failed: " . $conn->error);
    echo json_encode(['success' => false, 'message' => 'Database error occurred']);
    exit;
}

$checkStmt->bind_param("s", $email);
$checkStmt->execute();
$result = $checkStmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['is_active']) {
        echo json_encode(['success' => false, 'message' => 'This email is already subscribed to our newsletter']);
    } else {
        // Reactivate subscription
        $reactivateQuery = "UPDATE newsletter_subscriptions SET is_active = TRUE, subscribed_at = CURRENT_TIMESTAMP WHERE email = ?";
        $reactivateStmt = $conn->prepare($reactivateQuery);
        $reactivateStmt->bind_param("s", $email);
        
        if ($reactivateStmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Welcome back! Your subscription has been reactivated']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error reactivating subscription']);
        }
        $reactivateStmt->close();
    }
    $checkStmt->close();
    $conn->close();
    exit;
}

$checkStmt->close();

// Generate unique unsubscribe token
$unsubscribeToken = bin2hex(random_bytes(32));

// Get client IP and user agent
$ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

// Insert new subscription
$insertQuery = "INSERT INTO newsletter_subscriptions (email, unsubscribe_token, ip_address, user_agent) VALUES (?, ?, ?, ?)";
$insertStmt = $conn->prepare($insertQuery);

if (!$insertStmt) {
    error_log("Prepare failed: " . $conn->error);
    echo json_encode(['success' => false, 'message' => 'Database error occurred']);
    exit;
}

$insertStmt->bind_param("ssss", $email, $unsubscribeToken, $ipAddress, $userAgent);

if ($insertStmt->execute()) {
    // Send welcome email (optional - you can implement this later)
    sendWelcomeEmail($email, $unsubscribeToken);
    
    echo json_encode([
        'success' => true, 
        'message' => 'Thank you for subscribing! You\'ll receive our latest updates and special offers.'
    ]);
} else {
    if ($conn->errno === 1062) { // Duplicate entry error
        echo json_encode(['success' => false, 'message' => 'This email is already subscribed']);
    } else {
        error_log("Newsletter subscription error: " . $conn->error);
        echo json_encode(['success' => false, 'message' => 'Subscription failed. Please try again.']);
    }
}

$insertStmt->close();
$conn->close();

/**
 * Send welcome email to new subscriber
 */
function sendWelcomeEmail($email, $unsubscribeToken) {
    $to = $email;
    $subject = "Welcome to Neo Salon Newsletter!";
    $unsubscribeUrl = "https://" . $_SERVER['HTTP_HOST'] . "/unsubscribe.php?token=" . $unsubscribeToken;
    
    $message = "
    <html>
    <head>
        <title>Welcome to Neo Salon Newsletter</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #FFD700; color: #000; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f9f9f9; }
            .footer { padding: 20px; text-align: center; font-size: 12px; color: #666; }
            .unsubscribe { margin-top: 20px; padding-top: 20px; border-top: 1px solid #ddd; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>Welcome to Neo Salon!</h1>
            </div>
            <div class='content'>
                <h2>Thank you for subscribing!</h2>
                <p>Dear Valued Customer,</p>
                <p>Welcome to the Neo Salon family! We're thrilled to have you on board.</p>
                <p>As a subscriber, you'll be the first to know about:</p>
                <ul>
                    <li>Special offers and discounts</li>
                    <li>New services and treatments</li>
                    <li>Beauty tips and trends</li>
                    <li>Exclusive salon events</li>
                </ul>
                <p>Stay beautiful and stay connected!</p>
                <p><strong>The Neo Salon Team</strong></p>
                
                <div style='margin-top: 30px; padding: 15px; background: #fff; border-left: 4px solid #FFD700;'>
                    <h3>Contact Information:</h3>
                    <p>📞 Phone: 071 909 0000 / 075 555 1045<br>
                    📧 Email: info@neosalon.lk<br>
                    🕒 Hours: Mon-Sun 9:00 AM - 8:00 PM</p>
                </div>
            </div>
            <div class='footer'>
                <div class='unsubscribe'>
                    <p>You received this email because you subscribed to our newsletter.</p>
                    <p><a href='$unsubscribeUrl'>Unsubscribe</a> | <a href='mailto:info@neosalon.lk'>Contact Us</a></p>
                    <p>&copy; " . date('Y') . " Neo Salon. All rights reserved.</p>
                </div>
            </div>
        </div>
    </body>
    </html>
    ";
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Neo Salon <noreply@neosalon.lk>" . "\r\n";
    $headers .= "Reply-To: info@neosalon.lk" . "\r\n";
    
    // Send email (you might want to use a more robust email service in production)
    $mailSent = @mail($to, $subject, $message, $headers);
    
    if (!$mailSent) {
        error_log("Failed to send welcome email to: " . $email);
    }
    
    return $mailSent;
}

/**
 * Get newsletter statistics (for admin use)
 */
function getNewsletterStats() {
    global $conn;
    
    $stats = [];
    
    // Total subscribers
    $totalQuery = "SELECT COUNT(*) as total FROM newsletter_subscriptions WHERE is_active = TRUE";
    $result = $conn->query($totalQuery);
    $stats['total_subscribers'] = $result->fetch_assoc()['total'];
    
    // New subscribers today
    $todayQuery = "SELECT COUNT(*) as today FROM newsletter_subscriptions WHERE DATE(subscribed_at) = CURDATE() AND is_active = TRUE";
    $result = $conn->query($todayQuery);
    $stats['new_today'] = $result->fetch_assoc()['today'];
    
    // New subscribers this month
    $monthQuery = "SELECT COUNT(*) as month FROM newsletter_subscriptions WHERE MONTH(subscribed_at) = MONTH(CURDATE()) AND YEAR(subscribed_at) = YEAR(CURDATE()) AND is_active = TRUE";
    $result = $conn->query($monthQuery);
    $stats['new_this_month'] = $result->fetch_assoc()['month'];
    
    return $stats;
}

// If accessed directly with GET, show stats (for admin)
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['stats']) && $_GET['stats'] === 'admin') {
    // Add basic authentication here in production
    $stats = getNewsletterStats();
    echo json_encode($stats);
}
?>