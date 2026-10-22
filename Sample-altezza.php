<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travolo - Premium Tanzanian Safaris & Kilimanjaro Climbs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="style.css">
   <script src="script.js"></script>
</head>
<body>

    <!--Start header-->
    <header id="header">
        <div class="container header-container">
            <a href="index.html" class="logo">TRAVOLO<span>.</span></a>
            
            <div class="mobile-menu-btn" id="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
            
            <nav id="nav">
                <ul id="nav-menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#safaris">Safaris</a></li>
                    <li><a href="#kilimanjaro">Kilimanjaro</a></li>
                    <li><a href="#itineraries">Itineraries</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>



            
        </div>
    </header>

   <!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-background">
        <img src="img/banner.jpg" alt="Tanzanian Landscape">
        <div class="hero-overlay"></div>
    </div>
    <div class="container">
        <div class="hero-content">
            <h1>Experience the Wonders of Tanzania</h1>
            <p>Discover the breathtaking wildlife of the Serengeti, conquer Mount Kilimanjaro, and relax on the pristine beaches of Zanzibar with our expert-guided tours.</p>
            <div class="hero-btns">
                <a href="#safaris" class="btn btn-primary">Explore Safaris</a>
                <a href="#contact" class="btn btn-secondary">Plan Your Trip</a>
            </div>
        </div>
    </div>
</section>


<!-- Best Destinations Section -->
<section class="section destinations">
    <div class="container">
        <div class="section-title">
            <span class="subtitle">Tanzania's Treasures</span>
            <h2>Discover Tanzania's Best Destinations</h2>
            <p>Explore the diverse landscapes and unique experiences that make Tanzania one of Africa's most captivating destinations.</p>
        </div>
        
        <div class="destinations-grid">
            <!-- Tarangire -->
            <div class="destination-card">
                <div class="destination-image">
                    <div class="image-container">
                        <img src="img/visit-taragire-national-park.jpg" alt="safari-to-tarangire">
                    </div>
                    <div class="destination-overlay">
                        <h3>Tarangire</h3>
                        <p>Elephant Paradise</p>
                    </div>
                </div>
                <div class="destination-content">
                    <p>Famous for its massive elephant herds and ancient baobab trees, Tarangire offers spectacular wildlife viewing especially in the dry season.</p>
                    <div class="destination-features">
                        <span><i class="fas fa-elephant"></i> Large Elephant Herds</span>
                        <span><i class="fas fa-tree"></i> Ancient Baobabs</span>
                        <span><i class="fas fa-binoculars"></i> Bird Watching</span>
                    </div>
                    <a href="#" class="btn btn-primary">Explore Tarangire</a>
                </div>
            </div>
            
            <!-- Serengeti -->
            <div class="destination-card">
                <div class="destination-image">
                    <div class="image-container">
                        <img src="img/serengeti-tanzania-safari.jpg" alt="serengeti-tanzania-safari">
                    </div>
                    <div class="destination-overlay">
                        <h3>Serengeti</h3>
                        <p>Endless Plains</p>
                    </div>
                </div>
                <div class="destination-content">
                    <p>Home to the Great Migration, the Serengeti offers unparalleled wildlife experiences with vast savannahs and incredible predator sightings.</p>
                    <div class="destination-features">
                        <span><i class="fas fa-running"></i> Great Migration</span>
                        <span><i class="fas fa-paw"></i> Big Cat Sightings</span>
                        <span><i class="fas fa-globe-africa"></i> Vast Savannahs</span>
                    </div>
                    <a href="#" class="btn btn-primary">Explore Serengeti</a>
                </div>
            </div>
            
            <!-- Ngorongoro -->
            <div class="destination-card">
                <div class="destination-image">
                    <div class="image-container">
                        <img src="img/ngorongoro-crater.jpg" alt="ngorongoro-crater">
                    </div>
                    <div class="destination-overlay">
                        <h3>Ngorongoro</h3>
                        <p>Africa's Eden</p>
                    </div>
                </div>
                <div class="destination-content">
                    <p>The world's largest intact volcanic caldera, Ngorongoro is a natural wonder teeming with wildlife in a spectacular setting.</p>
                    <div class="destination-features">
                        <span><i class="fas fa-mountain"></i> Volcanic Caldera</span>
                        <span><i class="fas fa-rhino"></i> Big Five Habitat</span>
                        <span><i class="fas fa-history"></i> UNESCO Site</span>
                    </div>
                    <a href="#" class="btn btn-primary">Explore Ngorongoro</a>
                </div>
            </div>
            
            <!-- Kilimanjaro -->
            <div class="destination-card">
                <div class="destination-image">
                    <div class="image-container">
                        <img src="img/kilimanjaro-summit-day.jpg" alt="Mount Kilimanjaro">
                    </div>
                    <div class="destination-overlay">
                        <h3>Kilimanjaro</h3>
                        <p>Roof of Africa</p>
                    </div>
                </div>
                <div class="destination-content">
                    <p>Africa's highest peak offers adventurous climbers a chance to summit the continent's rooftop through diverse ecological zones.</p>
                    <div class="destination-features">
                        <span><i class="fas fa-mountain"></i> Highest Peak</span>
                        <span><i class="fas fa-hiking"></i> Trekking Routes</span>
                        <span><i class="fas fa-snowflake"></i> Glacial Summit</span>
                    </div>
                    <a href="#" class="btn btn-primary">Explore Kilimanjaro</a>
                </div>
            </div>
            
            <!-- Zanzibar -->
            <div class="destination-card">
                <div class="destination-image">
                    <div class="image-container">
                       <img src="img/Zanzibar-holiday-safari.jpg" alt="Zanzibar-holiday-safari">
                    </div>
                    <div class="destination-overlay">
                        <h3>Zanzibar</h3>
                        <p>Spice Island Paradise</p>
                    </div>
                </div>
                <div class="destination-content">
                    <p>With pristine beaches, historic Stone Town, and rich cultural heritage, Zanzibar offers the perfect safari complement.</p>
                    <div class="destination-features">
                        <span><i class="fas fa-umbrella-beach"></i> Pristine Beaches</span>
                        <span><i class="fas fa-history"></i> Historic Stone Town</span>
                        <span><i class="fas fa-swimmer"></i> Crystal Waters</span>
                    </div>
                    <a href="#" class="btn btn-primary">Explore Zanzibar</a>
                </div>
            </div>


           <!-- Lake Manyara -->
