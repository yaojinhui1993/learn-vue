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
    <style>
        .red {
            color: red
        }
        .is-loading {
            color: blue
        }
    </style>
</head>
<body class="bg-brand-lightest font-sans font-normal">

    <div id="app">
        <example-component>Go to school</example-component>
        <example-component>Go to work</example-component>
        <example-component>Go to bank</example-component>
    </div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
