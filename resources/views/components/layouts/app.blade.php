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
        <link rel="stylesheet" href="{{asset('css/news.css')}}" />
        <link rel="stylesheet" href="{{asset('css/programs.css')}}" />

        <link rel="stylesheet" href="{{asset('css/donation.css')}}" />
        <link rel="stylesheet" href="{{asset('css/aboutus.css')}}" />
        <link rel="stylesheet" href="{{asset('css/document.css')}}" />



        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sue+Ellen+Francisco&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&family=Sue+Ellen+Francisco&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&family=Sue+Ellen+Francisco&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <title>{{ $title ?? 'Page Title' }}</title>


    </head>

    <body>
        {{ $slot }}
        <script src="{{asset("js/script.js")}}"></script>
    </body>

</html>
