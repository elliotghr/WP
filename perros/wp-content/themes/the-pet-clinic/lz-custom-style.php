<?php 

	$the_pet_clinic_custom_style = '';

	// Logo Size
	$the_pet_clinic_logo_top_padding = get_theme_mod('the_pet_clinic_logo_top_padding');
	$the_pet_clinic_logo_bottom_padding = get_theme_mod('the_pet_clinic_logo_bottom_padding');
	$the_pet_clinic_logo_left_padding = get_theme_mod('the_pet_clinic_logo_left_padding');
	$the_pet_clinic_logo_right_padding = get_theme_mod('the_pet_clinic_logo_right_padding');

	if( $the_pet_clinic_logo_top_padding != '' || $the_pet_clinic_logo_bottom_padding != '' || $the_pet_clinic_logo_left_padding != '' || $the_pet_clinic_logo_right_padding != ''){
		$the_pet_clinic_custom_style .=' .logo {';
			$the_pet_clinic_custom_style .=' padding-top: '.esc_attr($the_pet_clinic_logo_top_padding).'px; padding-bottom: '.esc_attr($the_pet_clinic_logo_bottom_padding).'px; padding-left: '.esc_attr($the_pet_clinic_logo_left_padding).'px; padding-right: '.esc_attr($the_pet_clinic_logo_right_padding).'px;';
		$the_pet_clinic_custom_style .=' }';
	}

	// Facility section padding
	$the_pet_clinic_facility_section_padding = get_theme_mod('the_pet_clinic_facility_section_padding');

	if( $the_pet_clinic_facility_section_padding != ''){
		$the_pet_clinic_custom_style .=' #our_facilities {';
			$the_pet_clinic_custom_style .=' padding-top: '.esc_attr($the_pet_clinic_facility_section_padding).'px; padding-bottom: '.esc_attr($the_pet_clinic_facility_section_padding).'px;';
		$the_pet_clinic_custom_style .=' }';
	}

	if (get_theme_mod('the_pet_clinic_hide_show_topbar',false) == false) {
		$the_pet_clinic_custom_style .=' .logo, body.logged-in.admin-bar .logo {';
			$the_pet_clinic_custom_style .=' top: 50%;';
		$the_pet_clinic_custom_style .=' }';
	}