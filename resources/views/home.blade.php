<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
     <p> you are logged in </p>

     <form action="/logout" method="POST">
    @csrf
    <button>log out </button>
    </form>

    <div>
        <h2>create a new blog post</h2>
        <form action="/create" method="POST">
            @csrf
              <input type="text" name="title" placeholder="title for post ">
              <textarea name="body" placeholder="content of the post"></textarea>
                <button> save your post </button>
            </form>
    </div>
    <h2>these are all of your post availabe in the  database</h2>
    @foreach ($posts as $post)
        <div>
            <h3>{{$post['title']}} by {{ $post->user->name}}</h3>
            {{ $post['body']}}
            <p><a href="/edit-post/{{ $post->id }}">EDİT</a></p>
          <form action="/delete/{{ $post->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>DELETE</button>
        </form>
        </div>
    @endforeach
    <div>

    </div>

        @else

        <div>
            <h2>Register</h2>
            <form action="/register" method="POST">
             @csrf
             <input name="name" type="text" placeholder="name">
             <input name="email" type="text" placeholder="email">
             <input name="password"  type="password" placeholder="password">
             <button>Register</button>
            </form>
          </div>


          <div>
            <h2>Login</h2>
            <form action="/register" method="POST">
             @csrf
             <input name="loginname" type="text" placeholder="name">
             <input name="loginpassword"  type="password" placeholder="password">
             <button>log in</button>
            </form>
          </div>
    @endauth


</body>
</html>
