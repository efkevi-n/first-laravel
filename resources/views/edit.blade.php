<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>EDİT PAGE </h1>
    <h2>edit post</h2>
    <form action="/edit-post/{{ $post->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $post->title}}">
    <textarea name="body" >{{ $post->body }}</textarea>
    <button>save your change</button>
    </form>

</body>
</html>
