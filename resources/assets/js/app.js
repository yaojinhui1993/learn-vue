import Axios from 'axios';

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

class Errors {
  constructor() {
    this.errors = {};
  }

  get(field) {
    if (this.errors[field]) {
      return this.errors[field][0];
    }
  }

  record(errors) {
    this.errors = errors;
  }

  clear(field) {
    if (this.errors[field]) {
      delete this.errors[field];
    }
  }

  has(field) {
    return this.errors.hasOwnProperty(field);
  }

  any() {
    return Object.keys(this.errors).length > 0;
  }

  getAll() {
    return this.errors;
  }
}

const app = new Vue({
    el: '#app',
    data() {
      return {
        name: '',
        description: '',
        errors: new Errors()
      }
    },

    methods: {
      onSubmit() {
        axios.post('/projects', this.$data)
        .then(this.onSuccess)
        .catch(error => this.errors.record(error.response.data.errors));
      },

      onSuccess(response) {
        alert(response.data.message);
        this.description = '';
        this.name = '';
      }
    }
});
