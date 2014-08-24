
function search(html)
{
	jQuery.get('search.js.php', 
				{search: html}, function(recv) {
					jQuery('#list_fail').html(recv).hide().fadeIn('slow');
				});
}

jQuery(function() {
	jQuery('#input_search').focus(function() {
		if (jQuery(this).val() == 'Search...') {
			jQuery(this).val('');
		}
	});
	
	jQuery('#input_search').blur(function() {
		if (jQuery(this).val() == '') {
			jQuery(this).val('Search...');
		}
	});
	
	jQuery('#input_search').keyup(function() {

		search(jQuery(this).val());
	});
	
	jQuery('#user').click(function() {
		alert(0);
	});
});