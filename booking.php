<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>BOOKING FORM</title>
  <meta name="description" content="BOOKING FORM " name="keywords">

  <meta name="robots" content="INDEX,FOLLOW">
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicons - Place favicon.ico in the root directory -->
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <!--==============================
	  Google Fonts
	============================== -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <!--==============================
	    All CSS File
	============================== -->
  <!-- Bootstrap -->
  <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Fontawesome Icon -->
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
  <!-- Slick Slider -->
  <link rel="stylesheet" href="assets/css/slick.min.css">
  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include 'plugins/header.php';?>

  <!--********************************
  Code Start From Here 
	******************************** -->
<center><div class="breadcumb-wrapper" data-bg-src="assets/img/elephant-tanzania.jpg">
    <div class="container z-index-common">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">BOOK YOUR DREAM TOUR</h1>
        <div class="breadcumb-menu-wrap">
          <ul class="breadcumb-menu">
            <li><a href="index">Home</a></li>
            
            <li>Book with us</li>
          </ul>
            <div class="breadcumb-menu-wrap">
        <a href="#8days-safari"> <div class="scroll down"></div></a>
         
        </div>
        </div>
      </div>
    </div>
  </div></center>


  <!--==============================
	  Tours Booking Area Start
	==============================-->
  <section class="space-bottom">
  <div id="8days-safari">
    <div class="outer-wrap">
      <div class="filter-menu1 filter-menu-active wow fadeInUp wow-animated">
        <button class="tab-button active" data-filter=".tab-content1"><i class="fas fa-info-circle"></i>
        Jarga Tours</button>
      </div>
      <div class="container">
        <div class="shadow-content1">
          <div class="row">
            <div class="col-lg-8">
              <div class="filter-active tour-booking-active">
                <div class="filter-item tab-content1">
                
