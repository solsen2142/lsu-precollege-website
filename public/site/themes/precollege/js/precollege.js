var stripe = Stripe('pk_live_wO76DSR6IGWdN7Tz7qgJvFSz00mXuJGhGr');

window.addEventListener('message', event => {
   if(event.data.type === 'hsFormCallback' && event.data.eventName === 'onFormSubmit') {
       stripe.redirectToCheckout({
         items: [{
           sku: 'sku_GfI8c62sCyScYY',
           quantity: 1
         }],
         successUrl: 'https://precollege.lsu.edu/thankyou',
         cancelUrl: 'https://precollege.lsu.edu/cancel'
       });
   }
});
