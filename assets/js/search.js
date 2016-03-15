
 var $body = $('body');

$('.mt-search-box > input[type="search"]').keyup(function() {
	 if( $(this).val() ) {
	 	$('#search-form').delay(200).submit();
	$('.mt-search-result-wrapper').show();
	$('.pageContainer').hide();

} else{
		$('.mt-search-result-wrapper').hide();
	$('.pageContainer').show();
}

});

$("#search-form").submit(function (event) {
    event.preventDefault();

});




