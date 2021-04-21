( function( api ) {

	// Extends our custom "fashion-designer" section.
	api.sectionConstructor['fashion-designer'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );