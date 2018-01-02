<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Framework Admin</title>
</head>
<body style="margin: auto; text-align: center;">
    <form method="POST">
        <div style="color: #F00;"><?=(isset($error)) ? $error : "";?></div>
        <div><label for="username" style="font-weight: bold;">username:</label></div>
        <div><input type="text" name="username" style="width: 150px;"/></div>
        <div><label for="password" style="font-weight: bold;">password:</label></div>
        <div><input type="password" name="password" style="width: 150px;"/></div>
        <div><button type="submit">Login</button></div>
    </form>
</body>
</html>