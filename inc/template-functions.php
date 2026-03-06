<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 * @package Gunter
 */

add_filter( 'body_class', 'gunter_body_class_before_header' );
function gunter_body_class_before_header( $classes ) {

   global $opt_name;
   if( isset( $opt_name['gunter_enable_dark'] ) ):
		if( $opt_name['gunter_enable_dark'] == 'enable' ):
			$classes[] = 'gunter-dark';
		else:
			$classes[] = 'gunter-light';
		endif;
   else:
		$classes[] = 'gunter-light';
   endif;
    return $classes;
}

function gunter_font_awesome()
{

    $args_options =
        array(
			/**All Icon */
				'flaticon-domain-registration' => 'Domain Registration',
				'flaticon-search-engine' => 'search-engine',
				'flaticon-idea' => 'idea',
				'flaticon-pay-per-click' => 'pay-per-click',
				'flaticon-analytics-1' => 'analytics-1',
				'flaticon-analytics-2' => 'analytics-2',
				'flaticon-link' => 'link',
				'flaticon-translation' => 'translation',
				'flaticon-bug' => 'bug',
				'flaticon-mail' => 'mail',
				'flaticon-magnifying-glass' => 'magnifying-glass',
				'flaticon-think' => 'think',
				'flaticon-plan' => 'plan',
				'flaticon-shout' => 'shout',
				'flaticon-ux-design' => 'ux-design',
				'flaticon-camera' => 'camera',
				'flaticon-data' => 'data',
				'flaticon-chat' => 'chat',
				'flaticon-stats' => 'stats',
				'flaticon-project' => 'project',
				'flaticon-quote' => 'quote',
				'flaticon-facebook' => 'facebook',
				'flaticon-instagram' => 'instagram',
				'flaticon-twitter' => 'twitter',
				'flaticon-linkedin' => 'linkedin',
				'flaticon-down-arrow' => 'down-arrow',
				'flaticon-back' => 'back',
				'flaticon-multimedia' => 'multimedia',
				'flaticon-search' => 'search',
				'flaticon-edit' => 'edit',
				'flaticon-plus' => 'plus',
				'flaticon-line' => 'line',
				'flaticon-tick' => 'tick',
				'flaticon-chevron' => 'chevron',
                'fa fa-500px' => esc_html__('500px', 'gunter'),
                'fa fa-address-book' => esc_html__('Address Book', 'gunter'),
                'fa fa-address-book-o' => esc_html__('Address Book O', 'gunter'),
                'fa fa-address-card' => esc_html__('Address Card', 'gunter'),
                'fa fa-address-card-o' => esc_html__('Address Card O', 'gunter'),
                'fa fa-adjust' => esc_html__('Adjust', 'gunter'),
                'fa fa-adn' => esc_html__('Adn', 'gunter'),
                'fa fa-align-center' => esc_html__('Align Center', 'gunter'),
                'fa fa-align-justify' => esc_html__('Align Justify', 'gunter'),
                'fa fa-align-left' => esc_html__('Align Left', 'gunter'),
                'fa fa-align-right' => esc_html__('Align Right', 'gunter'),
                'fa fa-amazon' => esc_html__('Amazon', 'gunter'),
                'fa fa-ambulance' => esc_html__('Ambulance', 'gunter'),
                'fa fa-american-sign-language-interpreting' => esc_html__('American Sign Language Interpreting', 'gunter'),
                'fa fa-anchor' => esc_html__('Anchor', 'gunter'),
                'fa fa-android' => esc_html__('Android', 'gunter'),
                'fa fa-angellist' => esc_html__('Angellist', 'gunter'),
                'fa fa-angle-double-down' => esc_html__('Angle Double Down', 'gunter'),
                'fa fa-angle-double-left' => esc_html__('Angle Double Left', 'gunter'),
                'fa fa-angle-double-right' => esc_html__('Angle Double Right', 'gunter'),
                'fa fa-angle-double-up' => esc_html__('Angle Double Up', 'gunter'),
                'fa fa-angle-down' => esc_html__('Angle Down', 'gunter'),
                'fa fa-angle-left' => esc_html__('Angle Left', 'gunter'),
                'fa fa-angle-right' => esc_html__('Angle Right', 'gunter'),
                'fa fa-angle-up' => esc_html__('Angle Up', 'gunter'),
                'fa fa-apple' => esc_html__('Apple', 'gunter'),
                'fa fa-archive' => esc_html__('Archive', 'gunter'),
                'fa fa-area-chart' => esc_html__('Area Chart', 'gunter'),
                'fa fa-arrow-circle-down' => esc_html__('Arrow Circle Down', 'gunter'),
                'fa fa-arrow-circle-left' => esc_html__('Arrow Circle Left', 'gunter'),
                'fa fa-arrow-circle-o-down' => esc_html__('Arrow Circle O Down', 'gunter'),
                'fa fa-arrow-circle-o-left' => esc_html__('Arrow Circle O Left', 'gunter'),
                'fa fa-arrow-circle-o-right' => esc_html__('Arrow Circle O Right', 'gunter'),
                'fa fa-arrow-circle-o-up' => esc_html__('Arrow Circle O Up', 'gunter'),
                'fa fa-arrow-circle-right' => esc_html__('Arrow Circle Right', 'gunter'),
                'fa fa-arrow-circle-up' => esc_html__('Arrow Circle Up', 'gunter'),
                'fa fa-arrow-down' => esc_html__('Arrow Down', 'gunter'),
                'fa fa-arrow-left' => esc_html__('Arrow Left', 'gunter'),
                'fa fa-arrow-right' => esc_html__('Arrow Right', 'gunter'),
                'fa fa-arrow-up' => esc_html__('Arrow Up', 'gunter'),
                'fa fa-arrows' => esc_html__('Arrows', 'gunter'),
                'fa fa-arrows-alt' => esc_html__('Arrows Alt', 'gunter'),
                'fa fa-arrows-h' => esc_html__('Arrows H', 'gunter'),
                'fa fa-arrows-v' => esc_html__('Arrows V', 'gunter'),
                'fa fa-assistive-listening-systems' => esc_html__('Assistive Listening Systems', 'gunter'),
                'fa fa-asterisk' => esc_html__('Asterisk', 'gunter'),
                'fa fa-at' => esc_html__('At', 'gunter'),
                'fa fa-audio-description' => esc_html__('Audio Description', 'gunter'),
                'fa fa-backward' => esc_html__('Backward', 'gunter'),
                'fa fa-balance-scale' => esc_html__('Balance Scale', 'gunter'),
                'fa fa-ban' => esc_html__('Ban', 'gunter'),
                'fa fa-bandcamp' => esc_html__('Bandcamp', 'gunter'),
                'fa fa-bar-chart' => esc_html__('Bar Chart', 'gunter'),
                'fa fa-barcode' => esc_html__('Barcode', 'gunter'),
                'fa fa-bars' => esc_html__('Bars', 'gunter'),
                'fa fa-bath' => esc_html__('Bath', 'gunter'),
                'fa fa-battery-empty' => esc_html__('Battery Empty', 'gunter'),
                'fa fa-battery-full' => esc_html__('Battery Full', 'gunter'),
                'fa fa-battery-half' => esc_html__('Battery Half', 'gunter'),
                'fa fa-battery-quarter' => esc_html__('Battery Quarter', 'gunter'),
                'fa fa-battery-three-quarters' => esc_html__('Battery Three Quarters', 'gunter'),
                'fa fa-bed' => esc_html__('Bed', 'gunter'),
                'fa fa-beer' => esc_html__('Beer', 'gunter'),
                'fa fa-behance' => esc_html__('Behance', 'gunter'),
                'fa fa-behance-square' => esc_html__('Behance Square', 'gunter'),
                'fa fa-bell' => esc_html__('Bell', 'gunter'),
                'fa fa-bell-o' => esc_html__('Bell O', 'gunter'),
                'fa fa-bell-slash' => esc_html__('Bell Slash', 'gunter'),
                'fa fa-bell-slash-o' => esc_html__('Bell Slash O', 'gunter'),
                'fa fa-bicycle' => esc_html__('Bicycle', 'gunter'),
                'fa fa-binoculars' => esc_html__('Binoculars', 'gunter'),
                'fa fa-birthday-cake' => esc_html__('Birthday Cake', 'gunter'),
                'fa fa-bitbucket' => esc_html__('Bitbucket', 'gunter'),
                'fa fa-bitbucket-square' => esc_html__('Bitbucket Square', 'gunter'),
                'fa fa-black-tie' => esc_html__('Black Tie', 'gunter'),
                'fa fa-blind' => esc_html__('Blind', 'gunter'),
                'fa fa-bluetooth' => esc_html__('Bluetooth', 'gunter'),
                'fa fa-bluetooth-b' => esc_html__('Bluetooth B', 'gunter'),
                'fa fa-bold' => esc_html__('Bold', 'gunter'),
                'fa fa-bolt' => esc_html__('Bolt', 'gunter'),
                'fa fa-bomb' => esc_html__('Bomb', 'gunter'),
                'fa fa-book' => esc_html__('Book', 'gunter'),
                'fa fa-bookmark' => esc_html__('Bookmark', 'gunter'),
                'fa fa-bookmark-o' => esc_html__('Bookmark O', 'gunter'),
                'fa fa-braille' => esc_html__('Braille', 'gunter'),
                'fa fa-briefcase' => esc_html__('Briefcase', 'gunter'),
                'fa fa-btc' => esc_html__('Btc', 'gunter'),
                'fa fa-bug' => esc_html__('Bug', 'gunter'),
                'fa fa-building' => esc_html__('Building', 'gunter'),
                'fa fa-building-o' => esc_html__('Building O', 'gunter'),
                'fa fa-bullhorn' => esc_html__('Bullhorn', 'gunter'),
                'fa fa-bullseye' => esc_html__('Bullseye', 'gunter'),
                'fa fa-bus' => esc_html__('Bus', 'gunter'),
                'fa fa-buysellads' => esc_html__('Buysellads', 'gunter'),
                'fa fa-calculator' => esc_html__('Calculator', 'gunter'),
                'fa fa-calendar' => esc_html__('Calendar', 'gunter'),
                'fa fa-calendar-check-o' => esc_html__('Calendar Check O', 'gunter'),
                'fa fa-calendar-minus-o' => esc_html__('Calendar Minus O', 'gunter'),
                'fa fa-calendar-o' => esc_html__('Calendar O', 'gunter'),
                'fa fa-calendar-plus-o' => esc_html__('Calendar Plus O', 'gunter'),
                'fa fa-calendar-times-o' => esc_html__('Calendar Times O', 'gunter'),
                'fa fa-camera' => esc_html__('Camera', 'gunter'),
                'fa fa-camera-retro' => esc_html__('Camera Retro', 'gunter'),
                'fa fa-car' => esc_html__('Car', 'gunter'),
                'fa fa-caret-down' => esc_html__('Caret Down', 'gunter'),
                'fa fa-caret-left' => esc_html__('Caret Left', 'gunter'),
                'fa fa-caret-right' => esc_html__('Caret Right', 'gunter'),
                'fa fa-caret-square-o-down' => esc_html__('Caret Square O Down', 'gunter'),
                'fa fa-caret-square-o-left' => esc_html__('Caret Square O Left', 'gunter'),
                'fa fa-caret-square-o-right' => esc_html__('Caret Square O Right', 'gunter'),
                'fa fa-caret-square-o-up' => esc_html__('Caret Square O Up', 'gunter'),
                'fa fa-caret-up' => esc_html__('Caret Up', 'gunter'),
                'fa fa-cart-arrow-down' => esc_html__('Cart Arrow Down', 'gunter'),
                'fa fa-cart-plus' => esc_html__('Cart Plus', 'gunter'),
                'fa fa-cc' => esc_html__('Cc', 'gunter'),
                'fa fa-cc-amex' => esc_html__('Cc Amex', 'gunter'),
                'fa fa-cc-diners-club' => esc_html__('Cc Diners Club', 'gunter'),
                'fa fa-cc-discover' => esc_html__('Cc Discover', 'gunter'),
                'fa fa-cc-jcb' => esc_html__('Cc Jcb', 'gunter'),
                'fa fa-cc-mastercard' => esc_html__('Cc Mastercard', 'gunter'),
                'fa fa-cc-paypal' => esc_html__('Cc Paypal', 'gunter'),
                'fa fa-cc-stripe' => esc_html__('Cc Stripe', 'gunter'),
                'fa fa-cc-visa' => esc_html__('Cc Visa', 'gunter'),
                'fa fa-certificate' => esc_html__('Certificate', 'gunter'),
                'fa fa-chain-broken' => esc_html__('Chain Broken', 'gunter'),
                'fa fa-check' => esc_html__('Check', 'gunter'),
                'fa fa-check-circle' => esc_html__('Check Circle', 'gunter'),
                'fa fa-check-circle-o' => esc_html__('Check Circle O', 'gunter'),
                'fa fa-check-square' => esc_html__('Check Square', 'gunter'),
                'fa fa-check-square-o' => esc_html__('Check Square O', 'gunter'),
                'fa fa-chevron-circle-down' => esc_html__('Chevron Circle Down', 'gunter'),
                'fa fa-chevron-circle-left' => esc_html__('Chevron Circle Left', 'gunter'),
                'fa fa-chevron-circle-right' => esc_html__('Chevron Circle Right', 'gunter'),
                'fa fa-chevron-circle-up' => esc_html__('Chevron Circle Up', 'gunter'),
                'fa fa-chevron-down' => esc_html__('Chevron Down', 'gunter'),
                'fa fa-chevron-left' => esc_html__('Chevron Left', 'gunter'),
                'fa fa-chevron-right' => esc_html__('Chevron Right', 'gunter'),
                'fa fa-chevron-up' => esc_html__('Chevron Up', 'gunter'),
                'fa fa-child' => esc_html__('Child', 'gunter'),
                'fa fa-chrome' => esc_html__('Chrome', 'gunter'),
                'fa fa-circle' => esc_html__('Circle', 'gunter'),
                'fa fa-circle-o' => esc_html__('Circle O', 'gunter'),
                'fa fa-circle-o-notch' => esc_html__('Circle O Notch', 'gunter'),
                'fa fa-circle-thin' => esc_html__('Circle Thin', 'gunter'),
                'fa fa-clipboard' => esc_html__('Clipboard', 'gunter'),
                'fa fa-clock-o' => esc_html__('Clock O', 'gunter'),
                'fa fa-clone' => esc_html__('Clone', 'gunter'),
                'fa fa-cloud' => esc_html__('Cloud', 'gunter'),
                'fa fa-cloud-download' => esc_html__('Cloud Download', 'gunter'),
                'fa fa-cloud-upload' => esc_html__('Cloud Upload', 'gunter'),
                'fa fa-code' => esc_html__('Code', 'gunter'),
                'fa fa-code-fork' => esc_html__('Code Fork', 'gunter'),
                'fa fa-codepen' => esc_html__('Codepen', 'gunter'),
                'fa fa-codiepie' => esc_html__('Codiepie', 'gunter'),
                'fa fa-coffee' => esc_html__('Coffee', 'gunter'),
                'fa fa-cog' => esc_html__('Cog', 'gunter'),
                'fa fa-cogs' => esc_html__('Cogs', 'gunter'),
                'fa fa-columns' => esc_html__('Columns', 'gunter'),
                'fa fa-comment' => esc_html__('Comment', 'gunter'),
                'fa fa-comment-o' => esc_html__('Comment O', 'gunter'),
                'fa fa-commenting' => esc_html__('Commenting', 'gunter'),
                'fa fa-commenting-o' => esc_html__('Commenting O', 'gunter'),
                'fa fa-comments' => esc_html__('Comments', 'gunter'),
                'fa fa-comments-o' => esc_html__('Comments O', 'gunter'),
                'fa fa-compass' => esc_html__('Compass', 'gunter'),
                'fa fa-compress' => esc_html__('Compress', 'gunter'),
                'fa fa-connectdevelop' => esc_html__('Connectdevelop', 'gunter'),
                'fa fa-contao' => esc_html__('Contao', 'gunter'),
                'fa fa-copyright' => esc_html__('Copyright', 'gunter'),
                'fa fa-creative-commons' => esc_html__('Creative Commons', 'gunter'),
                'fa fa-credit-card' => esc_html__('Credit Card', 'gunter'),
                'fa fa-credit-card-alt' => esc_html__('Credit Card Alt', 'gunter'),
                'fa fa-crop' => esc_html__('Crop', 'gunter'),
                'fa fa-crosshairs' => esc_html__('Crosshairs', 'gunter'),
                'fa fa-css3' => esc_html__('Css3', 'gunter'),
                'fa fa-cube' => esc_html__('Cube', 'gunter'),
                'fa fa-cubes' => esc_html__('Cubes', 'gunter'),
                'fa fa-cutlery' => esc_html__('Cutlery', 'gunter'),
                'fa fa-dashcube' => esc_html__('Dashcube', 'gunter'),
                'fa fa-database' => esc_html__('Database', 'gunter'),
                'fa fa-deaf' => esc_html__('Deaf', 'gunter'),
                'fa fa-delicious' => esc_html__('Delicious', 'gunter'),
                'fa fa-desktop' => esc_html__('Desktop', 'gunter'),
                'fa fa-deviantart' => esc_html__('Deviantart', 'gunter'),
                'fa fa-diamond' => esc_html__('Diamond', 'gunter'),
                'fa fa-digg' => esc_html__('Digg', 'gunter'),
                'fa fa-dot-circle-o' => esc_html__('Dot Circle O', 'gunter'),
                'fa fa-download' => esc_html__('Download', 'gunter'),
                'fa fa-dribbble' => esc_html__('Dribbble', 'gunter'),
                'fa fa-dropbox' => esc_html__('Dropbox', 'gunter'),
                'fa fa-drupal' => esc_html__('Drupal', 'gunter'),
                'fa fa-edge' => esc_html__('Edge', 'gunter'),
                'fa fa-eercast' => esc_html__('Eercast', 'gunter'),
                'fa fa-eject' => esc_html__('Eject', 'gunter'),
                'fa fa-ellipsis-h' => esc_html__('Ellipsis H', 'gunter'),
                'fa fa-ellipsis-v' => esc_html__('Ellipsis V', 'gunter'),
                'fa fa-empire' => esc_html__('Empire', 'gunter'),
                'fa fa-envelope' => esc_html__('Envelope', 'gunter'),
                'fa fa-envelope-o' => esc_html__('Envelope O', 'gunter'),
                'fa fa-envelope-open' => esc_html__('Envelope Open', 'gunter'),
                'fa fa-envelope-open-o' => esc_html__('Envelope Open O', 'gunter'),
                'fa fa-envelope-square' => esc_html__('Envelope Square', 'gunter'),
                'fa fa-envira' => esc_html__('Envira', 'gunter'),
                'fa fa-eraser' => esc_html__('Eraser', 'gunter'),
                'fa fa-etsy' => esc_html__('Etsy', 'gunter'),
                'fa fa-eur' => esc_html__('Eur', 'gunter'),
                'fa fa-exchange' => esc_html__('Exchange', 'gunter'),
                'fa fa-exclamation' => esc_html__('Exclamation', 'gunter'),
                'fa fa-exclamation-circle' => esc_html__('Exclamation Circle', 'gunter'),
                'fa fa-exclamation-triangle' => esc_html__('Exclamation Triangle', 'gunter'),
                'fa fa-expand' => esc_html__('Expand', 'gunter'),
                'fa fa-expeditedssl' => esc_html__('Expeditedssl', 'gunter'),
                'fa fa-external-link' => esc_html__('External Link', 'gunter'),
                'fa fa-external-link-square' => esc_html__('External Link Square', 'gunter'),
                'fa fa-eye' => esc_html__('Eye', 'gunter'),
                'fa fa-eye-slash' => esc_html__('Eye Slash', 'gunter'),
                'fa fa-eyedropper' => esc_html__('Eyedropper', 'gunter'),
                'fa fa-facebook' => esc_html__('Facebook', 'gunter'),
                'fa fa-facebook-official' => esc_html__('Facebook Official', 'gunter'),
                'fa fa-facebook-square' => esc_html__('Facebook Square', 'gunter'),
                'fa fa-fast-backward' => esc_html__('Fast Backward', 'gunter'),
                'fa fa-fast-forward' => esc_html__('Fast Forward', 'gunter'),
                'fa fa-fax' => esc_html__('Fax', 'gunter'),
                'fa fa-female' => esc_html__('Female', 'gunter'),
                'fa fa-fighter-jet' => esc_html__('Fighter Jet', 'gunter'),
                'fa fa-file' => esc_html__('File', 'gunter'),
                'fa fa-file-archive-o' => esc_html__('File Archive O', 'gunter'),
                'fa fa-file-audio-o' => esc_html__('File Audio O', 'gunter'),
                'fa fa-file-code-o' => esc_html__('File Code O', 'gunter'),
                'fa fa-file-excel-o' => esc_html__('File Excel O', 'gunter'),
                'fa fa-file-image-o' => esc_html__('File Image O', 'gunter'),
                'fa fa-file-o' => esc_html__('File O', 'gunter'),
                'fa fa-file-pdf-o' => esc_html__('File Pdf O', 'gunter'),
                'fa fa-file-powerpoint-o' => esc_html__('File Powerpoint O', 'gunter'),
                'fa fa-file-text' => esc_html__('File Text', 'gunter'),
                'fa fa-file-text-o' => esc_html__('File Text O', 'gunter'),
                'fa fa-file-video-o' => esc_html__('File Video O', 'gunter'),
                'fa fa-file-word-o' => esc_html__('File Word O', 'gunter'),
                'fa fa-files-o' => esc_html__('Files O', 'gunter'),
                'fa fa-film' => esc_html__('Film', 'gunter'),
                'fa fa-filter' => esc_html__('Filter', 'gunter'),
                'fa fa-fire' => esc_html__('Fire', 'gunter'),
                'fa fa-fire-extinguisher' => esc_html__('Fire Extinguisher', 'gunter'),
                'fa fa-firefox' => esc_html__('Firefox', 'gunter'),
                'fa fa-first-order' => esc_html__('First Order', 'gunter'),
                'fa fa-flag' => esc_html__('Flag', 'gunter'),
                'fa fa-flag-checkered' => esc_html__('Flag Checkered', 'gunter'),
                'fa fa-flag-o' => esc_html__('Flag O', 'gunter'),
                'fa fa-flask' => esc_html__('Flask', 'gunter'),
                'fa fa-flickr' => esc_html__('Flickr', 'gunter'),
                'fa fa-floppy-o' => esc_html__('Floppy O', 'gunter'),
                'fa fa-folder' => esc_html__('Folder', 'gunter'),
                'fa fa-folder-o' => esc_html__('Folder O', 'gunter'),
                'fa fa-folder-open' => esc_html__('Folder Open', 'gunter'),
                'fa fa-folder-open-o' => esc_html__('Folder Open O', 'gunter'),
                'fa fa-font' => esc_html__('Font', 'gunter'),
                'fa fa-font-awesome' => esc_html__('Font Awesome', 'gunter'),
                'fa fa-fonticons' => esc_html__('Fonticons', 'gunter'),
                'fa fa-fort-awesome' => esc_html__('Fort Awesome', 'gunter'),
                'fa fa-forumbee' => esc_html__('Forumbee', 'gunter'),
                'fa fa-forward' => esc_html__('Forward', 'gunter'),
                'fa fa-foursquare' => esc_html__('Foursquare', 'gunter'),
                'fa fa-free-code-camp' => esc_html__('Free Code Camp', 'gunter'),
                'fa fa-frown-o' => esc_html__('Frown O', 'gunter'),
                'fa fa-futbol-o' => esc_html__('Futbol O', 'gunter'),
                'fa fa-gamepad' => esc_html__('Gamepad', 'gunter'),
                'fa fa-gavel' => esc_html__('Gavel', 'gunter'),
                'fa fa-gbp' => esc_html__('Gbp', 'gunter'),
                'fa fa-genderless' => esc_html__('Genderless', 'gunter'),
                'fa fa-get-pocket' => esc_html__('Get Pocket', 'gunter'),
                'fa fa-gg' => esc_html__('Gg', 'gunter'),
                'fa fa-gg-circle' => esc_html__('Gg Circle', 'gunter'),
                'fa fa-gift' => esc_html__('Gift', 'gunter'),
                'fa fa-git' => esc_html__('Git', 'gunter'),
                'fa fa-git-square' => esc_html__('Git Square', 'gunter'),
                'fa fa-github' => esc_html__('Github', 'gunter'),
                'fa fa-github-alt' => esc_html__('Github Alt', 'gunter'),
                'fa fa-github-square' => esc_html__('Github Square', 'gunter'),
                'fa fa-gitlab' => esc_html__('Gitlab', 'gunter'),
                'fa fa-glass' => esc_html__('Glass', 'gunter'),
                'fa fa-glide' => esc_html__('Glide', 'gunter'),
                'fa fa-glide-g' => esc_html__('Glide G', 'gunter'),
                'fa fa-globe' => esc_html__('Globe', 'gunter'),
                'fa fa-google' => esc_html__('Google', 'gunter'),
                'fa fa-google-plus' => esc_html__('Google Plus', 'gunter'),
                'fa fa-google-plus-official' => esc_html__('Google Plus Official', 'gunter'),
                'fa fa-google-plus-square' => esc_html__('Google Plus Square', 'gunter'),
                'fa fa-google-wallet' => esc_html__('Google Wallet', 'gunter'),
                'fa fa-graduation-cap' => esc_html__('Graduation Cap', 'gunter'),
                'fa fa-gratipay' => esc_html__('Gratipay', 'gunter'),
                'fa fa-grav' => esc_html__('Grav', 'gunter'),
                'fa fa-h-square' => esc_html__('H Square', 'gunter'),
                'fa fa-hacker-news' => esc_html__('Hacker News', 'gunter'),
                'fa fa-hand-lizard-o' => esc_html__('Hand Lizard O', 'gunter'),
                'fa fa-hand-o-down' => esc_html__('Hand O Down', 'gunter'),
                'fa fa-hand-o-left' => esc_html__('Hand O Left', 'gunter'),
                'fa fa-hand-o-right' => esc_html__('Hand O Right', 'gunter'),
                'fa fa-hand-o-up' => esc_html__('Hand O Up', 'gunter'),
                'fa fa-hand-paper-o' => esc_html__('Hand Paper O', 'gunter'),
                'fa fa-hand-peace-o' => esc_html__('Hand Peace O', 'gunter'),
                'fa fa-hand-pointer-o' => esc_html__('Hand Pointer O', 'gunter'),
                'fa fa-hand-rock-o' => esc_html__('Hand Rock O', 'gunter'),
                'fa fa-hand-scissors-o' => esc_html__('Hand Scissors O', 'gunter'),
                'fa fa-hand-spock-o' => esc_html__('Hand Spock O', 'gunter'),
                'fa fa-handshake-o' => esc_html__('Handshake O', 'gunter'),
                'fa fa-hashtag' => esc_html__('Hashtag', 'gunter'),
                'fa fa-hdd-o' => esc_html__('Hdd O', 'gunter'),
                'fa fa-header' => esc_html__('Header', 'gunter'),
                'fa fa-headphones' => esc_html__('Headphones', 'gunter'),
                'fa fa-heart' => esc_html__('Heart', 'gunter'),
                'fa fa-heart-o' => esc_html__('Heart O', 'gunter'),
                'fa fa-heartbeat' => esc_html__('Heartbeat', 'gunter'),
                'fa fa-history' => esc_html__('History', 'gunter'),
                'fa fa-home' => esc_html__('Home', 'gunter'),
                'fa fa-hospital-o' => esc_html__('Hospital O', 'gunter'),
                'fa fa-hourglass' => esc_html__('Hourglass', 'gunter'),
                'fa fa-hourglass-end' => esc_html__('Hourglass End', 'gunter'),
                'fa fa-hourglass-half' => esc_html__('Hourglass Half', 'gunter'),
                'fa fa-hourglass-o' => esc_html__('Hourglass O', 'gunter'),
                'fa fa-hourglass-start' => esc_html__('Hourglass Start', 'gunter'),
                'fa fa-houzz' => esc_html__('Houzz', 'gunter'),
                'fa fa-html5' => esc_html__('Html5', 'gunter'),
                'fa fa-i-cursor' => esc_html__('I Cursor', 'gunter'),
                'fa fa-id-badge' => esc_html__('Id Badge', 'gunter'),
                'fa fa-id-card' => esc_html__('Id Card', 'gunter'),
                'fa fa-id-card-o' => esc_html__('Id Card O', 'gunter'),
                'fa fa-ils' => esc_html__('Ils', 'gunter'),
                'fa fa-imdb' => esc_html__('Imdb', 'gunter'),
                'fa fa-inbox' => esc_html__('Inbox', 'gunter'),
                'fa fa-indent' => esc_html__('Indent', 'gunter'),
                'fa fa-industry' => esc_html__('Industry', 'gunter'),
                'fa fa-info' => esc_html__('Info', 'gunter'),
                'fa fa-info-circle' => esc_html__('Info Circle', 'gunter'),
                'fa fa-inr' => esc_html__('Inr', 'gunter'),
                'fa fa-instagram' => esc_html__('Instagram', 'gunter'),
                'fa fa-internet-explorer' => esc_html__('Internet Explorer', 'gunter'),
                'fa fa-ioxhost' => esc_html__('Ioxhost', 'gunter'),
                'fa fa-italic' => esc_html__('Italic', 'gunter'),
                'fa fa-joomla' => esc_html__('Joomla', 'gunter'),
                'fa fa-jpy' => esc_html__('Jpy', 'gunter'),
                'fa fa-jsfiddle' => esc_html__('Jsfiddle', 'gunter'),
                'fa fa-key' => esc_html__('Key', 'gunter'),
                'fa fa-keyboard-o' => esc_html__('Keyboard O', 'gunter'),
                'fa fa-krw' => esc_html__('Krw', 'gunter'),
                'fa fa-language' => esc_html__('Language', 'gunter'),
                'fa fa-laptop' => esc_html__('Laptop', 'gunter'),
                'fa fa-lastfm' => esc_html__('Lastfm', 'gunter'),
                'fa fa-lastfm-square' => esc_html__('Lastfm Square', 'gunter'),
                'fa fa-leaf' => esc_html__('Leaf', 'gunter'),
                'fa fa-leanpub' => esc_html__('Leanpub', 'gunter'),
                'fa fa-lemon-o' => esc_html__('Lemon O', 'gunter'),
                'fa fa-level-down' => esc_html__('Level Down', 'gunter'),
                'fa fa-level-up' => esc_html__('Level Up', 'gunter'),
                'fa fa-life-ring' => esc_html__('Life Ring', 'gunter'),
                'fa fa-lightbulb-o' => esc_html__('Lightbulb O', 'gunter'),
                'fa fa-line-chart' => esc_html__('Line Chart', 'gunter'),
                'fa fa-link' => esc_html__('Link', 'gunter'),
                'fa fa-linkedin' => esc_html__('Linkedin', 'gunter'),
                'fa fa-linkedin-square' => esc_html__('Linkedin Square', 'gunter'),
                'fa fa-linode' => esc_html__('Linode', 'gunter'),
                'fa fa-linux' => esc_html__('Linux', 'gunter'),
                'fa fa-list' => esc_html__('List', 'gunter'),
                'fa fa-list-alt' => esc_html__('List Alt', 'gunter'),
                'fa fa-list-ol' => esc_html__('List Ol', 'gunter'),
                'fa fa-list-ul' => esc_html__('List Ul', 'gunter'),
                'fa fa-location-arrow' => esc_html__('Location Arrow', 'gunter'),
                'fa fa-lock' => esc_html__('Lock', 'gunter'),
                'fa fa-long-arrow-down' => esc_html__('Long Arrow Down', 'gunter'),
                'fa fa-long-arrow-left' => esc_html__('Long Arrow Left', 'gunter'),
                'fa fa-long-arrow-right' => esc_html__('Long Arrow Right', 'gunter'),
                'fa fa-long-arrow-up' => esc_html__('Long Arrow Up', 'gunter'),
                'fa fa-low-vision' => esc_html__('Low Vision', 'gunter'),
                'fa fa-magic' => esc_html__('Magic', 'gunter'),
                'fa fa-magnet' => esc_html__('Magnet', 'gunter'),
                'fa fa-male' => esc_html__('Male', 'gunter'),
                'fa fa-map' => esc_html__('Map', 'gunter'),
                'fa fa-map-marker' => esc_html__('Map Marker', 'gunter'),
                'fa fa-map-o' => esc_html__('Map O', 'gunter'),
                'fa fa-map-pin' => esc_html__('Map Pin', 'gunter'),
                'fa fa-map-signs' => esc_html__('Map Signs', 'gunter'),
                'fa fa-mars' => esc_html__('Mars', 'gunter'),
                'fa fa-mars-double' => esc_html__('Mars Double', 'gunter'),
                'fa fa-mars-stroke' => esc_html__('Mars Stroke', 'gunter'),
                'fa fa-mars-stroke-h' => esc_html__('Mars Stroke H', 'gunter'),
                'fa fa-mars-stroke-v' => esc_html__('Mars Stroke V', 'gunter'),
                'fa fa-maxcdn' => esc_html__('Maxcdn', 'gunter'),
                'fa fa-meanpath' => esc_html__('Meanpath', 'gunter'),
                'fa fa-medium' => esc_html__('Medium', 'gunter'),
                'fa fa-medkit' => esc_html__('Medkit', 'gunter'),
                'fa fa-meetup' => esc_html__('Meetup', 'gunter'),
                'fa fa-meh-o' => esc_html__('Meh O', 'gunter'),
                'fa fa-mercury' => esc_html__('Mercury', 'gunter'),
                'fa fa-microchip' => esc_html__('Microchip', 'gunter'),
                'fa fa-microphone' => esc_html__('Microphone', 'gunter'),
                'fa fa-microphone-slash' => esc_html__('Microphone Slash', 'gunter'),
                'fa fa-minus' => esc_html__('Minus', 'gunter'),
                'fa fa-minus-circle' => esc_html__('Minus Circle', 'gunter'),
                'fa fa-minus-square' => esc_html__('Minus Square', 'gunter'),
                'fa fa-minus-square-o' => esc_html__('Minus Square O', 'gunter'),
                'fa fa-mixcloud' => esc_html__('Mixcloud', 'gunter'),
                'fa fa-mobile' => esc_html__('Mobile', 'gunter'),
                'fa fa-modx' => esc_html__('Modx', 'gunter'),
                'fa fa-money' => esc_html__('Money', 'gunter'),
                'fa fa-moon-o' => esc_html__('Moon O', 'gunter'),
                'fa fa-motorcycle' => esc_html__('Motorcycle', 'gunter'),
                'fa fa-mouse-pointer' => esc_html__('Mouse Pointer', 'gunter'),
                'fa fa-music' => esc_html__('Music', 'gunter'),
                'fa fa-neuter' => esc_html__('Neuter', 'gunter'),
                'fa fa-newspaper-o' => esc_html__('Newspaper O', 'gunter'),
                'fa fa-object-group' => esc_html__('Object Group', 'gunter'),
                'fa fa-object-ungroup' => esc_html__('Object Ungroup', 'gunter'),
                'fa fa-odnoklassniki' => esc_html__('Odnoklassniki', 'gunter'),
                'fa fa-odnoklassniki-square' => esc_html__('Odnoklassniki Square', 'gunter'),
                'fa fa-opencart' => esc_html__('Opencart', 'gunter'),
                'fa fa-openid' => esc_html__('Openid', 'gunter'),
                'fa fa-opera' => esc_html__('Opera', 'gunter'),
                'fa fa-optin-monster' => esc_html__('Optin Monster', 'gunter'),
                'fa fa-outdent' => esc_html__('Outdent', 'gunter'),
                'fa fa-pagelines' => esc_html__('Pagelines', 'gunter'),
                'fa fa-paint-brush' => esc_html__('Paint Brush', 'gunter'),
                'fa fa-paper-plane' => esc_html__('Paper Plane', 'gunter'),
                'fa fa-paper-plane-o' => esc_html__('Paper Plane O', 'gunter'),
                'fa fa-paperclip' => esc_html__('Paperclip', 'gunter'),
                'fa fa-paragraph' => esc_html__('Paragraph', 'gunter'),
                'fa fa-pause' => esc_html__('Pause', 'gunter'),
                'fa fa-pause-circle' => esc_html__('Pause Circle', 'gunter'),
                'fa fa-pause-circle-o' => esc_html__('Pause Circle O', 'gunter'),
                'fa fa-paw' => esc_html__('Paw', 'gunter'),
                'fa fa-paypal' => esc_html__('Paypal', 'gunter'),
                'fa fa-pencil' => esc_html__('Pencil', 'gunter'),
                'fa fa-pencil-square' => esc_html__('Pencil Square', 'gunter'),
                'fa fa-pencil-square-o' => esc_html__('Pencil Square O', 'gunter'),
                'fa fa-percent' => esc_html__('Percent', 'gunter'),
                'fa fa-phone' => esc_html__('Phone', 'gunter'),
                'fa fa-phone-square' => esc_html__('Phone Square', 'gunter'),
                'fa fa-picture-o' => esc_html__('Picture O', 'gunter'),
                'fa fa-pie-chart' => esc_html__('Pie Chart', 'gunter'),
                'fa fa-pied-piper' => esc_html__('Pied Piper', 'gunter'),
                'fa fa-pied-piper-alt' => esc_html__('Pied Piper Alt', 'gunter'),
                'fa fa-pied-piper-pp' => esc_html__('Pied Piper Pp', 'gunter'),
                'fa fa-pinterest' => esc_html__('Pinterest', 'gunter'),
                'fa fa-pinterest-p' => esc_html__('Pinterest P', 'gunter'),
                'fa fa-pinterest-square' => esc_html__('Pinterest Square', 'gunter'),
                'fa fa-plane' => esc_html__('Plane', 'gunter'),
                'fa fa-play' => esc_html__('Play', 'gunter'),
                'fa fa-play-circle' => esc_html__('Play Circle', 'gunter'),
                'fa fa-play-circle-o' => esc_html__('Play Circle O', 'gunter'),
                'fa fa-plug' => esc_html__('Plug', 'gunter'),
                'fa fa-plus' => esc_html__('Plus', 'gunter'),
                'fa fa-plus-circle' => esc_html__('Plus Circle', 'gunter'),
                'fa fa-plus-square' => esc_html__('Plus Square', 'gunter'),
                'fa fa-plus-square-o' => esc_html__('Plus Square O', 'gunter'),
                'fa fa-podcast' => esc_html__('Podcast', 'gunter'),
                'fa fa-power-off' => esc_html__('Power Off', 'gunter'),
                'fa fa-print' => esc_html__('Print', 'gunter'),
                'fa fa-product-hunt' => esc_html__('Product Hunt', 'gunter'),
                'fa fa-puzzle-piece' => esc_html__('Puzzle Piece', 'gunter'),
                'fa fa-qq' => esc_html__('Qq', 'gunter'),
                'fa fa-qrcode' => esc_html__('Qrcode', 'gunter'),
                'fa fa-question' => esc_html__('Question', 'gunter'),
                'fa fa-question-circle' => esc_html__('Question Circle', 'gunter'),
                'fa fa-question-circle-o' => esc_html__('Question Circle O', 'gunter'),
                'fa fa-quora' => esc_html__('Quora', 'gunter'),
                'fa fa-quote-left' => esc_html__('Quote Left', 'gunter'),
                'fa fa-quote-right' => esc_html__('Quote Right', 'gunter'),
                'fa fa-random' => esc_html__('Random', 'gunter'),
                'fa fa-ravelry' => esc_html__('Ravelry', 'gunter'),
                'fa fa-rebel' => esc_html__('Rebel', 'gunter'),
                'fa fa-recycle' => esc_html__('Recycle', 'gunter'),
                'fa fa-reddit' => esc_html__('Reddit', 'gunter'),
                'fa fa-reddit-alien' => esc_html__('Reddit Alien', 'gunter'),
                'fa fa-reddit-square' => esc_html__('Reddit Square', 'gunter'),
                'fa fa-refresh' => esc_html__('Refresh', 'gunter'),
                'fa fa-registered' => esc_html__('Registered', 'gunter'),
                'fa fa-renren' => esc_html__('Renren', 'gunter'),
                'fa fa-repeat' => esc_html__('Repeat', 'gunter'),
                'fa fa-reply' => esc_html__('Reply', 'gunter'),
                'fa fa-reply-all' => esc_html__('Reply All', 'gunter'),
                'fa fa-retweet' => esc_html__('Retweet', 'gunter'),
                'fa fa-road' => esc_html__('Road', 'gunter'),
                'fa fa-rocket' => esc_html__('Rocket', 'gunter'),
                'fa fa-rss' => esc_html__('Rss', 'gunter'),
                'fa fa-rss-square' => esc_html__('Rss Square', 'gunter'),
                'fa fa-rub' => esc_html__('Rub', 'gunter'),
                'fa fa-safari' => esc_html__('Safari', 'gunter'),
                'fa fa-scissors' => esc_html__('Scissors', 'gunter'),
                'fa fa-scribd' => esc_html__('Scribd', 'gunter'),
                'fa fa-search' => esc_html__('Search', 'gunter'),
                'fa fa-search-minus' => esc_html__('Search Minus', 'gunter'),
                'fa fa-search-plus' => esc_html__('Search Plus', 'gunter'),
                'fa fa-sellsy' => esc_html__('Sellsy', 'gunter'),
                'fa fa-server' => esc_html__('Server', 'gunter'),
                'fa fa-share' => esc_html__('Share', 'gunter'),
                'fa fa-share-alt' => esc_html__('Share Alt', 'gunter'),
                'fa fa-share-alt-square' => esc_html__('Share Alt Square', 'gunter'),
                'fa fa-share-square' => esc_html__('Share Square', 'gunter'),
                'fa fa-share-square-o' => esc_html__('Share Square O', 'gunter'),
                'fa fa-shield' => esc_html__('Shield', 'gunter'),
                'fa fa-ship' => esc_html__('Ship', 'gunter'),
                'fa fa-shirtsinbulk' => esc_html__('Shirtsinbulk', 'gunter'),
                'fa fa-shopping-bag' => esc_html__('Shopping Bag', 'gunter'),
                'fa fa-shopping-basket' => esc_html__('Shopping Basket', 'gunter'),
                'fa fa-shopping-cart' => esc_html__('Shopping Cart', 'gunter'),
                'fa fa-shower' => esc_html__('Shower', 'gunter'),
                'fa fa-sign-in' => esc_html__('Sign In', 'gunter'),
                'fa fa-sign-language' => esc_html__('Sign Language', 'gunter'),
                'fa fa-sign-out' => esc_html__('Sign Out', 'gunter'),
                'fa fa-signal' => esc_html__('Signal', 'gunter'),
                'fa fa-simplybuilt' => esc_html__('Simplybuilt', 'gunter'),
                'fa fa-sitemap' => esc_html__('Sitemap', 'gunter'),
                'fa fa-skyatlas' => esc_html__('Skyatlas', 'gunter'),
                'fa fa-skype' => esc_html__('Skype', 'gunter'),
                'fa fa-slack' => esc_html__('Slack', 'gunter'),
                'fa fa-sliders' => esc_html__('Sliders', 'gunter'),
                'fa fa-slideshare' => esc_html__('Slideshare', 'gunter'),
                'fa fa-smile-o' => esc_html__('Smile O', 'gunter'),
                'fa fa-snapchat' => esc_html__('Snapchat', 'gunter'),
                'fa fa-snapchat-ghost' => esc_html__('Snapchat Ghost', 'gunter'),
                'fa fa-snapchat-square' => esc_html__('Snapchat Square', 'gunter'),
                'fa fa-snowflake-o' => esc_html__('Snowflake O', 'gunter'),
                'fa fa-sort' => esc_html__('Sort', 'gunter'),
                'fa fa-sort-alpha-asc' => esc_html__('Sort Alpha Asc', 'gunter'),
                'fa fa-sort-alpha-desc' => esc_html__('Sort Alpha Desc', 'gunter'),
                'fa fa-sort-amount-asc' => esc_html__('Sort Amount Asc', 'gunter'),
                'fa fa-sort-amount-desc' => esc_html__('Sort Amount Desc', 'gunter'),
                'fa fa-sort-asc' => esc_html__('Sort Asc', 'gunter'),
                'fa fa-sort-desc' => esc_html__('Sort Desc', 'gunter'),
                'fa fa-sort-numeric-asc' => esc_html__('Sort Numeric Asc', 'gunter'),
                'fa fa-sort-numeric-desc' => esc_html__('Sort Numeric Desc', 'gunter'),
                'fa fa-soundcloud' => esc_html__('Soundcloud', 'gunter'),
                'fa fa-space-shuttle' => esc_html__('Space Shuttle', 'gunter'),
                'fa fa-spinner' => esc_html__('Spinner', 'gunter'),
                'fa fa-spoon' => esc_html__('Spoon', 'gunter'),
                'fa fa-spotify' => esc_html__('Spotify', 'gunter'),
                'fa fa-square' => esc_html__('Square', 'gunter'),
                'fa fa-square-o' => esc_html__('Square O', 'gunter'),
                'fa fa-stack-exchange' => esc_html__('Stack Exchange', 'gunter'),
                'fa fa-stack-overflow' => esc_html__('Stack Overflow', 'gunter'),
                'fa fa-star' => esc_html__('Star', 'gunter'),
                'fa fa-star-half' => esc_html__('Star Half', 'gunter'),
                'fa fa-star-half-o' => esc_html__('Star Half O', 'gunter'),
                'fa fa-star-o' => esc_html__('Star O', 'gunter'),
                'fa fa-steam' => esc_html__('Steam', 'gunter'),
                'fa fa-steam-square' => esc_html__('Steam Square', 'gunter'),
                'fa fa-step-backward' => esc_html__('Step Backward', 'gunter'),
                'fa fa-step-forward' => esc_html__('Step Forward', 'gunter'),
                'fa fa-stethoscope' => esc_html__('Stethoscope', 'gunter'),
                'fa fa-sticky-note' => esc_html__('Sticky Note', 'gunter'),
                'fa fa-sticky-note-o' => esc_html__('Sticky Note O', 'gunter'),
                'fa fa-stop' => esc_html__('Stop', 'gunter'),
                'fa fa-stop-circle' => esc_html__('Stop Circle', 'gunter'),
                'fa fa-stop-circle-o' => esc_html__('Stop Circle O', 'gunter'),
                'fa fa-street-view' => esc_html__('Street View', 'gunter'),
                'fa fa-strikethrough' => esc_html__('Strikethrough', 'gunter'),
                'fa fa-stumbleupon' => esc_html__('Stumbleupon', 'gunter'),
                'fa fa-stumbleupon-circle' => esc_html__('Stumbleupon Circle', 'gunter'),
                'fa fa-subscript' => esc_html__('Subscript', 'gunter'),
                'fa fa-subway' => esc_html__('Subway', 'gunter'),
                'fa fa-suitcase' => esc_html__('Suitcase', 'gunter'),
                'fa fa-sun-o' => esc_html__('Sun O', 'gunter'),
                'fa fa-superpowers' => esc_html__('Superpowers', 'gunter'),
                'fa fa-superscript' => esc_html__('Superscript', 'gunter'),
                'fa fa-table' => esc_html__('Table', 'gunter'),
                'fa fa-tablet' => esc_html__('Tablet', 'gunter'),
                'fa fa-tachometer' => esc_html__('Tachometer', 'gunter'),
                'fa fa-tag' => esc_html__('Tag', 'gunter'),
                'fa fa-tags' => esc_html__('Tags', 'gunter'),
                'fa fa-tasks' => esc_html__('Tasks', 'gunter'),
                'fa fa-taxi' => esc_html__('Taxi', 'gunter'),
                'fa fa-telegram' => esc_html__('Telegram', 'gunter'),
                'fa fa-television' => esc_html__('Television', 'gunter'),
                'fa fa-tencent-weibo' => esc_html__('Tencent Weibo', 'gunter'),
                'fa fa-terminal' => esc_html__('Terminal', 'gunter'),
                'fa fa-text-height' => esc_html__('Text Height', 'gunter'),
                'fa fa-text-width' => esc_html__('Text Width', 'gunter'),
                'fa fa-th' => esc_html__('Th', 'gunter'),
                'fa fa-th-large' => esc_html__('Th Large', 'gunter'),
                'fa fa-th-list' => esc_html__('Th List', 'gunter'),
                'fa fa-themeisle' => esc_html__('Themeisle', 'gunter'),
                'fa fa-thermometer-empty' => esc_html__('Thermometer Empty', 'gunter'),
                'fa fa-thermometer-full' => esc_html__('Thermometer Full', 'gunter'),
                'fa fa-thermometer-half' => esc_html__('Thermometer Half', 'gunter'),
                'fa fa-thermometer-quarter' => esc_html__('Thermometer Quarter', 'gunter'),
                'fa fa-thermometer-three-quarters' => esc_html__('Thermometer Three Quarters', 'gunter'),
                'fa fa-thumb-tack' => esc_html__('Thumb Tack', 'gunter'),
                'fa fa-thumbs-down' => esc_html__('Thumbs Down', 'gunter'),
                'fa fa-thumbs-o-down' => esc_html__('Thumbs O Down', 'gunter'),
                'fa fa-thumbs-o-up' => esc_html__('Thumbs O Up', 'gunter'),
                'fa fa-thumbs-up' => esc_html__('Thumbs Up', 'gunter'),
                'fa fa-ticket' => esc_html__('Ticket', 'gunter'),
                'fa fa-times' => esc_html__('Times', 'gunter'),
                'fa fa-times-circle' => esc_html__('Times Circle', 'gunter'),
                'fa fa-times-circle-o' => esc_html__('Times Circle O', 'gunter'),
                'fa fa-tint' => esc_html__('Tint', 'gunter'),
                'fa fa-toggle-off' => esc_html__('Toggle Off', 'gunter'),
                'fa fa-toggle-on' => esc_html__('Toggle On', 'gunter'),
                'fa fa-trademark' => esc_html__('Trademark', 'gunter'),
                'fa fa-train' => esc_html__('Train', 'gunter'),
                'fa fa-transgender' => esc_html__('Transgender', 'gunter'),
                'fa fa-transgender-alt' => esc_html__('Transgender Alt', 'gunter'),
                'fa fa-trash' => esc_html__('Trash', 'gunter'),
                'fa fa-trash-o' => esc_html__('Trash O', 'gunter'),
                'fa fa-tree' => esc_html__('Tree', 'gunter'),
                'fa fa-trello' => esc_html__('Trello', 'gunter'),
                'fa fa-tripadvisor' => esc_html__('Tripadvisor', 'gunter'),
                'fa fa-trophy' => esc_html__('Trophy', 'gunter'),
                'fa fa-truck' => esc_html__('Truck', 'gunter'),
                'fa fa-try' => esc_html__('Try', 'gunter'),
                'fa fa-tty' => esc_html__('Tty', 'gunter'),
                'fa fa-tumblr' => esc_html__('Tumblr', 'gunter'),
                'fa fa-tumblr-square' => esc_html__('Tumblr Square', 'gunter'),
                'fa fa-twitch' => esc_html__('Twitch', 'gunter'),
                'fa fa-twitter' => esc_html__('Twitter', 'gunter'),
                'fa fa-twitter-square' => esc_html__('Twitter Square', 'gunter'),
                'fa fa-umbrella' => esc_html__('Umbrella', 'gunter'),
                'fa fa-underline' => esc_html__('Underline', 'gunter'),
                'fa fa-undo' => esc_html__('Undo', 'gunter'),
                'fa fa-universal-access' => esc_html__('Universal Access', 'gunter'),
                'fa fa-university' => esc_html__('University', 'gunter'),
                'fa fa-unlock' => esc_html__('Unlock', 'gunter'),
                'fa fa-unlock-alt' => esc_html__('Unlock Alt', 'gunter'),
                'fa fa-upload' => esc_html__('Upload', 'gunter'),
                'fa fa-usb' => esc_html__('Usb', 'gunter'),
                'fa fa-usd' => esc_html__('Usd', 'gunter'),
                'fa fa-user' => esc_html__('User', 'gunter'),
                'fa fa-user-circle' => esc_html__('User Circle', 'gunter'),
                'fa fa-user-circle-o' => esc_html__('User Circle O', 'gunter'),
                'fa fa-user-md' => esc_html__('User Md', 'gunter'),
                'fa fa-user-o' => esc_html__('User O', 'gunter'),
                'fa fa-user-plus' => esc_html__('User Plus', 'gunter'),
                'fa fa-user-secret' => esc_html__('User Secret', 'gunter'),
                'fa fa-user-times' => esc_html__('User Times', 'gunter'),
                'fa fa-users' => esc_html__('Users', 'gunter'),
                'fa fa-venus' => esc_html__('Venus', 'gunter'),
                'fa fa-venus-double' => esc_html__('Venus Double', 'gunter'),
                'fa fa-venus-mars' => esc_html__('Venus Mars', 'gunter'),
                'fa fa-viacoin' => esc_html__('Viacoin', 'gunter'),
                'fa fa-viadeo' => esc_html__('Viadeo', 'gunter'),
                'fa fa-viadeo-square' => esc_html__('Viadeo Square', 'gunter'),
                'fa fa-video-camera' => esc_html__('Video Camera', 'gunter'),
                'fa fa-vimeo' => esc_html__('Vimeo', 'gunter'),
                'fa fa-vimeo-square' => esc_html__('Vimeo Square', 'gunter'),
                'fa fa-vine' => esc_html__('Vine', 'gunter'),
                'fa fa-vk' => esc_html__('Vk', 'gunter'),
                'fa fa-volume-control-phone' => esc_html__('Volume Control Phone', 'gunter'),
                'fa fa-volume-down' => esc_html__('Volume Down', 'gunter'),
                'fa fa-volume-off' => esc_html__('Volume Off', 'gunter'),
                'fa fa-volume-up' => esc_html__('Volume Up', 'gunter'),
                'fa fa-weibo' => esc_html__('Weibo', 'gunter'),
                'fa fa-weixin' => esc_html__('Weixin', 'gunter'),
                'fa fa-whatsapp' => esc_html__('Whatsapp', 'gunter'),
                'fa fa-wheelchair' => esc_html__('Wheelchair', 'gunter'),
                'fa fa-wheelchair-alt' => esc_html__('Wheelchair Alt', 'gunter'),
                'fa fa-wifi' => esc_html__('Wifi', 'gunter'),
                'fa fa-wikipedia-w' => esc_html__('Wikipedia W', 'gunter'),
                'fa fa-window-close' => esc_html__('Window Close', 'gunter'),
                'fa fa-window-close-o' => esc_html__('Window Close O', 'gunter'),
                'fa fa-window-maximize' => esc_html__('Window Maximize', 'gunter'),
                'fa fa-window-minimize' => esc_html__('Window Minimize', 'gunter'),
                'fa fa-window-restore' => esc_html__('Window Restore', 'gunter'),
                'fa fa-windows' => esc_html__('Windows', 'gunter'),
                'fa fa-wordpress' => esc_html__('Wordpress', 'gunter'),
                'fa fa-wpbeginner' => esc_html__('Wpbeginner', 'gunter'),
                'fa fa-wpexplorer' => esc_html__('Wpexplorer', 'gunter'),
                'fa fa-wpforms' => esc_html__('Wpforms', 'gunter'),
                'fa fa-wrench' => esc_html__('Wrench', 'gunter'),
                'fa fa-xing' => esc_html__('Xing', 'gunter'),
                'fa fa-xing-square' => esc_html__('Xing Square', 'gunter'),
                'fa fa-y-combinator' => esc_html__('Y Combinator', 'gunter'),
                'fa fa-yahoo' => esc_html__('Yahoo', 'gunter'),
                'fa fa-yelp' => esc_html__('Yelp', 'gunter'),
                'fa fa-yoast' => esc_html__('Yoast', 'gunter'),
                'fa fa-youtube' => esc_html__('Youtube', 'gunter'),
                'fa fa-youtube-play' => esc_html__('Youtube Play', 'gunter'),
                'fa fa-youtube-square' => esc_html__('Youtube Square', 'gunter'),
            /*All Icon*/
        );

    return $args_options;
}

