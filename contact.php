<?php 
$page_title = "Contact Us";
include 'includes/header.php'; 

// Handle form submission
$message_sent = false;
$error_message = '';

if ($_POST) {
    $name = sanitizeInput($_POST['name'] ?? '');
    $email = sanitizeInput($_POST['email'] ?? '');
    $phone = sanitizeInput($_POST['phone'] ?? '');
    $message = sanitizeInput($_POST['message'] ?? '');
    
    // Validation
    if (empty($name) || empty($email) || empty($message)) {
        $error_message = 'Please fill in all required fields.';
    } elseif (!validateEmail($email)) {
        $error_message = 'Please enter a valid email address.';
    } elseif (!empty($phone) && !validatePhone($phone)) {
        $error_message = 'Please enter a valid phone number.';
    } else {
        // Save to database
        if (saveContactMessage($name, $email, $phone, $message)) {
            $message_sent = true;
        } else {
            $error_message = 'There was an error sending your message. Please try again.';
        }
    }
}
?>

<!-- Contact Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-black via-gray-900 to-black">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?w=1920&h=600&fit=crop" 
             alt="Contact Neo Salon" 
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    </div>
    
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-golden-primary mb-6 font-playfair fade-in">
            Contact Us
        </h1>
        <div class="w-24 h-1 bg-golden-primary mx-auto mb-6 fade-in"></div>
        <p class="text-xl text-white max-w-3xl mx-auto leading-relaxed fade-in">
            Ready to transform your look? Get in touch with us to book your appointment 
            or ask any questions about our services.
        </p>
    </div>
</section>

