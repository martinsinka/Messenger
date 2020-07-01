require('./bootstrap');

window.Vue = require('vue');


import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)


Vue.component('contact-component',
	require('./components/ContactComponent.vue')
);
Vue.component('contact-list-component',
	require('./components/ContactListComponent.vue')
);
Vue.component('active-conversation-component',
	require('./components/ActiveConversationComponent.vue')
);
Vue.component('message-conversation-component',
	require('./components/MessageConversationComponent.vue')
);

const app = new Vue({
    el: '#app',
    methods: {
    	logout (){
    		document.getElementById('logout-form').submit();
    	}
    }
});
