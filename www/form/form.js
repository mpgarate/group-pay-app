$(document).ready(function() {
	$('.total-amount').blur(function(){
		total = $(this).val();
		shares = 3;
		share = (Math.round(100*(total/shares)).toFixed(2))/100;
		if($('.split-evenly input').prop('checked')){
			setShares();
		}
	});

	function setShares() {
		$('.users .user-share').val(share);
	}

	$('.split-evenly').mouseup(function(){
		setShares();
	});

$('.user-list .row').click(function(){
	$(this).toggleClass('highlighted');
});

});