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
<html class='no-js' lang='zxx'>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
  <meta http-equiv='x-ua-compatible' content='ie=edge'>
  <title>$head1</title>
  <meta name='author' content='Diphon'>
  <meta name='description' content='$description'>
  <meta content='$head1, $title, Kilimanjaro Climbing, Zanzibar Tours, Affordable Tanzania safaris and Tours ' name='keywords'>

  <meta name='robots' content='INDEX,FOLLOW'>
  <!-- Mobile Specific Metas -->
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <!-- Favicons - Place favicon.ico in the root directory -->
  <link rel='icon' type='image/png' href='../../assets/img/extreme-banner/favicon.png'>
  <meta name='msapplication-TileColor' content='#ffffff'>
  <meta name='theme-color' content='#ffffff'>
  <!--==============================
      Google Fonts
    ============================== -->
  <link rel='preconnect' href='https://fonts.googleapis.com'>
  <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
  <link href='https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&display=swap' rel='stylesheet'>
  <!--==============================
        All CSS File
    ============================== -->
  <!-- Bootstrap -->
  <!-- <link rel='stylesheet' href='../../assets/css/app.min.css'> -->
  <link rel='stylesheet' href='../../assets/css/bootstrap.min.css'>
  <!-- Fontawesome Icon -->
  <link rel='stylesheet' href='../../assets/css/fontawesome.min.css'>
  <!-- Magnific Popup -->
  <link rel='stylesheet' href='../../assets/css/magnific-popup.min.css'>
  <!-- Slick Slider -->
  <link rel='stylesheet' href='../../assets/css/slick.min.css'>
  <!-- Theme Custom CSS -->
  <link rel='stylesheet' href='../../assets/css/style.css'>
</head>
<body>
  <!--==============================
    Mobile Menu
  ============================== -->
  <div class='vs-menu-wrapper'>
    <div class='vs-menu-area text-center'>
      <button class='vs-menu-toggle'><i class='fal fa-times'></i></button>
      <div class='mobile-logo'>
        <a href='index'><img src='../../assets/img/newversion.png' alt='$title'></a>
      </div>
     <div class='vs-mobile-menu'>
        <ul>
          
       <script src='https://analytics.ahrefs.com/analytics.js' data-key='jOZwe7wdNuJ5jE9U8OgIAg' async></script>
      <li><a href='../../index.php'>Home</a></li>
                  <li class='menu-item-has-children'>
                    <a href='#'>Tanzania Safari</a>
                    <ul class='sub-menu'>
                    <li><a href='../../tanzania-camping-safari'>Tanzania Camping Safari</a></li>  
<li><a href='../../tanzania-mid-range-safari'>Tanzania Logde Safari</a></li>
<li><a href='../../northern-tanzania-safari-packages'>Northern Tanzania Safaris</a></li>
<li><a href='../../best-tanzania-luxury-safaris'>Best Tanzania Luxury Safaris</a></li>

<li><a href='../../hot-air-balloon-safari'>Hot Air Balloon Safari</a></li>
<li><a href='../../walking-tanzania-safari'>Walking Tanzania Safari</a></li>
<li><a href='../../wildbeest-migration-safari'>Wildbeest Migration Safari</a></li>

                    </ul>
                  </li>
                  <li class='menu-item-has-children'>
                    <a href='#'>Mountain Trekking</a>
                    <ul class='sub-menu'>
