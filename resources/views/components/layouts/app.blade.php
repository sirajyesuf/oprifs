<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{asset('css/base.css')}}" />
        <link rel="stylesheet" href="{{asset('css/header.css')}}" />
        <link rel="stylesheet" href="{{asset('css/contactus.css')}}" />
        <link rel="stylesheet" href="{{asset('css/footer.css')}}" />
        <link rel="stylesheet" href="{{asset('css/testimonials.css')}}" />
        <link rel="stylesheet" href="{{asset('css/ctabuttons.css')}}" />
        <link rel="stylesheet" href="{{asset('css/gallery.css')}}" />

        <link rel="stylesheet" href="{{asset('css/volunterpage.css')}}" />

        <title>{{ $title ?? 'Page Title' }}</title>


    </head>

    <body>
        {{ $slot }}
    </body>

</html>
