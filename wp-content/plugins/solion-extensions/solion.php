<?php

/*
Plugin Name: Solion Extensions
Plugin URI: https://creativedigital.tech/solion
Description: Solion Extensions For solion WordPress Theme
Author: WordPressRiver
Version: 1.0.1
Author URI: https://creativedigital.tech/solion
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
     die ('Silly human what are you doing here');
}

// Before VC Init

add_action( 'vc_before_init', 'solion_vc_before_init_actions' );

function solion_vc_before_init_actions() {

	// Home 1

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/hero.php');

		// Services

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/services/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/services/title.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/services/grid.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/services/services.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/services/end.php');

		// About

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/about/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/about/counter.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/about/end.php');

		// Work

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/work/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/work/work.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/work/work2.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/work/end.php');

		// Choose

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/choose.php');

		// Team

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team/team-notitle.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team/team.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team/end.php');

		// Team Version Two

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team2/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team2/title.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team2/team2.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team2/end.php');

		// Testimonial

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/testimonial/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/testimonial/testimonial.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/testimonial/end.php');

		// Case Studies

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/case/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/case/case.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/case/end.php');

		// Contact

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/contact/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/contact/contact.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/contact/title.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/contact/end.php');

	// Pages

		// About

		// Choose Section

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/choose.php');

		// Counter Section

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/counter/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/counter/counter.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/counter/end.php');

		// Faq Section

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/faq/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/faq/faq.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/faq/end.php');

		// choose1 Section

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/choose1/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/choose1/choose1.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/choose1/end.php');

		// mission Section

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/mission/start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/mission/start1.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/mission/mission.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/mission/end.php');

		// Pricing Section

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/pricing/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/pricing/pricestart.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/pricing/pricelist.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/pricing/priceend.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/pricing/end.php');

		// Clients Section

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/clients/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/clients/clients.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/clients/end.php');

	// Services2 Section

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services2/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services2/services2.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services2/end.php');

	// Services3 Section

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services3/start.php');
	
	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services3/title.php');

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services3/services3.php');

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services3/end.php');

	// Pages Case Studies Section

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/case/start.php');
	
	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/case/title.php');

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/case/case.php');

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/case/end.php');

		// Case Single

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/case/single/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/case/single/end.php');

	// Service Single

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/service-single/start.php');

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/service-single/list-start.php');

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/service-single/list.php');

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/service-single/list-end.php');

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/service-single/help.php');

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/service-single/brochure.php');

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/service-single/content-start.php');

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/service-single/content.php');

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/service-single/content-end.php');

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/service-single/end.php');

	// Team Single

	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/team-single/team-single.php');
	
	include( plugin_dir_path( __FILE__ ) . '/widgets/pages/team-single/end.php');

		// Service

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/team-single/service/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/team-single/service/end.php');

	// Blog

	include( plugin_dir_path( __FILE__ ) . '/widgets/home1/blog.php');

	// Home 2

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/hero/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/hero/hero.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/hero/end.php');

		// About

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/about/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/about/skill-start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/about/about.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/about/end.php');
		
		// Service

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/services/start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/services/end.php');
		
	// Home 3

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/hero/start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/hero/hero.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/hero/end.php');
		
		// Technology

		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/technology/start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/technology/technology.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/technology/end.php');

    // Home 4

		include( plugin_dir_path( __FILE__ ) . '/widgets/home4/hero.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home4/about.php');
		
	// Home 5

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/hero/start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/hero/hero.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/hero/end.php');
		
		// Services

		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/services/start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/services/services.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/services/end.php');
		
    // Home 6

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/hero/start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/hero/hero.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/hero/end.php');
		
		// Services

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/services/start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/services/services.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/services/end.php');
		
	    // About

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/about.php');
		
	 // Home 7

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/hero.php');
		
		// Services

		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/services/start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/services/services.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/services/end.php');
		
		// Work

		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/work/start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/work/work.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/work/end.php');
}
