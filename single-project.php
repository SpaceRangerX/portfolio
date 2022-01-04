<?php
/**
 * 
 * Single project.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;
get_header();

$content = get_field('content');
?>

<main>
	<section id="single-project">
		<div class="container-single">
			<div class="row">
                <div class="title-project">
                    <h1><?= the_title() ?></h1>
                </div>
                <div class="description">
                    <?= $content['description'] ?>

                    <div class="project-link">
                        <a href="<?= $content['website'] ?>" target="_blank">Visit Website</a>
                    </div>
                </div>
            </div>
		</div>
	</section>

    <section>
        <div class="container-single">
			<div class="row">
                <?php if ($content['media']) : ?>
                    <?php foreach ($content['media'] as $media) : ?>
                        <div class="media">
                            <?php if ($media['media_type'] == 'img') : ?>
                                <div class="single-img">
                                    <img src="<?= $media['image'] ?>" alt="">
                                </div>
                            <?php elseif ($media['media_type'] == 'video') : ?>
                                <div class="single-video">
                                    <div class="video-vimeo" data-vimeo-url="<?= $media['video'] ?>" data-vimeo-background="true"></div>
                                </div>
                            <?php endif ?>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>