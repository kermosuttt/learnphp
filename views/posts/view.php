<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container">
    <h1><?= $post->title ?></h1>
    <div>
        <p><?= $post->body ?></p>
    </div>
    <a href="/admin/posts" class="btn btn-secondary">Back to posts</a>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
