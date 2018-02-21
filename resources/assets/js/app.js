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
    if (!field) {
      this.errors = {};
      return;
    }

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

class Form {

  constructor(data) {
    this.originalData = data;

    for (let field in data) {
      this[field] = data[field];
    }

    this.errors = new Errors();
  }

  data() {
    let data = {};

    for (let properties in this.originalData) {
      data[properties] = this[properties];
    }

    return data;
  }

  reset() {

    for (let field in this.originalData) {
      this[field] = '';
    }

    this.errors.clear();
  }

  post(url) {
    return this.submit('post', url);
  }

  delete(url) {
    return this.delete('delete', url);
  }

  submit(requestType, url) {
    return new Promise((resolve, reject) => {
      axios[requestType](url, this.data())
        .then(response => {
          this.onSuccess(response.data);

          resolve(response.data);
        })
        .catch(error => {
          this.onFail(error.response.data);

          reject(error.response.data);
        });
    })

  }

  onSuccess(data) {
    this.reset();
  }

  onFail(errors) {
    this.errors.record(errors);
  }
}

const app = new Vue({
  el: '#app',
  data() {
    return {
      form: new Form({
        name: '',
        description: '',
      })
    }
  },

  methods: {
    onSubmit() {
      this.form.post('/projects')
        .then(data => console.log(data));
    }
  }
});