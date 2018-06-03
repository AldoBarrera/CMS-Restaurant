/// Jquery validate review tour
jQuery(document).ready(function () {
    
    $('#review').submit(function () {

        var action = $(this).attr('action');

        $("#message-review").slideUp(750, function () {
            $('#message-review').hide();

            /*$('#submit-review')
                .after('<i class="icon-spin4 animate-spin loader"></i>')
                .attr('disabled', 'disabled');*/

            $.post(action, {
					id: $('#facebook_id').val() + $('#restaurant_id').val(),
                    facebook_id: $('#facebook_id').val(),
                    facebook_name: $('#facebook_name').val(),
                    facebook_email: $('#facebook_email').val(),
					description: $('#description').val(),
					quality: $('#quality').val(),
					restaurant_id: $('#restaurant_id').val(),
                    date: $('#date').val(),
                    accion_event: $('#accion_event').val(),
					accion_view: $('#accion_view').val(),
                    module: $('#module').val(),
					page: $('#page').val(),
                }).done(

					function (data) {
						if (data.trim()!="1062"){
							$('#opinions').append(data);
							$('#opinions').slideDown('slow');
							$('#review .loader').fadeOut('slow', function () {
								$(this).remove()
							});
							//$('#submit-review').removeAttr('disabled');
							if (data.match('success') != null) $('#review').slideUp('slow');
							$('#myReview').modal('hide');
							
						} else {
							alert( "you already comment in this restaurant" );	
						}
						
	
					}
				).fail(function() {
					alert( "DB error" );
				});

        });

        return false;

    });

});

/* ]]> */