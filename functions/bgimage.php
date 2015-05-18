<?php
add_action( 'admin_menu', 'bgimage_add_admin_menu' );
add_action( 'admin_init', 'bgimage_settings_init' );


function bgimage_add_admin_menu() { add_submenu_page( 'themes.php', 'Forsidebillede', 'Forsidebillede', 'manage_options', 'forsidebillede', 'bgimage_options_page' );}


function bgimage_settings_init(  ) {

	register_setting( 'pluginPage', 'bgimage_settings' );

	add_settings_section(
		'bgimage_pluginPage_section',
		__( 'Tilføj et forsidebillede til '.get_bloginfo('url'), 'smamo' ),
		'bgimage_settings_section_callback',
		'pluginPage'
	);

	add_settings_field(
		'bgimage_text_field_0',
		__( 'Link til billede', 'smamo' ),
		'bgimage_text_field_0_render',
		'pluginPage',
		'bgimage_pluginPage_section'
	);



}


function bgimage_text_field_0_render(  ) {

	$options = get_option( 'bgimage_settings' );
	?>
	<input class="widefat" style="max-width:500px;" type='url' name='bgimage_settings[bgimage_text_field_0]' value='<?php echo $options['bgimage_text_field_0']; ?>'>
	<?php

}

function bgimage_text_field_1_render(  ) {

	$options = get_option( 'bgimage_settings' );
	?>
	<input class="widefat" style="max-width:500px;" type='url' name='bgimage_settings[bgimage_text_field_1]' value='<?php echo $options['bgimage_text_field_1']; ?>'>
	<?php

}


function bgimage_settings_section_callback(  ) {

	echo __( 'Tilføj et link til det billede, der skal vises i baggrunden på hjemmesidens forside.', 'smamo' );

}


function bgimage_options_page(  ) {

	?>
	<form action='options.php' method='post'>

		<h2>Baggrundsvideo</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );

        $options = get_option( 'bgimage_settings' );
        if ($options['bgimage_text_field_0']) :
            ?>
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">Billede Preview</th>
                    <td>
                   <?php $image_url = $options['bgimage_text_field_0'];   ?>
                    <?php if($image_url){ echo '<img src="'.$image_url.'">';} ?>
	               </td>
                </tr>
            </tbody>
        </table>

            <?php

        endif;
		submit_button();
		?>

	</form>
	<?php

}

?>
