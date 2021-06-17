const flashData = $('.flash-data').data('flashdata');
if (flashData) {
	Swal.fire({
		icon: 'Success',
		title: 'Success',
		text: 'Data ' + flashData,
		type: 'Success'
	});
}

const flashMsg = $('.flash-data2').data('flashdata');
if (flashMsg) {
	Swal.fire({
		icon: 'error',
		title: 'Failed',
		text: flashMsg,
	});
}
