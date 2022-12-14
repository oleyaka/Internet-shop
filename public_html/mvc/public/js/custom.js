$(document).ready(function() {

	$('#passwordTwo').on('input', function() {
		passwordOne = $('#passwordOne').val();
		passwordTwo = $(this).val();
		if (passwordOne == passwordTwo) {
			$(this).addClass('complet_input');
			$(this).removeClass('error_input');
		} else {
			$(this).addClass('error_input');
			$(this).removeClass('complet_input');
		}

	})


	$('#formRegistr').on('submit', function() {
		event.preventDefault();
		form = $(this);
		data = {};

		$.each (form.serializeArray(), function(i, e) {
			data[e.name] = e.value;
		});

		if (data.passwordOne != passwordTwo) {
			$('.block_error, .pass_error').show();
			return false;
		} else {
			$('.block_error, .pass_error').hide();
		}

		$.ajax({
			url: form.attr('action'),
			type: 'POST',
			dataType: 'json',
			data: data,
			success: function(json) {
				if (json.error === true) {
					if (json.login === false) {
						$('.block_error, .login_error').show();
					}
					if (json.pass === false) {
						$('.block_error, .pass_error').show();
					}
				}
				if (json.success === true) {
					location.href = '/public_html/mvc/account/new_user/';
				}
			}
		});


	})


})