<div class="destination-card">
    <div class="destination-image">
        <div class="image-container">
            <img src="img/lake-manyara-national-park.jpg" alt="Lake Manyara National Park">
        </div>
        <div class="destination-overlay">
            <h3>Lake Manyara</h3>
            <p>Birdwatcher's Paradise</p>
        </div>
    </div>
    <div class="destination-content">
        <p>Famous for its tree-climbing lions and diverse bird species, Lake Manyara offers a compact yet spectacular safari experience at the base of the Rift Valley escarpment.</p>
        <div class="destination-features">
            <span><i class="fas fa-lion"></i> Tree-Climbing Lions</span>
            <span><i class="fas fa-dove"></i> Flamingo Colonies</span>
            <span><i class="fas fa-tree"></i> Groundwater Forest</span>
        </div>
        <a href="#" class="btn btn-primary">Explore Lake Manyara</a>
    </div>
</div>
        </div>
    </div>
</section>



    <!-- Features Section -->
    <section class="section features">
        <div class="container">
                      <div class="section-title">

            <h2>Why choosing Us</h2>
            <p>Explore the diverse landscapes and unique experiences that make Tanzania one of Africa's most captivating destinations.</p>
        </div>
        

            <div class="features-grid">
                <div class="feature-card">
                    
                    <div class="feature-icon">
                        <i class="fas fa-lion"></i>
                    </div>
                    <h3>Expert Safari Guides</h3>
                    <p>Our professional guides have decades of experience tracking wildlife and sharing their knowledge.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mountain"></i>
                    </div>
                    <h3>Kilimanjaro Specialists</h3>
                    <p>With a 95% success rate, our climbing teams will safely guide you to Africa's rooftop.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-hotel"></i>
                    </div>
                    <h3>Luxury Accommodations</h3>
                    <p>Stay in the finest lodges and tented camps with premium amenities and service.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3>Responsible Tourism</h3>
                    <p>We're committed to sustainable practices that support local communities and conservation.</p>
                </div>
            </div>
        </div>
    </section>
