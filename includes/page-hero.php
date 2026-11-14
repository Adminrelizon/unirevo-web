<?php
/**
 * Reusable inner-page hero.
 *
 * Set these variables before including this file:
 * $pageHeroTitle       (required)
 * $pageHeroDescription (optional)
 * $pageHeroEyebrow     (optional)
 * $pageHeroIcon        (optional Bootstrap Icon class)
 * $pageHeroBreadcrumbs (optional array: [['label' => 'Home', 'url' => 'index.php'], ...])
 */

$pageHeroTitle = $pageHeroTitle ?? 'Page Title';
$pageHeroDescription = $pageHeroDescription ?? '';
$pageHeroEyebrow = $pageHeroEyebrow ?? 'EXPLORE UNIREVO';
$pageHeroIcon = $pageHeroIcon ?? 'bi-stars';
$pageHeroBreadcrumbs = $pageHeroBreadcrumbs ?? [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => $pageHeroTitle, 'url' => null],
];
?>

<section class="page-hero">
    <div class="page-hero-orb page-hero-orb-one"></div>
    <div class="page-hero-orb page-hero-orb-two"></div>
    <div class="container page-hero-container">
        <div class="page-hero-content">
            <div class="page-hero-eyebrow">
                <span class="page-hero-eyebrow-icon"><i class="bi <?= htmlspecialchars($pageHeroIcon) ?>"></i></span>
                <?= htmlspecialchars($pageHeroEyebrow) ?>
            </div>

            <h1><?= htmlspecialchars($pageHeroTitle) ?></h1>

            <?php if ($pageHeroDescription !== ''): ?>
                <p class="page-hero-description"><?= htmlspecialchars($pageHeroDescription) ?></p>
            <?php endif; ?>

            <nav class="page-hero-breadcrumb" aria-label="Breadcrumb">
                <ol>
                    <?php foreach ($pageHeroBreadcrumbs as $index => $crumb): ?>
                        <li>
                            <?php if (!empty($crumb['url']) && $index !== array_key_last($pageHeroBreadcrumbs)): ?>
                                <a href="<?= htmlspecialchars($crumb['url']) ?>"><?= htmlspecialchars($crumb['label']) ?></a>
                            <?php else: ?>
                                <span aria-current="page"><?= htmlspecialchars($crumb['label']) ?></span>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </nav>
        </div>

        <div class="page-hero-visual" aria-hidden="true">
            <div class="page-hero-visual-glow"></div>
            <div class="page-hero-visual-card page-hero-card-back">
                <span></span><span></span><span></span>
            </div>
            <div class="page-hero-visual-card page-hero-card-front">
                <div class="page-hero-card-top"><span>UNIREVO</span><i class="bi bi-stars"></i></div>
                <div class="page-hero-card-icon"><i class="bi <?= htmlspecialchars($pageHeroIcon) ?>"></i></div>
                <div class="page-hero-card-bottom">Financial Solutions.<strong>Simplified.</strong></div>
            </div>
            <span class="page-hero-float page-hero-float-one"><i class="bi bi-check2-circle"></i></span>
            <span class="page-hero-float page-hero-float-two"><i class="bi bi-lightning-charge"></i></span>
        </div>
    </div>
    <div class="page-hero-bottom-wave"></div>
</section>
