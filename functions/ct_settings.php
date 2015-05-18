<?php

add_action( 'admin_menu', 'add_contact_info' );
add_action( 'admin_init', 'kontaktinfo_init' );

function add_contact_info() {
    add_submenu_page( 'options-general.php', 'Kontaktinformation', 'Kontaktinformation', 'manage_options', 'kontaktinfo', 'kontaktinfo_options' );
}



function kontaktinfo_init(  ) {

	register_setting( 'kontaktinfo', 'kontaktinfo_options' );



	add_settings_section(
		'kontaktinfo_section',
		__( 'Indstil kontaktinformationer, som vises på hjemmesiden', 'smamo' ),
		false,
		'kontaktinfo'
	);

    add_settings_field(
		'email',
		__( 'Email', 'smamo' ),
		'field_render_email',
		'kontaktinfo',
		'kontaktinfo_section'
	);

    add_settings_field(
		'tlf',
		__( 'Telefonnummer', 'smamo' ),
		'field_render_tlf',
		'kontaktinfo',
		'kontaktinfo_section'
	);

    add_settings_section(
		'kontaktinfo_section_2',
		__( 'Indstil links til sociale medier', 'smamo' ),
		false,
		'kontaktinfo'
	);


	add_settings_field(
		'faceboook',
		__( 'Link til Facebook', 'smamo' ),
		'field_render_fb',
		'kontaktinfo',
		'kontaktinfo_section_2'
	);

    add_settings_field(
		'pinterest',
		__( 'Link til Pinterest', 'smamo' ),
		'field_render_pi',
		'kontaktinfo',
		'kontaktinfo_section_2'
	);

    add_settings_field(
		'instagram',
		__( 'Link til Instagram', 'smamo' ),
		'field_render_inst',
		'kontaktinfo',
		'kontaktinfo_section_2'
	);



}


function field_render_fb(){

   $options = get_option( 'kontaktinfo_options' ); ?>
	<input class="widefat" style="max-width:500px;" type='url' name='kontaktinfo_options[faceboook]' value='<?php echo $options['faceboook']; ?>'>
	<?php

}

function field_render_pi(){

   $options = get_option( 'kontaktinfo_options' ); ?>
	<input class="widefat" style="max-width:500px;" type='url' name='kontaktinfo_options[pinterest]' value='<?php echo $options['pinterest']; ?>'>
	<?php

}

function field_render_inst(){

   $options = get_option( 'kontaktinfo_options' ); ?>
	<input class="widefat" style="max-width:500px;" type='url' name='kontaktinfo_options[instagram]' value='<?php echo $options['instagram']; ?>'>
	<?php

}

function field_render_email(){

   $options = get_option( 'kontaktinfo_options' ); ?>
	<input class="widefat" style="max-width:500px;" type='email' name='kontaktinfo_options[email]' value='<?php echo $options['email']; ?>'>
	<?php

}

function field_render_tlf(){

   $options = get_option( 'kontaktinfo_options' ); ?>
	<input class="widefat" style="max-width:500px;" type='tel' name='kontaktinfo_options[tlf]' value='<?php echo $options['tlf']; ?>'>
	<?php

}



function kontaktinfo_options(  ) {

	?>
	<form action='options.php' method='post'>

		<h2>Kontaktinformationer</h2>

		<?php
		settings_fields( 'kontaktinfo' );
		do_settings_sections( 'kontaktinfo' );
		submit_button();
		?>

	</form>
	<?php

}
