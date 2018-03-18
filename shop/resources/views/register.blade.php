<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="/insertRegister" method="post">
        {{ csrf_field() }}
        <p>Username:</p>
        <input type="text" name="username"/>
        <p>Wachtwoord:</p>
        <input type="text" name="password"/>
        <input type="submit" name="submit" value="add"/>
    </form>
</body>
</html>