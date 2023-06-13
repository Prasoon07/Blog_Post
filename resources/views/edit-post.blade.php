<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit-Post</title>
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

        .savePost{
            color: rgb(0, 0, 0);
            background-color: rgb(255, 208, 0);
            margin: 20px;
            padding: 10px 20px;
            font-size: 15px;
            border: 2px solid white;
            border-radius: 15px;
            cursor: pointer;
        }
        .delete{
            color: rgb(0, 0, 0);
            background-color: rgb(255, 0, 0);
            font-size: 15px;
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
    <div class="createPost" style="border: 2px solid black">
        <h1>Edit Post</h1>
        <form action="/edit-post/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{$post->title}}"><br><br>
            <textarea name="body">{{$post->body}}</textarea><br>
            <button class="savePost">Save Changes</button>
        </form>
    </div>
</body>
</html>
