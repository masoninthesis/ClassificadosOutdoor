<?php
/*
Template Name: Paypal Template
*/
?>

<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>


<script src="https://www.paypalobjects.com/js/external/dg.js" type="text/javascript"></script>


<body>
<form action="https://www.sandbox.paypal.com/webapps/adaptivepayment/flow/pay" target="PPDGFrame" class="standard">
<label for="buy">Buy Now:</label>
<input type="image" id="submitBtn" value="Pay with PayPal" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif">
<input id="type" type="hidden" name="expType" value="light">
<input id="paykey" type="hidden" name="paykey" value="AP-8FY50816521434738">
</form>

<script type="text/javascript" charset="utf-8">
var embeddedPPFlow = new PAYPAL.apps.DGFlow({trigger: 'submitBtn'});
</script>
</body>
