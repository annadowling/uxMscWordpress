window.wpsms_ajax = ( function( window, document, $ ){
	var app = {};

	app.cache = function(){
		app.$ajax_form = $( '.telecomscloud_sms_form' );
	};

	app.init = function(){
		app.cache();
		app.$ajax_form.on( 'submit', app.form_handler );

	};

	app.post_ajax = function( serial_data ){
		var post_data = { 
			action     : 'wpsms',
			nonce      : wpsms.nonce,
			serialized : serial_data,
		};

		$.post( wpsms.ajax_url, post_data, app.ajax_response, 'json' )
	};

	app.ajax_response = function( response_data ){
		if( response_data.success ){
			wpsms.nonce = response_data.data.nonce;
			document.getElementById('wp_sms_div').innerHTML = response_data.data.script_response;
		} else {
			document.getElementById('wp_sms_div').innerHTML = '<p>Sorry we were unable to send an SMS at this time.</p>';
		}
	};

	app.form_handler = function( evt ){
		tcSMSshowSpinner();
		evt.preventDefault();
		var serialized_data = app.$ajax_form.serialize();
		
		app.post_ajax( serialized_data );
	};

	$(document).ready( app.init );

	return app;

})( window, document, jQuery );

function tcSMSshowSpinner() {
	document.getElementById('tcSMSform').style.display='none';
	document.getElementById('loadingSpinner').style.display='block';
}