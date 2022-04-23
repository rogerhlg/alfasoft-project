<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href="app.css">
        <title> {{ $title ?? 'Show Contacts' }}</title>
    </head>
    <header>
        <a href="{{route('index')}}"> <button> view all contacts</button></a>
        <a href="{{route('create-contact')}}"> <button>add new contact</button></a>
    </header>
    <body class="body">
        <x-flash-messages/>
        {{ $body }}
    </body>
</html>
