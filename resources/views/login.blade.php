<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body{
            margin: 200px;
            text-align: center;
            background-color: rgb(228, 230, 173);
        }
        input{
            border: 2px solid black;
            border-radius: 6px;
            outline: none;
            font-size: 20px;
            width: 20%;
            margin: 10px auto;
            padding: 5px;
        }
        h1{
            color: rgb(0, 4, 255);
            font-size: 40px;
        }
        .b1{
            color: rgb(255, 255, 255);
            background-color: rgb(0, 110, 255);
            margin: 20px;
            padding: 10px 20px;
            font-size: 20px;
            border: 2px solid white;
            border-radius: 15px;
            cursor: pointer;
        }
        </style>
</head>
<body>
    <div>
        <h1>Login Form</h1>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="Name"> <br>
            <input name="loginpassword" type="password" placeholder="Password"> <br>
            <button class="b1">Log In</button><br>
        </form>
    </div>
</body>
</html>