<!-- Add this section where you want the Instagram posts to appear -->
    <section class="instagram-section">
        <div class="container">
            <h2>Follow Our Adventures on Instagram</h2>
            
            <!-- NEW: Instagram button added here -->
            
            <div class="container">
            <a href="https://instagram.com/yourprofile" target="_blank" class="instagram-follow-btn">
                <i class="fab fa-instagram"></i>
                Follow Us on Instagram
            </a>
            
            <div class="instagram-grid">
                <!-- Post 1 -->
                <div class="instagram-post">
                    <img src="img/balloon-safari.jpg" alt="Kilimanjaro trek" class="insta-image">
                    <div class="insta-overlay">
                        <a href="https://instagram.com/p/your-post1" target="_blank" class="insta-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Post 2 -->
                <div class="instagram-post">
                    <img src="img/kilimanjaro-sun-set.jpg" alt="Safari sunset" class="insta-image">
                    <div class="insta-overlay">
                        <a href="https://instagram.com/p/your-post2" target="_blank" class="insta-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <div class="instagram-post">
                    <img src="img/wildbeest-walking-safari.jpg" alt="Safari sunset" class="insta-image">
                    <div class="insta-overlay">
                        <a href="https://instagram.com/p/your-post2" target="_blank" class="insta-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="instagram-post">
                    <img src="img/luxury-safari-in-tanzania.jpg" alt="Safari sunset" class="insta-image">
                    <div class="insta-overlay">
                        <a href="https://instagram.com/p/your-post2" target="_blank" class="insta-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="instagram-post">
                    <img src="img/zebra-game-drive.jpg" alt="Safari sunset" class="insta-image">
                    <div class="insta-overlay">
                        <a href="https://instagram.com/p/your-post2" target="_blank" class="insta-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Post 3 -->
                <div class="instagram-post">
                    <img src="img/Cheetah-in-tanzania.jpg" alt="Wildlife encounter" class="insta-image">
                    <div class="insta-overlay">
                        <a href="https://instagram.com/p/your-post3" target="_blank" class="insta-link">
                            <i class="fab fa-instagram"></i>
                        </a>            
                    </div>
    
                </div>
                
            </div>
        </div>
        
    </section>

<!-- Blog Articles Section -->

</section>
    <!-- Safari Types Section -->
    <section class="section safari-types" id="safaris">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">Tanzanian Safaris</span>
                <h2>Our Safari Experiences</h2>
                <p>Choose from our carefully crafted safari packages designed to showcase Tanzania's incredible wildlife.</p>
            </div>
            
            <div class="safari-types-grid">
                <div class="safari-type-card">
                    <img src="img/kilimanjaro-trekking.jpg" alt="Kilimanjaro trek" class="tanzania-luxury-safari">
                    <div class="safari-type-content">
                        <h3>Classic Safari</h3>
                        <p>7-day adventure through Serengeti and Ngorongoro Crater with luxury lodge accommodations.</p>
                        <div class="tour-footer">
                            <div class="tour-price">$3,299+</div>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
                
                <div class="safari-type-card">
                    <img src="img/tanzania-classic-safari.jpg" alt="Kilimanjaro trek" class="tanzania-luxury-safari">
                    <div class="safari-type-content">
                        <h3>Great Migration</h3>
                        <p>10-day journey following the wildebeest migration with expert guides and mobile camps.</p>
                        <div class="tour-footer">
                            <div class="tour-price">$4,599+</div>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
                
                <div class="safari-type-card">
                   <img src="img/tanzania-classic-safari.jpg" alt="Kilimanjaro trek" class="tanzania-luxury-safari">
                    <div class="safari-type-content">
                        <h3>Family Safari</h3>
                        <p>5-day kid-friendly adventure with special activities and family-sized accommodations.</p>
                        <div class="tour-footer">
                            <div class="tour-price">$2,899+</div>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>

                <div class="safari-type-card">
                   <img src="img/tanzania-classic-safari.jpg" alt="Kilimanjaro trek" class="tanzania-luxury-safari">
                    <div class="safari-type-content">
                        <h3>Family Safari</h3>
                        <p>5-day kid-friendly adventure with special activities and family-sized accommodations.</p>
                        <div class="tour-footer">
                            <div class="tour-price">$2,899+</div>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>

                <div class="safari-type-card">
                   <img src="img/tanzania-classic-safari.jpg" alt="Kilimanjaro trek" class="tanzania-luxury-safari">
                    <div class="safari-type-content">
                        <h3>Family Safari</h3>
                        <p>5-day kid-friendly adventure with special activities and family-sized accommodations.</p>
                        <div class="tour-footer">
                            <div class="tour-price">$2,899+</div>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>

                <div class="safari-type-card">
                   <img src="img/tanzania-classic-safari.jpg" alt="Kilimanjaro trek" class="tanzania-luxury-safari">
                    <div class="safari-type-content">
                        <h3>Family Safari</h3>
                        <p>5-day kid-friendly adventure with special activities and family-sized accommodations.</p>
                        <div class="tour-footer">
                            <div class="tour-price">$2,899+</div>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Blog Articles Section -->
