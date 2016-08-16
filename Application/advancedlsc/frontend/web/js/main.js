$(function(){
	//get this click of the creat button
	$('modalButton').click(function(){
		$('modal').modal('show')
		.find('modalContent')
		.load($(this).attr('valie'));
	});
}); 