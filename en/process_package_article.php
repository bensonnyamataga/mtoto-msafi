<?php
if(isset($_POST['add_package'])) {
    $title = strtolower($_POST['title']);
    $pageName = str_replace(' ', '-', $title);  // Replaces spaces with hyphens for the filename
    $metaDescription = $_POST['meta_description'];
    $description = $_POST['description'];
    $head1 = $_POST['head1'];
    $head2 = $_POST['head2'];
    $overview = $_POST['overview'];
    $itinerary = $_POST['itinerary'];
    
    $image = $_FILES['image'];
    $imagePath = 'images/' . basename($image['name']);
    move_uploaded_file($image['tmp_name'], $imagePath);

    $content = "<!DOCTYPE html>
<html lang='en'>
    
<!-- Tue, 13 May 2025 09:05:40 GMT -->
<head>
<meta charset='UTF-8' />
<meta name='viewport' content='width=device-width, initial-scale=1.0' />
<meta name='description' content='$description' />
<meta name='keywords' content='$head1, $title  ' />
<meta name='author' content='Jarga Tours' />
<meta name='robots' content='index, follow' />

<!-- Title -->
<title>$head1</title>

        <!-- bootstrap css -->
        <link rel='stylesheet' href='../../assets/css/bootstrap.min.css' />
        <!-- font-awesome CSS -->
        <link rel='stylesheet' href='../../assets/css/fontawesome.min.css' />
        <!-- box-icon CSS -->
        <link rel='stylesheet' href='../../assets/css/boxicons.min.css'>
        <!-- animate CSS -->
        <link rel='stylesheet' href='../../assets/css/animate.min.css' />
        <!-- bootstrap date-picker CSS -->
        <link rel='stylesheet' href='../../assets/css/bootstrap-datepicker.min.css'>
        <!-- nice select CSS -->
        <link rel='stylesheet' href='../../assets/css/nice-select.css'>
        <!-- magnific popup CSS -->
        <link rel='stylesheet' href='../../assets/css/magnific-popup.min.css' />
        <!-- owl-carousel CSS -->
        <link rel='stylesheet' href='../../assets/css/owl.carousel.min.css' />
        <!-- mean-menu CSS -->
        <link rel='stylesheet' href='../../assets/css/meanmenu.min.css' />
        <!-- main style CSS -->
        <link rel='stylesheet' href='../../assets/css/style.css' />
        <!-- responsive CSS -->
        <link rel='stylesheet' href='../../assets/css/responsive.css' />
        <!-- theme dark CSS -->
        <link rel='stylesheet' href='../../assets/css/theme-dark.css' />
        <!-- favicon -->
        <link rel='icon' href='../../assets/img/favicon.png' type='image/png'/>
    </head>
    <body>
        <!-- start header area -->
        <header class='header-area'>
            <!-- start top header area -->
            <div class='top-header-area'>
                <div class='container'>
                    <div class='row align-items-center'>
    <div class='col-xl-6 col-lg-6'>
        <div class='contact-info'>
            <div class='content'>
                <i class='bx bx-phone'></i>
                <a href='../../tel:+255 761 616 374'>+255 761 616 374</a>
            </div>
            <div class='content'>
                <i class='bx bx-envelope'></i>
                <a href='../../mailto:info@jargatours.com'>info@jargatours.com</a>
            </div>
        </div>
    </div>
    <div class='col-xl-6 col-lg-5'>
        <div class='side-option'>
            <!--<div class='item'>
                <a href='../../contact.html' class='btn-secondary'>
                    Contact Us <i class='bx bx-message-detail'></i>
                </a>
            </div>-->

            <div class='item'>
                <a href='https://wa.me/+255 761 616 374' target='_blank' class='btn-secondary'>
                    WhatsApp Us <i class='bx bxl-whatsapp'></i>
                </a>
            </div>

        </div>
    </div>
</div>

                </div>
            </div>
            <!-- end top header area -->

            <!-- start navbar area -->
            <div class='main-navbar-area'>
                <div class='main-responsive-nav'>
                    <div class='container'>
                        <div class='main-responsive-menu'>
                             <div class='logo'>
                                <a href='../../index.html'>
                                    <img src='../../assets/img/logo1.png' class='logo1' alt='Logo'>
                                    <img src='../../assets/img/logo2.png' class='logo2' alt='Logo'>
                                </a>
                            </div>
                            <div class='cart responsive'>
                                <a href='../../cart.html' class='cart-btn'><i class='bx bx-cart'></i>
                                    <span class='badge'>0</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='main-nav'>
                    <div class='container'>
                        <nav class='navbar navbar-expand-md navbar-light'>
                            <a class='navbar-brand' href='index.html'>
                                <img src='../../assets/img/logo1.png' class='logo1' alt='Logo'>
                                <img src='../../assets/img/logo2.png' class='logo2' alt='Logo'>
                            </a>
                            <div class='collapse navbar-collapse mean-menu'>
    <ul class='navbar-nav ms-auto'>

        <li class='nav-item'>
            <a href='../../index.html' class='nav-link active'>Home</a>
        </li>

        <li class='nav-item'>
            <a href='../../#' class='nav-link toggle'>Tanzania Safaris <i class='bx bxs-chevron-down'></i></a>
            <ul class='dropdown-menu'>
            <li class='nav-item'>
            <a href='../../#' class='nav-link toggle'>Tanzania Private Safari <i class='bx bxs-chevron-down'></i></a>
            <ul class='dropdown-menu'>
                
                <li class='nav-item'><a href='../../tanzania-private-safari-2-days-itinerary.html' class='nav-link'>Tanzania Private Safari 2 Days</a></li>
                <li class='nav-item'><a href='../../tanzania-private-safari-3-days-itinerary.html' class='nav-link'>Tanzania Private Safari 3 Days</a></li>
                <li class='nav-item'><a href='../../tanzania-private-safari-4-days-itinerary.html' class='nav-link'>Tanzania Private Safari 4 Days</a></li>
                <li class='nav-item'><a href='../../tanzania-private-safari-5-days-itinerary.html' class='nav-link'>Tanzania Private Safari 5 Days</a></li>
                <li class='nav-item'><a href='../../tanzania-private-safari-6-days-itinerary.html' class='nav-link'>Tanzania Private Safari 6 Day</a></li>
                <li class='nav-item'><a href='../../tanzania-private-safari-7-days-itinerary.html' class='nav-link'>Tanzania Private Safari 7 Day</a></li>
            </ul>
            </li>
            <li class='nav-item'>
            <a href='../../#' class='nav-link toggle'>Budget/Camping Safari <i class='bx bxs-chevron-down'></i></a>
            <ul class='dropdown-menu'>
                <li class='nav-item'><a href='../../tanzania-budget-safari-4-days-itinerary.html' class='nav-link'>4 Days Budget Safari</a></li>
                <li class='nav-item'><a href='../../tanzania-budget-safari-5-days-itinerary.html' class='nav-link'>5 Days Budget Safari</a></li>
                <li class='nav-item'><a href='../../tanzania-budget-safari-6-days-itinerary.html' class='nav-link'>6 Days Budget Safari</a></li>
            </ul>
            </li>
            <li class='nav-item'>
  <a href='../../#' class='nav-link toggle'>Tanzania Luxury Safari <i class='bx bxs-chevron-down'></i></a>
  <ul class='dropdown-menu'>
    <li class='nav-item'><a href='../../tanzania-luxury-safari-2-days-itinerary.html' class='nav-link'>2 Days Luxury Safari</a></li>
    <li class='nav-item'><a href='../../tanzania-luxury-safari-3-days-itinerary.html' class='nav-link'>3 Days Luxury Safari</a></li>
    <li class='nav-item'><a href='../../tanzania-luxury-safari-4-days-itinerary.html' class='nav-link'>4 Days Luxury Safari</a></li>
    <li class='nav-item'><a href='../../tanzania-luxury-safari-5-days-itinerary.html' class='nav-link'>5 Days Luxury Safari</a></li>
    <li class='nav-item'><a href='../../tanzania-luxury-safari-6-days-itinerary.html' class='nav-link'>6 Days Luxury Safari</a></li>
    <li class='nav-item'><a href='../../tanzania-luxury-safari-7-days-itinerary.html' class='nav-link'>7 Days Luxury Safari</a></li>
  </ul>
</li>
            <li class='nav-item'>
            <a href='../../#' class='nav-link toggle'>Serengeti Migration Safari <i class='bx bxs-chevron-down'></i></a>
            <ul class='dropdown-menu'>
                <li class='nav-item'><a href='../../serengeti-migration-safari-4-days-itinerary.html' class='nav-link'>4 Days Serengeti Migration Safari</a></li>
                <li class='nav-item'><a href='../../serengeti-migration-safari-5-days-itinerary.html' class='nav-link'>5 Days Serengeti Migration Safari</a></li>
            </ul>
            </li>
            <li class='nav-item'>
            <a href='../../pack-list-for-tanzania-safari.html' class='nav-link toggle'>Essential Safari Packing List</a>
            </li>
                <!--<li class='nav-item'><a href='../../big-five-safari.html' class='nav-link'>Big Five Safari</a></li>
                <li class='nav-item'><a href='../../luxury-safaris.html' class='nav-link'>Luxury Safaris</a></li>
                <li class='nav-item'><a href='../../budget-camping.html' class='nav-link'>Budget Camping</a></li>-->
            </ul>
        </li>

        <li class='nav-item'>
  <a href='../../#' class='nav-link toggle'>Mount Kilimanjaro <i class='bx bxs-chevron-down'></i></a>
  <ul class='dropdown-menu'>
    <!-- Machame Route -->
    <li class='nav-item'>
      <a href='../../#' class='nav-link toggle'>Machame Route <i class='bx bxs-chevron-down'></i></a>
      <ul class='dropdown-menu'>
        <li class='nav-item'><a href='../../kilimanjaro-machame-route-6-days-itinerary.html' class='nav-link'>6 Days Machame Route</a></li>
        <li class='nav-item'><a href='../../kilimanjaro-machame-route-7-days-itinerary.html' class='nav-link'>7 Days Machame Route</a></li>
      </ul>
    </li>
    <!-- Lemosho Route -->
    <li class='nav-item'>
      <a href='../../#' class='nav-link toggle'>Lemosho Route <i class='bx bxs-chevron-down'></i></a>
      <ul class='dropdown-menu'>
        <li class='nav-item'><a href='../../kilimanjaro-lemosho-route-7-days-itinerary.html' class='nav-link'>7 Days Lemosho Route</a></li>
        <li class='nav-item'><a href='../../kilimanjaro-lemosho-route-8-days-itinerary.html' class='nav-link'>8 Days Lemosho Route</a></li>
      </ul>
    </li>
    <!-- Marangu Route -->
    <li class='nav-item'>
      <a href='../../#' class='nav-link toggle'>Marangu Route <i class='bx bxs-chevron-down'></i></a>
      <ul class='dropdown-menu'>
        <li class='nav-item'><a href='../../kilimanjaro-marangu-route-5-days-itinerary.html' class='nav-link'>5 Days Marangu Route</a></li>
        <li class='nav-item'><a href='../../kilimanjaro-marangu-route-6-days-itinerary.html' class='nav-link'>6 Days Marangu Route</a></li>
      </ul>
    </li>
    <!-- Rongai Route -->
    <li class='nav-item'>
      <a href='../../#' class='nav-link toggle'>Rongai Route <i class='bx bxs-chevron-down'></i></a>
      <ul class='dropdown-menu'>
        <li class='nav-item'><a href='../../kilimanjaro-rongai-route-6-days-itinerary.html' class='nav-link'>6 Days Rongai Route</a></li>
        <li class='nav-item'><a href='../../kilimanjaro-rongai-route-7-days-itinerary.html' class='nav-link'>7 Days Rongai Route</a></li>
      </ul>
    </li>
    <!-- Umbwe Route -->
    <li class='nav-item'>
      <a href='../../#' class='nav-link toggle'>Umbwe Route <i class='bx bxs-chevron-down'></i></a>
      <ul class='dropdown-menu'>
        <li class='nav-item'><a href='../../kilimanjaro-umbwe-route-6-days-itinerary.html' class='nav-link'>6 Days Umbwe Route</a></li>
        <li class='nav-item'><a href='../../kilimanjaro-umbwe-route-7-days-itinerary.html' class='nav-link'>7 Days Umbwe Route</a></li>
      </ul>
    </li>
    <!-- Packing List -->
    <li class='nav-item'>
      <a href='../../pack-list-for-kilimanjaro-trekking.html' class='nav-link'>Kilimanjaro Packing List</a>
    </li>
  </ul>
</li>



        <li class='nav-item'>
            <a href='../../#' class='nav-link toggle'>Zanzibar Holidays <i class='bx bxs-chevron-down'></i></a>
            <ul class='dropdown-menu'>
                <li class='nav-item'><a href='../../zanzibar-beach-tour-2-days-itinerary.html' class='nav-link'>2 Day Zanzibar Beach</a></li>
                <li class='nav-item'><a href='../../zanzibar-beach-tour-3-days-itinerary.html' class='nav-link'>3 Day Zanzibar Beach</a></li>
                <li class='nav-item'><a href='../../zanzibar-beach-tour-4-days-itinerary.html' class='nav-link'>4 Day Zanzibar Beach</a></li>
                <li class='nav-item'><a href='../../zanzibar-beach-tour-5-days-itinerary.html' class='nav-link'>5 Day Zanzibar Beach</a></li>
                <li class='nav-item'><a href='../../zanzibar-beach-tour-6-days-itinerary.html' class='nav-link'>6 Day Zanzibar Beach</a></li>
                <li class='nav-item'><a href='../../zanzibar-beach-tour-7-days-itinerary.html' class='nav-link'>7 Day Zanzibar Beach</a></li>
            </ul>
        </li>

        <li class='nav-item'>
            <a href='../../#' class='nav-link toggle'>Day Trips <i class='bx bxs-chevron-down'></i></a>
            <ul class='dropdown-menu'>
                <li class='nav-item'><a href='../../arusha-national-park-1-day-trip-tour.html' class='nav-link'>Arusha National Park Day Trip</a></li>
                <li class='nav-item'><a href='../../tarangire-national-park-1-day-trip-tour.html' class='nav-link'>Tarangire National Park Day Trip</a></li>
                <li class='nav-item'><a href='../../ngorongoro-crater-1-day-trip-tour.html' class='nav-link'>Ngorongoro Crater Day Trip</a></li>

                <li class='nav-item'><a href='../../materuni-waterfall-1-day-trip-tour.html' class='nav-link'>Materuni Waterfall Day Trip</a></li>
                <li class='nav-item'><a href='../../chemka-hot-springs-1-day-trip.html' class='nav-link'>Chemka Day Trip</a></li>
            </ul>
        </li>

        <li class='nav-item'>
            <a href='../../about-us.html' class='nav-link'>About Us</a>
        </li>

        <li class='nav-item'>
            <a href='../../contact.html' class='nav-link'>Contact</a>
        </li>
    </ul>
</div>

                        </nav>
                    </div>
                </div>
            </div>
            <!-- end navbar area -->
        </header>
        <!-- end header area -->
<style type='text/css'>
    h2 {
        color: #ed6802;
        font-weight: bold;
        font-size: 23px;
    }
    h3 {
        color: #c25508;
        font-weight: bold;
        font-size: 23px;
    }
</style>
        <!-- start page title area-->
        <div class='page-title-area ptb-100'>
            <div class='container'>
                <div class='page-title-content'>
                    <h1>$head1</h1>
                    <p style='color: white; ' >$metaDescription</p>
                </div>
            </div>
            <div class='bg-image'>
                <img src='../../images/tanzania-safari-21.jpg' alt='tanzania-safari-1'>
            </div>
        </div>
        <!-- end page title area -->
<br>
        <!-- start blog details section -->
        <section class='blog-details-section pt-50 pb-70'>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-8 col-md-12'>
    <div class='blog-details-desc mb-30'>
    <div class='image mb-20'>
        <img src='../$imagePath' alt='$title' title='$title'>
    </div>
    <ul class='info-list mb-20'>
        <li><i class='bx bx-tag'></i> $title, Jarga Tours</li>
    </ul>
    <div class='content mb-20'>
        <h2>$head2</h2>
        <p>
            $overview
        </p>
        <hr>
    <div>
        $itinerary
    </div>
        
    </div>

</div>

</div>


                    <div class='col-lg-4 col-md-12'>
                        <aside class='widget-area'>
<!-- Font Awesome (add in your <head> if not already included) -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' />

<form action='../../booking-form.php' method='POST' style='background:#f9f9f9; padding:20px; border-radius:8px; box-shadow:0 0 8px rgba(0,0,0,0.1); font-family:Arial, sans-serif;'>
    <h3 style='margin-bottom:20px; color:#2e5c3f;font-size: 28px;font-weight: bold;'><i class='fas fa-calendar-alt'></i> Book Your Tour</h3>

    <!-- Full Name -->
    <div style='margin-bottom:15px;'>
        <label for='fullname' style='display:block; margin-bottom:5px; font-weight:bold;'>
            <i class='fas fa-user'></i> Full Name
        </label>
        <input type='text' id='fullname' name='fullname' required
               style='width:100%; padding:10px; border:1px solid #ccc; border-radius:4px;'>
    </div>

    <!-- Email -->
    <div style='margin-bottom:15px;'>
        <label for='email' style='display:block; margin-bottom:5px; font-weight:bold;'>
            <i class='fas fa-envelope'></i> Email
        </label>
        <input type='email' id='email' name='email' required
               style='width:100%; padding:10px; border:1px solid #ccc; border-radius:4px;'>
    </div>

    <!-- Phone -->
    <div style='margin-bottom:15px;'>
        <label for='phone' style='display:block; margin-bottom:5px; font-weight:bold;'>
            <i class='fas fa-phone-alt'></i> Phone
        </label>
        <input type='tel' id='phone' name='phone'
               style='width:100%; padding:10px; border:1px solid #ccc; border-radius:4px;'>
    </div>

    <!-- Date -->
    <div style='margin-bottom:15px;'>
        <label for='date' style='display:block; margin-bottom:5px; font-weight:bold;'>
            <i class='fas fa-calendar-day'></i> Preferred Date
        </label>
        <input type='date' id='date' name='date'
               style='width:100%; padding:10px; border:1px solid #ccc; border-radius:4px;'>
    </div>

    <!-- Number of People -->
    <div style='margin-bottom:15px;'>
        <label for='people' style='display:block; margin-bottom:5px; font-weight:bold;'>
            <i class='fas fa-users'></i> Number of People
        </label>
        <input type='number' id='people' name='people' min='1'
               style='width:100%; padding:10px; border:1px solid #ccc; border-radius:4px;'>
    </div>

    <!-- Submit Button -->
    <div style='text-align:center;'>
        <button type='submit'
                style='background:#2e5c3f; color:white; padding:12px 25px; border:none; border-radius:4px; font-weight:bold; cursor:pointer;'>
            <i class='fas fa-paper-plane'></i> Send Request
        </button>
    </div>
</form>
<br>
    <!-- Company Profile Widget -->
    <div class='widget widget-author mb-30'>
        <div class='author-img'>
            <img src='../../assets/img/logo.png' alt='Jarga Tours Logo' />
        </div>
        <div class='author-info'>
            <h3>Jarga Tours</h3>
            <span>Tailor-made Safaris & Kilimanjaro Treks</span>
        </div>
        <div class='social-link'>
            <a href='https://www.facebook.com/jayvaafrica' target='_blank'><i class='bx bxl-facebook'></i></a>
            <a href='https://twitter.com/jayvaafrica' target='_blank'><i class='bx bxl-twitter'></i></a>
            <a href='https://www.linkedin.com/company/jayvaafrica' target='_blank'><i class='bx bxl-linkedin'></i></a>
            <a href='https://www.instagram.com/jayvaafrica' target='_blank'><i class='bx bxl-instagram'></i></a>
        </div>
    </div>

    <!-- Promotional Video Widget -->
    <div class='widget widget-video mb-30'>
        <div class='video-image'>
            <img src='../../images/tanzania-safari-8.jpg' alt='Safari Video' />
        </div>
        <a href='https://youtu.be/k4Hh_zEjf1M?si=VXfoglGSsJAEEW_5' class='youtube-popup video-btn'>
            <i class='bx bx-right-arrow'></i>
        </a>
    </div>

    <!-- Popular Tours Widget -->
    <div class='widget widget-article mb-30'>
        <h3 class='sub-title'>Popular Tours</h3>

        <article class='article-item'>
            <div class='image'>
                <img src='../../images/tanzania-safari-2.jpg' alt='Tanzania Safari' />
            </div>
            <div class='content'>
                <h3><a href='../../ngorongoro-crater-1-day-trip-tour.html'>Ngorongoro Crater Day Safari</a></h3>
                <ul class='list'>
                    <li><span>From Arusha</span></li>
                </ul>
            </div>
        </article>

        <article class='article-item'>
            <div class='image'>
                <img src='../../images/kilimanjaro-route _2_.jpg' alt='Kilimanjaro Trek' />
            </div>
            <div class='content'>
                <h3><a href='../../kilimanjaro-machame-route-7-days-itinerary.html'>7 Days Kilimanjaro Machame Route</a></h3>
                <ul class='list'>
                    <li><span>Climb with expert guides</span></li>
                </ul>
            </div>
        </article>

        <article class='article-item'>
            <div class='image'>
                <img src='../../images/zanzibar-tour _1_.jpg' alt='Zanzibar Beach Holiday' />
            </div>
            <div class='content'>
                <h3><a href='../../zanzibar-beach-tour-4-days-itinerary.html'>4 Days Zanzibar Beach Holiday</a></h3>
                <ul class='list'>
                    <li><span>Relax & Explore the Coast</span></li>
                </ul>
            </div>
        </article>
    </div>

    <!-- Contact Info Widget -->
    <div class='widget widget-contact mb-30'>
        <h3 class='sub-title'>Need Help?</h3>
        <p>Contact our travel experts to help you plan the perfect safari.</p>
        <ul class='contact-info' style='list-style: none; padding: 0; margin: 0;'>
    <li style='margin-bottom: 10px;'>
        <strong>Email:</strong>
        <a href='../../mailto:info@jayvaafrica.com' style='display:inline-block; padding:6px 14px; background-color:#a80000; color:#fff; text-decoration:none; border-radius:6px; font-size:14px;'>Email Us</a>
    </li>
    <li style='margin-bottom: 10px;'>
        <strong>Phone:</strong>
        <a href='../../tel:+255761616374' style='display:inline-block; padding:6px 14px; background-color:#a80000; color:#fff; text-decoration:none; border-radius:6px; font-size:14px;'>Call Now</a>
    </li>
    <li style='margin-bottom: 10px;'>
        <strong>WhatsApp:</strong>
        <a href='https://wa.me/255761616374' target='_blank' style='display:inline-block; padding:6px 14px; background-color:#25D366; color:#fff; text-decoration:none; border-radius:6px; font-size:14px;'>Chat on WhatsApp</a>
    </li>
</ul>

    </div>

    <!-- Instagram Gallery Widget -->
    <div class='widget widget-gallery mb-30'>
        <h3 class='sub-title'>Instagram Post</h3>
        <ul class='instagram-post'>
            <li><a href='https://www.instagram.com/jayvaafrica'><img src='../../images/tanzania-safari-5.jpg' alt='Safari'><i class='bx bxl-instagram'></i></a></li>
            <li><a href='https://www.instagram.com/jayvaafrica'><img src='../../images/kilimanjaro-route _5_.jpg' alt='Trekking'><i class='bx bxl-instagram'></i></a></li>
            <li><a href='https://www.instagram.com/jayvaafrica'><img src='../../images/zanzibar-tour _2_.jpg' alt='Zanzibar'><i class='bx bxl-instagram'></i></a></li>
            <li><a href='https://www.instagram.com/jayvaafrica'><img src='../../images/tanzania-safari-6.jpg' alt='Safari 2'><i class='bx bxl-instagram'></i></a></li>
            <li><a href='https://www.instagram.com/jayvaafrica'><img src='../../images/kilimanjaro-route _6_.jpg' alt='Kili 2'><i class='bx bxl-instagram'></i></a></li>
            <li><a href='https://www.instagram.com/jayvaafrica'><img src='../../images/zanzibar-tour _3_.jpg' alt='Zanzibar 2'><i class='bx bxl-instagram'></i></a></li>
        </ul>
    </div>

</aside>

                    </div>
                </div>
            </div>
        </section>
        <!-- end blog details section -->

        <!-- start footer area -->
        <footer class='footer-area' style='background-color: #1e1e1e; color: #fff; font-family: sans-serif;'>
    <div class='container'>
        <div class='footer-top pt-100 pb-70' style='padding-top: 60px; padding-bottom: 50px;'>
            <div class='row'>

                <!-- Logo & Brief -->
                <div class='col-lg-3 col-md-6 col-sm-12'>
                    <div class='footer-widget'>
                        <a href='../../index.html'>
                            <img src='../../assets/img/logo.png' alt='Jarga Tours Logo' style='max-width: 220px; margin-bottom: 15px;'>
                        </a>
                        <p style='line-height: 1.7; margin-top: 10px;'>
                            Discover unforgettable experiences with <strong>Jarga Tours</strong>, your gateway to iconic African safaris and Kilimanjaro adventures.
                        </p>
                    </div>
                </div>

                <!-- About Us / Services -->
                <div class='col-lg-5 col-md-6 col-sm-12'>
                    <div class='footer-widget' style='border-top: 3px solid #c25508; padding-top: 20px;'>
                        <h4 style='margin-bottom: 15px; color: #fff;'>About Us</h4>
                        <p style='line-height: 1.7;'>
                            At Jarga Tours, we believe travel is more than just a journey — it's about creating lasting memories. We guide you through East Africa’s most iconic destinations with expert planning, trusted safety protocols, and a personal touch.
                        </p>
                        <div style='margin-top: 20px;'>
                            <a href='../../about-us.html' style='background-color: #c25508; color: #fff; padding: 8px 16px; text-decoration: none; border-radius: 5px;'>Learn More</a>
                        </div>
                    </div>
                    <!-- Social Media Icons -->
                    <div style='margin-top: 30px;'>
                        <h5 style='color: #fff; margin-bottom: 15px;'>Connect With Us</h5>
                        <a href='https://www.facebook.com/' target='_blank' style='margin-right: 10px; color: #fff;'>
                            <i class='fab fa-facebook-square' style='font-size: 25px; margin-right: 10px;'></i>
                        </a>
                        <a href='https://twitter.com/' target='_blank' style='margin-right: 10px; color: #fff;'>
                            <i class='fab fa-twitter-square' style='font-size: 25px; margin-right: 10px;'></i>
                        </a>
                        <a href='https://www.instagram.com/' target='_blank' style='margin-right: 10px; color: #fff;'>
                            <i class='fab fa-instagram-square' style='font-size: 25px; margin-right: 10px;'></i>
                        </a>
                        <a href='https://www.linkedin.com/' target='_blank' style='color: #fff;'>
                            <i class='fab fa-linkedin' style='font-size: 25px;'></i>
                        </a>
                    </div>
                </div>

                <!-- Contact & Social -->
                <div class='col-lg-4 col-md-6 col-sm-12'>
                    <div class='footer-widget' style='border-top: 3px solid #c25508; padding-top: 20px;'>
                        <h4 style='margin-bottom: 15px; color: #fff;'>Contact & Follow</h4>
                        <ul class='contact-info list-unstyled' style='line-height: 2;'>
                            <li><i class='fas fa-phone-alt' style='margin-right: 10px;'></i><a href='../../tel:+255761616374' style='color: #fff; text-decoration: none;'>+255 761 616 374</a></li>
                            <li><i class='fas fa-envelope' style='margin-right: 10px;'></i><a href='../../mailto:info@jargatours.com' style='color: #fff; text-decoration: none;'>info@jargatours.com</a></li>
                            <li><i class='fas fa-clock' style='margin-right: 10px;'></i>Mon – Fri: 8 AM – 7 PM</li>
                        </ul>

                        <h5 style='margin-top: 20px; color: #fff;'>Follow Us</h5>
                        <div style='margin-top: 10px;'>
                            <a href='https://www.instagram.com/' target='_blank' style='display: inline-block; margin-right: 10px;'>
                                <img src='../../assets/img/instagram1.jpg' alt='Instagram' style='width: 50px; height: 50px; object-fit: cover; border-radius: 5px;'>
                            </a>
                            <a href='https://www.instagram.com/' target='_blank' style='display: inline-block; margin-right: 10px;'>
                                <img src='../../assets/img/instagram2.jpg' alt='Instagram' style='width: 50px; height: 50px; object-fit: cover; border-radius: 5px;'>
                            </a>
                            <a href='https://www.instagram.com/' target='_blank' style='display: inline-block; margin-right: 10px;'>
                                <img src='../../assets/img/instagram3.jpg' alt='Instagram' style='width: 50px; height: 50px; object-fit: cover; border-radius: 5px;'>
                            </a>
                            <a href='https://www.instagram.com/' target='_blank' style='display: inline-block;'>
                                <img src='../../assets/img/instagram4.jpg' alt='Instagram' style='width: 50px; height: 50px; object-fit: cover; border-radius: 5px;'>
                            </a>
                        </div>
                    </div>

                    
                </div>

            </div>
        </div>

        <!-- Divider -->
        <hr style='border-color: #444; margin: 10px 0;'>

        <!-- Footer Bottom -->
        <div class='copy-right-area text-center' style='padding-bottom: 20px;'>
            <p style='color: #aaa; font-size: 14px; margin: 0;'>&copy; <strong>Jarga Tours</strong> — Your trusted partner for <em>Tanzania safaris</em> and <em>Kilimanjaro climbing adventures</em>.</p>
        </div>
    </div>
</footer>
        <!-- end footer area -->


        <!-- jquery JS -->
        <script data-cfasync='false' src='../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js'></script><script src='../../assets/js/jquery.min.js'></script>
        <!-- bootstrap JS -->
        <script src='../../assets/js/bootstrap.bundle.min.js'></script>
        <!-- bootstrap datepicker JS -->
        <script src='../../assets/js/bootstrap-datepicker.min.js'></script>
        <!-- nice select JS -->
        <script src='../../assets/js/jquery.nice-select.min.js'></script>
        <!-- magnific popup JS -->
        <script src='../../assets/js/jquery.magnific-popup.min.js'></script>
        <!-- filterizr JS -->
        <script src='../../assets/js/jquery.filterizr.min.js'></script>
        <!-- owl carousel JS -->
        <script src='../../assets/js/owl.carousel.min.js'></script>
        <!-- mean menu JS -->
        <script src='../../assets/js/meanmenu.min.js'></script>
        <!-- form validator -->
        <script src='../../assets/js/form-validator.min.js'></script>
        <!-- contact form JS -->
        <script src='../../assets/js/contact-form-script.js'></script>
        <!-- ajax chimp JS -->
        <script src='../../assets/js/jquery.ajaxchimp.min.js'></script>
        <!-- script JS -->
        <script src='../../assets/js/script.js'></script>
    </body>

<!-- Tue, 13 May 2025 09:05:41 GMT -->
</html>";

    file_put_contents("packages/$pageName.html", $content);

    // Redirect to index.php
    header("Location: index.php");
    exit();
}
?>
