<?php
$pageTitle = "Coming Soon | Unirevo";
$homeUrl = "index.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Unirevo is preparing something better. This page will be available soon.">
    <meta name="theme-color" content="#103a91">
    <title><?= htmlspecialchars($pageTitle) ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/coming-soon.css">
</head>
<body>
    <main class="coming-page">
        <div class="ambient ambient-blue" aria-hidden="true"></div>
        <div class="ambient ambient-violet" aria-hidden="true"></div>

        <div class="coming-shell">
            <a class="brand" href="<?= htmlspecialchars($homeUrl) ?>" aria-label="Unirevo home">
                <img src="assets/images/unirevo-logo.png" style="height: 60px;" />
            </a>

            <section class="coming-layout">
                <div class="coming-copy">
                    <div class="eyebrow"><span class="eyebrow-dot"></span> UNDER CONSTRUCTION</div>
                    <h1>Coming <span>soon.</span></h1>
                    <p class="coming-description">
                        We're working on something better for you.
                        This page is getting ready to make your financial journey simpler.
                    </p>

                    <a class="home-button" href="<?= htmlspecialchars($homeUrl) ?>">
                        <i class="bi bi-house-door-fill" aria-hidden="true"></i>
                        Back to Home
                        <i class="bi bi-arrow-up-right button-arrow" aria-hidden="true"></i>
                    </a>

                    <div class="trust-note">
                        <i class="bi bi-shield-check" aria-hidden="true"></i>
                        <span>Financial Solutions. Simplified.</span>
                    </div>
                </div>

                <div class="coming-visual" role="img" aria-label="Abstract 3D financial cards illustration">
                    <div class="visual-glow"></div>
                    <div class="visual-orbit orbit-one"></div>
                    <div class="visual-orbit orbit-two"></div>

                    <div class="back-card">
                        <div class="back-card-line line-one"></div>
                        <div class="back-card-line line-two"></div>
                        <div class="back-card-chip"></div>
                    </div>

                    <div class="main-card">
                        <div class="main-card-head">
                            <span>UNIREVO</span>
                            <i class="bi bi-stars"></i>
                        </div>
                        <div class="main-card-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <div class="main-card-foot">
                            <span>A CLEARER PATH FORWARD</span>
                            <strong>Explore what's possible.</strong>
                        </div>
                        <div class="card-accent"><i></i><i></i></div>
                    </div>

                    <div class="float-icon float-wallet"><i class="bi bi-wallet2"></i></div>
                    <div class="float-icon float-check"><i class="bi bi-check-lg"></i></div>
                    <div class="visual-caption"><span></span> A better experience is on its way</div>
                </div>
            </section>

            <div class="bottom-line">
                <span>UNIREVO</span>
                <span>Financial Solutions. Simplified.</span>
            </div>
        </div>
    </main>
</body>
</html>
