<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-black via-gray-900 to-black overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?w=1920&h=1080&fit=crop&crop=face" 
             alt="Salon Interior" 
             class="w-full h-full object-cover opacity-30"
             loading="lazy">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    </div>
    
    <!-- Hero Content -->
    <div class="relative z-10 text-center text-white px-4 max-w-6xl mx-auto">
        <div class="fade-in">
            <img src="images/logo/Neo Saloon Name.png" 
                 alt="Neo Saloon Logo" 
                 class="h-24 md:h-32 mx-auto mb-6 drop-shadow-2xl"
                 loading="lazy"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
            <div class="hidden bg-golden-primary text-black px-6 py-3 rounded-lg font-bold text-2xl mx-auto w-fit">
                Neo Saloon
            </div>
        </div>
        
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-6 text-golden-primary font-playfair fade-in">
            Neo Saloon
        </h1>
        
        <div class="w-24 h-1 bg-golden-primary mx-auto mb-6 fade-in"></div>
        
        <p class="text-xl md:text-3xl mb-6 text-white font-light fade-in font-dancing-script">
            Ladies Gallery
        </p>
        
        <p class="text-lg md:text-xl mb-12 text-gray-200 max-w-3xl mx-auto leading-relaxed fade-in">
            Premium Unisex Salon Experience • Professional Styling • Luxury Beauty Treatments
        </p>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center fade-in">
            <a href="services.php" 
               class="bg-golden-primary hover:bg-yellow-600 text-black font-bold py-4 px-10 rounded text-lg transition-all duration-300 transform hover:scale-105 shadow-2xl uppercase tracking-wider">
                Explore Services
            </a>
            <a href="contact.php" 
               class="border-2 border-golden-primary text-golden-primary hover:bg-golden-primary hover:text-black font-bold py-4 px-10 rounded text-lg transition-all duration-300 transform hover:scale-105 uppercase tracking-wider">
                Book Now
            </a>
        </div>
        
        <!-- Contact Info -->
        <div class="mt-12 flex flex-col sm:flex-row justify-center items-center gap-8 fade-in">
            <div class="flex items-center gap-3 text-golden-primary">
                <i class="fas fa-phone text-xl"></i>
                <span class="text-xl font-semibold">071 909 0000</span>
            </div>
            <div class="hidden sm:block text-golden-primary">|</div>
            <div class="flex items-center gap-3 text-golden-primary">
                <i class="fas fa-phone text-xl"></i>
                <span class="text-xl font-semibold">075 555 1045</span>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-black mb-8 font-playfair fade-in">
                Welcome to <span class="text-golden-primary">Neo Saloon</span>
            </h2>
            <div class="w-24 h-1 bg-golden-primary mx-auto mb-8 fade-in"></div>
            <p class="text-xl text-gray-700 mb-12 leading-relaxed fade-in">
                At Neo Saloon Ladies Gallery, we transform your beauty and style to a new level. Our professional services 
                combined with premium products deliver an unforgettable experience that enhances your natural elegance.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                <div class="text-center p-6 scale-in">
                    <div class="bg-golden-primary rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-cut text-black text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2">Expert Stylists</h3>
                    <p class="text-gray-600">Trained professionals with years of experience</p>
                </div>
                <div class="text-center p-6 scale-in">
                    <div class="bg-golden-primary rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-spa text-black text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2">Premium Services</h3>
                    <p class="text-gray-600">Complete beauty and grooming solutions</p>
                </div>
                <div class="text-center p-6 scale-in">
                    <div class="bg-golden-primary rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-star text-black text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-2">Quality Products</h3>
                    <p class="text-gray-600">Using only the finest professional products</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Gallery -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-black mb-4 font-playfair fade-in">
                Our <span class="text-golden-primary">Services</span>
            </h2>
            <div class="w-24 h-1 bg-golden-primary mx-auto mb-6 fade-in"></div>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto fade-in">
                Professional beauty and grooming services designed to enhance your natural beauty
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Hair Services -->
            <div class="service-card bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl slide-in-left">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?w=600&h=400&fit=crop&crop=face" 
                         alt="Hair Services" 
                         class="w-full h-48 object-cover transition-transform duration-500 hover:scale-110"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 hover:opacity-70 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Hair Services</h3>
                            <p class="text-sm">Professional cuts, styling & treatments</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-black mb-3">Hair Services</h3>
                    <p class="text-gray-600 mb-4">Professional haircuts, styling, coloring, and treatments for all hair types</p>
                    <a href="services.php#hair-services" class="text-golden-primary font-semibold hover:underline transition-colors">
                        Learn More →
                    </a>
                </div>
            </div>
            
            <!-- Beauty Services -->
            <div class="service-card bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl fade-in">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?w=600&h=400&fit=crop&crop=face" 
                         alt="Beauty Services" 
                         class="w-full h-48 object-cover transition-transform duration-500 hover:scale-110"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 hover:opacity-70 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Beauty Services</h3>
                            <p class="text-sm">Facials, makeup & skin care</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-black mb-3">Beauty Services</h3>
                    <p class="text-gray-600 mb-4">Comprehensive beauty treatments including facials, makeup, and skincare</p>
                    <a href="services.php#beauty-services" class="text-golden-primary font-semibold hover:underline transition-colors">
                        Learn More →
                    </a>
                </div>
            </div>
            
            <!-- Men's Grooming -->
            <div class="service-card bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl slide-in-right">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?w=600&h=400&fit=crop&crop=face" 
                         alt="Men's Grooming" 
                         class="w-full h-48 object-cover transition-transform duration-500 hover:scale-110"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 hover:opacity-70 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Men's Grooming</h3>
                            <p class="text-sm">Professional grooming & styling</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-black mb-3">Men's Grooming</h3>
                    <p class="text-gray-600 mb-4">Specialized grooming services for the modern gentleman</p>
                    <a href="services.php#grooming-services" class="text-golden-primary font-semibold hover:underline transition-colors">
                        Learn More →
                    </a>
                </div>
            </div>
            
            <!-- Bridal Services -->
            <div class="service-card bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl scale-in">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=600&h=400&fit=crop&crop=face" 
                         alt="Bridal Services" 
                         class="w-full h-48 object-cover transition-transform duration-500 hover:scale-110"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 hover:opacity-70 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Bridal Services</h3>
                            <p class="text-sm">Complete bridal packages</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-black mb-3">Bridal Services</h3>
                    <p class="text-gray-600 mb-4">Complete bridal packages for your special day</p>
                    <a href="services.php#special-services" class="text-golden-primary font-semibold hover:underline transition-colors">
                        Learn More →
                    </a>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12 fade-in">
            <a href="services.php" 
               class="bg-black hover:bg-gray-800 text-golden-primary font-bold py-4 px-10 rounded text-lg transition-all duration-300 transform hover:scale-105 uppercase tracking-wider">
                View All Services
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-black text-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="slide-in-left">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 font-playfair">
                    Why Choose <span class="text-golden-primary">Neo Saloon?</span>
                </h2>
                <div class="w-24 h-1 bg-golden-primary mb-8"></div>
                
                <p class="text-xl text-gray-300 mb-12 leading-relaxed">
                    At Neo Saloon Ladies Gallery, we are dedicated to transforming your beauty and style to new heights. 
                    With professional services and premium products, we provide an unforgettable experience.
                </p>
                
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="bg-golden-primary rounded-full p-3 flex-shrink-0">
                            <i class="fas fa-award text-black text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Expert Professionals</h3>
                            <p class="text-gray-300">Highly trained stylists with years of international experience</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-golden-primary rounded-full p-3 flex-shrink-0">
                            <i class="fas fa-gem text-black text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Premium Products</h3>
                            <p class="text-gray-300">Only the finest professional-grade products and equipment</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-golden-primary rounded-full p-3 flex-shrink-0">
                            <i class="fas fa-heart text-black text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Personalized Care</h3>
                            <p class="text-gray-300">Tailored services to match your unique style and preferences</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="slide-in-right">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?w=800&h=600&fit=crop" 
                         alt="Neo Saloon Interior" 
                         class="w-full h-96 lg:h-full object-cover rounded-lg shadow-2xl"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-golden-primary via-transparent to-transparent opacity-20 rounded-lg"></div>
                </div>
                
                <!-- Stats -->
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <div class="bg-white text-black p-6 rounded-lg text-center transform hover:scale-105 transition-transform duration-300">
                        <div class="text-3xl font-bold text-golden-primary">5+</div>
                        <div class="text-sm font-semibold">Years Experience</div>
                    </div>
                    <div class="bg-golden-primary text-black p-6 rounded-lg text-center transform hover:scale-105 transition-transform duration-300">
                        <div class="text-3xl font-bold">1000+</div>
                        <div class="text-sm font-semibold">Happy Clients</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-r from-golden-primary to-yellow-600">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-black mb-6 font-playfair fade-in">
            Ready to Transform Your Look?
        </h2>
        <p class="text-xl mb-12 text-black opacity-80 max-w-2xl mx-auto fade-in">
            Book your appointment today and experience the Neo Saloon Ladies Gallery difference. 
            Professional styling, luxury treatments, exceptional service.
        </p>
        
        <div class="flex flex-col md:flex-row justify-center items-center space-y-6 md:space-y-0 md:space-x-8 mb-12 fade-in">
            <div class="flex items-center space-x-3 bg-black bg-opacity-20 px-6 py-3 rounded">
                <i class="fas fa-phone text-black text-xl"></i>
                <span class="text-xl font-bold text-black">071 909 0000</span>
            </div>
            <div class="flex items-center space-x-3 bg-black bg-opacity-20 px-6 py-3 rounded">
                <i class="fas fa-phone text-black text-xl"></i>
                <span class="text-xl font-bold text-black">075 555 1045</span>
            </div>
        </div>
        
        <a href="contact.php" 
           class="bg-black hover:bg-gray-800 text-golden-primary font-bold py-4 px-10 rounded text-lg transition-all duration-300 transform hover:scale-105 uppercase tracking-wider shadow-2xl fade-in">
            Book Appointment Now
        </a>
    </div>
</section>

<script>
// Scroll Animation Observer - Fixed and Optimized
document.addEventListener('DOMContentLoaded', function() {
    // Check if IntersectionObserver is supported
    if ('IntersectionObserver' in window) {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    // Unobserve to prevent repeated animations
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        // Observe all animation elements
        const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .scale-in');
        animatedElements.forEach(function(element) {
            observer.observe(element);
        });
    } else {
        // Fallback for older browsers
        const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .scale-in');
        animatedElements.forEach(function(element) {
            element.classList.add('visible');
        });
    }
    
    // Service card hover effects
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach(function(card) {
        card.addEventListener('mouseenter', function() {
            this.style.boxShadow = '0 20px 40px rgba(255, 215, 0, 0.15)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.boxShadow = '0 4px 15px rgba(0, 0, 0, 0.1)';
        });
    });
});

// Error handling for images
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('img');
    images.forEach(function(img) {
        img.addEventListener('error', function() {
            console.log('Image failed to load:', this.src);
            // Handle broken images gracefully
            this.style.opacity = '0.5';
            this.alt = 'Image not available';
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?>