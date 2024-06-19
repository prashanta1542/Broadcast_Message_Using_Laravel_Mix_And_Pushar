<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        
       <p id="msg"></p>

    <script>
        var channel=Echo.channel('my-channel');
        channel.listen('.my-event',function(e){
            document.getElementById('msg').innerHTML=e.message;
        })
    </script>
    </body>
</html>
