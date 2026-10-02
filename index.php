<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Donate | SIDAI CBO</title><meta name="description" content="Support SIDAI CBO through a secure online donation.">
<link rel="stylesheet" href="assets/css/donation.css">
</head>
<body>
<section class="hero"><div class="hero-inner"><span class="eyebrow">SUPPORT SIDAI CBO</span><h1>Make a Difference Today</h1><p>Your contribution supports disability inclusion, awareness, community support and efforts to address malnutrition.</p></div></section>
<main class="donation-wrap">
<section class="card">
<div class="card-head"><div class="heart">♥</div><div><h2>Make a Donation</h2><p>Choose your currency, enter any amount, and continue to secure payment.</p></div></div>
<form id="donationForm" novalidate>
<div class="grid two">
<div class="field"><label for="firstName">First name *</label><input id="firstName" name="first_name" autocomplete="given-name" required></div>
<div class="field"><label for="lastName">Last name *</label><input id="lastName" name="last_name" autocomplete="family-name" required></div>
</div>
<div class="grid two">
<div class="field"><label for="email">Email *</label><input id="email" type="email" name="email" autocomplete="email" required></div>
<div class="field"><label for="phone">Phone number</label><input id="phone" name="phone" autocomplete="tel" placeholder="e.g. +254 7xx xxx xxx"></div>
</div>
<div class="grid two">
<div class="field"><label for="country">Country</label><input id="country" name="country" autocomplete="country-name" placeholder="Kenya"></div>
<div class="field"><label for="currency">Currency *</label><select id="currency" name="currency"><option value="KES">KES — Kenyan Shilling</option><option value="USD">USD — US Dollar</option></select></div>
</div>
<div class="field"><label for="amount">Donation amount *</label><div class="amount"><span id="currencySymbol">KES</span><input id="amount" name="amount" type="number" min="1" step="0.01" placeholder="Enter any amount" required></div><small id="amountHint">Enter the amount you wish to donate.</small></div>
<div class="field"><label for="message">Message (optional)</label><textarea id="message" name="message" rows="3" maxlength="500" placeholder="Leave a message for SIDAI CBO"></textarea></div>
<div class="destination"><div><span>Donation beneficiary</span><strong>SIDAI CBO</strong></div><div><span>Account number</span><strong>1354195051</strong></div></div>
<div class="notice"><strong>Secure payment:</strong> Your card, mobile-money or other payment credentials are entered on the payment provider's secure page. Do not enter a PIN, CVV, online-banking password or full card details into this website.</div>
<div id="formError" class="error" role="alert" hidden></div>
<button id="donateBtn" class="donate-btn" type="submit">Continue to Secure Payment <span>→</span></button>
<p class="terms">By continuing, you agree that your donation information may be processed for payment confirmation and donor communication.</p>
</form>
</section>
<aside class="info"><h3>Why your support matters</h3><p>Your generosity helps SIDAI CBO strengthen awareness, inclusion and community support for vulnerable people.</p><div class="pill">♥ Every contribution matters</div><div class="account"><span>SIDAI CBO</span><b>1354195051</b></div></aside>
</main>
<footer>© <?php echo date('Y'); ?> SIDAI CBO. All rights reserved.</footer>
<script src="assets/js/donation.js"></script>
</body></html>
