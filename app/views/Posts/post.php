<div class="container">
    <?php if (!empty($post)) : ?>
        <div class="panel panel-default">
            <div class="panel-heading"><?=$post['title']?> | <?=$post['author']?></div>
            <div class="panel-body">
                <?=$post['text']?>
            </div>
        </div>
    <?php endif; ?>
</div>