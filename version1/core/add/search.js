$(document).ready(function(){
	$("#search").keyup(
	function(event){
		var search_term = $(this).val();
		//alert(search_term);
		$.post('search_results.php', {search_term: search_term}, function(data) {
			$('#search_results').html(data);
		});
	});
});