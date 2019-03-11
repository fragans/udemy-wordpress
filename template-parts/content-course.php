<?php
$feature_section_image = get_field('feature_section_image');
$feature_section_title = get_field('feature_section_title');
$feature_section_body = get_field('feature_section_body');

?>

<section id="course-features">
    <div class="container">
        <div class="section-header">
            <?php if (!empty($feature_section_image)) : ?>
            <img src="<?php echo $feature_section_image['url'];  ?>" alt="<?php echo $feature_section_body['alt'] ?>">
            <?php endif ?>
            <h2>
                <?php echo $feature_section_title ?>
            </h2>
            <?php if (!empty($feature_section_body)) : ?>
            <p class="lead">
                <?php echo $feature_section_body ?>
            </p>
            <?php endif ?>
        </div>

        <div class="row">

            <?php $loop = new WP_Query(array('post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="col-sm-2">
                <i class="<?php the_field('course_feature_icon'); ?>"></i>
                <h4>
                    <?php the_title(); ?>
                </h4>
            </div>

            <?php endwhile; wp_reset_query();?>

        </div>
    </div>
</section>