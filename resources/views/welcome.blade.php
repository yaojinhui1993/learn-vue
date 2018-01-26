<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Learn Vue</title>

  <style>
    .color-red {
      color: red;
    }

    .color-blue {
      color: blue;
    }

    .is-loading {
      color: red;
    }
  </style>
</head>
<body>
<div id="app">
  <button :title="title">Hover over me</button>

  <h1 :class="className">Title</h1>

  <button :class="{ 'is-loading': isLoading }" @click="toggleClass">Click me toggle</button>

  <button :disabled="isDisabled" @click="toggleDisabled">Click me disabled</button>
</div>


<script src="https://cdn.bootcss.com/vue/2.5.13/vue.js"></script>
<script>
  let app = new Vue({
    el: '#app',
    data: {
      title: 'Now title is being set through the JavaScript.',
      className: 'color-red',
      isLoading: true,
      isDisabled: false,
    },
    methods: {
       toggleClass () {
         this.isLoading = ! this.isLoading;
       },

       toggleDisabled () {
         this.isDisabled = ! this.isDisabled;
       }
    }

  })
</script>
</body>
</html>
