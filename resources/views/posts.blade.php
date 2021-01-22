<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Post_views</h1>
<div>
<strong>Title</strong>
<strong>content</strong>
<strong>tag</strong>
</div>
<div>
<?php 
foreach ($posts as $post) {
    echo $post->title."\n";
}
?>
</div>
<div>
<?php
foreach ($posts as $post) {
    echo $post->content."\n";
}
?>
</div>
<div>
<?php
foreach ($posts as $post) {
    echo $post->tag."\n";
}
?>
</div>



</body>
</html>