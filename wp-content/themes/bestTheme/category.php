<?php get_header(); ?>

<div class="services">
    <div class="container">
        <div class="services__inner">
            <div class="services__nav">
                <?php foreach ($posts as $post): ?>
                    <div class="services__nav-item">
                        <a href="<?= get_permalink($post->ID) ?>"
                           class="services__nav-link services__nav-link--active"><?= $post->post_title ?></a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="services__photos">
                <?php foreach ($posts as $post): ?>
                    <img src="<?= get_the_post_thumbnail_url($post->ID); ?>" alt=""
                         class="services__photos-img services__photos-img--active">
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
