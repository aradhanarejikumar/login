<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        @csrf

            <label for="email" class="text-dark">User Name</label><br>
            <input class="form-control" type="email" name="email"><br>
            <label for="password" class="text-dark">Password</label><br>
            <input class="form-control" type="number" name="password"><br>
            <button type="submit">submit</button>
    </form>

</body>
</html>
