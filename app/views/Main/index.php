<div class="container">
    <?php if (!empty($posts)): ?>
        <?php foreach ($posts as $post): ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $post['login'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <?= $post['my_name'] ?>
                    </h6>
                </div>
            </div> 
        <?php endforeach; ?>
    <?php endif; ?>
</div>