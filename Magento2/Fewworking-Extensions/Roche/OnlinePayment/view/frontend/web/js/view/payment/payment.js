define([
         'uiComponent',
         'Magento_Checkout/js/model/payment/renderer-list'
       ], function (Component, rendererList) { 
              'use strict';
               rendererList.push({ 

                type: 'bizspicepayment', 
                component: 'Roche_OnlinePayment/js/view/payment/method-renderer/payment' 
            });
                 return Component.extend({});
        });