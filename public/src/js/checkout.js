Stripe.setPublishableKey('pk_test_RmdexUSyeFzpvarVy2es2rqh');

var $form = $('#checkout-form');

$form.submit(function(e){
    $('#charge-error').addClass('is-hidden');
    $form.find('button').prop('disabled', true);

    Stripe.card.createToken({
        number: $('#cardNumber').val(),
        cvc: $('#cvc').val(),
        exp_month: $('#expiryMonth').val(),
        exp_year: $('#expiryYear').val(),
        name: $('#holderName').val()
    }, stripeResponseHandler);

    return false;
});

function stripeResponseHandler(status, response) {
    if(response.error) {
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('button').prop('disabled', false);
    } else {
        var token = response.id;
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));
        $form.get(0).submit();
    }
}


