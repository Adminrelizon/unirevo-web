<?php
$pageTitle = "EMI Calculator | Unirevo";
$pageDescription = "Estimate your monthly loan EMI, total interest and total repayment with the Unirevo EMI calculator.";
require __DIR__ . "/includes/header.php";
?>
<main class="emi-page">
  <section class="emi-hero">
    <div class="container emi-hero-inner">
      <div><span class="eyebrow">FINANCIAL TOOLS</span>
        <h1>Plan your loan with<br><span>clarity.</span></h1>
        <p>Use our EMI calculator to estimate your monthly instalment, total interest and overall repayment.</p>
      </div>
      <div class="emi-hero-art">
        <div class="emi-art-circle"></div>
        <div class="emi-art-coins"><span></span><span></span><span></span></div>
        <div class="emi-art-card"><span>ESTIMATED MONTHLY EMI</span><strong>₹ <b id="heroEmi">10,624</b></strong><small>Plan your finances with confidence</small><i data-lucide="calculator"></i></div>
      </div>
    </div>
  </section>
  <section class="emi-calculator-section section-pad">
    <div class="container">
      <div class="emi-heading"><span class="eyebrow">QUICK EMI ESTIMATE</span>
        <h2>Calculate your <span>loan EMI.</span></h2>
        <p>Adjust the values below to see an indicative repayment estimate.</p>
      </div>
      <div class="emi-calculator-card">
        <div class="emi-inputs">
          <div class="emi-field">
            <div class="emi-label-row"><label for="loanAmount">Loan amount</label><output id="loanAmountOutput">₹ 5,00,000</output></div>
            <input type="range" id="loanAmount" min="50000" max="10000000" step="10000" value="500000">
            <div class="emi-range-labels"><span>₹50,000</span><span>₹1 Crore</span></div>
            <input class="emi-number-input" id="loanAmountNumber" type="number" min="50000" max="10000000" step="10000" value="500000" aria-label="Loan amount in rupees">
          </div>
          <div class="emi-field">
            <div class="emi-label-row"><label for="interestRate">Interest rate (per annum)</label><output id="interestOutput">10.5%</output></div>
            <input type="range" id="interestRate" min="1" max="30" step="0.1" value="10.5">
            <div class="emi-range-labels"><span>1%</span><span>30%</span></div>
            <input class="emi-number-input" id="interestNumber" type="number" min="1" max="30" step="0.1" value="10.5" aria-label="Annual interest rate percentage">
          </div>
          <div class="emi-field">
            <div class="emi-label-row"><label for="loanTenure">Loan tenure</label><output id="tenureOutput">5 Years</output></div>
            <input type="range" id="loanTenure" min="1" max="30" step="1" value="5">
            <div class="emi-range-labels"><span>1 Year</span><span>30 Years</span></div>
            <input class="emi-number-input" id="tenureNumber" type="number" min="1" max="30" step="1" value="5" aria-label="Loan tenure in years">
          </div>
        </div>
        <div class="emi-results">
          <span class="emi-result-kicker">YOUR ESTIMATED EMI</span>
          <strong class="emi-monthly">₹ <span id="monthlyEmi">10,747</span></strong>
          <span class="emi-result-caption">per month</span>
          <div class="emi-result-breakdown">
            <div><span>Principal amount</span><b id="principalResult">₹5,00,000</b></div>
            <div><span>Total interest</span><b id="interestResult">₹1,44,820</b></div>
            <div><span>Total repayment</span><b id="totalResult">₹6,44,820</b></div>
          </div>
          <div class="emi-result-bar"><span id="principalBar"></span><span id="interestBar"></span></div>
          <div class="emi-bar-legend"><span><i></i> Principal</span><span><i></i> Interest</span></div>
          <!-- <a href="contact.php#contact-form" class="btn btn-primary-custom emi-enquire-btn">Enquire now <i data-lucide="arrow-up-right"></i></a> -->
        </div>
      </div>
      <p class="emi-disclaimer"><i data-lucide="info"></i> This calculator provides an indicative estimate only. Actual EMI, interest rate, fees, tenure and repayment terms may vary based on lender policies, applicant profile and loan terms. Final eligibility and lending decisions are made by the concerned financial institution.</p>
    </div>
  </section>
  <section class="emi-how-section section-pad">
    <div class="container emi-how-inner">
      <div><span class="eyebrow">UNDERSTANDING EMI</span>
        <h2>What goes into your <span>monthly EMI?</span></h2>
        <p>Your Equated Monthly Instalment (EMI) is the amount you repay each month towards your loan. It generally includes a principal component and an interest component.</p>
      </div>
      <div class="emi-how-points">
        <div><span><i data-lucide="wallet"></i></span>
          <p><b>Principal</b>The amount you borrow from the lender.</p>
        </div>
        <div><span><i data-lucide="percent"></i></span>
          <p><b>Interest</b>The cost of borrowing, calculated at the applicable rate.</p>
        </div>
        <div><span><i data-lucide="calendar-days"></i></span>
          <p><b>Tenure</b>The period over which you repay the loan.</p>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . "/includes/footer.php"; ?>