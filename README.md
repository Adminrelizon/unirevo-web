# UNIREVO Phase 1 Homepage

Core PHP homepage starter for Unirevo Business Private Limited.

## Requirements
- PHP 8.0+ (PHP 8.3+ recommended)
- Apache / XAMPP
- Internet connection for Google Fonts, Bootstrap CDN and Lucide icons

## Run with XAMPP
1. Extract the `unirevo-phase1-homepage` folder into `C:\xampp\htdocs\`.
2. Start Apache in XAMPP.
3. Open `http://localhost/unirevo-phase1-homepage/`.

Alternatively, from the project directory:
```bash
php -S localhost:8000
```
Then open `http://localhost:8000`.

## Included
- Responsive homepage in `index.php`
- Shared PHP header and footer
- Custom CSS design system
- Small JavaScript file for icons and navigation behavior
- Eight financial product cards
- Hero, benefits, process, partner, about and closing sections

## Notes
- Product and navigation links are planned destinations; create the corresponding Phase 1 pages before publishing.
- Contact details, official logo, social links and verified business information still need to be supplied.
- No bank/NBFC partnership logos or unverified claims are included.
- Enquiry forms and database integration are not implemented in this homepage starter.
- Bootstrap, IBM Plex Sans and Lucide are loaded from CDNs.

## Before publishing
- Replace `https://wa.me/` with the official WhatsApp Business number in international format (digits only).
- Replace placeholder social profile links in `includes/footer.php` with official Unirevo URLs.
- Do not publish placeholder review cards as testimonials. Replace them only with genuine customer feedback and permission.
- Add and test the linked product, contact, partner and financial-tools pages before launch.

## Visual assets
- Related-service and partner imagery uses remote Unsplash-hosted image URLs as free stock-photo references. Internet access is required; for production, download optimized copies and keep attribution/license records as required by the source terms.
- Bootstrap Icons are loaded from jsDelivr CDN for crisp social and WhatsApp glyphs.
- Replace the placeholder social profile URLs and WhatsApp number before launch.


## Shared layout and EMI calculator
- All current pages include the shared `includes/header.php` and `includes/footer.php` files.
- EMI calculator: `financial-tools.php` (client-side estimate only; no loan application is submitted).
- A welcome modal is included globally in the shared footer and appears after 5 seconds once per browser session. It links to products and Contact Us.

- Global floating EMI calculator, WhatsApp and back-to-top controls are included through the shared footer.
- About Us includes a designed Founder feature placeholder. Replace its abstract portrait with the official founder photograph and add approved name/bio when supplied.
- Site typography baseline is set to 16px / 400 weight for body copy and form controls.
