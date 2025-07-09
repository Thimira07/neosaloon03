<?php
// Set the response code
http_response_code(404);
$page_title = "Page Not Found - 404";
include 'includes/header.php';
?>

<!-- 404 Error Page -->
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-black via-gray-900 to-black py-20">
    <div class="container mx-auto px-4 text-center">
        
        <!-- Error Content -->
        <div class="max-w-4xl mx-auto">
            
            <!-- 404 Visual -->
            <div class="mb-12 fade-in">
                <div class="relative inline-block">
                    <h1 class="text-8xl md:text-9xl font-bold text-golden-primary opacity-20 font-playfair">
                        404
                    </h1>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="bg-golden-primary rounded-full p-8">
                            <i class="fas fa-search text-black text-4xl"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Error Message -->
            <div class="text-white mb-12 fade-in">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 font-playfair">
                    Oops! Page Not Found
                </h2>
                <div class="w-24 h-1 bg-golden-primary mx-auto mb-8"></div>
                <p class="text-xl md:text-2xl text-gray-300 mb-6">
                    We're sorry! The page you're looking for could not be found.
                </p>
                <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                    The page you're looking for might have been moved, deleted, or you may have entered the wrong URL. 
                    Don't worry, let's get you back to discovering our amazing services.
                </p>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16 fade-in">
                <a href="index.php" 
                   class="bg-golden-primary hover:bg-yellow-600 text-black font-bold py-4 px-8 rounded text-lg transition-all duration-300 transform hover:scale-105 uppercase tracking-wider">
                    <i class="fas fa-home mr-2"></i>Go Home
                </a>
                <a href="services.php" 
                   class="border-2 border-golden-primary text-golden-primary hover:bg-golden-primary hover:text-black font-bold py-4 px-8 rounded text-lg transition-all duration-300 transform hover:scale-105 uppercase tracking-wider">
                    <i class="fas fa-cut mr-2"></i>View Services
                </a>
                <a href="contact.php" 
                   class="border-2 border-white text-white hover:bg-white hover:text-black font-bold py-4 px-8 rounded text-lg transition-all duration-300 transform hover:scale-105 uppercase tracking-wider">
                    <i class="fas fa-phone mr-2"></i>Contact Us
                </a>
            </div>
            
            <!-- Popular Links -->
            <div class="bg-gray-900 bg-opacity-50 rounded p-8 mb-12 fade-in">
                <h3 class="text-2xl font-bold text-golden-primary mb-6">Popular Pages</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <!-- Quick Link 1 -->
                    <a href="services.php" class="block p-4 bg-black bg-opacity-30 rounded hover:bg-opacity-50 transition-all duration-300 group">
                        <div class="flex items-center space-x-4">
                            <div class="bg-golden-primary rounded-full p-3 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-cut text-black"></i>
                            </div>
                            <div class="text-left">
                                <h4 class="text-white font-semibold">Hair Services</h4>
                                <p class="text-gray-400 text-sm">Professional cuts & styling</p>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Quick Link 2 -->
                    <a href="services.php" class="block p-4 bg-black bg-opacity-30 rounded hover:bg-opacity-50 transition-all duration-300 group">
                        <div class="flex items-center space-x-4">
                            <div class="bg-golden-primary rounded-full p-3 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-spa text-black"></i>
                            </div>
                            <div class="text-left">
                                <h4 class="text-white font-semibold">Beauty Treatments</h4>
                                <p class="text-gray-400 text-sm">Facials & skin care</p>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Quick Link 3 -->
                    <a href="about.php" class="block p-4 bg-black bg-opacity-30 rounded hover:bg-opacity-50 transition-all duration-300 group">
                        <div class="flex items-center space-x-4">
                            <div class="bg-golden-primary rounded-full p-3 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-info-circle text-black"></i>
                            </div>
                            <div class="text-left">
                                <h4 class="text-white font-semibold">About Neo Salon</h4>
                                <p class="text-gray-400 text-sm">Our story & team</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- Search Box -->
            <div class="max-w-md mx-auto fade-in">
                <h3 class="text-xl font-bold text-white mb-4">Search Our Site</h3>
                <div class="flex">
                    <input type="text" 
                           placeholder="Search for services, information..." 
                           class="flex-1 px-4 py-3 bg-white border-none rounded-l focus:outline-none focus:ring-2 focus:ring-golden-primary">
                    <button type="button" 
                            onclick="performSearch()"
                            class="bg-golden-primary hover:bg-yellow-600 text-black px-6 py-3 rounded-r transition-colors duration-300">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Contact Section -->
<section class="py-12 bg-golden-primary">
    <div class="container mx-auto px-4 text-center">
        <h3 class="text-2xl font-bold text-black mb-4">Need Immediate Assistance?</h3>
        <p class="text-black mb-6">Our team is here to help you</p>
        <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-8">
            <a href="tel:+94719090000" 
               class="flex items-center space-x-3 bg-black text-golden-primary py-3 px-6 rounded hover:bg-gray-800 transition-colors">
                <i class="fas fa-phone"></i>
                <span class="font-semibold">071 909 0000</span>
            </a>
            <a href="https://wa.me/94719090000" 
               class="flex items-center space-x-3 bg-green-500 text-white py-3 px-6 rounded hover:bg-green-600 transition-colors">
                <i class="fab fa-whatsapp"></i>
                <span class="font-semibold">WhatsApp Us</span>
            </a>
        </div>
    </div>
</section>

<script>
function performSearch() {
    const searchTerm = document.querySelector('input[type="text"]').value.toLowerCase();
    
    if (!searchTerm) {
        alert('Please enter a search term');
        return;
    }
    
    // Simple search logic - redirect to relevant pages
    if (searchTerm.includes('hair') || searchTerm.includes('cut') || searchTerm.includes('style')) {
        window.location.href = 'services.php#hair-services';
    } else if (searchTerm.includes('beauty') || searchTerm.includes('facial') || searchTerm.includes('makeup')) {
        window.location.href = 'services.php#beauty-services';
    } else if (searchTerm.includes('men') || searchTerm.includes('beard') || searchTerm.includes('shave')) {
        window.location.href = 'services.php#grooming-services';
    } else if (searchTerm.includes('bridal') || searchTerm.includes('wedding')) {
        window.location.href = 'services.php#special-services';
    } else if (searchTerm.includes('contact') || searchTerm.includes('phone') || searchTerm.includes('book')) {
        window.location.href = 'contact.php';
    } else if (searchTerm.includes('about') || searchTerm.includes('team') || searchTerm.includes('story')) {
        window.location.href = 'about.php';
    } else {
        // Default to services page
        window.location.href = 'services.php';
    }
}

// Allow search on Enter key
document.querySelector('input[type="text"]').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        performSearch();
    }
});
</script>

<?php include 'includes/footer.php'; ?>