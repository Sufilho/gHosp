<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro de Paciente</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <script src="{{asset('js/vue.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/vue-resource-develop/dist/vue-resource.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/moment.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/v-mask-2.0.2/dist/v-mask.min.js')}}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

</head>

<body>

    @yield('conteudo')


</body>

</html>