<style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .booking-form {
          font-family: Arial, sans-serif;
            background-color: #f3f8fc;
            justify-content: center;

            max-width: 950px;
            width: 100%;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            display: grid;
            gap: 20px;
            grid-template-columns: 1fr 1fr;
            grid-template-areas:
                "title title"
                "personal personal"
                "booking booking"
                "accommodation travel"
                "special payment"
                "additional agreement"
                "button button";
        }
        .booking-form h2 {
            grid-area: title;
            font-size: 24px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .booking-form h3 {
            color: saddlebrown;
            margin-bottom: 1%;
        }
        .form-section {
            padding: 10px 0;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="number"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 15px;
            margin-bottom: 10px;
            background-color: #f7f9fc;
        }
        input[type="checkbox"] {
            margin-right: 8px;
        }
        .submit-button {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            grid-area: button;
        }
        .submit-button:hover {
            background-color: #0056b3;
        }
        .form-section.personal-info { grid-area: personal; }
        .form-section.booking-details { grid-area: booking; }
        .form-section.accommodation-preferences { grid-area: accommodation; }
        .form-section.travel-details { grid-area: travel; }
        .form-section.special-requirements { grid-area: special; }
        .form-section.payment-info { grid-area: payment; }
        .form-section.additional-details { grid-area: additional; }
        .form-section.agreement-confirmation { grid-area: agreement; }
        
        @media (max-width: 768px) {
            .booking-form {
                grid-template-columns: 1fr;
                grid-template-areas:
                    "title"
                    "personal"
                    "booking"
                    "accommodation"
                    "travel"
                    "special"
                    "payment"
                    "additional"
                    "agreement"
                    "button";
            }
        }
    </style>
<form action="send_email.php" method="POST">
<div class="booking-form">
    <h2>"Booking Form - Feel Free to Book With Jarga Tours!"</h2>
    
    <!-- Personal Information Section -->
    <div class="form-section personal-info">
        <h3>Basic Personal Information</h3>
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" required>
    </div>

    <!-- Booking Details Section -->
    <div class="form-section booking-details">
        <h3>Booking Details</h3>
        <label for="destination">Destination or Tour Package</label>
        <select id="destination" name="destination" required>
            <option value="">Select Package</option>
            <option value="safari">Safari Tour</option>
            <option value="beach">Beach Getaway</option>
            <option value="city">City Tour</option>
        </select>

        <label for="adults">Number of Adults</label>
        <input type="number" id="adults" name="adults" min="1" required>

        <label for="children">Number of Children</label>
        <input type="number" id="children" name="children" min="0">
        
        <label for="start-date">Preferred Start Date</label>
        <input type="date" id="start-date" name="start-date" required>

        <label for="end-date">Preferred End Date</label>
        <input type="date" id="end-date" name="end-date">
    </div>

    <!-- Accommodation Preferences -->
    <div class="form-section accommodation-preferences">
        <h3>Accommodation Preferences</h3>
        <label for="accommodation">Accommodation Type</label>
        <select id="accommodation" name="accommodation">
            <option value="standard">Standard</option>
            <option value="luxury">Luxury</option>
            <option value="budget">Budget</option>
        </select>
    </div>

    <!-- Travel Details -->
    <div class="form-section travel-details">
        <h3>Travel Details</h3>
        <label for="pickup">Airport Pickup Required?</label>
        <select id="pickup" name="pickup">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>

    <!-- Special Requirements -->
    <div class="form-section special-requirements">
        <h3>Special Requirements</h3>
        <label for="dietary">Dietary Restrictions</label>
        <input type="text" id="dietary" name="dietary">

        <label for="special-requests">Special Requests</label>
        <textarea id="special-requests" name="special-requests"></textarea>
    </div>

    <!-- Payment Information -->
    <div class="form-section payment-info">
        <h3>Payment Information</h3>
        <label for="payment">Payment Method</label>
        <select id="payment" name="payment" required>
            <option value="credit-card">Credit Card</option>
            <option value="paypal">PayPal</option>
            <option value="bank-transfer">Bank Transfer</option>
        </select>
    </div>

    <!-- Additional Details -->
    <div class="form-section additional-details">
        <h3>Additional Details</h3>
        <label for="contact-method">Preferred Contact Method</label>
        <select id="contact-method" name="contact-method">
            <option value="email">Email</option>
            <option value="phone">Phone</option>
            <option value="whatsapp">WhatsApp</option>
        </select>
    </div>

    <!-- Agreement and Confirmation
    <div class="form-section agreement-confirmation">
        <h3>Agreement and Confirmation</h3>
        <div class="checkbox-group">
            <label><input type="checkbox" required> I agree to the Terms and Conditions</label>
            <label><input type="checkbox" required> I agree to the Privacy Policy</label>
            <label><input type="checkbox"> Subscribe to Newsletter</label>
        </div>
    </div>-->

    <button type="submit" class="submit-button">Submit Booking</button>

</div>
</form>




                <br/>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sidebar-area tours-sidebar">
              <div class="widget widget-newsletter">
              <center><h3 class="title">Get Our Assistance For Easy Booking</h3> <button type="submit" class="vs-btn style4">WANT US TO CALL YOU?</button>
            </center>
            </div>
                <div class="widget">
                 
              </div>
              </div>
                 <div class="widget widget-safari-tips">
    <h3 class="title">Essential Safari Tips</h3>
    <ul class="tp-list">
        <li><strong>Choose the Right Season:</strong> Plan your safari according to the season, as wildlife viewing changes throughout the year.</li>
        <li><strong>Pack Light, Pack Right:</strong> Bring essential items such as comfortable clothing, insect repellent, a hat, sunscreen, and a reusable water bottle.</li>
        <li><strong>Stay Hydrated:</strong> Safaris can be hot and dry, so drink plenty of water to stay refreshed.</li>
        <li><strong>Respect Wildlife:</strong> Observe animals from a distance without disturbing their natural habitat.</li>
        <li><strong>Bring Binoculars:</strong> For a closer look at wildlife, especially birds and animals far from the vehicle.</li>
        <li><strong>Capture Moments:</strong> Bring a good-quality camera, spare batteries, and ample memory to capture every exciting moment.</li>
        <li><strong>Be Prepared for Early Mornings:</strong> Some of the best wildlife sightings happen early in the day, so prepare for morning drives.</li>
        <li><strong>Follow Safety Guidelines:</strong> Listen to your guide’s instructions, especially when in close proximity to wildlife.</li>
    </ul>
    <br/>

    <h3 class="title">Additional Safari Advice</h3>
    <ul class="tp-list">
        <li><strong>Bring Layers:</strong> Temperatures can fluctuate greatly, so wear layered clothing to adjust accordingly.</li>
        <li><strong>Charge Electronics:</strong> Bring portable chargers or battery packs, as power sources may be limited in remote areas.</li>
        <li><strong>Respect Local Culture:</strong> Be mindful of local customs, ask before photographing people, and learn a few Swahili phrases to connect with locals.</li>
        <li><strong>Carry Cash:</strong> Have some cash for tips, souvenirs, or emergencies, as ATMs may not be available in remote areas.</li>
        <li><strong>Travel Insurance:</strong> Make sure your insurance covers safari activities, including medical evacuation in case of emergencies.</li>
    </ul>
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

  <?php include 'plugins/footer.php';?>
  <!-- ********************************
    Code Ends Here 
	********************************* -->
  <!-- Scroll To Top -->
  <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
  <!-- ==============================
    All Js File
  ================================ -->
  <!-- Jquery -->
  <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
  <!-- Slick Slider -->
  <script src="assets/js/slick.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- Magnific Popup -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- jquery Ui -->
  <script src="assets/js/jquery-ui.min.js"></script>
  <!-- Circle Progress -->
  <script src="assets/js/circle-progress.min.js"></script>
  <!-- isotope -->
  <script src="assets/js/imagesLoaded.js"></script>
  <script src="assets/js/isotope.js"></script>
  <!-- Wow.js -->
  <script src="assets/js/wow.min.js"></script>
  <!-- Main Js File -->
  <script src="assets/js/main.js"></script>
</body>
</html>