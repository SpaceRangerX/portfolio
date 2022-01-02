   
<?php
/**
 * 
 * Template Name: home
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();

$featured_projects = get_field('featured_projects');
$web_projects = get_field('websites_projects');

?>
<main id="home-template-6031e9">
    <section>
        <div class="container">
            <div class="row">
                <?php if ($web_projects['title']) :?>
                    <div class="section-title">
                        <h2>
                            <?= $web_projects['title'] ?>
                        </h2>
                    </div>
                <?php endif ?>
    
                <?php if ($web_projects['projects']) :?>
                    <?php foreach($web_projects['projects'] as $project) : ?>
                        <?php $featured_image = get_field('featured_image', $project['project']->ID); ?>
                        <div class="project">
                            
                            <a href="<?= get_permalink($project['project']->ID) ?>" class="data" style="background-image: url(<?= $featured_image ?>)">
                                <div class="overlay"></div>
                                <div class="title">
                                    <?= $project['project']->post_title ?>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
                    