<!-- Contact Information Cards -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            
            <!-- Phone Card -->
            <div class="bg-white p-8 rounded shadow-lg text-center hover:shadow-xl transition-shadow duration-300 scale-in">
                <div class="bg-golden-primary rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-phone text-black text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-black mb-4">Call Us</h3>
                <div class="space-y-2">
                    <p class="text-gray-600">
                        <a href="tel:+94719090000" class="hover:text-golden-primary transition-colors font-semibold">
                            071 909 0000
                        </a>
                    </p>
                    <p class="text-gray-600">
                        <a href="tel:+94755551045" class="hover:text-golden-primary transition-colors font-semibold">
                            075 555 1045
                        </a>
                    </p>
                </div>
            </div>
            
            <!-- Email Card -->
            <div class="bg-white p-8 rounded shadow-lg text-center hover:shadow-xl transition-shadow duration-300 scale-in">
                <div class="bg-golden-primary rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-envelope text-black text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-black mb-4">Email Us</h3>
                <p class="text-gray-600">
                    <a href="mailto:info@neosalon.lk" class="hover:text-golden-primary transition-colors font-semibold">
                        info@neosalon.lk
                    </a>
                </p>
                <p class="text-gray-600">
                    <a href="mailto:booking@neosalon.lk" class="hover:text-golden-primary transition-colors">
                        booking@neosalon.lk
                    </a>
                </p>
            </div>
            
            <!-- Hours Card -->
            <div class="bg-white p-8 rounded shadow-lg text-center hover:shadow-xl transition-shadow duration-300 scale-in">
                <div class="bg-golden-primary rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-clock text-black text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-black mb-4">Opening Hours</h3>
                <div class="space-y-2">
                    <p class="text-gray-600">Monday - Sunday</p>
                    <p class="text-golden-primary font-semibold text-lg">9:00 AM - 8:00 PM</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Info Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- Contact Form -->
            <div class="slide-in-left">
                <h2 class="text-4xl font-bold text-black mb-6 font-playfair">
                    Send Us a <span class="text-golden-primary">Message</span>
                </h2>
                <div class="w-24 h-1 bg-golden-primary mb-8"></div>
                <p class="text-lg text-gray-600 mb-8">
                    Fill out the form below and we'll get back to you as soon as possible.
                </p>
                
                <?php if ($message_sent): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded mb-8">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle mr-3"></i>
                        <span>Thank you! Your message has been sent successfully. We'll get back to you soon.</span>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if ($error_message): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded mb-8">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-circle mr-3"></i>
                        <span><?php echo htmlspecialchars($error_message); ?></span>
                    </div>
                </div>
                <?php endif; ?>
                
                <form id="contact-form" method="POST" action="" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="form-label">Full Name *</label>
                            <input type="text" id="name" name="name" required 
                                   class="form-input" 
                                   value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"
                                   placeholder="Enter your full name">
                        </div>
                        <div>
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" id="phone" name="phone" 
                                   class="form-input"
                                   value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>"
                                   placeholder="071 234 5678">
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="form-label">Email Address *</label>
                        <input type="email" id="email" name="email" required 
                               class="form-input"
                               value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                               placeholder="your@email.com">
                    </div>
                    
                    <div>
                        <label for="service" class="form-label">Service Interested In</label>
                        <select id="service" name="service" class="form-input">
                            <option value="">Select a service (optional)</option>
                            <option value="Hair Services">Hair Services</option>
                            <option value="Beauty Services">Beauty Services</option>
                            <option value="Men's Grooming">Men's Grooming</option>
                            <option value="Bridal Packages">Bridal Packages</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="form-label">Message *</label>
                        <textarea id="message" name="message" required 
                                  class="form-textarea" rows="5"
                                  placeholder="Tell us about your requirements or any questions you have..."><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <input type="checkbox" id="privacy" name="privacy" required 
                               class="mt-1 text-golden-primary focus:ring-golden-primary">
                        <label for="privacy" class="text-sm text-gray-600">
                            I agree to the privacy policy and consent to the processing of my personal data. *
                        </label>
                    </div>
                    
                    <button type="submit" 
                            class="bg-golden-primary hover:bg-yellow-600 text-black font-bold py-4 px-8 rounded text-lg transition-all duration-300 transform hover:scale-105 uppercase tracking-wider w-full md:w-auto">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Send Message
                    </button>
                </form>
            </div>
            
            <!-- Location & Info -->
            <div class="slide-in-right">
                <h2 class="text-4xl font-bold text-black mb-6 font-playfair">
                    Visit Our <span class="text-golden-primary">Salon</span>
                </h2>
                <div class="w-24 h-1 bg-golden-primary mb-8"></div>
                
                <!-- Address Information -->
                <div class="bg-gray-50 p-8 rounded mb-8">
                    <div class="flex items-start space-x-4 mb-6">
                        <i class="fas fa-map-marker-alt text-golden-primary text-xl mt-1"></i>
                        <div>
                            <h3 class="text-xl font-bold text-black mb-2">Neo Salon</h3>
                            <p class="text-gray-600">
                                Main Street<br>
                                Colombo, Sri Lanka
                            </p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-car text-golden-primary"></i>
                            <span class="text-gray-600">Free Parking Available</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-wheelchair text-golden-primary"></i>
                            <span class="text-gray-600">Wheelchair Accessible</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-wifi text-golden-primary"></i>
                            <span class="text-gray-600">Free WiFi</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-credit-card text-golden-primary"></i>
                            <span class="text-gray-600">Card Payments Accepted</span>
                        </div>
                    </div>
                </div>
                
                <!-- Map Placeholder -->
                <div class="bg-gray-200 h-64 rounded overflow-hidden shadow-lg mb-8">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.798467128468!2d79.84956431477273!3d6.927078695007293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2s!4v1234567890"
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
                
                <!-- Quick Contact -->
                <div class="bg-black text-white p-6 rounded">
                    <h3 class="text-xl font-bold mb-4">Need Immediate Assistance?</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <a href="tel:+94719090000" 
                           class="flex items-center justify-center space-x-3 bg-golden-primary text-black py-3 px-4 rounded hover:bg-yellow-600 transition-colors">
                            <i class="fas fa-phone"></i>
                            <span class="font-semibold">Call Now</span>
                        </a>
                        <a href="https://wa.me/94719090000" 
                           class="flex items-center justify-center space-x-3 bg-green-500 text-white py-3 px-4 rounded hover:bg-green-600 transition-colors">
                            <i class="fab fa-whatsapp"></i>
                            <span class="font-semibold">WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-black mb-6 font-playfair fade-in">
                Frequently Asked <span class="text-golden-primary">Questions</span>
            </h2>
            <div class="w-24 h-1 bg-golden-primary mx-auto mb-6 fade-in"></div>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto fade-in">
                Find answers to common questions about our services and policies
            </p>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="space-y-6">
                
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded shadow-lg overflow-hidden scale-in">
                    <button class="w-full text-left p-6 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-bold text-black">Do I need to book an appointment in advance?</h3>
                            <i class="fas fa-chevron-down text-golden-primary transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <p class="text-gray-600">Yes, we recommend booking appointments in advance to ensure availability, especially during peak hours and weekends. However, we do accept walk-ins when possible.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="bg-white rounded shadow-lg overflow-hidden scale-in">
                    <button class="w-full text-left p-6 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-bold text-black">What payment methods do you accept?</h3>
                            <i class="fas fa-chevron-down text-golden-primary transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <p class="text-gray-600">We accept cash, all major credit cards (Visa, MasterCard, American Express), and mobile payment methods. Payment is due at the time of service.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="bg-white rounded shadow-lg overflow-hidden scale-in">
                    <button class="w-full text-left p-6 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-bold text-black">What is your cancellation policy?</h3>
                            <i class="fas fa-chevron-down text-golden-primary transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <p class="text-gray-600">We require at least 24 hours notice for cancellations. Cancellations made less than 24 hours in advance may be subject to a fee.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="bg-white rounded shadow-lg overflow-hidden scale-in">
                    <button class="w-full text-left p-6 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-bold text-black">Do you offer bridal packages?</h3>
                            <i class="fas fa-chevron-down text-golden-primary transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <p class="text-gray-600">Yes! We offer comprehensive bridal packages including hair, makeup, and beauty treatments. We also provide trial sessions and can arrange services at your venue.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function toggleFAQ(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('i');
    
    // Close all other FAQ items
    document.querySelectorAll('.faq-content').forEach(item => {
        if (item !== content) {
            item.classList.add('hidden');
            item.previousElementSibling.querySelector('i').classList.remove('rotate-180');
        }
    });
    
    // Toggle current FAQ item
    content.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
}
</script>

<?php include 'includes/footer.php'; ?>