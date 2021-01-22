<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Blob</h1>
<?php 
$posts = array(
    array(
        'id' => 1,
        'title' => 'post1',
        'content' => 'content2',
    ),
    array(
        'id' => 2,
        'title' => 'post12',
        'content' => 'content2',
    ),
    array(
        'id' => 1,
        'title' => 'post1',
        'content' => 'content2',
    ),
);
?>
@foreach ($posts as $key => $post)
    <p>This is post {{ $post['id'] }}</p>
    <p>This is title {{ $post['title'] }}</p>
    <p>This is content {{ $post['content'] }}</p>
@endforeach

</body>
</html>