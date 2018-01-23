<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Learn Vue</title>

</head>
<body>
<div id="app">
  <input type="text" id="input" v-model="message">
  <p>
    This value of this input is: @{{ message }}
  </p>
</div>


<script src="https://cdn.bootcss.com/vue/2.5.13/vue.js"></script>
<script>
  let data = {
    message: 'Hello World'
  };
  let app = new Vue({
    el: '#app',
    data: data
  });

</script>

</body>

</html>