<section class="section blog-articles">
    <div class="container">
        <div class="section-title">
            <span class="subtitle">Latest Updates</span>
            <h2>Travel Insights & Stories</h2>
            <p>Discover the latest news, travel tips, and inspiring stories from Tanzania.</p>
        </div>
        
        <div class="blog-grid">
            <!-- Blog Article 1 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="img/great-migration-article.jpg" alt="Great Migration in Serengeti">
                    <div class="blog-overlay">
                        <div class="blog-content-overlay">
                            <h3 class="blog-title">The Great Migration: Nature's Most Spectacular Event</h3>
                        </div>
                    </div>
                </div>
                <div class="blog-excerpt">
                    
                    <a href="#" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- Blog Article 2 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="img/kilimanjaro-climbing-article.jpg" alt="Kilimanjaro Climbing Tips">
                    <div class="blog-overlay">
                        <div class="blog-content-overlay">
                            <h3 class="blog-title">7 Essential Tips for Climbing Mount Kilimanjaro</h3>
                        </div>
                    </div>
                </div>
                <div class="blog-excerpt">
                    <a href="#" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- Blog Article 3 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="img/zanzibar-safari-article.jpg" alt="Zanzibar Culture">
                    <div class="blog-overlay">
                        <div class="blog-content-overlay">
                            <h3 class="blog-title">Exploring Zanzibar's Rich Cultural Heritage</h3>
                        </div>
                    </div>
                </div>
                <div class="blog-excerpt">
                    <a href="#" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- Blog Article 4 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="img/tanzania-safari-packing-list-banner.jpg" alt="Safari Packing Guide">
                    <div class="blog-overlay">
                        <div class="blog-content-overlay">
                            <h3 class="blog-title">Ultimate Safari Packing Guide: What to Bring to Tanzania</h3>
                        </div>
                    </div>
                </div>
                <div class="blog-excerpt">
                    <a href="#" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- Blog Article 5 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="img/tanzania-food.jpg" alt="Tanzanian Cuisine">
                    <div class="blog-overlay">
                        <div class="blog-content-overlay">
                            <h3 class="blog-title">Taste of Tanzania: A Culinary Journey Through Local Delicacies</h3>
                        </div>
                    </div>
                </div>
                <div class="blog-excerpt">
                    <a href="#" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- Blog Article 6 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="img/conservation-area.jpg" alt="Wildlife Conservation">
                    <div class="blog-overlay">
                        <div class="blog-content-overlay">
                            <h3 class="blog-title">Conservation Efforts: Protecting Tanzania's Natural Treasures</h3>
                        </div>
                    </div>
                </div>
                <div class="blog-excerpt">
                    <a href="#" class="blog-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        </div>
        
        <div class="blog-cta">
            <a href="#" class="btn btn-primary">View All Articles</a>
        </div>
    </div>
</section>
    
<!--Call to actions-->
  <!-- Call to Action Section -->
