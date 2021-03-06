<?php
/**
 * @Author: brainos
 * @Date:   2016-04-24 09:34:10
 * @Last Modified by:   tienhc
 * @Last Modified time: 2016-05-08 14:03:37
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

class OpalHotel_Shortcode_Single_Book_Room extends OpalHotel_Abstract_Shortcode {

	/* shortcode name */
	public $shortcode = null;

	public function __construct() {
		$this->shortcode = 'opalhotel_single_book_room';
		parent::__construct();
	}

	/* render */
	public function render( $atts = array(), $content = null ) {
		/* review template file */
		opalhotel_get_template( 'single-room/single-book-room.php', array( 'atts' => $atts ) );
	}

}