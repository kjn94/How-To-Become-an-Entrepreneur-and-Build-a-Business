;(function($, window, document, undefined) {
	var $win = $(window);
	var $doc = $(document);

	var validation = {};

	validation.validateRequired = function( value ) {
		return value ? true : false;
	}

	validation.validateEmail = function( value ) {
		 var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    	return re.test(value);
	}
	
	validation.validatePasswordMatch = function( value, value2 ) {
		return value === value2;
	}

	validation.validateFields = function( $fields ) {
		if ( ! $fields ) {
			return false;
		}
		var $this = $(this);

		var flag = true;
		var requiredFlag = true;
		var emailFlag = true;

		$fields.each(function(){
			if ( $(this).hasClass('required') ) {
				if ( ! validation.validateRequired( $(this).val() ) ) {
					requiredFlag = false;
					$(this).addClass( 'error-field' );
				} else if ( $(this).hasClass( 'error-field') ) {
					$(this).removeClass( 'error-field' );
				}
			}

			if ( $(this).hasClass('field-email') ) {
				if ( ! validation.validateEmail( $(this).val() ) ) {
					requiredFlag = false;
					if ( ! $(this).hasClass( 'error-field' ) ) {
						$(this).addClass( 'error-field' );
					} else if ( $(this).hasClass( 'error-field') ) {
						$(this).removeClass( 'error-field' );
					}
				};
			}
		});

		if ( ! requiredFlag || ! emailFlag ) {
			flag = false;
		};

		return flag;
	}

	validation.validatePasswordMatch = function( $fields ) {
		if ( ! $fields ) {
			return false;
		}
		var $this = $(this);

		var flag = true;
		var password = '';
		var passwordRe = '';
		var $password = {};
		var $passwordRe = {};

		$fields.each(function() {
			if ( $(this).hasClass('field-password') ) {
				$password = $(this);
				password = $(this).val();
			};

			if ( $(this).hasClass('field-re-password') ) {
				$passwordRe = $(this);
				passwordRe = $(this).val();
			};
		});

		if ( ! password || ! passwordRe || ( password !== passwordRe ) ) {

			if ( $password ) {
				$password.addClass( 'error-field' );
			};

			if ( $passwordRe ) {
				$passwordRe.addClass( 'error-field' );
			}

			flag = false;
		};

		return flag;
	}

	validation.validateUserRegistration = function( users ) {
		if ( ! users ) {
			return false;
		}
		var $username = $('input[name="field-name"]');
		var $nickname = $('input[name="field-nickname"]');
		var $email = $('input[name="field-email"]');

		var username = true;
		var nickname = true;
		var email = true;
		var usersValidate = true;


		for (var i = 0; i < users.length; i++) {

			if ( users[i].username === $username.val() ) {
				$username.addClass('already-exists');
				username = false;
			}

			if ( users[i].nickname === $nickname.val() ) {
				$nickname.addClass('already-exists');
				nickname = false;
			}

			if ( users[i].email === $email.val() ) {
				$email.addClass('already-exists');
				email = false;
			}
		};

		if ( username ) {
			$username.removeClass('already-exists');
		} else {
			usersValidate = false;
		}

		if ( email ) {
			$email.removeClass('already-exists');
		} else {
			usersValidate = false;
		}

		if ( nickname ) {
			$nickname.removeClass('already-exists');
		} else {
			usersValidate = false;
		}

		return usersValidate;
	}

	window.validation = validation;

})(jQuery, window, document);