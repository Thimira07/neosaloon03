<?php 
$page_title = "Our Services";
include 'includes/header.php'; 
?>

<!-- Services Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-black via-gray-900 to-black">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?w=1920&h=600&fit=crop" 
             alt="Professional Hair Services" 
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    </div>
    
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-golden-primary mb-6 font-playfair fade-in">
            Our Services
        </h1>
        <div class="w-24 h-1 bg-golden-primary mx-auto mb-6 fade-in"></div>
        <p class="text-xl text-white max-w-3xl mx-auto leading-relaxed fade-in">
            Comprehensive beauty and grooming solutions designed to enhance your natural elegance. 
            Experience professional care with premium products and expert techniques.
        </p>
    </div>
</section>

<!-- Services Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <?php
        include 'includes/db_connect.php';
        $services_by_category = getAllServices();
        
        $category_descriptions = [
            'Hair Services' => 'Professional hair care and styling services for all hair types and lengths.',
            'Beauty Services (for Women)' => 'Complete beauty treatments designed to enhance your natural radiance.',
            'Grooming Services (for Men)' => 'Specialized grooming services tailored for the modern gentleman.',
            'Special Services' => 'Exclusive packages and special occasion services for memorable moments.'
        ];
        
        $category_images = [
            'Hair Services' => 'https://images.unsplash.com/photo-1560066984-138dadb4c035?w=800&h=500&fit=crop&crop=face',
            'Beauty Services (for Women)' => 'https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?w=800&h=500&fit=crop&crop=face',
            'Grooming Services (for Men)' => 'https://images.unsplash.com/photo-1503951914875-452162b0f3f1?w=800&h=500&fit=crop&crop=face',
            'Special Services' => 'https://images.unsplash.com/photo-1519741497674-611481863552?w=800&h=500&fit=crop&crop=face'
        ];
        
        $category_icons = [
            'Hair Services' => 'fas fa-cut',
            'Beauty Services (for Women)' => 'fas fa-spa',
            'Grooming Services (for Men)' => 'fas fa-user-tie',
            'Special Services' => 'fas fa-crown'
        ];
        
        $category_count = 0;
        ?>
        
        <?php foreach ($services_by_category as $category => $services): ?>
        <?php 
        $category_count++;
        $is_even = ($category_count % 2 == 0);
        $category_id = strtolower(str_replace([' ', '(', ')', 'for'], ['-', '', '', ''], $category));
        ?>
        
        <!-- Service Category Section -->
        <div id="<?php echo $category_id; ?>" class="mb-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <!-- Content -->
                <div class="<?php echo $is_even ? 'lg:order-2' : ''; ?> <?php echo $is_even ? 'slide-in-right' : 'slide-in-left'; ?>">
                    <div class="flex items-center mb-6">
                        <div class="bg-golden-primary text-black p-4 rounded-full mr-4">
                            <i class="<?php echo $category_icons[$category]; ?> text-2xl"></i>
                        </div>
                        <div>
                            <h2 class="text-3xl md:text-4xl font-bold text-black font-playfair">
                                <?php echo htmlspecialchars($category); ?>
                            </h2>
                            <div class="w-16 h-1 bg-golden-primary mt-2"></div>
                        </div>
                    </div>
                    
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        <?php echo $category_descriptions[$category]; ?>
                    </p>
                    
                    <!-- Services List -->
                    <div class="space-y-4">
                        <?php foreach ($services as $service): ?>
                        <div class="bg-gray-50 p-6 rounded border-l-4 border-golden-primary hover:bg-gray-100 transition-colors duration-300 service-item">
                            <h3 class="text-xl font-bold text-black mb-2">
                                <?php echo htmlspecialchars($service['service_name']); ?>
                            </h3>
                            <?php if (!empty($service['description'])): ?>
                            <p class="text-gray-600 leading-relaxed">
                                <?php echo htmlspecialchars($service['description']); ?>
                            </p>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- CTA Button -->
                    <div class="mt-8">
                        <a href="contact.php" class="bg-golden-primary hover:bg-yellow-600 text-black font-bold py-3 px-8 rounded transition-all duration-300 transform hover:scale-105 uppercase tracking-wider">
                            Book This Service
                        </a>
                    </div>
                </div>
                
                <!-- Image -->
                <div class="<?php echo $is_even ? 'lg:order-1' : ''; ?> <?php echo $is_even ? 'slide-in-left' : 'slide-in-right'; ?>">
                    <div class="relative overflow-hidden rounded shadow-2xl">
                        <img src="images/services/<?php echo strtolower(str_replace(' ', '_', $category)); ?>.jpg" 
                             alt="<?php echo htmlspecialchars($category); ?>" 
                             class="w-full h-96 lg:h-full object-cover hover:scale-105 transition-transform duration-500"
                             onerror="this.src='<?php echo $category_images[$category]; ?>'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-30"></div>
                        
                        <!-- Service Count Badge -->
                        <div class="absolute top-6 right-6 bg-golden-primary text-black p-4 rounded-full shadow-lg">
                            <div class="text-center">
                                <div class="text-2xl font-bold"><?php echo count($services); ?></div>
                                <div class="text-xs font-semibold">Services</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php if ($category_count < count($services_by_category)): ?>
        <!-- Divider -->
        <div class="flex items-center justify-center my-16 fade-in">
            <div class="flex-1 h-px bg-gray-300"></div>
            <div class="px-6">
                <div class="w-12 h-12 bg-golden-primary rounded-full flex items-center justify-center">
                    <i class="fas fa-star text-black"></i>
                </div>
            </div>
            <div class="flex-1 h-px bg-gray-300"></div>
        </div>
        <?php endif; ?>
        
        <?php endforeach; ?>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-black mb-6 font-playfair fade-in">
                Why Choose <span class="text-golden-primary">Neo Salon?</span>
            </h2>
            <div class="w-24 h-1 bg-golden-primary mx-auto mb-6 fade-in"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto fade-in">
                Our commitment to excellence and personalized service sets us apart
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="text-center p-6 bg-white rounded shadow-lg hover:shadow-xl transition-shadow duration-300 scale-in">
                <div class="bg-golden-primary rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user-graduate text-black text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-black mb-3">Expert Stylists</h3>
                <p class="text-gray-600">Trained professionals with international certification and years of experience</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="text-center p-6 bg-white rounded shadow-lg hover:shadow-xl transition-shadow duration-300 scale-in">
                <div class="bg-golden-primary rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-gem text-black text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-black mb-3">Premium Products</h3>
                <p class="text-gray-600">Only the finest professional-grade products from top global brands</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="text-center p-6 bg-white rounded shadow-lg hover:shadow-xl transition-shadow duration-300 scale-in">
                <div class="bg-golden-primary rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-black text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-black mb-3">Flexible Hours</h3>
                <p class="text-gray-600">Open 7 days a week with extended hours to fit your busy schedule</p>
            </div>
            
            <!-- Feature 4 -->
            <div class="text-center p-6 bg-white rounded shadow-lg hover:shadow-xl transition-shadow duration-300 scale-in">
                <div class="bg-golden-primary rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-heart text-black text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-black mb-3">Personalized Care</h3>
                <p class="text-gray-600">Customized treatments tailored to your unique needs and preferences</p>
            </div>
        </div>
    </div>