<li><a href='../../why-climbing-mt-kilimanjaro'>Why Climbing Mt. Kilimanjaro</a></li>
<li><a href='../../kilimanjaro-climbing-itineraries'>Kilimanjaro Climbing Itineraries</a></li>
<li><a href='../../kilimanjaro-packing-list'>Kilimanjaro Packing List</a></li>
<li><a href='../../kilimanjaro-guides-and-porters'>Kilimanjaro Guides and Porters</a></li>
<li><a href='../../kilimanjaro-healthy-and-safety'>Kilimanjaro Healthy and Safety</a></li>
<li><a href='../../best-time-to-climb-kilimanjaro'>Best time to Climb Kilimanjaro</a></li>
<li><a href='../../mt-meru-trekking-tour'>Mount Meru CLimbing</a></li>
<li><a href='../../mt-oldonyo-lengai-trekking'>Mount Oldonyo Lengai</a></li>
<li><a href='../../usambara-mt-trekking'>Mount Usambara Trekking</a></li>
                    </ul>
                  </li>
                 <li><a href='../../zanzibar-holiday'>Zanzibar Holiday</a></li>
                
                  <li class='menu-item-has-children'>
                    <a href='#'>Day Trips</a>
                    <ul class='sub-menu'>
<li><a href='../../materuni-waterfalls-day-tour'>Materuni Waterfalls Day Tour</a></li>
<li><a href='../../arusha-national-park-day-tour'>Arusha National Park Day Tour</a></li>
<li><a href='../../tarangire-national-park-day-tour'>Tarangire National Park Day Tour</a></li>
<li><a href='../../ngorongoro-day-tour'>Ngorongoro Day Tour</a></li>
<li><a href='../../lake-manyara-day-tour'>Lake Manyara Day Tour</a></li>
<li><a href='../../kikuletwa-hot-spring-day-tour'>Kikuletwa Hot Spring Day Tour</a></li>
<li><a href='../../lake-chala-day-tour'>Lake Chala Day Tour</a></li>
<li><a href='../../maasai-village-cultural-tour'>Maasai Village Cultural Tour</a></li>

                    </ul>
                  </li>
                  
                  <li class='menu-item-has-children'>
                    <a href='#'>Our story</a>
                    <ul class='sub-menu'>
<li><a href='../../about-us'>About Company Name</a></li>
<li><a href='../../our-booking-terms-and-conditions'>Our Bookings Terms and Conditions</a></li>
<li><a href='../../passport-and-visas-requirements'>Passport and Visas Requirements</a></li>
<li><a href='../../travel-insurance'>Travel Insurance</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href='../../contact-us'>Contact</a>
                  </li>
        </ul>
      </div>
    </div>
  </div>

  <div class='gtranslate_wrapper'></div>
