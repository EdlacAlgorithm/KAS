
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('chat-message', require('./components/ChatMessage.vue'));
Vue.component('chat-log', require('./components/ChatLog.vue')); 
Vue.component('chat-composer', require('./components/ChatComposer.vue'));
Vue.component('chat-box', require('./components/ChatBox.vue'));

const app = new Vue({
    el: '#app',
    data:{
    	    messages:[
    	        {message:'hello there',user:'Mr Know all'},
    	        {message:'Hi there',user:'Mr Know '},
    	        {message:'Ok Here',user:'Mr Know Not'}
    	    ]
    	},

    created(){

    },
    methods:{
    	recieveMessage(message){
    		this.messages.push(message);
    	},
    }
    
});
