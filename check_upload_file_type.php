<script>
	var ext = $("#profile_pic").val().split('.').pop().toLowerCase();
	function check_file(obj){
		if($.inArray(ext, ['gif','jpg','png','jpeg']) == -1) {
			$("#profile_pic").val("");
			alert("Invalid file selected. Please use .gif,.jpg,.png,.jpeg files Only");
			return false;
		}
	}
</script>
