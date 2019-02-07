;(function($, window, document, undefined) {
	var $win = $(window);
	var $doc = $(document);

	var postsOperations = {};

	postsOperations.listPosts = function( posts, $container ) {
		if ( ! posts ) {
			return false;
		}

		for (var i = 0; i < posts.length; i++) {
			
			var templateHTML = tmpl( $('#posts-group-tpl').html(), {
				title: posts[i]['title'],
				content: posts[i]['content'],
				sub_content: posts[i]['content'].substring( 0, 25 ) + ' ...',
				featured: posts[i]['featured'],
				featured_image: posts[i]['featured_image'],
				featured_image_name: posts[i]['featured_image_name'],
				id: posts[i]['id']
			});

			$container.append( templateHTML );
		};
	}

	postsOperations.editPost = function() {
		$('.post-edit').on('click', function() {
			$('.save-form').hide();
			$('.edit-form').show();
			$('.add-new-post').show();

			var rowID = $(this).attr('id');
			var postID = $( '#' + rowID + ' .id').text();
			var postTitle = $( '#' + rowID + ' .title').text();
			var postContent = $( '#' + rowID + ' .content').text();
			var postFeatured = $( '#' + rowID + ' .featured').text();
			var $postFeaturedImage = $( '#' + rowID + ' .featured-image');

			var $postEditForm = $('.post-edit-form');
			var $title = $postEditForm.find('input[name="field-title"]');
			var $content = $postEditForm.find('textarea[name="field-content"]');
			var $featured = $postEditForm.find('input[name="field-featured"]');
			var $featuredImage = $postEditForm.find('input[name="field-image"]');
			var $id = $postEditForm.find('input[name="field-id"]');
			var $imageField = $postEditForm.find( 'label.featured-image' );

			$imageField.replaceWith(
				'<label for="field-image" class="featured-image">Featured Image: </label>' + 
				'<img src="' + $postFeaturedImage.attr('src') + '" class="featured-image" width="100px" height="100px" alt="' + $postFeaturedImage.attr('alt') + '">'
			);

			$title.val( postTitle );
			$content.val( postContent );
			$featured.val( postFeatured );
			$id.val( rowID );
			
			if ( postFeatured !== '0' ) {
				$featured.attr( 'checked', 'checked' );
			}
		});
	}

	postsOperations.addNewPost = function() {
		$('.add-new-post').on('click', function(e) {
			e.preventDefault();
			$('.save-form').show();
			$('.edit-form').hide();
			$('.add-new-post').hide();
		});
	}

	postsOperations.deletePost = function() {
		$('.post-delete-form').on('submit', function() {
			
			var rowID = $(this).attr('id');
			$('.form-group-body-row').each(function() {
				if ( $(this).attr('id') === rowID ) {
					$(this).hide();
				}
			});
		});
	}

	window.postsOperations = postsOperations;

})(jQuery, window, document);