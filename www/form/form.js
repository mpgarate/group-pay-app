$(document).ready(function() {

	function getTotal(){
			total = $('.total-amount').val();
			shares = 3;
			share = (Math.round(100*(total/shares)).toFixed(2))/100;
			if($('.split-evenly input').prop('checked')){
				setShares();
			}
	}

	$('.total-amount').blur(function(){
		 getTotal();
	});

	function setShares() {
		$('.users .user-share').val(share);
	}

	$('.users .user-share').blur(function(){
		setTotal();
	});

	function setTotal() {
		var sum = 0;
		$('.users .user-share').each(function(){
			var value = parseInt($(this).val());
			if (value > 0) {
				sum = sum + value;
			}
		});

		$('.total-amount').val(sum);
	}

	$('.split-evenly').click(function(){
		getTotal();
		setShares();
	});

$('.user-list .row').click(function(){
	$(this).toggleClass('highlighted');
});

});