</section>

<!-- Booking Process -->
<section class="py-20 bg-black text-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 font-playfair fade-in">
                How to <span class="text-golden-primary">Book</span>
            </h2>
            <div class="w-24 h-1 bg-golden-primary mx-auto mb-6 fade-in"></div>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto fade-in">
                Simple steps to book your appointment and transform your look
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="text-center scale-in">
                <div class="bg-golden-primary text-black rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
                    1
                </div>
                <h3 class="text-xl font-bold mb-4">Choose Your Service</h3>
                <p class="text-gray-300">Browse our comprehensive service menu and select the treatments you desire</p>
            </div>
            
            <!-- Step 2 -->
            <div class="text-center scale-in">
                <div class="bg-golden-primary text-black rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
                    2
                </div>
                <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                <p class="text-gray-300">Call us or send a message through our contact form to schedule your appointment</p>
            </div>
            
            <!-- Step 3 -->
            <div class="text-center scale-in">
                <div class="bg-golden-primary text-black rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
                    3
                </div>
                <h3 class="text-xl font-bold mb-4">Enjoy Your Experience</h3>
                <p class="text-gray-300">Relax and let our expert team take care of your beauty and grooming needs</p>
            </div>
        </div>
        
        <!-- Contact Info -->
        <div class="mt-16 text-center">
            <div class="bg-gray-900 rounded p-8 max-w-4xl mx-auto fade-in">
                <h3 class="text-2xl font-bold mb-6">Ready to Book Your Appointment?</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <div class="flex items-center justify-center space-x-3">
                        <i class="fas fa-phone text-golden-primary text-xl"></i>
                        <a href="tel:+94719090000" class="text-xl hover:text-golden-primary transition-colors">071 909 0000</a>
                    </div>
                    <div class="flex items-center justify-center space-x-3">
                        <i class="fas fa-phone text-golden-primary text-xl"></i>
                        <a href="tel:+94755551045" class="text-xl hover:text-golden-primary transition-colors">075 555 1045</a>
                    </div>
                </div>
                <a href="contact.php" class="bg-golden-primary hover:bg-yellow-600 text-black font-bold py-4 px-8 rounded text-lg transition-all duration-300 transform hover:scale-105 uppercase tracking-wider">
                    Book Now
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Service items animation
document.addEventListener('DOMContentLoaded', function() {
    const serviceItems = document.querySelectorAll('.service-item');
    serviceItems.forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(20px)';
        item.style.transition = 'all 0.6s ease-out';
        item.style.transitionDelay = (index * 100) + 'ms';
        
        // Trigger animation when in view
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        });
        
        observer.observe(item);
    });
});
</script>

<?php include 'includes/footer.php'; ?>