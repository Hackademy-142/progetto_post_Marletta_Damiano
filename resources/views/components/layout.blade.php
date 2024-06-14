<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"> --}}

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>The Aulab Post </title>
</head>
<body style="height:-webkit-fill-available">
    <x-navbar />
    <div class="">
        {{ $slot }}
    </div>
    
</body>
</html>