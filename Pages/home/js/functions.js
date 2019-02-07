;(function($, window, document, undefined) {
	var $win = $(window);
	var $doc = $(document);

	$doc.ready(function() {
		$('.users-section').on('click', '.user-button', function(e) {
			e.preventDefault();
		});

		$('.posts-section').on('click', '.post-button', function(e) {
			e.preventDefault();
		});

		$('select').selecter();

		$win.on('scroll', function() {
	        var filtersTop = $('.intro').outerHeight(),
	        	scrollTop = $win.scrollTop() + 81,
	        	introH = $('.intro').outerHeight() + $('.header').outerHeight();

             if( filtersTop < scrollTop ){
 	             $('.filters').addClass('fixed');
 	             $('.wrapper').addClass('filters-fixed');
 	         } else if ( scrollTop < introH ) {
 	             $('.filters').removeClass('fixed')
 	             $('.wrapper').removeClass('filters-fixed');
 	         }
	    })

	    handleRegistrationForm();
	    renderUsers();
	    userEdit();
	    renderPosts();
	    postEdit();
	    postAdd();
	    postDelete();
	    renderPostsOnBlog();
	    closePopup();
	    renderPopup();
	});

	function handleRegistrationForm() {
		var validation = window.validation;
		var users = window.users;

		var $registrationForm = $('.registration-form');
		var canSubmit = true;

		$registrationForm.on('submit', function(e) {
			$this = $(this);

			var $fields = $this.find('.field');

			canSubmit = validation.validateFields( $fields );
			canSubmit = validation.validatePasswordMatch( $fields );
			canSubmit = validation.validateUserRegistration( users );

			if ( ! canSubmit ) {
				return false;
			}
		});
	}

	function handleUserDataForm() {
		var validation = window.validation;
		var users = window.users;

		var $userForm = $('.user-form');
		var canSubmit = true;

		$userForm.on('submit', function(e) {
			$this = $(this);

			var $fields = $this.find('.field');

			canSubmit = validation.validateFields( $fields );

			if ( ! canSubmit ) {
				return false;
			}
		});
	}

	function renderUsers() {
		var users = window.users;
		var $usersSection = $('.users-section .users-section');
		
		if ( ! $usersSection.length ) {
			return false
		};

		for (var i = 0; i < users.length; i++) {
			
			var templateHTML = tmpl( $('#users-group-tpl').html(), {
				username: users[i].username,
				nickname: users[i].nickname,
				email: users[i].email,
				role: users[i].role,
				id: users[i]['id']
			} );

			$usersSection.append( templateHTML );
		};
	}

	function userEdit() {

		$('.user-edit').on('click', function() {
			
			var rowID = $(this).attr('id');
			var userID = $( '#' + rowID + ' .id').text();
			var userName = $( '#' + rowID + ' .username').text();
			var userNickname = $( '#' + rowID + ' .nickname').text();
			var userEmail = $( '#' + rowID + ' .email').text();
			var userRole = $( '#' + rowID + ' .role').text();

			var $userEditForm = $('.user-edit-form');
			var $username = $userEditForm.find('input[name="field-username"]');
			var $nickname = $userEditForm.find('input[name="field-nickname"]');
			var $email = $userEditForm.find('input[name="field-email"]');
			var $id = $userEditForm.find('input[name="field-id"]');
			var $role = $userEditForm.find('select[name="field-role"]');

			$username.val( userName );
			$nickname.val( userNickname );
			$email.val( userEmail );
			$id.val( userID );
		});
	}

	function deleteUser() {
		$('.user-delete-form').on('submit', function() {
			
			var rowID = $(this).attr('id');
			$('.form-group-body-row').each(function() {
				if ( $(this).attr('id') === rowID ) {
					$(this).hide();
				}
			});
		});
	}

	function renderPosts() {
		var postsOperations = window.postsOperations;
		var posts = window.posts;
		var $container = $('.posts-section .posts-section');

		if ( ! posts || ! postsOperations ) {
			return false;
		}

		postsOperations.listPosts( posts, $container );
	}

	function renderPostsOnBlog() {
		var postsOperations = window.postsOperations;
		var posts = window.posts;
		var $container = $('.blog-listing .article-items');

		if ( ! posts || ! postsOperations ) {
			return false;
		}

		postsOperations.listPosts( posts, $container );
	}

	function postEdit() {
		var postsOperations = window.postsOperations;
		if ( postsOperations ) {
			postsOperations.editPost();
		};
	}

	function postAdd() {
		var postsOperations = window.postsOperations;
		if ( postsOperations ) {
			postsOperations.addNewPost();	
		};
	}

	function postDelete() {
		var postsOperations = window.postsOperations;
		if ( postsOperations ) {
			postsOperations.deletePost();	
		};
	}

	function closePopup() {
		$('body').on('click', '.btn-close', function(e) {
			$(this).closest( '#div-pop-up' ).hide();
			/*$('#div-pop-up').hide();*/
			e.preventDefault();
		});
	}

	function renderPopup() {
		var $openButton = $('.blog-listing .post-read-more');
		var posts = window.posts;
		
		$openButton.each(function() {
			$(this).on('click', function(e) {
				e.preventDefault();
				
				for (var i = 0; i < posts.length; i++) {
					if ( posts[i]['id'] === $(this).attr('id') ) {
						var templateHTML = tmpl( $('#post-popup').html(), {
							title: posts[i]['title'],
							content: posts[i]['content'],
							featured_image: posts[i]['featured_image'],
							featured_image_name: posts[i]['featured_image_name']
						});
					}
				};

				$('.wrapper').append( templateHTML );

			});
		});
	}

})(jQuery, window, document);