if(function_exists('vc_disable_frontend')){
    vc_disable_frontend();
}

function gunter_function_pcs() {
	$purchase_code = htmlspecialchars(get_option( 'gunter_purchase_code' ));
	$purchase_code = str_replace(' ', '', $purchase_code);
	if( $purchase_code != '' ){
		require get_template_directory().'/inc/verify/class.verify-purchase.php';
		$o = EnvatoApi2::verifyPurchase( $purchase_code );

		if ( is_object($o) && strpos($o->item_name, 'Gunter') !== false ) {

			// Check in localhost
			$whitelist = array(
				'127.0.0.1',
				'::1'
			);

			if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){ // In server
				$url 			= 'https://api.envytheme.com/api/v1/license';
				$purchaseKey 	= $purchase_code;
				$itemName 		= $o->item_name;
				$buyer 			= $o->buyer;
				$purchasedAt 	= $o->created_at;
				$supportUntil 	= $o->supported_until;
				$licenseType 	= $o->licence;
				$domain 		= get_site_url();
				$post_url 		= '';

				$post_url .= $url.'?purchaseKey='.$purchaseKey.'&itemName='.$itemName.'&buyer='.$buyer.'&purchasedAt='.$purchasedAt.'&supportUntil='.$supportUntil.'&licenseType='.$licenseType.'&domain='.$domain.'';

				$post_url = str_replace(' ', '%', $post_url);

				$curl = curl_init();

				curl_setopt_array($curl, array(
					CURLOPT_URL 			=> $post_url,
					CURLOPT_RETURNTRANSFER 	=> true,
					CURLOPT_ENCODING 		=> "",
					CURLOPT_MAXREDIRS		=> 10,
					CURLOPT_TIMEOUT 		=> 30,
					CURLOPT_HTTP_VERSION 	=> CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST 	=> "POST",
					CURLOPT_HTTPHEADER 		=> array(
						"cache-control: no-cache",
						"content-type: application/x-www-form-urlencoded"
					),
					CURLOPT_SSL_VERIFYPEER => false,
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);

				if ($err) {
					echo "cURL Error #:" . $err;
				} else {
					$json = json_decode($response);
					$already_registered = $json->message[0]; // Already registered

					$new_response = '';
					$new_response .= 'Congratulations! Updated for this domain '.$domain.'';
					preg_match_all('#https?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $already_registered, $match);
					$url 			= $match[0];
					$protocols 		= array('http://', 'http://www.', 'www.', 'https://', 'https://www.');
					$domain_name 	= str_replace( $protocols, '', $url[0] );
					$site_url 		= str_replace( $protocols, '', get_site_url() );

					if( $already_registered != '' ){
						if( $already_registered == $new_response ):
							update_option('gunter_purchase_code_status', 'valid', 'yes');
							update_option('gunter_purchase_valid_code',  $purchase_code, 'yes');
							update_option('gunter_valid_url',  $domain, 'yes');
							update_option('valid_url', get_site_url(), 'yes');
							?><script>let date = new Date(Date.now() + 604800);	date = date.toUTCString(); document.cookie = "ET_L_Status=<?php echo $purchase_code; ?>; expires=" + date; </script><?php
						elseif( $domain_name == $site_url ):
							/* Deregister  */
								$url 			= 'https://api.envytheme.com/api/v1/license';
								$purchaseKey 	= $purchase_code;
								$status 		= 'disabled';
								$post_url = '';
								$post_url .= $url.'?purchaseKey='.$purchaseKey.'&status='.$status.'';
								$post_url = str_replace(' ', '%', $post_url);
								$curl = curl_init();
								curl_setopt_array($curl, array(
									CURLOPT_URL 			=> $post_url,
									CURLOPT_RETURNTRANSFER 	=> true,
									CURLOPT_ENCODING 		=> "",
									CURLOPT_MAXREDIRS 		=> 10,
									CURLOPT_TIMEOUT 		=> 30,
									CURLOPT_HTTP_VERSION 	=> CURL_HTTP_VERSION_1_1,
									CURLOPT_CUSTOMREQUEST 	=> "PUT",
									CURLOPT_HTTPHEADER 		=> array(
										"cache-control: no-cache",
										"content-type: application/x-www-form-urlencoded"
									),
									CURLOPT_SSL_VERIFYPEER => false,
								));

								$response = curl_exec($curl);
								$err = curl_error($curl);
								curl_close($curl);
							/* Deregister */

							/* Register */
								$url 			= 'https://api.envytheme.com/api/v1/license';
								$purchaseKey 	= $purchase_code;
								$itemName 		= $o->item_name;
								$buyer 			= $o->buyer;
								$purchasedAt 	= $o->created_at;
								$supportUntil 	= $o->supported_until;
								$licenseType 	= $o->licence;
								$domain 		= get_site_url();
								$post_url 		= '';

								$post_url .= $url.'?purchaseKey='.$purchaseKey.'&itemName='.$itemName.'&buyer='.$buyer.'&purchasedAt='.$purchasedAt.'&supportUntil='.$supportUntil.'&licenseType='.$licenseType.'&domain='.$domain.'';

								$post_url = str_replace(' ', '%', $post_url);

								$curl = curl_init();

								curl_setopt_array($curl, array(
								CURLOPT_URL => $post_url,
								CURLOPT_RETURNTRANSFER => true,
								CURLOPT_ENCODING => "",
								CURLOPT_MAXREDIRS => 10,
								CURLOPT_TIMEOUT => 30,
								CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
								CURLOPT_CUSTOMREQUEST => "POST",
								CURLOPT_HTTPHEADER => array(
									"cache-control: no-cache",
									"content-type: application/x-www-form-urlencoded"
								),
								CURLOPT_SSL_VERIFYPEER => false,
								));

								$response = curl_exec($curl);
								$err = curl_error($curl);
								curl_close($curl);
							/* Register */

							update_option('gunter_purchase_code_status', 'valid', 'yes');
							update_option('gunter_purchase_valid_code',  $purchase_code, 'yes');
							update_option('gunter_valid_url',  $domain, 'yes');
							update_option('valid_url', get_site_url(), 'yes');
							?><script>let date = new Date(Date.now() + 604800);	date = date.toUTCString(); document.cookie = "ET_L_Status=<?php echo $purchase_code; ?>; expires=" + date; </script><?php
						else:
							$target_site 	= $url[0];
							$src 			= file_get_contents( $target_site );
							preg_match("/\<link rel='stylesheet' id='gunter-style-css'.*href='(.*?style\.css.*?)'.*\>/i", $src, $matches );

							if( $matches ) { // if theme found
								update_option('gunter_purchase_code_status', 'already_registered', 'yes');
								update_option('gunter_already_registered', $already_registered, 'yes');
							}else{
								/* Deregister  */
									$url 			= 'https://api.envytheme.com/api/v1/license';
									$purchaseKey 	= $purchase_code;
									$status 		= 'disabled';
									$post_url = '';
									$post_url .= $url.'?purchaseKey='.$purchaseKey.'&status='.$status.'';
									$post_url = str_replace(' ', '%', $post_url);
									$curl = curl_init();
									curl_setopt_array($curl, array(
										CURLOPT_URL 			=> $post_url,
										CURLOPT_RETURNTRANSFER 	=> true,
										CURLOPT_ENCODING 		=> "",
										CURLOPT_MAXREDIRS 		=> 10,
										CURLOPT_TIMEOUT 		=> 30,
										CURLOPT_HTTP_VERSION 	=> CURL_HTTP_VERSION_1_1,
										CURLOPT_CUSTOMREQUEST 	=> "PUT",
										CURLOPT_HTTPHEADER 		=> array(
											"cache-control: no-cache",
											"content-type: application/x-www-form-urlencoded"
										),
										CURLOPT_SSL_VERIFYPEER => false,
									));

									$response = curl_exec($curl);
									$err = curl_error($curl);
									curl_close($curl);
								/* Deregister */

								/* Register */
									$url 			= 'https://api.envytheme.com/api/v1/license';
									$purchaseKey 	= $purchase_code;
									$itemName 		= $o->item_name;
									$buyer 			= $o->buyer;
									$purchasedAt 	= $o->created_at;
									$supportUntil 	= $o->supported_until;
									$licenseType 	= $o->licence;
									$domain 		= get_site_url();
									$post_url 		= '';

									$post_url .= $url.'?purchaseKey='.$purchaseKey.'&itemName='.$itemName.'&buyer='.$buyer.'&purchasedAt='.$purchasedAt.'&supportUntil='.$supportUntil.'&licenseType='.$licenseType.'&domain='.$domain.'';

									$post_url = str_replace(' ', '%', $post_url);

									$curl = curl_init();

									curl_setopt_array($curl, array(
									CURLOPT_URL => $post_url,
									CURLOPT_RETURNTRANSFER => true,
									CURLOPT_ENCODING => "",
									CURLOPT_MAXREDIRS => 10,
									CURLOPT_TIMEOUT => 30,
									CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
									CURLOPT_CUSTOMREQUEST => "POST",
									CURLOPT_HTTPHEADER => array(
										"cache-control: no-cache",
										"content-type: application/x-www-form-urlencoded"
									),
									CURLOPT_SSL_VERIFYPEER => false,
									));

									$response = curl_exec($curl);
									$err = curl_error($curl);
									curl_close($curl);
								/* Register */
							}
						endif;
					}else {
						update_option('gunter_purchase_code_status', 'valid', 'yes');
						update_option('gunter_purchase_valid_code',  $purchase_code, 'yes');
						update_option('gunter_valid_url',  $domain, 'yes');
						update_option('valid_url', get_site_url(), 'yes');
						?><script>let date = new Date(Date.now() + 604800);	date = date.toUTCString(); document.cookie = "ET_L_Status=<?php echo $purchase_code; ?>; expires=" + date; </script><?php
					}

				}

			}else{ // In local
				$domain = get_site_url();
				update_option('gunter_purchase_code_status', 'valid', 'yes');
				update_option('gunter_purchase_valid_code',  $purchase_code, 'yes');
				update_option('gunter_valid_url',  $domain, 'yes');
			}
		} elseif( $purchase_code == '' ){
			update_option( 'gunter_purchase_code_status', '', 'yes' );
			update_option( 'gunter_purchase_code', '', 'yes' );
		}
	}
}

add_action( 'admin_bar_menu', 'gunter_header_options', 500 );
function gunter_header_options ( WP_Admin_Bar $admin_bar ) {
    global $wp;
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if ( $actual_link == home_url('/wp-admin/admin.php?page=gunter') ){
		return '';
	}else{
		$site_url 	= get_site_url();
		$valid_url 	= get_option( 'valid_url' );

		if( current_user_can('administrator') ) {
			if(!isset($_COOKIE['ET_L_Status'])) {
				gunter_function_pcs();
			}elseif( $site_url !=  $valid_url) {
				gunter_function_pcs();
			}else{
				?><script>let date = new Date(Date.now() - 604800);	date = date.toUTCString(); document.cookie = "ET_L_Status=<?php echo $purchase_code; ?>; expires=" + date; </script><?php
			}
		}
	}
}

update_option('gunter_purchase_code_status', 'valid', 'yes');