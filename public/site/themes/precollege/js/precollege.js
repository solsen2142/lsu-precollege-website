function callStripe(campSKU) {
	var stripe = Stripe('pk_live_wO76DSR6IGWdN7Tz7qgJvFSz00mXuJGhGr');

   	stripe.redirectToCheckout({
	     items: [{
	       sku: campSKU,
	       quantity: 1
	     }],
	     successUrl: 'https://precollege.lsu.edu/thankyou',
	     cancelUrl: 'https://precollege.lsu.edu/cancel'
   	});
}