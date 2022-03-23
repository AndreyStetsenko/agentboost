<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Agentboost
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function agentboost_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'agentboost_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function agentboost_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'agentboost_pingback_header' );

// ACF Options

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Site General Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'site-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'site-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Site Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'site-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'ACF All Blocks',
		'menu_title'	=> 'ACF All Blocks',
		'parent_slug'	=> 'site-general-settings',
	));
	
}

add_theme_support( 'post-thumbnails' );

// Reading Time

function estimated_reading_time() {
	$post = get_post();
	$postcnt = strip_tags( $post->post_content );
	$words = count(preg_split('/\s+/', $postcnt));
	$minutes = floor( $words / 120 );
	$seconds = floor( $words % 120 / ( 120 / 60 ) );
	if (1 <= $minutes){$estimated_time = $minutes . ' Min Read' . ($minutes == 1 ? '' : 's');}
	else{$estimated_time = $seconds . ' Sec Read' . ($seconds == 1 ? '' : 's');}
	echo $estimated_time;
}

// Send Form

// function wp_big_form() {
// 	// if ( ! isset( $_POST['nonce_big_form'] ) 
// 	// 		|| ! wp_verify_nonce( $_POST['nonce_big_form'], 'send_big_form' ) 
// 	// ) {
// 	// 	print 'Sorry, your nonce did not verify.';
// 	// 	exit;
// 	// } else {
// 	// 	// process form data
// 	// }
	
// 	// $st1_contract_type = $_POST['st1-contract-type'];
// 	// $st1_label_type = $_POST['st1-label-type'];

// 	$st2_first_name = $_POST['st2-first-name'];
// 	$st2_last_name = $_POST['st2-last-name'];
// 	$st2_social_security_no = $_POST['st2-social-security-no'];
// 	$st2_male = $_POST['st2-male'];
// 	// $st2_female = $_POST['st2-female'];
// 	$st2_birth_date = $_POST['st2-birth-date'];
// 	$st2_email = $_POST['st2-email'];
// 	$st2_resident_license = $_POST['st2-resident-license'];
// 	// // $st2_ = $_POST['st2-npn-num'];
// 	// // $st2_ = $_POST['st2-phone'];
// 	// // $st2_ = $_POST['st2-fax'];
// 	// // $st2_ = $_POST['st2-drivers-license'];
// 	// // $st2_ = $_POST['st2-drivers-license-state'];
// 	// // $st2_ = $_POST['st2-street-address'];
// 	// // $st2_ = $_POST['st2-zip-code'];
// 	// // $st2_ = $_POST['st2-city'];
// 	// // $st2_ = $_POST['st2-state'];
// 	// // $st2_ = $_POST['st2-mailing-street-address'];
// 	// // $st2_ = $_POST['st2-mailing-zip-code'];
// 	// // $st2_ = $_POST['st2-mailing-city'];
// 	// // $st2_ = $_POST['st2-mailing-state'];
// 	// // $st2_ = $_POST['example-radio-01'];
// 	// // $st2_ = $_POST['st2-benecifiar-name'];
// 	// // $st2_ = $_POST['st2-benecifiar-phone'];

// 	// $message = `
// 	// First Name: $st2_first_name
// 	// Last Name: $st2_last_name
// 	// Social Security NO: $st2_social_security_no
// 	// Male: $st2_male
// 	// Female: $st2_female
// 	// Birth Date: $st2_birth_date
// 	// Email: $st2_email
// 	// `;

// 	$message = 'First Name: ' . $st2_first_name;


// 	// wp_mail( 'andrey@stetsenko.org', 'Test Form!', $message );
// }

// add_action('init', 'wp_big_form');

function javascript_variables() { ?>
	<script type="text/javascript">
			var ajax_url = '<?php echo admin_url( "admin-ajax.php" ); ?>';
			var ajax_nonce = '<?php echo wp_create_nonce( "secure_nonce_name" ); ?>';
	</script>
	<input type="hidden" name="ajax_url" value="<?= admin_url( "admin-ajax.php" ) ?>">
	<input type="hidden" name="ajax_nonce" value="<?= wp_create_nonce( "secure_nonce_name" ) ?>">
	<?php
}
add_action ( 'wp_head', 'javascript_variables' );

