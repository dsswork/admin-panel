<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Description -->
    <meta name="description" content="{{ $meta->description ?? '' }}">
    <meta name="author" content="Themeland">
    <meta name="keywords" content="{{ $meta->keywords ?? '' }}">
    <!-- Title  -->
    <title>{{ $meta->title  ?? '' }}</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>
