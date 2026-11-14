<?php
$pageTitle = "Unirevo | Financial Solutions. Simplified.";
$pageDescription = "Explore financial products, discover suitable options and connect with participating banks and NBFCs through Unirevo.";
require __DIR__ . "/includes/header.php";
?>
<main>
  <section class="hero-section">
    <div class="container hero-wrap">
      <div class="hero-copy">
        <span class="eyebrow"><span class="eyebrow-dot"></span> FINANCIAL SOLUTIONS. SIMPLIFIED.</span>
        <h1>Your financial goals.<br><span>Our assistance.</span></h1>
        <p class="hero-lead">Explore financial products, discover suitable options and connect with participating banks and NBFCs through Unirevo.</p>
        <div class="hero-actions">
          <a class="btn btn-primary-custom" href="#products">Explore loan products <i data-lucide="arrow-up-right"></i></a>
          <a class="btn btn-outline-custom" href="javascript:void(0);">Become a partner <i data-lucide="arrow-right"></i></a>
        </div>
        <div class="hero-note"><i data-lucide="shield-check"></i><span>A clear, guided way to explore financial options.</span></div>
      </div>
      <div class="hero-art" aria-label="Abstract three-dimensional financial illustration">
        <div class="art-glow"></div>
        <div class="art-orbit orbit-one"></div><div class="art-orbit orbit-two"></div>
        <div class="art-card card-back"><span class="mini-mark"></span><span class="card-line"></span><span class="card-line short"></span></div>
        <div class="art-card card-front">
          <div class="card-top"><span class="brand-chip"></span><i data-lucide="sparkles"></i></div>
          <div class="card-label">A clearer path forward</div>
          <div class="card-number">Explore <b>what's possible.</b></div>
          <div class="card-bottom"><span>UNIREVO</span><span class="card-circles"><i></i><i></i></span></div>
        </div>
        <div class="float-tile tile-one"><i data-lucide="wallet"></i></div>
        <div class="float-tile tile-two"><i data-lucide="house"></i></div>
        <div class="float-pill"><span class="pill-dot"></span> Financial possibilities, made simpler</div>
        <div class="art-caption">MOVE FORWARD<br><b>WITH CLARITY</b></div>
      </div>
    </div>
    <div class="hero-bottom container"><span>EXPLORE WITH CONFIDENCE</span><span class="hero-bottom-line"></span><span>01 / 04</span></div>
  </section>

  <section class="products-section section-pad" id="products">
    <div class="container">
      <div class="section-heading heading-row">
        <div><span class="eyebrow">FIND A WAY FORWARD</span><h2>Explore our financial<br><span>products.</span></h2></div>
        <p>Different goals call for different solutions. Start by exploring the financial products that may fit your needs.</p>
      </div>
      <div class="product-grid">
        <?php
        $products = [
          ["Personal Loan","Flexible options for personal financial requirements.","wallet","product-personal"],
          ["Home Loan","Explore options for purchasing or constructing a home.","house","product-home"],
          ["Business Loan","Financing options for business needs and expansion.","briefcase-business","product-business"],
          ["Loan Against Property","Explore funding options against eligible property.","building-2","product-property"],
          ["Education Loan","Explore financing for higher studies in India or abroad.","graduation-cap","product-education"],
          ["Car Loan","Discover options for new and pre-owned vehicles.","car-front","product-car"],
          ["Gold Loan","Explore financing against eligible gold assets.","gem","product-gold"],
          ["Credit Cards","Discover cards, features, rewards and benefits.","credit-card","product-credit"]
        ];
        foreach ($products as $index => $product): ?>
          <!-- <a class="product-card <?= htmlspecialchars($product[3]) ?>" href="<?= $index === 7 ? 'credit-cards/index.php' : 'loans/' . ['personal-loan','home-loan','business-loan','loan-against-property','education-loan','car-loan','gold-loan'][$index] . '.php' ?>"> -->
          <a class="product-card <?= htmlspecialchars($product[3]) ?>" href="javascript:void(0);">
            <div class="product-card-top"><span class="product-icon"><i data-lucide="<?= htmlspecialchars($product[2]) ?>"></i></span><span class="product-index">0<?= $index + 1 ?></span></div>
            <div><h3><?= htmlspecialchars($product[0]) ?></h3><p><?= htmlspecialchars($product[1]) ?></p></div>
            <span class="card-link">Explore options <i data-lucide="arrow-up-right"></i></span>
          </a>
        <?php endforeach; ?>
      </div>
      <div class="products-foot"><span>Not sure where to begin?</span><a href="contact.php#contact-form">Talk to our team <i data-lucide="arrow-up-right"></i></a></div>
    </div>
  </section>

  <section class="services-slider-section section-pad">
    <div class="container">
      <div class="section-heading heading-row">
        <div><span class="eyebrow">EXPLORE RELATED SERVICES</span><h2>More ways to move<br><span>forward.</span></h2></div>
        <div class="slider-controls"><button class="slider-btn" type="button" data-slide-prev="servicesCarousel" aria-label="Previous services"><i data-lucide="arrow-left"></i></button><button class="slider-btn" type="button" data-slide-next="servicesCarousel" aria-label="Next services"><i data-lucide="arrow-right"></i></button></div>
      </div>
      <div id="servicesCarousel" class="carousel slide service-carousel" data-bs-ride="false">
        <div class="carousel-inner">
          <div class="carousel-item active"><div class="service-slide-grid">
            <article class="service-feature"><div class="service-art service-art-home"><img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=900&q=80" alt="Modern home exterior" loading="lazy"><span>HOME FINANCING</span></div><div class="service-slide-copy"><span class="service-kicker">PLAN FOR WHAT'S NEXT</span><h3>Make room for a new beginning.</h3><p>Explore home financing options for purchasing or constructing a residential property.</p><a href="javascript:void(0);" class="text-link">Explore home loans <i data-lucide="arrow-up-right"></i></a></div></article>
            <article class="service-feature"><div class="service-art service-art-business"><img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=900&q=80" alt="Business team collaborating" loading="lazy"><span>BUSINESS FINANCING</span></div><div class="service-slide-copy"><span class="service-kicker">SUPPORT YOUR AMBITION</span><h3>Give your business room to grow.</h3><p>Discover financing options for working capital, expansion and business development.</p><a href="javascript:void(0);" class="text-link">Explore business loans <i data-lucide="arrow-up-right"></i></a></div></article>
          </div></div>
          <div class="carousel-item"><div class="service-slide-grid">
            <article class="service-feature"><div class="service-art service-art-education"><img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=900&q=80" alt="University students on campus" loading="lazy"><span>EDUCATION FINANCING</span></div><div class="service-slide-copy"><span class="service-kicker">INVEST IN YOUR FUTURE</span><h3>Take your learning further.</h3><p>Explore education financing options for higher studies in India and overseas.</p><a href="javascript:void(0);" class="text-link">Explore education loans <i data-lucide="arrow-up-right"></i></a></div></article>
            <article class="service-feature"><div class="service-art service-art-card"><img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=900&q=80" alt="Contactless payment" loading="lazy"><span>CREDIT CARD OPTIONS</span></div><div class="service-slide-copy"><span class="service-kicker">FIND YOUR FIT</span><h3>Discover features that fit your lifestyle.</h3><p>Explore card categories, rewards, cashback and lifestyle benefits.</p><a href="javascript:void(0);" class="text-link">Explore credit cards <i data-lucide="arrow-up-right"></i></a></div></article>
          </div></div>
        </div>
      </div>
    </div>
  </section>

  <section class="why-section section-pad">
    <div class="container why-layout">
      <div class="why-visual">
        <div class="why-visual-inner">
          <span class="visual-kicker">THE UNIREVO APPROACH</span>
          <div class="visual-big">A more<br><em>considered</em><br>way to explore.</div>
          <div class="visual-stamp"><i data-lucide="compass"></i><span>CLARITY<br>AT EVERY STEP</span></div>
          <div class="visual-lines"></div>
        </div>
      </div>
      <div class="why-content">
        <span class="eyebrow">WHY CHOOSE UNIREVO</span>
        <h2>Financial discovery,<span>with a human touch.</span></h2>
        <p class="section-intro">We aim to make exploring financial products simpler through clear information, convenient enquiries and customer assistance.</p>
        <div class="benefit-list">
          <div class="benefit"><span class="benefit-icon"><i data-lucide="layers-3"></i></span><div><h3>Multiple product options</h3><p>Explore different financial products through one convenient platform.</p></div></div>
          <div class="benefit"><span class="benefit-icon"><i data-lucide="messages-square"></i></span><div><h3>Customer assistance</h3><p>Get help understanding available products and application requirements.</p></div></div>
          <div class="benefit"><span class="benefit-icon"><i data-lucide="clipboard-check"></i></span><div><h3>Convenient enquiry process</h3><p>Submit your enquiry online and let our team assist with next steps.</p></div></div>
          <div class="benefit"><span class="benefit-icon"><i data-lucide="handshake"></i></span><div><h3>Transparent approach</h3><p>We believe in clear communication and responsible customer engagement.</p></div></div>
        </div>
      </div>
    </div>
  </section>

  <section class="process-section section-pad">
    <div class="container">
      <div class="section-heading heading-row">
        <div><span class="eyebrow">A SIMPLE JOURNEY</span><h2>From enquiry to<br><span>the next step.</span></h2></div>
        <p>Our process is designed to help you understand the journey and know what to expect at each stage.</p>
      </div>
      <div class="process-grid">
        <?php
        $steps = [
          ["01","Choose your product","Select the financial product that matches your requirement.","scan-search"],
          ["02","Submit your enquiry","Share your basic details and requirements with us.","file-pen-line"],
          ["03","Get assistance","Our team reviews your enquiry and helps with next steps.","messages-square"],
          ["04","Application support","Where an appropriate arrangement exists, we help facilitate the process.","arrow-left-right"],
          ["05","Lender decision","The concerned bank or NBFC independently evaluates your application.","landmark"]
        ];
        foreach ($steps as $step): ?>
          <article class="process-step"><span class="step-number"><?= $step[0] ?></span><span class="step-icon"><i data-lucide="<?= $step[3] ?>"></i></span><h3><?= $step[1] ?></h3><p><?= $step[2] ?></p></article>
        <?php endforeach; ?>
      </div>
      <p class="process-disclaimer">The concerned financial institution independently evaluates applications and makes the final lending decision.</p>
    </div>
  </section>

  <section class="partner-section">
    <div class="container partner-wrap">
      <div class="partner-copy"><span class="eyebrow eyebrow-light">FOR DSAs & CHANNEL PARTNERS</span><h2>Build your financial<br>distribution business<br><em>with Unirevo.</em></h2><p>Join our distribution network and explore opportunities in financial product sourcing and customer acquisition.</p><a class="btn btn-white" href="javascript:void(0);">Become a partner <i data-lucide="arrow-up-right"></i></a></div>
      <div class="partner-art partner-photo"><img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=1200&q=85" alt="Business partners collaborating" loading="lazy"><div class="partner-orb orb-a"></div><div class="partner-orb orb-b"></div><div class="partner-ring"></div><div class="partner-symbol"><i data-lucide="network"></i></div><div class="partner-tag tag-top">PARTNERSHIP</div><div class="partner-tag tag-bottom">GROW TOGETHER</div></div>
    </div>
  </section>

  <section class="about-section section-pad">
    <div class="container about-layout about-feature">
      <div class="about-photo">
        <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1200&q=85" alt="People working together in a collaborative business environment" loading="lazy">
        <div class="about-photo-tag"><span class="about-tag-dot"></span> PEOPLE FIRST. ALWAYS.</div>
        <div class="about-photo-shape"></div>
      </div>
      <div class="about-copy">
        <span class="eyebrow">GET TO KNOW US</span>
        <h2>Built around people.<br><span>Focused on possibilities.</span></h2>
        <p>Unirevo Business Private Limited is focused on financial product distribution, customer assistance and building a technology-enabled financial services network.</p>
        <p>Our objective is to simplify the process of exploring financial products while building meaningful relationships with customers, distribution partners and participating financial institutions.</p>
        <a class="text-link" href="about.php">More about Unirevo <i data-lucide="arrow-up-right"></i></a>
      </div>
    </div>
  </section>

  <section class="reviews-section section-pad">
    <div class="container experience-layout">
      <div class="experience-copy">
        <span class="eyebrow">CUSTOMER EXPERIENCE</span>
        <h2>Every journey deserves<br><span>clear guidance.</span></h2>
        <p class="experience-lead">We aim to make every interaction clear, convenient and respectful of your financial choices.</p>
        <div class="review-disclaimer"><i data-lucide="info"></i><span>Customer reviews will be published here after genuine, permissioned feedback has been collected.</span></div>
        <a class="text-link" href="contact.php#contact-form">Connect with our team <i data-lucide="arrow-up-right"></i></a>
      </div>
      <div class="experience-photo">
        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1200&q=85" alt="Customer-focused team having a helpful conversation" loading="lazy">
        <div class="experience-photo-overlay"></div>
        <div class="experience-photo-caption"><span>YOUR GOALS</span><strong>Deserve thoughtful guidance.</strong></div>
        <div class="experience-floating-icon"><i data-lucide="messages-square"></i></div>
      </div>
    </div>
  </section>

  <section class="faq-section section-pad">
    <div class="container faq-layout">
      <div class="faq-intro"><span class="eyebrow">GOOD TO KNOW</span><h2>Questions?<br><span>Start here.</span></h2><p>Some helpful information about exploring financial products through Unirevo.</p><a href="contact.php#contact-form" class="text-link">Still have questions? Contact us <i data-lucide="arrow-up-right"></i></a></div>
      <div class="accordion faq-accordion" id="faqAccordion">
        <div class="accordion-item"><h3 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true">What does Unirevo do?</button></h3><div id="faqOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion"><div class="accordion-body">Unirevo focuses on financial product distribution and customer assistance. We help customers explore available products and understand possible next steps.</div></div></div>
        <div class="accordion-item"><h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo">Does Unirevo directly approve loans?</button></h3><div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">No. The concerned bank or NBFC independently evaluates each application and makes the final lending decision.</div></div></div>
        <div class="accordion-item"><h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree">Which financial products can I explore?</button></h3><div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">You can explore personal, home, business, loan against property, education, car and gold loans, as well as credit cards.</div></div></div>
        <div class="accordion-item"><h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFour">How can I submit an enquiry?</button></h3><div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">Choose a product and submit the relevant enquiry form with your contact details and consent for the stated use of your information.</div></div></div>
        <div class="accordion-item"><h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFive">Can I become a Unirevo channel partner?</button></h3><div id="faqFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">DSAs, financial consultants, independent agents and business owners can use the Partner With Us page to register their interest.</div></div></div>
      </div>
    </div>
  </section>

  <section class="closing-section">
    <div class="container closing-card">
      <div>
        <span class="eyebrow eyebrow-light">TAKE THE FIRST STEP</span>
        <h2>Let's explore what's<br><em>right for your goals.</em></h2>
        <p>Start exploring financial products or join our growing distribution network.</p>
      </div>
      <div class="closing-actions">
        <a class="btn btn-white" href="#products">Explore products <i data-lucide="arrow-up-right"></i></a>
        <!-- <a class="closing-link" href="partner-with-us.php">Partner with us <i data-lucide="arrow-right"></i></a> -->
      </div>
      <div class="closing-decoration"></div>
    </div>
  </section>
</main>

<div class="floating-actions" aria-label="Quick actions">
</div>
<?php require __DIR__ . "/includes/footer.php"; ?>