<div class="travolo-cta-container">
        <section class="travolo-cta-section">
            <h2 class="travolo-cta-title">Ready to Plan Your Tanzanian Adventure?</h2>
            <p class="travolo-cta-subtitle">Contact us today and let our experts create your dream safari experience</p>
            
            <div class="travolo-cta-buttons">
                <a href="https://wa.me/255123456789" class="travolo-cta-btn travolo-whatsapp-btn" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    <span>Chat on WhatsApp</span>
                    <span class="travolo-small-text">Fast response</span>
                </a>
                
                <button class="travolo-cta-btn travolo-call-btn" id="travolo-enquire-btn">
                    <i class="fas fa-paper-plane"></i>
                    <span>Enquire Now</span>
                    <span class="travolo-small-text">Personalized service</span>
                </button>
                
                <a href="tel:+255123456789" class="travolo-cta-btn travolo-call-btn">
                    <i class="fas fa-phone"></i>
                    <span>Voice Call</span>
                    <span class="travolo-small-text">Speak directly</span>
                </a>
            </div>
            
            <p class="travolo-cta-footer">We'll craft a personalized travel itinerary within 3 hours</p>
        </section>
    </div>

    
    <!--Call to actions ends-->



        <!--pop-up-booking form-->
<!-- The minimal HTML needed for the popup -->
    <div class="travolo-booking-overlay" id="travolo-booking-overlay">
        <div class="travolo-booking-form">
            <button class="travolo-close-btn" id="travolo-close-btn">&times;</button>
            <h3 class="travolo-form-title">Plan Your Adventure</h3>
            
            <form id="travolo-booking-form">
                <div class="travolo-form-group">
                    <label for="name" class="travolo-form-label">Full Name</label>
                    <input type="text" id="name" class="travolo-form-input" placeholder="Your full name" required>
                </div>
                
                <div class="travolo-form-group">
                    <label for="travel-date" class="travolo-form-label">Travel Date</label>
                    <input type="date" id="travel-date" class="travolo-form-input" required>
                </div>
                
                <div class="travolo-form-group">
                    <label for="adults" class="travolo-form-label">Number of Adults</label>
                    <div class="number-input-container">
                        <button type="button" class="number-btn minus" id="adults-minus">-</button>
                        <input type="number" id="adults" class="number-input" value="1" min="1">
                        <button type="button" class="number-btn plus" id="adults-plus">+</button>
                    </div>
                </div>
                
                <div class="travolo-form-group">
                    <label for="kids" class="travolo-form-label">Number of Children</label>
                    <div class="number-input-container">
                        <button type="button" class="number-btn minus" id="kids-minus">-</button>
                        <input type="number" id="kids" class="number-input" value="0" min="0">
                        <button type="button" class="number-btn plus" id="kids-plus">+</button>
                    </div>
                </div>
                
                <div class="travolo-form-group">
                    <label for="message" class="travolo-form-label">Message (Optional)</label>
                    <textarea id="message" class="travolo-form-textarea" placeholder="Tell us about your travel preferences, questions, or special requirements"></textarea>
                </div>
                
                <button type="submit" class="travolo-form-submit">Submit Enquiry</button>
            </form>
        </div>
    </div>

    

    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>About Travolo</h3>
                    <p>We are Tanzania's premier safari operator, offering unforgettable wildlife experiences with a commitment to sustainable tourism.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Safaris</a></li>
                        <li><a href="#">Kilimanjaro</a></li>
                        <li><a href="#">About Tanzania</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>Safari Packages</h3>
                    <ul class="footer-links">
                        <li><a href="#">Classic Safaris</a></li>
                        <li><a href="#">Luxury Safaris</a></li>
                        <li><a href="#">Family Safaris</a></li>
                        <li><a href="#">Great Migration</a></li>
                        <li><a href="#">Custom Safaris</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>Contact Info</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Safari Street, Arusha, Tanzania</p>
                    <p><i class="fas fa-phone"></i> +255 123 456 789</p>
                    <p><i class="fas fa-envelope"></i> info@travolo.com</p>
                    <p><i class="fas fa-clock"></i> Mon-Fri: 8AM - 5PM</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 Travolo Tanzania. All Rights Reserved. | <a href="#" style="color: var(--secondary);">Privacy Policy</a> | <a href="#" style="color: var(--secondary);">Terms of Service</a></p>
            </div>
        </div>
    </footer>

    <!-- Additional sections would continue here for Kilimanjaro, Itineraries, About Tanzania, etc. -->

    
</body>
</html>