<script>window.gtranslateSettings = {'default_language':'en','languages':['en','ar','de','fr','zh-TW'],'wrapper_selector':'.gtranslate_wrapper','switcher_horizontal_position':'right','switcher_vertical_position':'top','float_switcher_open_direction':'bottom'}</script>
<script src='https://cdn.gtranslate.net/widgets/latest/float.js' defer></script>
  <!--==============================
    Sidemenu
  ============================== -->
  <div class='sidemenu-wrapper offcanvas-wrapper d-none d-lg-block'>
    <div class='sidemenu-content'>
      <button class='closeButton sideMenuCls'>
        <i class='far fa-times'></i>
      </button>
      <div class='widget'>
        <div class='vs-widget-about'>
          <div class='footer-logo'>
            <a href='index'><img src='../../assets/img/newversion.png' alt='logo'></a>
          </div>
          <p class='footer-text'>
           Company Name delivers a high touch and personalized level of travel expertise focusing on value for money and duty of care for our customers. We are more than a travel agency. We are a business partner, a friend, a community resource. Our success comes from the success of our customers, their businesses, and the local economy. Integrating ourselves into these key areas, we help ourselves by helping others first. We can save businesses time and money through our worldwide affiliations and partnerships by offering a wide range of services for the corporate traveler. With a team of professionals and welcoming staff, we are all about incredible service; we will do our best to ensure an amazing safari from the start to the end as we believe no two holidays even to the same destination should have the same experience… We are keen to details and take time in understanding your travel needs offering an experience beyond expectation.
          </p>
          <div class='info-social style2'>
            <a href='https://www.facebook.com/profile.php?id=61567099386498'><i class='fab fa-facebook-f'></i></a>
            <a href='https://www.instagram.com/jargatours/'><i class='fab fa-twitter'></i></a>
            <a href='#'><i class='fab fa-instagram'></i></a>
            <a href='#'><i class='fab fa-tripadvisor'></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!--==============================
    Popup Search Box
  ============================== -->
  <div class='popup-search-box d-none d-lg-block  '>
    <button class='searchClose'><i class='fal fa-times'></i></button>
    <form action='#'>
      <input type='text' class='border-theme' placeholder='What are you looking for'>
      <button type='submit'><i class='fal fa-search'></i></button>
    </form>
  </div>

  <!--==============================
      Header Area
    ==============================-->
  <header class='vs-header header-layout4'>
    <div class='container-fluid p-0'>
      <div class='header-top'>
        <div class='row justify-content-between align-items-center'>
          <div class='col'>
            <div class='header-top__left'>
              <ul class='header-contact d-none d-lg-block'>
                <li><svg width='17' height='14' viewBox='0 0 17 14' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path fill-rule='evenodd' clip-rule='evenodd'
                      d='M4.25 0C1.90279 0 0 1.95876 0 4.375V9.625C0 12.0412 1.90279 14 4.25 14H12.75C15.0972 14 17 12.0412 17 9.625V4.375C17 1.95876 15.0972 0 12.75 0H4.25ZM4.78102 3.69174C4.41445 3.38985 3.87955 3.45104 3.58629 3.82839C3.29304 4.20575 3.35247 4.75638 3.71904 5.05826L5.84508 6.80908C7.3973 8.08736 9.60279 8.08736 11.155 6.80908L13.281 5.05826C13.6476 4.75638 13.707 4.20575 13.4138 3.82839C13.1205 3.45104 12.5856 3.38985 12.219 3.69174L10.093 5.44259C9.16173 6.20953 7.83836 6.20953 6.9071 5.44259L4.78102 3.69174Z'
                      fill='#cbcac8' />
                  </svg>
                  <a href='mailto:info@jargatours.com'>info@jargatours.com</a>
                </li>
                <li><i class='fas fa-phone-alt'></i>
                  <a href='tel:+255 741 312 874'>+255 741 312 874</a>
                </li>
              </ul>
              <div class='header-social'>
                <a href='https://www.facebook.com/profile.php?id=61567099386498'><i class='fab fa-facebook-f'></i></a>
                <a href='https://www.instagram.com/jargatours/'><i class='fab fa-instagram'></i></a>
                <a href='#'><i class='fab fa-tripadvisor'></i></a>
                <a href='#'><i class='fab fa-twitter'></i></a>
              </div>
            </div>
          </div>
          <div class='col-auto'>
            <div class='header-links'>
              <ul>
                <li><a href='#'>WhatsApp Us</a></li>
                <li><a href='../../contact-us'>Contact Us</a></li>
                <li><a href='../../about-us'>About Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
