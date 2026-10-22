<?php
session_start();
if (empty($_SESSION['booking_csrf'])) $_SESSION['booking_csrf'] = bin2hex(random_bytes(32));
$statusMessage = '';
$statusType = '';
$old = [];
function jbField(string $key, int $limit=255): string {
    $v = $_POST[$key] ?? '';
    return is_string($v) ? mb_substr(trim($v), 0, $limit) : '';
}
function jbEscape(string $v): string { return htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['jarga_booking_submit'])) {
    $old = $_POST;
    $token = (string)($_POST['csrf_token'] ?? '');
    $name = jbField('full_name',120);
    $email = jbField('email',190);
    $date = jbField('travel_date',10);
    $days = filter_var($_POST['days'] ?? null, FILTER_VALIDATE_INT, ['options'=>['min_range'=>1,'max_range'=>45]]);
    $adults = filter_var($_POST['adults'] ?? null, FILTER_VALIDATE_INT, ['options'=>['min_range'=>1,'max_range'=>100]]);
    $children = filter_var($_POST['children'] ?? '0', FILTER_VALIDATE_INT, ['options'=>['min_range'=>0,'max_range'=>100]]);
    $d = DateTimeImmutable::createFromFormat('!Y-m-d', $date);
    $validDate = $d && $d->format('Y-m-d') === $date && $d >= new DateTimeImmutable('today');
    if (!hash_equals($_SESSION['booking_csrf'], $token)) {
        $statusMessage = 'Your session expired. Refresh the page and try again.';
        $statusType = 'error';
    } elseif (jbField('website') !== '') {
        $statusMessage = 'Thank you for your enquiry.';
        $statusType = 'success';
    } elseif ($name === '' || !filter_var($email,FILTER_VALIDATE_EMAIL) || !$validDate || $days === false || $adults === false || $children === false) {
        $statusMessage = 'Please check your name, email, travel date and traveller details.';
        $statusType = 'error';
    } elseif (preg_match('/[\r\n]/', $name.$email)) {
        $statusMessage = 'Please check your name and email address.';
        $statusType = 'error';
    } else {
        $fields = [
          'Full name'=>$name,
          'Email address'=>$email,
          'WhatsApp / phone'=>jbField('phone',35),
          'Country'=>jbField('country',100),
          'Preferred travel date'=>$date,
          'Number of days'=>(string)$days,
          'Number of adults'=>(string)$adults,
          'Number of children'=>(string)$children,
          'Preferred package'=>jbField('package',120),
          'Accommodation level'=>jbField('accommodation',120),
          'Starting point'=>jbField('starting_point',120),
          'Estimated budget per person'=>jbField('budget',120),
          'Zanzibar extension'=>jbField('zanzibar',120),
          'Special requests'=>jbField('message',4000)
        ];
        $rows = '';
        foreach ($fields as $label=>$value) {
            $rows .= '<tr><th style="text-align:left;padding:11px;border:1px solid #ddd;background:#f7f8f4">'.jbEscape($label).'</th><td style="padding:11px;border:1px solid #ddd">'.nl2br(jbEscape($value === '' ? 'Not provided' : $value)).'</td></tr>';
        }
        $body = '<html><body style="font-family:Arial,sans-serif;color:#333"><h2 style="color:#364A10">New Jarga Tours Booking Enquiry</h2><table style="border-collapse:collapse;width:100%;max-width:760px">'.$rows.'</table></body></html>';
        $headers = [
          'MIME-Version: 1.0',
          'Content-type: text/html; charset=UTF-8',
          'From: Jarga Tours <info@jargatours.com>',
          'Reply-To: '.$email
        ];
        // The domain jargatours.com is not itself a mailbox.
        $to = 'info@jargatours.com, bensonnyamataga@gmail.com';
        $sent = mail($to, 'New Booking Enquiry - Jarga Tours', $body, implode("\r\n",$headers), '-finfo@jargatours.com');
        if ($sent) {
            $_SESSION['booking_flash'] = 'Your booking enquiry has been submitted. Our team will contact you soon.';
            $_SESSION['booking_csrf'] = bin2hex(random_bytes(32));
            header('Location: '.strtok($_SERVER['REQUEST_URI'], '?').'?sent=1#booking-enquiry',true,303);
            exit;
        }
        $statusMessage = 'We could not send your enquiry. Please try again or contact info@jargatours.com.';
        $statusType = 'error';
    }
}
if (isset($_GET['sent']) && $_GET['sent']==='1' && isset($_SESSION['booking_flash'])) {
    $statusMessage = $_SESSION['booking_flash'];
    $statusType = 'success';
    unset($_SESSION['booking_flash']);
}
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Booking Enquiry | Jarga Tours Tanzania</title><meta name="description" content="Enquire about private Tanzania safaris, Kilimanjaro climbs and Zanzibar holidays with Jarga Tours.">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap.min.css"><link rel="stylesheet" href="assets/css/fontawesome.min.css"><link rel="stylesheet" href="assets/css/magnific-popup.min.css"><link rel="stylesheet" href="assets/css/slick.min.css"><link rel="stylesheet" href="assets/css/style.css">

