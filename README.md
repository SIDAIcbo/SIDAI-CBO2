# SIDAI CBO Secure Donation System

This is a PHP 8+ donation site using PesaPal API 3.0 hosted checkout. PesaPal's current API flow authenticates with a short-lived bearer token, submits the order, redirects the donor to a secure payment page, then uses callback/IPN plus GetTransactionStatus to verify the result.

## Files
- `index.php` — donation form
- `assets/css/donation.css` — design
- `assets/js/donation.js` — form validation and secure checkout handoff
- `api/create_order.php` — server-side payment creation
- `api/pesapal_status.php` — server-side status verification
- `payment/callback.php` — donor return page and status check
- `payment/ipn.php` — server-to-server status notification endpoint
- `payment/register_ipn.php` — one-time IPN registration helper
- `config/config.php` — credentials and URLs
- `data/` — SQLite transaction database

## Setup
1. Put the project on an HTTPS PHP 8+ server with cURL and PDO_SQLite enabled.
2. In `config/config.php`, add your PesaPal consumer key and consumer secret.
3. Replace `YOUR-DOMAIN.example` with the real HTTPS domain.
4. Set `environment` to `sandbox` while testing.
5. Make the public IPN URL available at `/payment/ipn.php`.
6. Open `/payment/register_ipn.php` once. It returns the PesaPal `ipn_id`. Put that value into `notification_id` in `config/config.php`.
7. Test donations in sandbox.
8. After testing, change `environment` to `live` and replace credentials with live credentials.

## Receiving funds
The PesaPal merchant/payment account must be configured with SIDAI CBO's approved settlement/beneficiary arrangement. The website cannot send money to an ordinary bank account merely by knowing an account number.

## Security
The donor does NOT enter card PIN, CVV, online-banking password or full bank credentials into this website. Payment credentials are handled by the payment provider's secure checkout. Use HTTPS, keep `config.php` private, restrict write access to `data/`, and do not expose database files publicly.

## Currency
The form accepts KES and USD. Actual available currencies/payment methods and settlement options are determined by the configured payment provider account.
