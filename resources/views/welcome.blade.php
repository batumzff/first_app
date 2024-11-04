<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coder Network</title>
    
    @vite('resources/css/app.css')
</head>
<body class="px-8 py-12 text-center" >
    <h1>Welcome to the Batu Network</h1>
    <p>Click the button below to view the list of coders.</p>

    <a href="/coders" class="inline-block mt-4 btn">
    Find Coders!</a>
</body>
</html>