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
        <label for="name" class="text-dark">Name</label><br>
            <input class="form-cotrol" type="text" name="name"><br>
            <label for="email" class="text-dark">Email</label><br>
            <input class="form-control" type="email" name="email"><br>
            <label for="password" class="text-dark">Password</label><br>
            <input class="form-control" type="number" name="password"><br>
<select name="role" id="">
    <option value="principal">Principal</option>
    <option value="teacher">Teacher</option>
    <option value="student">Student</option>
    <option value="admin">Admin</option>
</select>
            <button type="submit">submit</button>
    </form>

</body>
</html>
