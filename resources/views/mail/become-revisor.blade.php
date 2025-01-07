<! DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Presto.it</title>
    </head>

    <body>
        <div>
            <h1>A user asked to work with us</h1>
            <h2>Here are his details:</h2>
            <p>Name: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>If you want to make it* reviewer, click here:</p>
            <a href="{{ route('make.revisor', compact('user')) }}">Make revisor</a>
        </div>
    </body>
    </html>
