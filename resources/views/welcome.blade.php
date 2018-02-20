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
</head>
<body class="bg-brand-lightest font-sans font-normal">
    <div id="app">
        <ul>
            <li v-for="name in names" v-text="name"></li>
        </ul>

        <div>
            <input type="text"  v-model="newName">
            <button @click="addName">Add Name</button>
        </div>
    </div>

<script src="{{ mix('js/app.js') }}"></script>
<script>

</script>
</body>
</html>
