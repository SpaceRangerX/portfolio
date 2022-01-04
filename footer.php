<?php
/**
 * 
 * Footer template.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$social_media = get_field('social_media', 'option');
?>

<footer id="footer-wrapper">
    <div class="container">
        <div class="row">
        <?php if ($social_media) : ?>
            <?php foreach($social_media as $social) : ?>
                <div class="social-media">
                    <a href="<?= $social['link']['url'] ?>" target="<?= $social['link']['target'] ?>">
                        <img src="<?= $social['icon'] ?>" alt="">
                    </a>
                </div>
            <?php endforeach ?>
        <?php endif ?>
        </div>
        <p>© <?= date('Y') ?></p>
    </div>
</footer>

</div> <!-- -Page container -->

<?php wp_footer(); ?>
</body>
</html>