
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
  template: `
    <div class="modal is-active">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">
            <slot name="header"></slot>
          </p>
          <button class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
          <p>
            <slot name="body"></slot>
          </p>
        </section>
        <footer class="modal-card-foot">
          <slot name="footer">
            <button class="button is-success">Save changes</button>
          </slot>

        </footer>
      </div>
    </div>
  `
});


const app = new Vue({
    el: '#app',
});
