<?php
$pageTitle = "About Us | Unirevo";
$pageDescription = "Learn about Unirevo Business Private Limited, our vision, mission, core values and commitment to simplifying financial product discovery.";
require __DIR__ . "/includes/header.php";
$pageHeroTitle = "About Us";
$pageHeroDescription = "Discover our vision, mission and commitment to simplifying financial solutions.";
$pageHeroEyebrow = "GET TO KNOW US";
$pageHeroIcon = "bi-building";

$pageHeroBreadcrumbs = [
  ['label' => 'Home', 'url' => 'index.php'],
  ['label' => 'About Us', 'url' => null]
];

include 'includes/page-hero.php';
?>
<main class="about-page">
  <section class="about-page-hero">
    <div class="about-page-hero-glow"></div>
    <div class="container about-page-hero-grid">
      <div class="about-page-hero-copy">
        <span class="eyebrow"><span class="eyebrow-dot"></span> ABOUT UNIREVO</span>
        <h1>Simplifying Financial Product Discovery. <span>Connecting Opportunities.</span></h1>
        <p>Building connections between customers, financial product providers and business partners through technology-enabled distribution.</p>
        <a href="contact.php#contact-form" class="btn btn-primary-custom">Connect with us <i data-lucide="arrow-up-right"></i></a>
      </div>
      <div class="about-page-hero-visual">
        <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1200&q=85" alt="Professionals collaborating in a modern workplace" fetchpriority="high">
        <div class="about-hero-image-shade"></div>
        <div class="about-hero-note"><span><i data-lucide="network"></i></span>
          <div><b>Connecting opportunities</b><small>Customers. Partners. Institutions.</small></div>
        </div>
        <div class="about-hero-orbit"></div>
      </div>
    </div>
  </section>

  <section class="about-intro-section section-pad">
    <div class="container about-intro-grid">
      <div class="about-intro-heading">
        <span class="eyebrow">WHO WE ARE</span>
        <h2>Making financial discovery <span>more accessible.</span></h2>
        <div class="about-intro-accent"></div>
        <div class="about-intro-visual" aria-hidden="true">
          <div class="intro-visual-glow"></div>
          <div class="intro-orbit intro-orbit-a"></div>
          <div class="intro-orbit intro-orbit-b"></div>
          <div class="intro-visual-platform"></div>
          <div class="intro-visual-card intro-card-back"><span></span><i></i><i></i></div>
          <div class="intro-visual-card intro-card-front">
            <div class="intro-card-mark"><i data-lucide="landmark"></i></div><strong>Financial<br>opportunities</strong><small>DISCOVER • CONNECT • GROW</small>
          </div>
          <div class="intro-visual-chip"><i data-lucide="shield-check"></i><span>Built on trust</span></div>
        </div>
      </div>
      <div class="about-intro-copy">
        <p>Unirevo Business Private Limited is a financial product distribution and customer assistance company focused on making financial solutions more accessible through technology-enabled platforms and business partnerships.</p>
        <p>Our objective is to simplify the way individuals and businesses discover and explore financial products by connecting prospective customers with relevant financial institutions and product providers.</p>
        <p>Through our digital platform and growing distribution network, we facilitate customer enquiries, financial product awareness, lead generation and application assistance across multiple product categories, including personal loans, home loans, business loans, loans against property, education loans, car loans, gold loans and credit cards.</p>
        <p>We work towards building meaningful relationships with customers, Direct Selling Agents (DSAs), financial consultants, business associates, channel partners and institutional organisations.</p>
        <p>At Unirevo, we believe that technology, responsible business practices and strong partnerships can create a more convenient and organised financial product discovery experience.</p>
      </div>
    </div>
  </section>

  <section class="about-vision-mission section-pad">
    <div class="container about-vm-grid">
      <article class="about-vm-card about-vision-card">
        <div class="about-vm-top"><span class="about-vm-icon"><i data-lucide="telescope"></i></span><span class="eyebrow">OUR VISION</span></div>
        <h2>Building a trusted network for financial opportunities.</h2>
        <p>To become a trusted and technology-enabled financial product distribution platform, connecting customers with relevant financial opportunities through an accessible, transparent and expanding business network.</p>
        <div class="about-vm-decoration"></div>
      </article>
      <article class="about-vm-card about-mission-card">
        <div class="about-vm-top"><span class="about-vm-icon"><i data-lucide="target"></i></span><span class="eyebrow">OUR MISSION</span></div>
        <h2>Turning our purpose into action.</h2>
        <div class="about-mission-list">
          <div><span>01</span>
            <p><b>Simplify Financial Discovery</b>Make it easier for customers to explore and understand available financial product options.</p>
          </div>
          <div><span>02</span>
            <p><b>Expand Distribution Networks</b>Develop a strong network of DSAs, financial consultants, business associates and channel partners.</p>
          </div>
          <div><span>03</span>
            <p><b>Build Institutional Relationships</b>Establish sustainable business relationships with banks, NBFCs and other eligible financial institutions.</p>
          </div>
          <div><span>04</span>
            <p><b>Enhance Customer Experience</b>Promote transparent communication, responsible engagement and organised application assistance.</p>
          </div>
          <div><span>05</span>
            <p><b>Leverage Technology</b>Use digital platforms and technology to improve customer enquiry management and operational efficiency.</p>
          </div>
          <div><span>06</span>
            <p><b>Create Business Opportunities</b>Develop mutually beneficial partnerships that support sustainable business growth.</p>
          </div>
        </div>
      </article>
    </div>
  </section>

  <section class="about-values-section section-pad">
    <div class="container">
      <div class="about-section-title">
        <span class="eyebrow">WHAT GUIDES US</span>
        <h2>Our core <span>values.</span></h2>
        <p>The principles that guide our approach to customer relationships, business partnerships and operational practices.</p>
      </div>
      <div class="about-values-grid">
        <article class="about-value-card"><span><i data-lucide="eye"></i></span>
          <h3>Transparency</h3>
        </article>
        <article class="about-value-card"><span><i data-lucide="handshake"></i></span>
          <h3>Trust</h3>
        </article>
        <article class="about-value-card"><span><i data-lucide="heart-handshake"></i></span>
          <h3>Customer Focus</h3>
        </article>
        <article class="about-value-card"><span><i data-lucide="lightbulb"></i></span>
          <h3>Innovation</h3>
        </article>
        <article class="about-value-card"><span><i data-lucide="shield-check"></i></span>
          <h3>Integrity</h3>
        </article>
        <article class="about-value-card"><span><i data-lucide="scale"></i></span>
          <h3>Responsibility</h3>
        </article>
      </div>
    </div>
  </section>

  <section class="about-stand-section section-pad">
    <div class="container">
      <div class="about-section-title about-stand-title">
        <span class="eyebrow">OUR APPROACH</span>
        <h2>What we <span>stand for.</span></h2>
      </div>
      <div class="about-stand-grid">
        <article class="about-stand-card"><span class="about-stand-number">01</span><span class="about-stand-icon"><i data-lucide="users-round"></i></span>
          <h3>Customer-Centric Approach</h3>
          <p>We focus on understanding customer requirements and facilitating access to relevant financial product information and assistance.</p>
        </article>
        <article class="about-stand-card"><span class="about-stand-number">02</span><span class="about-stand-icon"><i data-lucide="cpu"></i></span>
          <h3>Technology-Driven Operations</h3>
          <p>We aim to use technology to simplify customer enquiries, improve coordination and create structured distribution processes.</p>
        </article>
        <article class="about-stand-card"><span class="about-stand-number">03</span><span class="about-stand-icon"><i data-lucide="network"></i></span>
          <h3>Partnership-Led Growth</h3>
          <p>We believe in developing long-term relationships with distribution partners and financial institutions to expand business opportunities.</p>
        </article>
        <article class="about-stand-card"><span class="about-stand-number">04</span><span class="about-stand-icon"><i data-lucide="shield-check"></i></span>
          <h3>Responsible Business Practices</h3>
          <p>We value transparency, appropriate customer consent, responsible communication and compliance with applicable requirements.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="about-commitment-section">
    <div class="container about-commitment-inner">
      <div class="about-commitment-image"><img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1200&q=85" alt="Team members working together" loading="lazy"></div>
      <div class="about-commitment-copy">
        <span class="eyebrow">OUR COMMITMENT</span>
        <h2>Growing through trust, technology and <span>meaningful relationships.</span></h2>
        <p>At Unirevo, our focus is on creating a reliable platform where customers can explore financial products and business partners can discover new distribution opportunities.</p>
        <p>We aim to grow through trust, technology, responsible practices and meaningful business relationships.</p>
        <a href="contact.php#contact-form" class="text-link">Start a conversation <i data-lucide="arrow-up-right"></i></a>
      </div>
    </div>
  </section>


  <section class="about-founder-section section-pad" id="founder">
    <div class="container about-founder-layout">
      <div class="about-founder-portrait">
        <div class="founder-portrait-frame">
          <div class="founder-portrait-art" aria-hidden="true">
            <span class="founder-art-orbit founder-orbit-one"></span><span class="founder-art-orbit founder-orbit-two"></span>
            <span class="founder-art-glow"></span><i data-lucide="user-round"></i>
            <span class="founder-art-caption">LEADERSHIP • VISION • PURPOSE</span>
          </div>
        </div>
        <div class="founder-portrait-badge"><i data-lucide="quote"></i><span>Building with purpose.<br>Growing with trust.</span></div>
      </div>
      <div class="about-founder-copy">
        <span class="eyebrow">LEADERSHIP</span>
        <h2>A vision shaped by <span>purpose.</span></h2>
        <p>At Unirevo, our journey is guided by a commitment to make financial product discovery more accessible, organised and customer-focused.</p>
        <p>Our leadership believes in building meaningful relationships, using technology responsibly and creating opportunities through a strong distribution network.</p>
        <p class="founder-profile-pending">Founder profile and photograph will be added here once the official details are provided.</p>
      </div>
    </div>
  </section>

  <section class="about-final-cta">
    <div class="container about-final-cta-inner">
      <div><span class="eyebrow">UNIREVO – FINANCIAL SOLUTIONS. SIMPLIFIED.</span>
        <h2>Let's connect opportunities.</h2>
        <p>Have a question or interested in working with us?</p>
      </div>
      <a href="contact.php#contact-form" class="btn btn-primary-custom">Contact Unirevo <i data-lucide="arrow-up-right"></i></a>
    </div>
  </section>
</main>
<?php require __DIR__ . "/includes/footer.php"; ?>