<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
    <style>
        body{
            padding: 10px;
            background-color:hsl(30, 76%, 77%);
            margin: 10px;
        }
        input{
            border: 2px solid black;
            border-radius: 4px;
            outline: none;
            font-size: 15px;
            width: 25%;
            margin: 10px;
            padding: 5px;
        }
        h1{
            margin: 10px;
        }
        textarea{
            border: 2px solid black;
            outline: none;
            font-size: 15px;
            width: 30%;
            margin: 10px;
            padding: 5px;
            block-size: 200px;
            resize: none;
        }

        button{
            color: rgb(0, 0, 0);
            background-color: rgb(255, 208, 0);
            margin: 20px;
            padding: 10px 20px;
            font-size: 15px;
            border: 2px solid white;
            border-radius: 15px;
            cursor: pointer;
        }
        .logout{
            color: rgb(0, 0, 0);
            background-color: rgb(255, 0, 0);
            /* margin: 20px;
            padding: 10px 20px; */
            font-size: 20px;
            border: 2px solid white;
            cursor: pointer;
        }
        .lo{
            position:fixed;
            right:10px;
            top:5px;
        }
        .createPost{
            margin-block: 70px;
        }
    </style>
</head>
<body>
    <div class="showPost" style="border: 2px solid black">
        <h1>All Posts</h1>
        @foreach ($posts as $post)
            <div style="background-color: gray; padding: 10px; margin: 10px;">
                <h3>{{$post['title']}} by {{$post->user->name}}</h3>
                {{$post['body']}}
            </div>
        @endforeach
    </div>

</body>
</html>
