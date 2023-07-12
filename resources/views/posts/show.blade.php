
<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->title }}</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <h2>Comments</h2>
    <ul>
        @foreach ($post->comments as $comment)
            <li>{{ $comment->content }}</li>
        @endforeach
    </ul>
    <h3>Add a Comment</h3>
    <form method="post" action="/comments">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <textarea name="content"></textarea>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
