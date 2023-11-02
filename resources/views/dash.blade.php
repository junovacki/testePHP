<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <title>Dash</title>
</head>
<body>
    @include('menu')
    <h1 id="h1" style="margin-left: 20%"></h1>
</body>
</html>
<script>
    $( document ).ready(function() {
        document.getElementById("h1").innerHTML = "Seja bem-vindo "+localStorage.getItem("nome");
    });
</script>
