<?php
/**
 * Template Name: Template Form
 */

get_header();
?>

<div class="wrapper wrapper--pt">
<?php require get_template_directory() . '/tmp/header.php'; ?>

  <main class="main">

    <?php require get_template_directory() . '/acf.php'; ?>

    <section class="section instraction-line">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 mb-4 mb-xl-0 d-flex">
            <div class="text-content">
              <div class="mb-20">
                <span class="title-red">Contracting</span>
                <h3>Are you ready to contract with agent boost marketing?</h3>
              </div>
            </div>
          </div>
          <div class="col-xl-6 text-content">
            <div>
              <p>Whether you are interested in contracting as an Agency or Individual,
                our contracting team is ready to help. We have a comprehensive line of
                products available to you, including Medicare Advantage, Medicare Supplement,
                Part D, and Life Insurance products.
              </p>
              <p></p>
              <p>
                We represent trusted reputable carriers,
                including UnitedHealthcare, Aetna, Humana, Mutual of Omaha, American Continental,
                <a href="#">plus many more.
                <a>
              </p>
              <p></p>
              <a href="#">Contact us</a> today to begin the contracting process.
              We look forward to your call.
              <p></p>
              <p>Please note that your information
                is saved on our secure server as you enter it.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="instraction-line" style="padding-bottom: 30px;">
      <div class="container">
        <div class="instraction-dropdown-block dropdown">
          <div class="instraction-dropdown">
            <div class="instraction-dropdown-title">Instruction for contract</div>
            <div class="button-group__item">
              <button type="button" class="btn btn--md btn--shadow dropbtn" style="min-width: 100px;">
              <span class="dropbtnText">Open</span>
              </button>
            </div>
          </div>
          <div class="dropdown-content">
            <div class="flex-columns">
              <div class="flex-col-6">
                <div class="text-content">
                  <p class="instraction-dropdown-description-text">
                    To get started, please fill out the forms included with this cover page and fax or email
                    them back to us with these additional documents: + Copy of your insurance license. Also
                    any non-resident licenses for states in which you plan on selling. If you are contracting
                    as a business entity rather than individual, please include your business license as well.
                    </br>
                    </br>
                    If you have any questions, please call 
                    <a href="#">855.378.1451</a>.
                    Thank you! Again, we look forward to partnering with you and helping you increase production.
                  </p>
                </div>
              </div>
              <div class="flex-col-6">
                <div class="text-content">
                  <ul class="instraction-dropdown-description-list">
                    <li>Copy of your E and 0</li>
                    <li>Copy of a voided check for direct deposit<l/i>
                    <li>Copy of proof anti-money laundering training (if you are selling life or financial products)</li>
                    <li>Copy of written explanation for any background issues</li>
                    <li>Copy of CE training certificate (if required in your state)</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="instraction-line" style="margin-bottom: 40px;" id="formStages">
      <div class="container">
        <ul class="instraction-stage instraction-stage__content">
          <li class="instraction-step">
            <div class="instraction-step__content active" id="instractionStep1">Select contract & user type</div>
          </li>
          <li class="instraction-step">
            <div class="instraction-step__content" id="instractionStep2">Basic info</div>
          </li>
          <li class="instraction-step">
            <div class="instraction-step__content" id="instractionStep3">Legal questions</div>
          </li>
          <li class="instraction-step">
            <div class="instraction-step__content" id="instractionStep4">Disclaimers and acknowledgments</div>
          </li>
        </ul>
      </div>
    </section>
    
    <?php require get_template_directory() . '/tmp/form-step-1.php'; ?>
    <?php require get_template_directory() . '/tmp/form-step-2.php'; ?>
    <?php require get_template_directory() . '/tmp/form-step-3.php'; ?>
    <?php require get_template_directory() . '/tmp/form-step-4.php'; ?>

    <section class="contracting-btns-wrapper-bg">
      <div class="container">
        <div class="contracting-btns-wrapper">
          <div class="contracting-item" id="btnPrevious" style="display: none">
						<button type="button" class="btn btn--md btn--shadow">
							<span class="btn__icon ico-rotate--180">
								<svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.3335 8.33301L4.66683 4.99967L1.3335 1.66634" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
							</span>
							<span>Previous</span>
						</button>
					</div>
          <div class="contracting-item" id="btnContinueLater1">
            <button type="button" class="btn btn--md btn--shadow">
              <span>Save and Continue Later</span>
            </button>
          </div>
          <div class="contracting-item">
            <button type="button" class="btn btn--md btn--shadow" id="btnContinueLater2" style="display: none">
              <span>Save and Continue Later</span>
            </button>
            <button type="button" class="btn btn--md btn--primary" id="formBtnSteps" data-step="1">
              <span>Next</span>
            </button>
          </div>
        </div>
      </div>
    </section>

	</main>
	<?php require get_template_directory() . '/tmp/footer.php'; ?>
</div>
	
<?php require get_template_directory() . '/tmp/footer-popup.php'; ?>
<?php
get_footer();
