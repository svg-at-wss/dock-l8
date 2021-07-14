<!DOCTYPE html>
<title>My Blog</title>
<link rel="stylesheet" type="text/css" href="/app.css">
<body>
    <?php foreach ($posts as $post) : ?>
        <article>
           <?php echo $post; ?>
        </article>
    <?php endforeach; ?>

</body>

</html>
