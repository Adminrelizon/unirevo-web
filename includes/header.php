<?php
// Detect the current page so the matching navigation item is highlighted.
$currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
$currentPage = basename($currentPath ?: 'index.php');

$loanPages = [
  'personal-loan.php',
  'home-loan.php',
  'business-loan.php',
  'loan-against-property.php',
  'education-loan.php',
  'car-loan.php',
  'gold-loan.php',
];

$isHomePage = ($currentPage === '' || $currentPage === 'index.php');
$isLoanPage = in_array($currentPage, $loanPages, true);
$isCreditCardsPage = (
  strpos($currentPath, '/credit-cards/') !== false ||
  $currentPage === 'credit-cards.php'
);

function navActiveClass(bool $active): string
{
  return $active ? ' active' : '';
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($pageTitle ?? "Unirevo") ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription ?? "Financial Solutions. Simplified.") ?>">
  <meta name="theme-color" content="#103a91">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/active-nav.css" rel="stylesheet">
  <link href="assets/css/page-hero.css" rel="stylesheet">
</head>

<body>
  <header class="site-header">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php" aria-label="Unirevo home"><img src="assets/images/unirevo-logo.png"/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span></button>
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link<?= navActiveClass($isHomePage) ?>" href="index.php" <?= $isHomePage ? ' aria-current="page"' : '' ?>>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= navActiveClass($currentPage === 'about.php') ?>" href="about.php" <?= $currentPage === 'about.php' ? ' aria-current="page"' : '' ?>>About Us</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle<?= navActiveClass($isLoanPage) ?>"
                href="#products" role="button" data-bs-toggle="dropdown"
                aria-expanded="false" <?= $isLoanPage ? ' aria-current="page"' : '' ?>>Loans</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item<?= navActiveClass($currentPage === 'personal-loan.php') ?>" href="javascript:void(0);">Personal Loan</a></li>
                <li><a class="dropdown-item<?= navActiveClass($currentPage === 'home-loan.php') ?>" href="javascript:void(0);">Home Loan</a></li>
                <li><a class="dropdown-item<?= navActiveClass($currentPage === 'business-loan.php') ?>" href="javascript:void(0);">Business Loan</a></li>
                <li><a class="dropdown-item<?= navActiveClass($currentPage === 'loan-against-property.php') ?>" href="javascript:void(0);">Loan Against Property</a></li>
                <li><a class="dropdown-item<?= navActiveClass($currentPage === 'education-loan.php') ?>" href="javascript:void(0);">Education Loan</a></li>
                <li><a class="dropdown-item<?= navActiveClass($currentPage === 'car-loan.php') ?>" href="javascript:void(0);">Car Loan</a></li>
                <li><a class="dropdown-item<?= navActiveClass($currentPage === 'gold-loan.php') ?>" href="javascript:void(0);">Gold Loan</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link<?= navActiveClass($isCreditCardsPage) ?>" href="javascript:void(0);" <?= $isCreditCardsPage ? ' aria-current="page"' : '' ?>>Credit Cards</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= navActiveClass($currentPage === 'financial-tools.php') ?>" href="javascript:void(0);" <?= $currentPage === 'financial-tools.php' ? ' aria-current="page"' : '' ?>>Financial Tools</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= navActiveClass($currentPage === 'check-cibil-score.php') ?>" href="coming-soon.php" <?= $currentPage === 'check-cibil-score.php' ? ' aria-current="page"' : '' ?>>Check Cibil Score</a>
            </li>
          </ul>
          <div class="nav-actions">
            <!-- <a class="partner-nav<?= navActiveClass($currentPage === 'partner-with-us.php') ?>" href="partner-with-us.php"<?= $currentPage === 'partner-with-us.php' ? ' aria-current="page"' : '' ?>>Partner with us</a> -->
            <a class="nav-contact<?= navActiveClass($currentPage === 'contact.php') ?>" href="contact.php#contact-form" <?= $currentPage === 'contact.php' ? ' aria-current="page"' : '' ?>>Let's talk <i data-lucide="arrow-up-right"></i></a>
          </div>
        </div>
      </div>
    </nav>
  </header>