
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


var search = instantsearch({
  appId: '1F1PS6B02J',
  apiKey: '2b420e76596d46efbadb56207a9abb1d',
  indexName: 'getstarted_actors',
  urlSync: true
});


search.start();