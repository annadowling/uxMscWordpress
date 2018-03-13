<?php 
/**
 * $Desc$
 *
 * @version    $Id$
 * @package    opalhotel_room
 * @author     Opal  Team <info@wpopal.com >
 * @copyright  Copyright (C) 2016 wpopal.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @website  http://www.wpopal.com
 * @support  http://www.wpopal.com/support/forum.html
 */
 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

?>

<div class="wrap">
    <h2>
        <?php esc_html_e( 'Edit Group Rating', 'opal-hotel-room-booking' ); ?>
        <a class="add-new-h2" href="<?php echo admin_url( 'admin.php?page=opalhotel-rating-options&rating-id=' ); ?>"><?php esc_html_e( 'Add New', 'opal-hotel-room-booking' ); ?></a>
    </h2>

    <?php opalhotel_print_admin_notices() ?>

    <form method="post" id="add-new-rating-item-form">
        <table class="form-table">
            <tbody>
            <tr valign="top">
                <th scope="row"><?php esc_html_e( 'Name', 'opal-hotel-room-booking' ); ?></th>
                <td>
                    <input id="name" name="name" type="text" maxlength="255" cols="100" placeholder="<?php esc_html_e( 'Enter a label...', 'opal-hotel-room-booking' ); ?>" required class="regular-text" value="<?php echo esc_attr( $rating->name ) ?>" />
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><?php esc_html_e( 'Description', 'opal-hotel-room-booking' ); ?></th>
                <td>
                    <input id="desciption" name="description" type="text" maxlength="255" cols="100" placeholder="<?php esc_html_e( 'Enter a description...', 'opal-hotel-room-booking' ); ?>" required class="regular-text" value="<?php echo esc_attr( $rating->description ) ?>" />
                </td>
            </tr>
            </tbody>
            <input type="hidden" name="ID" value="<?php echo esc_attr( $rating->ID ) ?>" />
        </table>
        <p><input id="add-new-rating-item-btn" class="button button-primary" value="<?php esc_html_e( 'Save Changes', 'opal-hotel-room-booking' ); ?>" type="submit" /></p>
        <?php wp_nonce_field( 'opalhotel_submit_rating', 'opalhotel-submit-rating-nonce' ); ?>
    </form>
</div>

