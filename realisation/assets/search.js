
$('#search').on('input', function () {

	$.ajax({
		url: "../dataAccess/searchlive.php",
		method: "POST",
		data: { query: this.value },

		success: function (data) {
			$('#table').html(data);
		}
	});
});
