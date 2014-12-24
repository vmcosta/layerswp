<?php  /**
 * Select Image
 *
 * This file is used to register and display the custom Hatch Select Image
 *
 * @package Hatch
 * @since Hatch 1.0
 */

if( !class_exists( 'Hatch_Customize_Select_Image_Control' ) ) {

	class Hatch_Customize_Select_Image_Control extends WP_Customize_Control {

		public $type = 'select-image';

		public $description = '';

		public $subtitle = '';

		public function render_content() {
			
			$form_elements = new Hatch_Form_Elements();
			
			$link = explode( '="', $this->get_link() );
			$link_attr = ltrim( $link[0], 'data-' );
			$link_val = rtrim( $link[1], '"' );
			
			$values = false;
			?>

			<span class="customize-control-title">

				<?php echo esc_html( $this->label ); ?>

			</span>

			<div id="input_<?php echo $this->id; ?>" class="hatch-form-item">

				<?php if ( '' != $this->subtitle ) : ?>
					<label class="hatch-form-row"><?php echo $this->subtitle; ?></label>
				<?php endif; ?>
				<div class="hatch-visuals-wrapper hatch-visuals-inline hatch-clearfix">
				
					<?php
					echo $form_elements->input(
						array(
							'type' => 'image',
							'label' => __( 'Choose Background' , HATCH_THEME_SLUG ),
							'name' => '',
							'id' =>  $this->id,
							'value' => ( isset( $values['background']['image'] ) ) ? $values['background']['image'] : $this->value(),
							'data' => array(
								$link_attr => $link_val
							)
						)
					);
					?>
				
				</div>
			
			</div>
			<?php
		}
	}
} // !class_exists( 'Hatch_Customize_Select_Image_Control' )