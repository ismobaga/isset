<!DOCTYPE html>
<html>

<head>
    <title>Your Moodle Login Information</title>
</head>

<body>
    <h1>Hello, {{ $name }}</h1>
    <p>Your Moodle account has been created. Here are your login details:</p>
    <p>Email: {{ $email }}</p>
    <p>Password: {{ $password }}</p>
    <p>Please log in and change your password as soon as possible.</p>
</body>

</html>
