const flashData = $('.flash-data').data('flashdata');
if (flashData) {
	Swal.fire({
		icon: 'Success',
		title: 'Success',
		text: 'Data ' + flashData,
		type: 'Success'
	});
}

