$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
	controlNav: false,
    itemWidth: 210,
    itemMargin: 5,
    minItems: 2,
    maxItems: 3
  });
});
$( document ).ready(function() {
    $('.others-amount').hide();
    $(function() {
        $("select[name=amount]").change(function() {
            var val = $(this).val();
            if(val == 'other') {
                $('.others-amount').fadeIn('slow');
            } else {
                $('.others-amount').fadeOut();
            }
        }).change();
    });
    $('.variation-MobileNumber p').change(function() {
        $('input[name="billing_phone"]').val($(this).val());
    });
    $( ".haq" ).click(function() {
        $( ".fb-page" ).slideToggle( "slow" );
    });
});

