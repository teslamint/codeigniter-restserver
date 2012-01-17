
<ul>
	<li><a href="<?php echo site_url('api/example/users');?>">Users</a> - defaulting to XML</li>
	<li><a href="<?php echo site_url('api/example/users/format/csv');?>">Users</a> - get it in CSV</li>
	<li><a href="<?php echo site_url('api/example/user/id/1');?>">User #1</a> - defaulting to XML</li>
	<li><a href="<?php echo site_url('api/example/user/id/1/format/json');?>">User #1</a> - get it in JSON</li>
	<li><a id="ajax" href="<?php echo site_url('api/example/users/format/json');?>">Users</a> - get it in JSON (AJAX request)</li>
</ul>

<p><br />Page rendered in {elapsed_time} seconds</p>

<script type="text/javascript">
$(function(){
	// Bind a click event to the 'ajax' object id
	$("#ajax").bind("click", function( evt ){
		// Javascript needs totake over. So stop the browser from redirecting the page
		evt.preventDefault();
		// AJAX request to get the data
		$.ajax({
			// URL from the link that was clicked on
			url: $(this).attr("href"),
			// Success function. the 'data' parameter is an array of objects that can be looped over
			success: function(data, textStatus, jqXHR){
				alert('Successful AJAX request!');
			}, 
			// Failed to load request. This could be caused by any number of problems like server issues, bad links, etc. 
			error: function(jqXHR, textStatus, errorThrown){
				alert('Oh no! A problem with the AJAX request!');
			}
		});
	});
});
</script>

