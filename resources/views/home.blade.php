<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        .logout{
            color: rgb(0, 0, 0);
            background-color: rgb(255, 0, 0);
            margin: 20px;
            padding: 10px 20px;
            font-size: 20px;
            border: 2px solid white;
            cursor: pointer;
        }
        .delete{
            color: rgb(0, 0, 0);
            background-color: rgb(255, 0, 0);
            font-size: 15px;
            cursor: pointer;
        }
        .lo{
            position:absolute;
            right:10px;
            top:5px;
        }
        .posts{
            color: rgb(255, 255, 255);
            background-color: rgb(1, 36, 148);
            font-size: 20px;
            cursor: pointer;
            margin: 10px;
            padding: 10px;
            border: 2px solid white;
        }
        .createPost{
            margin-block: 70px;
        }
    </style>
</head>
<body>
    @auth
        <form class='lo'action="/logout" method="POST">
            @csrf
            <button class='logout'>Log Out</button>
        </form>
        <form class='ap'action="/posts" method="GET">
            @csrf
            <button class='posts'>Show All Posts</button>
        </form>
        <div class="createPost" style="border: 2px solid black">
            <h1>Create A New Post</h1>
            <form action="/create-post" method="POST">
                @csrf
                <input type="text" name="title" placeholder="Post Title"><br><br>
                <textarea name="body" placeholder="Body Content..."></textarea><br>
                <button class="savePost">Save Post</button>
            </form>
        </div><br>
        <div class="showPost" style="border: 2px solid black">
            <h1>All Posts</h1>
            @foreach ($posts as $post)
                <div style="background-color: gray; padding: 10px; margin: 10px;">
                    <h3>{{$post['title']}} by {{$post->user->name}}</h3>
                    {{$post['body']}}
                    <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
                    <form action="/delete-post/{{$post->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="delete">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    @endauth

</body>
</html>
