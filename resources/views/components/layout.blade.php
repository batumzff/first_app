<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coder Network</title>

    @vite('resources/css/app.css')
</head>
<body>
    
    <header>
    <nav>
    <h1>Coder Network</h1>
    <a href="/coders">All Coders</a>
    <a href="/coders/create">Create New Coders</a>
    </nav>
    </header>

    <main class="container">
    {{$slot}}
    </main>

</body>
</html>