function ajax_form(){
	parse_str($_POST['data'], $data);
	$response = '';
	$thm  = $data['send_mail_theme'] ? $data['send_mail_theme'] : 'AgentBoost Form';
	$thm  = "=?utf-8?b?". base64_encode($thm) ."?=";
	
	$mail_to = $data['send_mail_to'] ? $data['send_mail_to'] : 'gremov04@gmail.com';
	$headers = "Content-Type: text/html; charset=utf-8\n";
	$headers .= 'From: ' . $data['send_mail_from'] ? $data['send_mail_from'] : 'AgentBoost Form' . "\r\n";

	$msg = '
	** 1. Select contract & user type
	Contact Type: ' . $data['st1-contract-type'] . '
	User Type: ' . $data['st1-label-type'] . '

	** 2. Basic info
	*Personal Details:
	First Name: ' . $data['st2-first-name'] . '
	Last Name: ' . $data['st2-last-name'] . '
	Social Security No: ' . $data['st2-social-security-no'] . '

	*Info Details:
	Gender: ' . $data['st2-gender'] . '
	Birth Date: ' . $data['st2-birth-date'] . '
	Email: ' . $data['st2-email'] . '
	Resident Insurance License # and Stat: ' . $data['st2-resident-license'] . '
	NPN Number ' . $data['st2-npn-num'] . '
	Phone Number ' . $data['st2-phone'] . '
	FAX ' . $data['st2-fax'] . '
	Driver`s License Number ' . $data['st2-drivers-license'] . '
	Driver`s License State ' . $data['st2-drivers-license-state'] . '

	*Current Details:
	Street Address ' . $data['st2-street-address'] . '
	Zip Code ' . $data['st2-zip-code'] . '
	City ' . $data['st2-city'] . '
	State ' . $data['st2-state'] . '

	*Mailing Address:
	Street Address ' . $data['st2-mailing-street-address'] . '
	Zip Code ' . $data['st2-mailing-zip-code'] . '
	City ' . $data['st2-mailing-city'] . '
	State ' . $data['st2-mailing-state'] . '

	*Beniciary Details:
	Doing Business As ' . $data['st2-business-as'] . '
	Are you going to be apart of "Medicare Pros?" ' . $data['st2-medicare-pros'] . '
	Beneficiary full name ' . $data['st2-benecifiar-name'] . '
	Beneficiary Phone number ' . $data['st2-benecifiar-phone'] . '

	** 3. Legal questions
	Have you ever been charged or convicted of or plead guilty or no contest to any Felony, Misdemeanor, federal/state insurance and/or securities or investments regulations and statutes? Have you ever been on probation? ' . $data['st3-radio-00'] . '
	If Yes, Explain ' . $data['form-control'] . '
	Have you ever been or are you currently being investigated, have any pending indictments, lawsuits, or have you ever been in lawsuit with insurance company? ' . $data['st3-radio-01'] . '
	Have you ever been alleged to have engaged in any fraud? ' . $data['st3-radio-02'] . '
	Have you ever been found to have engaged in any fraud? ' . $data['st3-radio-03'] . '
	Has any insurance or financial services company, or broker-dealer terminated your contract or appointment or permitted you to resign for reason other than lack of sales? ' . $data['st3-radio-04'] . '
	Have you ever had an appointment with any insurance company terminated for cause or been denied an appointment? ' . $data['st3-radio-05'] . '
	Does any insurer, insured, or other person claim any commission chargeback or other indebtedness from you as a result of any insurance transactions or business? ' . $data['st3-radio-06'] . '
	Has any lawsuit or claim ever been made against your surety company, or errors and omissions insurer, arising out of your sales or practices, or, have you been refused surety bonding or E&O coverage? ' . $data['st3-radio-07'] . '
	Have you ever had an insurance or securities license denied, suspended, cancelled or revoked? ' . $data['st3-radio-08'] . '
	Has any state or federal regulatory body found you to have been a cause of an investment OR insurance-related business having its authorization to do business denied, suspended, revoked, or restricted? ' . $data['st3-radio-09'] . '
	Has any state or federal regulatory agency revoked or suspended your license as an attorney, accountant, or federal contractor? ' . $data['st3-radio-10'] . '
	Has any state or federal regulatory agency found you to have made a false statement or omission or been dishonest, unfair, or unethical? ' . $data['st3-radio-11'] . '
	Have you ever had any interruptions in licensing? ' . $data['st3-radio-12'] . '
	Has any state, federal or self-regulatory agency filed a complaint against you, fined, sanctioned, censured, penalized or otherwise disciplined you for a violation of their regulations or state or federal statutes? Have you ever been the subject of a consumer initiated complaint? ' . $data['st3-radio-13'] . '
	Have you personally or any insurance or securities brokerage firm with whom you have been associated filed a bankruptcy petition or declared bankruptcy? ' . $data['st3-radio-14'] . '
	Have you ever had any judgments, garnishments, or liens against you? ' . $data['st3-radio-15'] . '
	Are you connected in any way with a bank, savings & loan association, or other lending or financial institution? ' . $data['st3-radio-16'] . '
	Have you ever used any other names or aliases? ' . $data['st3-radio-17'] . '
	Do you have any unresolved matters pending with the Internal Revenue Service or other taxing authority? ' . $data['st3-radio-18'] . '

	** 4. Disclaimers and acknowledgments
	Have you taken an AML (Anti Money Laundering) course within the past two years? ' . $data['st4-have-aml'] . '

	Please select the carriers that you would like to be appointed with by checking the boxes below
	Aetna Medicare Advantage ' . $data['st4-cariers-like-1'] . '
	Aetna Senior Products (Med Supp) ' . $data['st4-cariers-like-2'] . '
	Anthem ' . $data['st4-cariers-like-3'] . '
	ARLIC/CHLIC (Cigna) Med Supp ' . $data['st4-cariers-like-4'] . '
	Regence & Asuris (ID, OR, UT, WA) ' . $data['st4-cariers-like-5'] . '
	Florida Blue BCBS ' . $data['st4-cariers-like-6'] . '
	North Carolina BCBS ' . $data['st4-cariers-like-7'] . '
	Cigna (MAPD) ' . $data['st4-cariers-like-8'] . '
	Humana ' . $data['st4-cariers-like-9'] . '
	HMA - Health Matching Account ' . $data['st4-cariers-like-10'] . '
	Molina ' . $data['st4-cariers-like-11'] . '
	Mutual of Omaha Med Supp ' . $data['st4-cariers-like-12'] . '
	Select Health ' . $data['st4-cariers-like-13'] . '
	UHC ' . $data['st4-cariers-like-14'] . '
	WellCare Medicare Advantage/PDP ' . $data['st4-cariers-like-15'] . '
	American General Life (AIG) Life, Annuity, FE ' . $data['st4-cariers-like-16'] . '
	Athene (Life & Annuity) ' . $data['st4-cariers-like-17'] . '
	F&G (Life & Annuity) ' . $data['st4-cariers-like-18'] . '
	Guarantee Trust Life (GTL) Life ' . $data['st4-cariers-like-19'] . '
	Mutual of Omaha (Life, Annuity, FE, LTC) ' . $data['st4-cariers-like-20'] . '
	North American (Life & Annuity) ' . $data['st4-cariers-like-21'] . '
	Protective (Life & Annuity) ' . $data['st4-cariers-like-22'] . '
	Transpremier (Life & FE) ' . $data['st4-cariers-like-23'] . '
	Washington National (Life & Annuity) ' . $data['st4-cariers-like-24'] . '
	Allianz (Life & Annuity) ' . $data['st4-cariers-like-25'] . '
	American Equity (Life & Annuity) ' . $data['st4-cariers-like-26'] . '
	Americo (Life, Annuity, FE) ' . $data['st4-cariers-like-27'] . '
	Banner Life (Life & Annuity) Life Only ' . $data['st4-cariers-like-28'] . '
	Cigna Final Expense ' . $data['st4-cariers-like-29'] . '
	EquiTrust (Life & Annuity) ' . $data['st4-cariers-like-30'] . '
	Great Western (FE) ' . $data['st4-cariers-like-31'] . '
	Loyal American (Cigna) FE ' . $data['st4-cariers-like-32'] . '

	*Banking Information
	Requesting Commission Advancing? ' . $data['st4-comission-adv'] . '
	Account Owner Name ' . $data['st4-account-owner-name'] . '
	Routing Number ' . $data['st4-routing-number'] . '
	Account Number ' . $data['st4-account-number'] . '
	Branch Name ' . $data['st4-branch-name'] . '
	Branch Address ' . $data['st4-branch-address'] . '
	Account Type ' . $data['st4-radio-01'] . '
	';

// Отправляем почтовое сообщение

	if(wp_mail( $mail_to, $thm, $msg )){
			$response = 'Сообщение отправлено';
	}else
			$response = 'Ошибка при отправке';

// Сообщение о результате отправки почты

	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ){
			echo $response;
			wp_die();
	}
}

add_action('wp_ajax_nopriv_ajax_order', 'ajax_form' );
add_action('wp_ajax_ajax_order', 'ajax_form' );