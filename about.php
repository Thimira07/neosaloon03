<?php 
$page_title = "About Us";
include 'includes/header.php'; 
?>

<!-- About Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-black via-gray-900 to-black">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?w=1920&h=600&fit=crop" 
             alt="About Neo Salon" 
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    </div>
    
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-golden-primary mb-6 font-playfair fade-in">
            About Neo Salon
        </h1>
        <div class="w-24 h-1 bg-golden-primary mx-auto mb-6 fade-in"></div>
        <p class="text-xl text-white max-w-3xl mx-auto leading-relaxed fade-in">
            Discover the story behind Neo Salon - where passion for beauty meets 
            professional excellence to create extraordinary experiences.
        </p>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <!-- Content -->
            <div class="slide-in-left">
                <h2 class="text-4xl md:text-5xl font-bold text-black mb-6 font-playfair">
                    Our <span class="text-golden-primary">Story</span>
                </h2>
                <div class="w-24 h-1 bg-golden-primary mb-8"></div>
                
                <div class="space-y-6 text-lg text-gray-600 leading-relaxed">
                    <p>
                        Neo Salon began with a simple dream - to provide world-class beauty and grooming 
                        services to the Sri Lankan community. Our journey started with a small salon, but 
                        our commitment to excellence and customer satisfaction quickly made us a leading 
                        beauty destination in the region.
                    </p>
                    
                    <p>
                        Our founder and master stylist's vision was to combine traditional Sri Lankan beauty 
                        concepts with modern international techniques to create a unique experience. That vision 
                        is now a reality, and we provide personalized care and attention to every customer.
                    </p>
                    
                    <p>
                        Today, Neo Salon has an experienced team of professionals, all with international 
                        training and certifications. We constantly update ourselves with the latest trends, 
                        techniques, and products to provide you with the best service.
                    </p>
                </div>
                
                <div class="mt-8">
                    <a href="services.php" class="bg-golden-primary hover:bg-yellow-600 text-black font-bold py-4 px-8 rounded transition-all duration-300 transform hover:scale-105 uppercase tracking-wider">
                        Explore Our Services
                    </a>
                </div>
            </div>
            
            <!-- Image -->
            <div class="slide-in-right">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?w=800&h=600&fit=crop" 
                         alt="Neo Salon Story" 
                         class="w-full h-96 lg:h-full object-cover rounded shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-t from-golden-primary via-transparent to-transparent opacity-20 rounded"></div>
                </div>
                
                <!-- Year Badge -->
                <div class="absolute -top-8 -left-8 bg-golden-primary text-black p-6 shadow-2xl rounded">
                    <div class="text-center">
                        <div class="text-3xl font-bold">2019</div>
                        <div class="text-sm font-semibold">ESTABLISHED</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-black mb-6 font-playfair fade-in">
                Mission & <span class="text-golden-primary">Vision</span>
            </h2>
            <div class="w-24 h-1 bg-golden-primary mx-auto mb-6 fade-in"></div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Mission -->
            <div class="bg-white p-8 rounded shadow-lg scale-in">
                <div class="flex items-center mb-6">
                    <div class="bg-golden-primary rounded-full p-4 mr-6">
                        <i class="fas fa-bullseye text-black text-2xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-black font-playfair">Our Mission</h3>
                </div>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Neo Salon's mission is to provide premier beauty and grooming services to the Sri Lankan 
                    community. We are dedicated to giving every customer an exceptional experience through 
                    professional expertise, premium products, and personalized care. Our goal is to enhance 
                    your natural beauty and make you feel confident.
                </p>
            </div>
            
            <!-- Vision -->
            <div class="bg-white p-8 rounded shadow-lg scale-in">
                <div class="flex items-center mb-6">
                    <div class="bg-golden-primary rounded-full p-4 mr-6">
                        <i class="fas fa-eye text-black text-2xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-black font-playfair">Our Vision</h3>
                </div>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Our vision is to become Sri Lanka's leading beauty destination while maintaining 
                    international standards and celebrating traditional Sri Lankan beauty concepts. 
                    We dream of expanding the Neo Salon brand island-wide, maintaining our signature 
                    quality and service standards at every location.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Team Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-black mb-6 font-playfair fade-in">
                Meet Our <span class="text-golden-primary">Team</span>
            </h2>
            <div class="w-24 h-1 bg-golden-primary mx-auto mb-6 fade-in"></div>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto fade-in">
                Our team of experienced professionals is dedicated to making you look and feel your best
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Team Member 1 -->
            <div class="text-center group scale-in">
                <div class="relative overflow-hidden rounded mb-6">
                    <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=400&h=500&fit=crop&crop=face" 
                         alt="Master Stylist" 
                         class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-70 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="flex space-x-3">
                            <a href="#" class="bg-golden-primary text-black p-2 rounded-full hover:bg-yellow-600 transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="bg-golden-primary text-black p-2 rounded-full hover:bg-yellow-600 transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-black mb-2">Sarah Johnson</h3>
                <p class="text-golden-primary font-semibold mb-3">Master Hair Stylist</p>
                <p class="text-gray-600">15+ years experience in hair cutting, coloring, and styling. Specialized in bridal hair designs.</p>
            </div>
            
            <!-- Team Member 2 -->
            <div class="text-center group scale-in">
                <div class="relative overflow-hidden rounded mb-6">
                    <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=400&h=500&fit=crop&crop=face" 
                         alt="Beauty Specialist" 
                         class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-70 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="flex space-x-3">
                            <a href="#" class="bg-golden-primary text-black p-2 rounded-full hover:bg-yellow-600 transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="bg-golden-primary text-black p-2 rounded-full hover:bg-yellow-600 transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-black mb-2">Emma Wilson</h3>
                <p class="text-golden-primary font-semibold mb-3">Senior Beauty Therapist</p>
                <p class="text-gray-600">Expert in facial treatments, makeup artistry, and skin care with international certifications.</p>
            </div>
            
            <!-- Team Member 3 -->
            <div class="text-center group scale-in">
                <div class="relative overflow-hidden rounded mb-6">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=500&fit=crop&crop=face" 
                         alt="Men's Grooming Specialist" 
                         class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-70 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="flex space-x-3">
                            <a href="#" class="bg-golden-primary text-black p-2 rounded-full hover:bg-yellow-600 transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="bg-golden-primary text-black p-2 rounded-full hover:bg-yellow-600 transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-black mb-2">Michael Brown</h3>
                <p class="text-golden-primary font-semibold mb-3">Men's Grooming Specialist</p>
                <p class="text-gray-600">Professional barber specializing in modern cuts, beard styling, and traditional wet shaves.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="py-20 bg-black text-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 font-playfair fade-in">
                Our <span class="text-golden-primary">Values</span>
            </h2>
            <div class="w-24 h-1 bg-golden-primary mx-auto mb-6 fade-in"></div>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto fade-in">
                The principles that guide everything we do at Neo Salon
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- Value 1 -->
            <div class="text-center scale-in">
                <div class="bg-golden-primary rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-star text-black text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Excellence</h3>
                <p class="text-gray-300">We strive for perfection in every service, using only the finest products and latest techniques.</p>
            </div>
            
            <!-- Value 2 -->
            <div class="text-center scale-in">
                <div class="bg-golden-primary rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-heart text-black text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Care</h3>
                <p class="text-gray-300">Every client receives personalized attention and care tailored to their unique needs and preferences.</p>
            </div>
            
            <!-- Value 3 -->
            <div class="text-center scale-in">
                <div class="bg-golden-primary rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-handshake text-black text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Trust</h3>
                <p class="text-gray-300">Building lasting relationships through honesty, reliability, and consistent high-quality service.</p>
            </div>
            
            <!-- Value 4 -->
            <div class="text-center scale-in">
                <div class="bg-golden-primary rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-lightbulb text-black text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Innovation</h3>
                <p class="text-gray-300">Continuously learning and adopting new trends and technologies to serve you better.</p>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-20 bg-golden-primary">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- Stat 1 -->
            <div class="text-center">
                <div class="text-4xl lg:text-5xl font-bold text-black mb-2" data-counter="5">0</div>
                <p class="text-black font-semibold">Years Experience</p>
            </div>
            
            <!-- Stat 2 -->
            <div class="text-center">
                <div class="text-4xl lg:text-5xl font-bold text-black mb-2" data-counter="1000">0</div>
                <p class="text-black font-semibold">Happy Clients</p>
            </div>
            
            <!-- Stat 3 -->
            <div class="text-center">
                <div class="text-4xl lg:text-5xl font-bold text-black mb-2" data-counter="15">0</div>
                <p class="text-black font-semibold">Services Offered</p>
            </div>
            
            <!-- Stat 4 -->
            <div class="text-center">
                <div class="text-4xl lg:text-5xl font-bold text-black mb-2" data-counter="10">0</div>
                <p class="text-black font-semibold">Expert Stylists</p>
            </div>
        </div>
    </div>