<style>
:root{--title-font:"Jost",sans-serif;--body-font:"Jost",sans-serif;--theme-color:#364A10;--title-color:#1c1c1c;--body-color:#505050}
.jb-page{font-family:var(--body-font);background:#f8f8f5;padding:75px 0 85px;color:#193a2c}
.jb-page *{box-sizing:border-box}
.jb-shell{max-width:1140px;margin:auto;padding:0 20px}
.jb-head{text-align:center;max-width:820px;margin:0 auto 35px}
.jb-kicker{color:#364A10;text-transform:uppercase;letter-spacing:2px;font-weight:700;font-size:13px}
.jb-head h1{font-family:var(--title-font)!important;font-size:clamp(32px,4vw,49px);font-weight:700;color:#1c1c1c!important;margin:14px 0}
.jb-head p{font-size:17px;line-height:1.7;color:#505050}
.jb-card{background:#fff;border:1px solid #e0e6df;border-radius:22px;padding:clamp(22px,4vw,48px);box-shadow:0 16px 45px rgba(25,45,22,.08)}
.jb-card h2{font-family:var(--title-font)!important;color:#193a2c!important;font-weight:700;font-size:clamp(26px,3vw,37px);margin:0 0 6px}
.jb-help{color:#64716b;margin:0 0 29px;font-size:15px}
.jb-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:23px 25px}
.jb-field{display:flex;flex-direction:column;gap:9px;min-width:0}
.jb-field.jb-full{grid-column:1/-1}
.jb-field label{font-size:15px;font-weight:700;color:#193a2c}
.jb-field input,.jb-field select,.jb-field textarea{width:100%;min-height:57px;padding:14px 17px;border:1px solid #cbd5cf;border-radius:12px;background:#fff;color:#21352c;font:400 16px/1.5 var(--body-font)!important;outline:none;box-shadow:none}
.jb-field textarea{min-height:148px;resize:vertical}
.jb-field input:focus,.jb-field select:focus,.jb-field textarea:focus{border-color:#364A10;box-shadow:0 0 0 3px rgba(54,74,16,.12)}
.jb-submit{border:0;border-radius:11px;padding:17px 30px;background:#364A10;color:#fff;font:700 16px var(--body-font);cursor:pointer}
.jb-submit:hover{background:#263A08}
.jb-actions{margin-top:30px;display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap}
.jb-note{font-size:13px;color:#65746a;max-width:520px}
.jb-alert{padding:17px 20px;border-radius:10px;margin-bottom:25px;font-weight:600}
.jb-success{background:#edf6e8;border:1px solid #9dc98c;color:#244a1b}
.jb-error{background:#fff1ef;border:1px solid #efb8af;color:#792d24}
.jb-hp{position:absolute;left:-10000px;opacity:0}
@media(max-width:700px){.jb-page{padding:45px 0 65px}.jb-grid{grid-template-columns:1fr;gap:18px}.jb-field.jb-full{grid-column:auto}.jb-submit{width:100%}}
</style></head><body><?php include 'plugins/header.php'; ?>

<section class="jb-page" id="booking-enquiry">
<div class="jb-shell">
<div class="jb-head"><span class="jb-kicker">Jarga Tours • Tailor-Made Tanzania Travel</span><h1>Plan Your Tanzania Adventure</h1><p>Tell our local specialists about your safari, Kilimanjaro climb, or Zanzibar holiday. We will prepare a personalized quotation based on your travel plans.</p></div>
<div class="jb-card">
<h2>Booking enquiry details</h2><p class="jb-help">Fields marked with * are required. Submitting this enquiry does not confirm a booking or take payment.</p>
<?php if ($statusMessage !== ''): ?><div class="jb-alert <?= $statusType === 'success' ? 'jb-success' : 'jb-error' ?>" role="status"><?= jbEscape($statusMessage) ?></div><?php endif; ?>
<form action="" method="post" accept-charset="UTF-8" id="jarga-booking-form">
<input type="hidden" name="jarga_booking_submit" value="1"><input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['booking_csrf'], ENT_QUOTES, 'UTF-8') ?>">
<div class="jb-hp" aria-hidden="true"><label>Leave this field blank <input name="website" tabindex="-1" autocomplete="off"></label></div>
<div class="jb-grid">
<div class="jb-field"><label for="jb-name">Full name *</label><input id="jb-name" name="full_name" type="text" autocomplete="name" maxlength="120" required value="<?= jbEscape((string)($old['full_name'] ?? '')) ?>"></div>
<div class="jb-field"><label for="jb-email">Email address *</label><input id="jb-email" name="email" type="email" autocomplete="email" maxlength="190" required value="<?= jbEscape((string)($old['email'] ?? '')) ?>"></div>
<div class="jb-field"><label for="jb-phone">WhatsApp or phone number</label><input id="jb-phone" name="phone" type="tel" autocomplete="tel" maxlength="35" placeholder="+country code" value="<?= jbEscape((string)($old['phone'] ?? '')) ?>"></div>
<div class="jb-field"><label for="jb-country">Country</label><input id="jb-country" name="country" type="text" autocomplete="country-name" maxlength="100" value="<?= jbEscape((string)($old['country'] ?? '')) ?>"></div>
<div class="jb-field"><label for="jb-date">Preferred travel date *</label><input id="jb-date" name="travel_date" type="date" required min="<?= date('Y-m-d') ?>" value="<?= jbEscape((string)($old['travel_date'] ?? '')) ?>"></div>
<div class="jb-field"><label for="jb-days">Number of safari / travel days *</label><input id="jb-days" name="days" type="number" min="1" max="45" required value="<?= jbEscape((string)($old['days'] ?? '7')) ?>"></div>
<div class="jb-field"><label for="jb-adults">Number of adults *</label><input id="jb-adults" name="adults" type="number" min="1" max="100" required value="<?= jbEscape((string)($old['adults'] ?? '2')) ?>"></div>
<div class="jb-field"><label for="jb-children">Number of children</label><input id="jb-children" name="children" type="number" min="0" max="100" value="<?= jbEscape((string)($old['children'] ?? '0')) ?>"></div>
<div class="jb-field jb-full"><label for="jb-package">Preferred package</label><select id="jb-package" name="package"><option value="">Select a package</option><option>Tanzania Wildlife Safari</option><option>Tanzania Family Safari</option><option>Serengeti Wildebeest Migration Safari</option><option>Luxury Tanzania Safari</option><option>Budget / Camping Safari</option><option>Kilimanjaro Climbing</option><option>Zanzibar Beach Holiday</option><option>Safari and Zanzibar</option><option>Kilimanjaro and Safari</option><option>Day Trip</option><option>Custom / Not Sure Yet</option></select></div>
<div class="jb-field"><label for="jb-accommodation">Accommodation level</label><select id="jb-accommodation" name="accommodation"><option value="">Select accommodation</option><option>Budget / Camping</option><option>Mid-Range Lodge / Tented Camp</option><option>Luxury Lodge / Camp</option><option>Premium / Ultra Luxury</option><option>Not Sure Yet</option></select></div>
<div class="jb-field"><label for="jb-start">Starting point</label><select id="jb-start" name="starting_point"><option value="">Select starting point</option><option>Kilimanjaro International Airport (JRO)</option><option>Arusha</option><option>Moshi</option><option>Dar es Salaam</option><option>Zanzibar</option><option>Other / Not Sure</option></select></div>
<div class="jb-field"><label for="jb-budget">Estimated budget per person (USD)</label><select id="jb-budget" name="budget"><option value="">Select budget</option><option>Under $1,000</option><option>$1,000–$2,000</option><option>$2,000–$3,500</option><option>$3,500–$5,000</option><option>Over $5,000</option><option>Flexible / Need Advice</option></select></div>
<div class="jb-field"><label for="jb-zanzibar">Zanzibar extension</label><select id="jb-zanzibar" name="zanzibar"><option value="">Select preference</option><option>Yes</option><option>No</option><option>Maybe / Need Advice</option></select></div>
<div class="jb-field jb-full"><label for="jb-message">Special requests</label><textarea id="jb-message" name="message" maxlength="4000" placeholder="Tell us about your preferred parks, flights, dietary requirements, children's ages, accessibility needs or special occasions."></textarea></div>
</div>
<div class="jb-actions"><span class="jb-note">Your details will be used to respond to your travel enquiry. Please do not include passport numbers or payment card information.</span><button class="jb-submit" type="submit">Send Booking Enquiry →</button></div>
</form></div></div></section>

<?php include 'plugins/footer.php'; ?>
<a href="#" class="scrollToTop scroll-btn" aria-label="Back to top"><i class="far fa-arrow-up"></i></a>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script><script src="assets/js/slick.min.js"></script><script src="assets/js/bootstrap.min.js"></script><script src="assets/js/jquery.magnific-popup.min.js"></script><script src="assets/js/jquery-ui.min.js"></script><script src="assets/js/circle-progress.min.js"></script><script src="assets/js/imagesLoaded.js"></script><script src="assets/js/isotope.js"></script><script src="assets/js/wow.min.js"></script><script src="assets/js/main.js"></script>
</body></html>
