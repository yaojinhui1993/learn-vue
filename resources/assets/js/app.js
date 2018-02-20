
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

Vue.component('modal', {
    props: ['content'],
    template: `
        <div class="modal is-active">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="box">
                    <p v-text="content"></p>
                </div>
            </div>
            <button class="modal-close is-large" aria-label="close" @click="$emit('close')"></button>
        </div>
    `,
});

const app = new Vue({
    el: '#app',
    data: {
        showModal: false
    },
    methods: {
        show() {
            this.showModal = true;
        }
    }
});