</section>

<!-- Awards & Recognition -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-black mb-6 font-playfair fade-in">
                Awards & <span class="text-golden-primary">Recognition</span>
            </h2>
            <div class="w-24 h-1 bg-golden-primary mx-auto mb-6 fade-in"></div>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto fade-in">
                Recognition for our commitment to excellence in beauty and customer service
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Award 1 -->
            <div class="bg-white p-8 rounded shadow-lg text-center scale-in">
                <div class="bg-golden-primary rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-trophy text-black text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-black mb-3">Best Salon 2023</h3>
                <p class="text-gray-600">Awarded by Sri Lanka Beauty Association for exceptional service quality and customer satisfaction.</p>
            </div>
            
            <!-- Award 2 -->
            <div class="bg-white p-8 rounded shadow-lg text-center scale-in">
                <div class="bg-golden-primary rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-medal text-black text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-black mb-3">Excellence in Innovation</h3>
                <p class="text-gray-600">Recognition for introducing modern techniques and maintaining international standards.</p>
            </div>
            
            <!-- Award 3 -->
            <div class="bg-white p-8 rounded shadow-lg text-center scale-in">
                <div class="bg-golden-primary rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-star text-black text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-black mb-3">Customer Choice Award</h3>
                <p class="text-gray-600">Voted by customers as the most trusted salon brand in the Western Province.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-black mb-6 font-playfair fade-in">
            Ready to Experience <span class="text-golden-primary">Neo Salon?</span>
        </h2>
        <div class="w-24 h-1 bg-golden-primary mx-auto mb-8 fade-in"></div>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-12 fade-in">
            Join thousands of satisfied clients who trust Neo Salon for their beauty and grooming needs. 
            Book your appointment today and discover the difference.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center fade-in">
            <a href="contact.php" class="bg-golden-primary hover:bg-yellow-600 text-black font-bold py-4 px-10 rounded text-lg transition-all duration-300 transform hover:scale-105 uppercase tracking-wider">
                Book Appointment
            </a>
            <a href="services.php" class="border-2 border-golden-primary text-golden-primary hover:bg-golden-primary hover:text-black font-bold py-4 px-10 rounded text-lg transition-all duration-300 transform hover:scale-105 uppercase tracking-wider">
                View Services
            </a>
        </div>
    </div>
</section>

<script>
// Counter animation
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('[data-counter]');
    
    const observerOptions = {
        threshold: 0.7
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
});

function animateCounter(element) {
    const target = parseInt(element.dataset.counter);
    const duration = 2000;
    const increment = target / (duration / 16);
    let current = 0;
    
    const timer = setInterval(() => {
        current += increment;
        element.textContent = Math.floor(current);
        
        if (current >= target) {
            element.textContent = target + (target === 1000 ? '+' : '');
            clearInterval(timer);
        }
    }, 16);
}
</script>

<?php include 'includes/footer.php'; ?>