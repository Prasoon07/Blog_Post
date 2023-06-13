<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <style>
        body{
            margin: 200px;
            text-align: center;
            background-color: lightblue;
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
            color: red;
            font-size: 40px;
        }
        button{
            color: rgb(0, 0, 0);
            background-color: rgb(255, 208, 0);
            margin: 20px;
            padding: 10px 20px;
            font-size: 20px;
            border: 2px solid white;
            border-radius: 15px;
            cursor: pointer;
        }
        p{
            font-size: 40px;
        }
        .p1{
            font-size: 25px;
        }
        a{
            font-size: 20px;
            font-weight: 100;
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
        <h1>Register Form</h1>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="Name"> <br>
            <input name="email" type="text" placeholder="Email"> <br>
            <input name="password" type="password" placeholder="Password"> <br>
            <button>Register</button><br>
        </form>
        <form action="/login" method="GET">
            <p class="p1">Already have an account?</p>
            <button class="b1">Login</button><br>
        </form>
    </div>
</body>
</html>
