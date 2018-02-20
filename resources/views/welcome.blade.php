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
        <button type="button" v-bind:title="title">Hover over me</button>

        <h1 v-bind:class="className">Class</h1>

        <button :class="{'is-loading': isLoading}" @click="toggleClass">Click me</button>

        <br>

        <button :disabled="isDisabled" @click="toggleDisabled">Toggle disabled</button>

    </div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
