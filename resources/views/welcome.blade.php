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
  <ul>
    <li v-for="name in names" v-text="name"></li>
  </ul>

  <input id="input" type="text">
  <button id="button">Add Names</button>
</div>


<script src="https://cdn.bootcss.com/vue/2.5.13/vue.js"></script>
<script>
  let app = new Vue({
    el: '#app',
    data: {
      names: [
          'Joe', 'Merry', 'Jane', 'Jack'
      ]
    },
    mounted() {
      document.querySelector('#button').addEventListener('click', () => {
        let name = document.querySelector('#input');
        app.names.push(name.value);

        name.value = '';
      });

    },

  });

</script>

</body>

</html>
