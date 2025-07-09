<?php
/**
 * Neo Salon - Newsletter Unsubscribe Page
 */

$page_title = "Unsubscribe from Newsletter";
include 'includes/db_connect.php';

$message = '';
$message_type = '';
$email = '';

// Handle unsubscribe request
if (isset($_GET['token']) && !empty($_GET['token'])) {
    $token = trim($_GET['token']);
    
    // Find subscription by token
    $query = "SELECT email FROM newsletter_subscriptions WHERE unsubscribe_token = ? AND is_active = TRUE";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];
        
        // Deactivate subscription
        $updateQuery = "UPDATE newsletter_subscriptions SET is_active = FALSE WHERE unsubscribe_token = ?";
        $updateStmt = $conn->prepare($updateQuery);
        $updateStmt->bind_param("s", $token);
        
        if ($updateStmt->execute()) {
            $message = "You have been successfully unsubscribed from our newsletter.";
            $message_type = 'success';
        } else {
            $message = "An error occurred while processing your request. Please try again.";
            $message_type = 'error';
        }
        $updateStmt->close();
    } else {
        $message = "Invalid or expired unsubscribe link.";
        $message_type = 'error';
    }
    $stmt->close();
}

// Handle manual unsubscribe form
if ($_POST && isset($_POST['email'])) {
    $email = trim($_POST['email']);
    
    if (validateEmail($email)) {
        $query = "UPDATE newsletter_subscriptions SET is_active = FALSE WHERE email = ? AND is_active = TRUE";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        
        if ($stmt->execute() && $stmt->affected_rows > 0) {
            $message = "You have been successfully unsubscribed from our newsletter.";
            $message_type = 'success';
        } else {
            $message = "Email address not found in our subscription list.";
            $message_type = 'error';
        }
        $stmt->close();
    } else {
        $message = "Please enter a valid email address.";
        $message_type = 'error';
    }
}

include 'includes/header.php';
?>

