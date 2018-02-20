<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>


  <!-- Styles -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">

  <link href="https://cdn.bootcss.com/bulma/0.6.2/css/bulma.min.css" rel="stylesheet">
  <style>
    body {
      margin-top: 40px
    }
  </style>
</head>

<body class="font-sans font-normal">

  <div id="app" class="container">
    <modal>
      <template slot="header">Dynamic Header</template>
      <template slot="body">Dynamic Body</template>
      <template slot="footer">
          <button class="button is-success">Save changes</button>
      </template>


    </modal>

  </div>

  <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>