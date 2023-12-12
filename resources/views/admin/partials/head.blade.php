<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<link rel="dns-prefetch" href="//fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png')    }}" />
<link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />


{{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