<!-- Unsubscribe Page -->
<section class="py-20 bg-gradient-to-br from-black via-gray-900 to-black min-h-screen">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto">
            
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-golden-primary mb-6 font-playfair">
                    Newsletter Unsubscribe
                </h1>
                <div class="w-24 h-1 bg-golden-primary mx-auto mb-6"></div>
                <p class="text-xl text-white">
                    We're sorry to see you go, but we respect your choice.
                </p>
            </div>
            
            <!-- Message Display -->
            <?php if (!empty($message)): ?>
            <div class="mb-8">
                <?php if ($message_type === 'success'): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-none">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle mr-3 text-xl"></i>
                        <div>
                            <h3 class="font-bold mb-1">Unsubscribed Successfully!</h3>
                            <p><?php echo htmlspecialchars($message); ?></p>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-none">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-circle mr-3 text-xl"></i>
                        <div>
                            <h3 class="font-bold mb-1">Error</h3>
                            <p><?php echo htmlspecialchars($message); ?></p>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <?php if ($message_type === 'success'): ?>
            
            <!-- Success Content -->
            <div class="bg-white rounded-none p-8 mb-8">
                <div class="text-center mb-8">
                    <div class="bg-golden-primary rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope-open text-black text-2xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-black mb-4">You've Been Unsubscribed</h2>
                    <p class="text-gray-600 mb-6">
                        <?php echo htmlspecialchars($email); ?> has been removed from our newsletter list.
                    </p>
                </div>
                
                <!-- Feedback Form -->
                <div class="border-t pt-8">
                    <h3 class="text-xl font-bold text-black mb-4">Help Us Improve (Optional)</h3>
                    <p class="text-gray-600 mb-4">Could you tell us why you're unsubscribing?</p>
                    <form id="feedback-form" class="space-y-4">
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="reason" value="too_frequent" class="mr-3">
                                <span>Too many emails</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="reason" value="not_relevant" class="mr-3">
                                <span>Content not relevant to me</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="reason" value="never_signed_up" class="mr-3">
                                <span>I never signed up for this</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="reason" value="other" class="mr-3">
                                <span>Other reason</span>
                            </label>
                        </div>
                        <textarea name="comments" placeholder="Additional comments (optional)" 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-none focus:border-golden-primary focus:outline-none" rows="3"></textarea>
                        <button type="submit" class="bg-golden-primary hover:bg-yellow-600 text-black font-bold py-3 px-6 rounded-none transition-all duration-300">
                            Submit Feedback
                        </button>
                    </form>
                </div>
            </div>
            
            <?php else: ?>
            
            <!-- Manual Unsubscribe Form -->
            <?php if (empty($message) || $message_type === 'error'): ?>
            <div class="bg-white rounded-none p-8 mb-8">
                <h2 class="text-2xl font-bold text-black mb-6 text-center">Manual Unsubscribe</h2>
                <p class="text-gray-600 mb-6 text-center">
                    Enter your email address to unsubscribe from our newsletter
                </p>
                
                <form method="POST" action="" class="space-y-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-none focus:border-golden-primary focus:outline-none focus:ring-2 focus:ring-golden-primary focus:ring-opacity-20 transition-all duration-300"
                               placeholder="Enter your email address"
                               value="<?php echo htmlspecialchars($email); ?>">
                    </div>
                    
                    <button type="submit" 
                            class="w-full bg-golden-primary hover:bg-yellow-600 text-black font-bold py-4 px-6 rounded-none text-lg transition-all duration-300 transform hover:scale-105 uppercase tracking-wider">
                        Unsubscribe
                    </button>
                </form>
            </div>
            <?php endif; ?>
            
            <?php endif; ?>
            
            <!-- Alternative Options -->
            <div class="bg-gray-800 rounded-none p-8 text-white">
                <h3 class="text-xl font-bold mb-4 text-golden-primary">Before You Go...</h3>
                <p class="mb-6">Consider these alternatives instead of unsubscribing completely:</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-clock text-golden-primary mt-1"></i>
                        <div>
                            <h4 class="font-bold mb-1">Reduce Frequency</h4>
                            <p class="text-gray-300 text-sm">Get emails less often</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-cog text-golden-primary mt-1"></i>
                        <div>
                            <h4 class="font-bold mb-1">Update Preferences</h4>
                            <p class="text-gray-300 text-sm">Choose what content you receive</p>
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <a href="contact.php" class="inline-block bg-golden-primary hover:bg-yellow-600 text-black font-bold py-3 px-6 rounded-none transition-all duration-300 mr-4">
                        Update Preferences
                    </a>
                    <a href="index.php" class="inline-block border border-golden-primary text-golden-primary hover:bg-golden-primary hover:text-black font-bold py-3 px-6 rounded-none transition-all duration-300">
                        Return to Website
                    </a>
                </div>
            </div>
            
            <!-- Contact Information -->
            <div class="text-center mt-8 text-white">
                <p class="mb-4">Questions about your subscription? Contact us:</p>
                <div class="flex flex-col md:flex-row justify-center items-center space-y-2 md:space-y-0 md:space-x-6">
                    <a href="mailto:info@neosalon.lk" class="text-golden-primary hover:underline">
                        <i class="fas fa-envelope mr-2"></i>info@neosalon.lk
                    </a>
                    <a href="tel:+94719090000" class="text-golden-primary hover:underline">
                        <i class="fas fa-phone mr-2"></i>071 909 0000
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Handle feedback form submission
document.getElementById('feedback-form')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
    // Show thank you message
    this.innerHTML = `
        <div class="text-center py-8">
            <i class="fas fa-heart text-golden-primary text-3xl mb-4"></i>
            <h3 class="text-xl font-bold text-black mb-2">Thank You!</h3>
            <p class="text-gray-600">Your feedback helps us improve our services.</p>
        </div>
    `;
});

// Auto-hide success messages after 10 seconds
document.addEventListener('DOMContentLoaded', function() {
    const successMessage = document.querySelector('.bg-green-100');
    if (successMessage) {
        setTimeout(() => {
            successMessage.style.transition = 'opacity 0.5s ease-out';
            successMessage.style.opacity = '0';
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 500);
        }, 10000);
    }
});
</script>

<?php include 'includes/footer.php'; ?>