<!DOCTYPE html>
<html>

<head>
    <title>Liste d'attente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #ffffff;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            color: #333333;
        }

        p {
            color: #666666;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('/logo.png') }}" alt="ISEST Logo" style="width: 100px; height: auto;">
        </div>
        <h1>Bonjour, {{ $name }}</h1>
        <p>Nous vous informons que vous avez été placé sur la liste d'attente pour notre programme.</p>
        <p>Nous vous contacterons si une place se libère.</p>
        <p>Cordialement,</p>
        <p>L'équipe de {{ config('app.name') }}</p>
    </div>
</body>

</html>
