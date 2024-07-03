<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AutoNejma</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body{
                background-image: url('/img/index-wallpaper.jpg');
                color:white;

            }
           body,html{
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color:rgba(41, 32, 122,0.4);
            display:grid;
            grid-template-row:1fr 4fr 1fr;
            text-align: center;
            width: 750px;
            height:80vh;
            padding: 20px;
            border: 1px solid #000;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container label {
            margin-top: 10px;
            text-align: left;
        }
        .container input {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            max-width: 300px;
        }
        .container button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .container button:hover {
            background-color: #0056b3;
        }
        .container .alert {
            margin-bottom: 10px;
            padding: 10px;
            width: 100%;
            max-width: 300px;
            text-align: left;
        }
        .container .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        .container .alert-danger {
            display:none;
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
        .container a {
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }
        .container a:hover {
            text-decoration: underline;
        }
        </style>
    </head>
    <body class="antialiased">
    <div class="container">
        <div>
            <h1>Se Connecter</h1>
        </div>
        <div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if (isset($errors))
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label for="email">Adresse e-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Se connecter</button>
            </form>
        </div>
        <div>

        </div>

        <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
        <a href="{{ route('signup.request') }}">crée un compte.</a>
    </div>
    </body>
</html>
