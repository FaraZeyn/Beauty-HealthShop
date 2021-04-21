<?php
/**
 * Typography control class.
 *
 * @since  1.0.0
 * @access public
 */

class Fashion_Designer_Control_Typography extends WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'typography';

	/**
	 * Array 
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $l10n = array();

	/**
	 * Set up our control.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @param  string  $id
	 * @param  array   $args
	 * @return void
	 */
	public function __construct( $manager, $id, $args = array() ) {

		// Let the parent class do its thing.
		parent::__construct( $manager, $id, $args );

		// Make sure we have labels.
		$this->l10n = wp_parse_args(
			$this->l10n,
			array(
				'color'       => esc_html__( 'Font Color', 'fashion-designer' ),
				'family'      => esc_html__( 'Font Family', 'fashion-designer' ),
				'size'        => esc_html__( 'Font Size',   'fashion-designer' ),
				'weight'      => esc_html__( 'Font Weight', 'fashion-designer' ),
				'style'       => esc_html__( 'Font Style',  'fashion-designer' ),
				'line_height' => esc_html__( 'Line Height', 'fashion-designer' ),
				'letter_spacing' => esc_html__( 'Letter Spacing', 'fashion-designer' ),
			)
		);
	}

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_script( 'fashion-designer-ctypo-customize-controls' );
		wp_enqueue_style(  'fashion-designer-ctypo-customize-controls' );
	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function to_json() {
		parent::to_json();

		// Loop through each of the settings and set up the data for it.
		foreach ( $this->settings as $setting_key => $setting_id ) {

			$this->json[ $setting_key ] = array(
				'link'  => $this->get_link( $setting_key ),
				'value' => $this->value( $setting_key ),
				'label' => isset( $this->l10n[ $setting_key ] ) ? $this->l10n[ $setting_key ] : ''
			);

			if ( 'family' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_families();

			elseif ( 'weight' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_weight_choices();

			elseif ( 'style' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_style_choices();
		}
	}

	/**
	 * Underscore JS template to handle the control's output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function content_template() { ?>

		<# if ( data.label ) { #>
			<span class="customize-control-title">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
		<# } #>

		<ul>

		<# if ( data.family && data.family.choices ) { #>

			<li class="typography-font-family">

				<# if ( data.family.label ) { #>
					<span class="customize-control-title">{{ data.family.label }}</span>
				<# } #>

				<select {{{ data.family.link }}}>

					<# _.each( data.family.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.family.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.weight && data.weight.choices ) { #>

			<li class="typography-font-weight">

				<# if ( data.weight.label ) { #>
					<span class="customize-control-title">{{ data.weight.label }}</span>
				<# } #>

				<select {{{ data.weight.link }}}>

					<# _.each( data.weight.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.weight.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.style && data.style.choices ) { #>

			<li class="typography-font-style">

				<# if ( data.style.label ) { #>
					<span class="customize-control-title">{{ data.style.label }}</span>
				<# } #>

				<select {{{ data.style.link }}}>

					<# _.each( data.style.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.style.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.size ) { #>

			<li class="typography-font-size">

				<# if ( data.size.label ) { #>
					<span class="customize-control-title">{{ data.size.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.size.link }}} value="{{ data.size.value }}" />

			</li>
		<# } #>

		<# if ( data.line_height ) { #>

			<li class="typography-line-height">

				<# if ( data.line_height.label ) { #>
					<span class="customize-control-title">{{ data.line_height.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.line_height.link }}} value="{{ data.line_height.value }}" />

			</li>
		<# } #>

		<# if ( data.letter_spacing ) { #>

			<li class="typography-letter-spacing">

				<# if ( data.letter_spacing.label ) { #>
					<span class="customize-control-title">{{ data.letter_spacing.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.letter_spacing.link }}} value="{{ data.letter_spacing.value }}" />

			</li>
		<# } #>

		</ul>
	<?php }

	/**
	 * Returns the available fonts.  Fonts should have available weights, styles, and subsets.
	 *
	 * @todo Integrate with Google fonts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_fonts() { return array(); }

	/**
	 * Returns the available font families.
	 *
	 * @todo Pull families from `get_fonts()`.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	function get_font_families() {

		return array(
			'' => __( 'No Fonts', 'fashion-designer' ),
        'Abril Fatface' => __( 'Abril Fatface', 'fashion-designer' ),
        'Acme' => __( 'Acme', 'fashion-designer' ),
        'Anton' => __( 'Anton', 'fashion-designer' ),
        'Architects Daughter' => __( 'Architects Daughter', 'fashion-designer' ),
        'Arimo' => __( 'Arimo', 'fashion-designer' ),
        'Arsenal' => __( 'Arsenal', 'fashion-designer' ),
        'Arvo' => __( 'Arvo', 'fashion-designer' ),
        'Alegreya' => __( 'Alegreya', 'fashion-designer' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'fashion-designer' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'fashion-designer' ),
        'Bangers' => __( 'Bangers', 'fashion-designer' ),
        'Boogaloo' => __( 'Boogaloo', 'fashion-designer' ),
        'Bad Script' => __( 'Bad Script', 'fashion-designer' ),
        'Bitter' => __( 'Bitter', 'fashion-designer' ),
        'Bree Serif' => __( 'Bree Serif', 'fashion-designer' ),
        'BenchNine' => __( 'BenchNine', 'fashion-designer' ),
        'Cabin' => __( 'Cabin', 'fashion-designer' ),
        'Cardo' => __( 'Cardo', 'fashion-designer' ),
        'Courgette' => __( 'Courgette', 'fashion-designer' ),
        'Cherry Swash' => __( 'Cherry Swash', 'fashion-designer' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'fashion-designer' ),
        'Crimson Text' => __( 'Crimson Text', 'fashion-designer' ),
        'Cuprum' => __( 'Cuprum', 'fashion-designer' ),
        'Cookie' => __( 'Cookie', 'fashion-designer' ),
        'Chewy' => __( 'Chewy', 'fashion-designer' ),
        'Days One' => __( 'Days One', 'fashion-designer' ),
        'Dosis' => __( 'Dosis', 'fashion-designer' ),
        'Droid Sans' => __( 'Droid Sans', 'fashion-designer' ),
        'Economica' => __( 'Economica', 'fashion-designer' ),
        'Fredoka One' => __( 'Fredoka One', 'fashion-designer' ),
        'Fjalla One' => __( 'Fjalla One', 'fashion-designer' ),
        'Francois One' => __( 'Francois One', 'fashion-designer' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'fashion-designer' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'fashion-designer' ),
        'Great Vibes' => __( 'Great Vibes', 'fashion-designer' ),
        'Handlee' => __( 'Handlee', 'fashion-designer' ),
        'Hammersmith One' => __( 'Hammersmith One', 'fashion-designer' ),
        'Inconsolata' => __( 'Inconsolata', 'fashion-designer' ),
        'Indie Flower' => __( 'Indie Flower', 'fashion-designer' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'fashion-designer' ),
        'Julius Sans One' => __( 'Julius Sans One', 'fashion-designer' ),
        'Josefin Slab' => __( 'Josefin Slab', 'fashion-designer' ),
        'Josefin Sans' => __( 'Josefin Sans', 'fashion-designer' ),
        'Kanit' => __( 'Kanit', 'fashion-designer' ),
        'Lobster' => __( 'Lobster', 'fashion-designer' ),
        'Lato' => __( 'Lato', 'fashion-designer' ),
        'Lora' => __( 'Lora', 'fashion-designer' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'fashion-designer' ),
        'Lobster Two' => __( 'Lobster Two', 'fashion-designer' ),
        'Merriweather' => __( 'Merriweather', 'fashion-designer' ),
        'Monda' => __( 'Monda', 'fashion-designer' ),
        'Montserrat' => __( 'Montserrat', 'fashion-designer' ),
        'Muli' => __( 'Muli', 'fashion-designer' ),
        'Marck Script' => __( 'Marck Script', 'fashion-designer' ),
        'Noto Serif' => __( 'Noto Serif', 'fashion-designer' ),
        'Open Sans' => __( 'Open Sans', 'fashion-designer' ),
        'Overpass' => __( 'Overpass', 'fashion-designer' ),
        'Overpass Mono' => __( 'Overpass Mono', 'fashion-designer' ),
        'Oxygen' => __( 'Oxygen', 'fashion-designer' ),
        'Orbitron' => __( 'Orbitron', 'fashion-designer' ),
        'Patua One' => __( 'Patua One', 'fashion-designer' ),
        'Pacifico' => __( 'Pacifico', 'fashion-designer' ),
        'Padauk' => __( 'Padauk', 'fashion-designer' ),
        'Playball' => __( 'Playball', 'fashion-designer' ),
        'Playfair Display' => __( 'Playfair Display', 'fashion-designer' ),
        'PT Sans' => __( 'PT Sans', 'fashion-designer' ),
        'Philosopher' => __( 'Philosopher', 'fashion-designer' ),
        'Permanent Marker' => __( 'Permanent Marker', 'fashion-designer' ),
        'Poiret One' => __( 'Poiret One', 'fashion-designer' ),
        'Quicksand' => __( 'Quicksand', 'fashion-designer' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'fashion-designer' ),
        'Raleway' => __( 'Raleway', 'fashion-designer' ),
        'Rubik' => __( 'Rubik', 'fashion-designer' ),
        'Rokkitt' => __( 'Rokkitt', 'fashion-designer' ),
        'Russo One' => __( 'Russo One', 'fashion-designer' ),
        'Righteous' => __( 'Righteous', 'fashion-designer' ),
        'Slabo' => __( 'Slabo', 'fashion-designer' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'fashion-designer' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'fashion-designer'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'fashion-designer' ),
        'Sacramento' => __( 'Sacramento', 'fashion-designer' ),
        'Shrikhand' => __( 'Shrikhand', 'fashion-designer' ),
        'Tangerine' => __( 'Tangerine', 'fashion-designer' ),
        'Ubuntu' => __( 'Ubuntu', 'fashion-designer' ),
        'VT323' => __( 'VT323', 'fashion-designer' ),
        'Varela Round' => __( 'Varela Round', 'fashion-designer' ),
        'Vampiro One' => __( 'Vampiro One', 'fashion-designer' ),
        'Vollkorn' => __( 'Vollkorn', 'fashion-designer' ),
        'Volkhov' => __( 'Volkhov', 'fashion-designer' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'fashion-designer' )
		);
	}

	/**
	 * Returns the available font weights.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_weight_choices() {

		return array(
			'' => esc_html__( 'No Fonts weight', 'fashion-designer' ),
			'100' => esc_html__( 'Thin',       'fashion-designer' ),
			'300' => esc_html__( 'Light',      'fashion-designer' ),
			'400' => esc_html__( 'Normal',     'fashion-designer' ),
			'500' => esc_html__( 'Medium',     'fashion-designer' ),
			'700' => esc_html__( 'Bold',       'fashion-designer' ),
			'900' => esc_html__( 'Ultra Bold', 'fashion-designer' ),
		);
	}

	/**
	 * Returns the available font styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_style_choices() {

		return array(
			'' => esc_html__( 'No Fonts Style', 'fashion-designer' ),
			'normal'  => esc_html__( 'Normal', 'fashion-designer' ),
			'italic'  => esc_html__( 'Italic', 'fashion-designer' ),
			'oblique' => esc_html__( 'Oblique', 'fashion-designer' )
		);
	}
}
