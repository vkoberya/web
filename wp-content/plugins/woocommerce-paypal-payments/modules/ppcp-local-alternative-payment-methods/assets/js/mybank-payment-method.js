(()=>{"use strict";const e=window.wc.wcBlocksRegistry;function t(e){var t=e.config;return e.components.PaymentMethodIcons,React.createElement("div",null,React.createElement("div",{className:"wc-block-components-payment-method-icons wc-block-components-payment-method-icons--align-right"},React.createElement("img",{className:"wc-block-components-payment-method-icon wc-block-components-payment-method-icon--".concat(t.id),src:t.icon,alt:t.title})))}var n=wc.wcSettings.getSetting("ppcp-mybank_data");(0,e.registerPaymentMethod)({name:n.id,label:React.createElement("div",{dangerouslySetInnerHTML:{__html:n.title}}),content:React.createElement(t,{config:n}),edit:React.createElement("div",null),ariaLabel:n.title,canMakePayment:function(){return!0},supports:{features:n.supports}})})();
//# sourceMappingURL=mybank-payment-method.js.map