<script>
var wa_btnSetting = {'btnColor':'#16BE45','ctaText':'Hey! What can I help you?','cornerRadius':40,'marginBottom':20,'marginLeft':20,'marginRight':20,'btnPosition':'right','whatsAppNumber':'255766488533','welcomeMessage':'Want to explore Tanzania's wonders? 🌍 Let's chat! Ask me anything about safaris, Kilimanjaro climbs, or Zanzibar beaches. 🌴 Send a message and let's plan your dream adventure together','zIndex':999999,'btnColorScheme':'light'};
var wa_widgetSetting = {'title':'Mary (Customer care)','subTitle':'Typically replies in a day','headerBackgroundColor':'#b8ccc2','headerColorScheme':'dark','greetingText':'Hi there! \nHow can I help you?','ctaText':'Start Chat','btnColor':'#07a637','cornerRadius':40,'welcomeMessage':'Hello','btnColorScheme':'light','brandImage':'https://uploads-ssl.webflow.com/5f68a65cd5188c058e27c898/6204c4267b92625c9770f687_whatsapp-chat-widget-dummy-logo.png','darkHeaderColorScheme':{'title':'#333333','subTitle':'#4F4F4F'}};
window.onload = () => {
_waEmbed(wa_btnSetting, wa_widgetSetting);
};
</script>

    <div class='sticky-wrapper'>
      <div class='sticky-active'>
        <div class='header-box'>
          <div class='container-fluid position-relative z-index-common'>
            <div class='row align-items-center justify-content-between gx-50'>
              <div class='col-auto'>
                <div class='vs-logo'>
                  <a href='../../index'><img src='../../assets/img/newversion.png' alt='$title'></a>
                </div>
              </div>
              <div class='col-auto'>
                  <nav class='main-menu  menu-style1 d-none d-lg-block'>
                <ul>
                  <li><a href='../../index.php'>Home</a></li>
                  <li class='menu-item-has-children'>
                    <a href='#'>Tanzania Safari</a>
                    <ul class='sub-menu'>
<li><a href='../../tanzania-camping-safari'>Tanzania Camping Safari</a></li>  
<li><a href='../../tanzania-mid-range-safari'>Tanzania Logde Safari</a></li>
<li><a href='../../northern-tanzania-safari-packages'>Northern Tanzania Safaris</a></li>
<li><a href='../../best-tanzania-luxury-safaris'>Best Tanzania Luxury Safaris</a></li>


<li><a href='../../hot-air-balloon-safari'>Hot Air Balloon Safari</a></li>
<li><a href='../../walking-tanzania-safari'>Walking Tanzania Safari</a></li>
<li><a href='../../wildbeest-migration-safari'>Wildbeest Migration Safari</a></li>

                    </ul>
                  </li>
                  <li class='menu-item-has-children'>
                   <a href='#'>Mountain Trekking</a>
                    <ul class='sub-menu'>
<li><a href='../../why-climbing-mt-kilimanjaro'>Why Climbing Mt. Kilimanjaro</a></li>
<li><a href='../../kilimanjaro-climbing-itineraries'>Kilimanjaro Climbing Itineraries</a></li>
<li><a href='../../kilimanjaro-packing-list'>Kilimanjaro Packing List</a></li>
<li><a href='../../kilimanjaro-guides-and-porters'>Kilimanjaro Guides and Porters</a></li>
<li><a href='../../kilimanjaro-healthy-and-safety'>Kilimanjaro Healthy and Safety</a></li>
<li><a href='../../best-time-to-climb-kilimanjaro'>Best time to Climb Kilimanjaro</a></li>
<li><a href='../../mt-meru-trekking-tour'>Mount Meru CLimbing</a></li>
<li><a href='../../mt-oldonyo-lengai-trekking'>Mount Oldonyo Lengai</a></li>
<li><a href='../../usambara-mt-trekking'>Mount Usambara Trekking</a></li>
                    </ul>
                  </li>
                 <li><a href='../../zanzibar-holiday'>Zanzibar Holiday</a></li>
                
                  <li class='menu-item-has-children'>
                    <a href='#'>Day Trips</a>
                    <ul class='sub-menu'>
<li><a href='../../materuni-waterfalls-day-tour'>Materuni Waterfalls Day Tour</a></li>
<li><a href='../../arusha-national-park-day-tour'>Arusha National Park Day Tour</a></li>
<li><a href='../../tarangire-national-park-day-tour'>Tarangire National Park Day Tour</a></li>
<li><a href='../../ngorongoro-day-tour'>Ngorongoro Day Tour</a></li>
<li><a href='../../lake-manyara-day-tour'>Lake Manyara Day Tour</a></li>
<li><a href='../../kikuletwa-hot-spring-day-tour'>Kikuletwa Hot Spring Day Tour</a></li>
<li><a href='../../lake-chala-day-tour'>Lake Chala Day Tour</a></li>
<li><a href='../../maasai-village-cultural-tour'>Maasai Village Cultural Tour</a></li>

                    </ul>
                  </li>
                  
                  <li class='menu-item-has-children'>
                    <a href='#'>Our story</a>
                    <ul class='sub-menu'>
 <li><a href='../../about-us'>About Company Names</a></li>
<li><a href='../../our-booking-terms-and-conditions'>Our Bookings Terms and Conditions</a></li>
<li><a href='../../passport-and-visas-requirements'>Passport and Visas Requirements</a></li>
<li><a href='../../travel-insurance'>Travel Insurance</a></li>
                    </ul>
                  </li>
                 
                </ul>
              </nav>
                <button class='vs-menu-toggle d-inline-block d-lg-none'><i class='fal fa-bars'></i></button>
              </div>
              <div class='col-auto d-none d-xl-block'>
                <div class='header-right'>
                  <ul>
                    <li>
                      <div class='item2'>
                        <div class='item2__icon'>
                          <img src='../../assets/img/icons/phone-icon-1.svg' alt='phone icon 1'>
                        </div>
                        <div class='item2__text'>
                          <span>Phone:</span>
                          <a href='tel:+255 741 312 874'>+255 741 312 874</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class='link' href='../../contact-us' class='vs-btn style4 '>
                        GET IN TOUCH
                        <i>
                          <svg width='5' height='8' viewBox='0 0 5 8' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <path
                              d='M4.85355 4.35355C5.04882 4.15829 5.04882 3.84171 4.85355 3.64645L1.67157 0.464466C1.47631 0.269204 1.15973 0.269204 0.964466 0.464466C0.769204 0.659728 0.769204 0.976311 0.964466 1.17157L3.79289 4L0.964466 6.82843C0.769204 7.02369 0.769204 7.34027 0.964466 7.53553C1.15973 7.7308 1.47631 7.7308 1.67157 7.53553L4.85355 4.35355ZM4 4.5H4.5V3.5H4V4.5Z'
                              fill='white' />
                          </svg>
                        </i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </header>
  <!--==============================
  ********************************
  Code Start From Here 
    ******************************** -->

  <!--==============================
      Hero area Start
    ==============================-->
  <center><div class='breadcumb-wrapper' data-bg-src='../$imagePath'>
    <div class='container z-index-common'>
      <div class='breadcumb-content'>
        <h1 class='breadcumb-title'>$head1</h1>
        <div class='breadcumb-menu-wrap'>
          <ul class='breadcumb-menu'>
            <li><a href='../../index.php'>Home</a></li>
            <li><a href='https://www.jargatours.com/kilimanjaro-climbing-itineraries'>Tanzania Safaris</a></li>
        </ul>
            <div class='breadcumb-menu-wrap'>
        <a href='#6days-kili'> <div class='scroll down'></div></a>
         
        </div>
        </div>
      </div>
    </div>
  </div></center>
  <!--==============================
      Hero Area End
    ==============================-->

  <!--==============================
      Tours Booking Area Start
    ==============================-->
  <section class='space-bottom'>
  <div id='8days-safari'>
    <div class='outer-wrap'>
      <div class='filter-menu1 filter-menu-active wow fadeInUp wow-animated'>
        <button class='tab-button active' data-filter='.tab-content1'><i class='fas fa-info-circle'></i>
          Tour Overview</button>
      </div>
      <div class='container'>
        <div class='shadow-content1'>
          <div class='row'>
            <div class='col-lg-8'>
              <div class='filter-active tour-booking-active'>
                <div class='filter-item tab-content1'>
                  <div class='tour-review'>
                    <ul>
                      <li><i class='fas fa-star'></i></li>
                      <li><i class='fas fa-star'></i></li>
                      <li><i class='fas fa-star'></i></li>
                      <li><i class='fas fa-star'></i></li>
                      <li><i class='fas fa-star'></i></li>
                      <li>(Jarga Tours Review)</li>
                    </ul>
                  </div>
                  <div class='row justify-content-between align-items-center'>
                    <div class='col-md-12'>
                      <h2 class='tab-title'>$head2</h2>
                    </div>
                   
                  </div>
                    
                  <p>$overview</p><br/>

   <hr>
   <div class='tour-plan'>
    <h2 class='tab-title'>Day by Day Tour Itinerary</h2>
    <div>
        $itinerary
    </div>
                    <span class='tour-card1'>JT</span>

                  </div>

                    <br/><br/>
                   <center> 
<a href='#booking' class='vs-btn style4'>BOOK THIS TOUR</a>
         </center>
                </div>
              </div>
            </div>
            <div class='col-lg-4'>
              <div class='sidebar-area tours-sidebar'>
              <div class='widget widget-newsletter'>
              <center><h3 class='title'>Get Our Assistance For Easy Booking</h3> <button type='submit' class='vs-btn style4'>WANT US TO CALL YOU?</button>
            </center>
            </div>
                <div class='widget'>
                 <div id='booking'>
                  <h3 class='widget_title'>INQUIRE THIS TOUR</h3>
                  <p class='widget_text'>Get Customized Itineraery At Your Own Pace, Book Now.</p>
                  <form class='booking-form' action='https://www.jargatours.com/send_email_itinerary.php' method='POST' >
                   <div class='tour-listing-details__sidebar-form-input'>
                                         <input type='text' name='name' placeholder='First name*' required=''>
                                    </div><br/>
                                    <div class='tour-listing-details__sidebar-form-input'>
                                        <input type='text' name='name' placeholder='Last name*' required=''>
                                    </div><br/>
                                    
                                     <div class='tour-listing-details__sidebar-form-input'>
                                        <input type='text' name='email' placeholder='Email*' required=''>
                                    </div><br/>
                                    
                                      <div class='tour-listing-details__sidebar-form-input'>
                                        <input type='text' name='phone' placeholder='Mobile phone number*' required=''>
                                    </div><br/>
                                    
                                   
                                    <div class='tour-listing-details__sidebar-form-input'>
                                     <input type='date' id='datepicker' name='When are you planning to come*'>
                                       
                                    </div><br/>
                                     <div class='tour-listing-details__sidebar-form-input'>
                                        <input type='text' name='days' placeholder='How long do you plan to stay?' required=''>
                                    </div><br/>
                                    
                                     <div class='tour-listing-details__sidebar-form-input'>
                                        <input type='text' name='adutls' placeholder='No. of Adults' required=''>
                                    </div><br/>
                                     <div class='tour-listing-details__sidebar-form-input'>
                                        <input type='text' name='child' placeholder='No. of Children' required=''>
                                    </div><br/>
                                    
                                    <div class='tour-listing-details__sidebar-form-input'>
                                        <input type='text' name='interested' placeholder='Interested In' required=''>
                                    </div><br/>
                                    
                                    <div class='tour-listing-details__sidebar-form-input'>
                                         <textarea name='message' id='message' cols='30' rows='10' placeholder='Your Enquiry*' class='form-one__message form-one__input'></textarea>
                                         </div>
                    <div class='col-md-auto pt-lg-3'>
            <button class='vs-btn style4' type='submit'>Book Now</button>
          </div>
                  </form>
                </div>
              </div>
              </div>
                 <div class='widget widget-newsletter'>
                 <h2>Tour Inclusions & Exclusions</h2>
    <div style='display: flex; flex-wrap: wrap; gap: 20px; margin-top: 30px; font-family: Arial, sans-serif;'>
  <!-- Inclusions Box -->
  <div style='flex: 1; min-width: 300px; padding: 20px; border: 2px solid #28a745; border-radius: 8px; background-color: #f6fff6;'>
    <h3 style='color: #28a745; margin-top: 0;'>Included</h3>
    <ul style='list-style: none; padding-left: 0; line-height: 1.8;'>
      <li>✅ Park entrance fees</li>
      <li>✅ All meals during safari</li>
      <li>✅ 4x4 safari vehicle with pop-up roof</li>
      <li>✅ English-speaking guide/driver</li>
      <li>✅ Accommodation during safari</li>
      <li>✅ Bottled drinking water</li>
      <li>✅ Government taxe</li>
      <li>✅ All Airport transfers</li>
    </ul>
  </div>

  <!-- Exclusions Box -->
  <div style='flex: 1; min-width: 300px; padding: 20px; border: 2px solid #dc3545; border-radius: 8px; background-color: #fff6f6;'>
    <h3 style='color: #dc3545; margin-top: 0;'>Excluded</h3>
    <ul style='list-style: none; padding-left: 0; line-height: 1.8;'>
      <li>❌ International flights</li>
      <li>❌ Visa fees</li>
      <li>❌ Travel insurance</li>
      <li>❌ Tips to guides & porters</li>
      <li>❌ Alcoholic & soft drinks</li>
      <li>❌ Personal expenses</li>
      <li>❌ Optional activities</li></li>
    </ul>
  </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>
  <!--==============================
      Tours Booking Area End
    ==============================-->

    <!--==============================
      Footer Area
    ============================== -->
  <footer class='footer-wrapper footer-layout1 shape-mockup-wrap'>
   <div class='footer-top'>
    </div>
    <div class='widget-area2'>
      <div class='container'>
        <div class='row g-5 justify-content-between'>
          <div class='col-md-6 col-xl-3'>
            <div class='widget footer-widget'>
              <div class='vs-widget-about'>
                <div class='footer-logo'>
                <h3 class='widget_title'>JARGA TOURS</h3>
                </div>
                <p class='footer-text'>Jarga Tours delivers a high touch and personalized level of travel expertise focusing on value for money and duty of care for our customers. </p>
                <div class='social-style1'>
                  <a href='#' target='_blank'><i class='fab fa-facebook-f'></i></a>
                  <a href='#' target='_blank'><i class='fab fa-instagram'></i></a>
                  <a href='#' target='_blank'><i class='fab fa-tripadvisor'></i></a>
                  <a href='#' target='_blank'><i class='fab fa-twitter'></i></a>
                </div>
              </div>
            </div>
          </div>
          
  <!--Start of Tawk.to Script-->
<script type='text/javascript'>
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement('script'),s0=document.getElementsByTagName('script')[0];
s1.async=true;
s1.src='https://embed.tawk.to/6710e8dd2480f5b4f58ef715/1iad0rcrv';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
      
      

           <div class='col-md-6 col-xl-2'>
            <div class='widget widget_nav_menu footer-widget footer-contact'>
              <h3 class='widget_title'>GET IN TOUCH</h3>
              <div class='menu-all-pages-container'>
                <ul class='menu'>
                  <li><a href='#'><i class='fas fa-map-marker-alt'></i> 
Moshi, Kilimanjaro - Tanzania.</a></li>
                  <li><a href='#'><i class='fas fa-envelope'></i>  info@jargatours.com</a></li>
                  <li><a href='#'><i class='fas fa-phone-alt'></i> +255 741 312 874</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class='col-md-12 col-xl-2'>
            <div class='widget widget_nav_menu footer-widget'>
              <h3 class='widget_title'>USEFUL LINKS</h3>
              <div class='menu-all-pages-container'>
                <ul class='menu'>
                <li><a href='../../best-time-to-climb-kilimanjaro'><i class='far fa-angle-right'></i> Best time to Climb Kilimanjaro</a></li>
                <li><a href='../../best-time-for-safari'><i class='far fa-angle-right'></i> Best Time For Safari</a></li>
                <li><a href='../../kilimanjaro-packing-list'><i class='far fa-angle-right'></i> Kilimanjaro Packing List</a></li>
<li><a href='../../safari-packing-list'><i class='far fa-angle-right'></i> Safari Packing List</a></li>
                </ul>
              </div>
            </div>
          </div>
        
          <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
<script>
var wa_btnSetting = {'btnColor':'#364A10','ctaText':'Need Help ? Chat with us','cornerRadius':40,'marginBottom':20,'marginLeft':20,'marginRight':20,'btnPosition':'left','whatsAppNumber':'+255 741 312 874','welcomeMessage':'Hello and welcome to Jarga Tours! Thank you for reaching out. How can we assist you with your travel plans today?','zIndex':999999,'btnColorScheme':'light'};
var wa_widgetSetting = {'title':'Jarga Tours','subTitle':'Typically replies in a day','headerBackgroundColor':'#364A10','headerColorScheme':'light','greetingText':'Contact us on WhatsApp! Begin a conversation by clicking the button below.','ctaText':'Start Chat','btnColor':'#364A10','cornerRadius':40,'welcomeMessage':'Hello','btnColorScheme':'light','brandImage':'','darkHeaderColorScheme':{'title':'#333333','subTitle':'#4F4F4F'}};
window.onload = () => {
_waEmbed(wa_btnSetting, wa_widgetSetting);
};
</script>
      

         
<div class='col-md-6 col-xl-3'>
            <div class='widget footer-widget'>
              <h4 class='widget_title'>PAY SAFELY WITH US</h4>
              
<!--<a href='https://payments.pesapal.com/jargatours'> --><img src='../../assets/img/paysafe.jpg' alt='payment'  />
                </a>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='container'>
      <div class='copyright-wrap'>
        <div class='row justify-content-between align-items-center'>
          <div class='col-lg-auto'>
            <p class='copyright-text'>
  Copyright <i class='fal fa-copyright'></i>
  <script>document.write(new Date().getFullYear())</script>
  <a href='https://jargatours.com'>Jarga Tours</a>.
  All Rights Reserved |
  Developed by <a href='https://tanzaniaseospecialist.com/' target='_blank' rel='noopener'>Tanzania SEO Specialist</a>
</p>

          </div>
          <div class='col-auto d-none d-lg-block'>
            <div class='copyright-menu'>
              <ul class='list-unstyled'>
                <li><a href='#'>Privacy</a></li>
                <li><a href='#'>Terms & Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  

        <!-- ********************************
    Code Ends Here 
    ********************************* -->
  <!-- Scroll To Top -->
  <a href='#' class='scrollToTop scroll-btn'><i class='far fa-arrow-up'></i></a>
  <!-- ==============================
    All Js File
  ================================ -->
  <!-- Jquery -->
  <script src='../../assets/js/vendor/jquery-3.6.0.min.js'></script>
  <!-- Slick Slider -->
  <script src='../../assets/js/slick.min.js'></script>
  <!-- Bootstrap -->
  <script src='../../assets/js/bootstrap.min.js'></script>
  <!-- Magnific Popup -->
  <script src='../../assets/js/jquery.magnific-popup.min.js'></script>
  <!-- jquery Ui -->
  <script src='../../assets/js/jquery-ui.min.js'></script>
  <!-- Circle Progress -->
  <script src='../../assets/js/circle-progress.min.js'></script>
  <!-- isotope -->
  <script src='../../assets/js/imagesLoaded.js'></script>
  <script src='../../assets/js/isotope.js'></script>
  <!-- Wow.js -->
  <script src='../../assets/js/wow.min.js'></script>
  <!-- Main Js File -->
  <script src='../../assets/js/main.js'></script>
</body>
</html>
    ";

    file_put_contents("packages/$pageName.html", $content);

    // Redirect to index.php
    header("Location: index.php");
    exit();
}
?>
