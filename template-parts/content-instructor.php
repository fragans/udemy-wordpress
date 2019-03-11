<?php

$instructor_section_title = get_field('intstrutor_section_title');
$instructor_name = get_field('instructor_name');
$bio_excerpt = get_field('bio_excerpt');
$full_bio = get_field('full_bio');

$twitter_username = get_field('twitter_username');
$facebook_username = get_field('facebook_username');
$google_plus_username = get_field('google_plus_username');

$num_students = get_field_object('num_students');
$num_reviews = get_field_object('num_reviews');
$num_courses = get_field_object('num_courses');
?>

<section id="instructor">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h2>
                            <?php echo $instructor_section_title; ?> <small>
                                <?php echo $instructor_name; ?></small></h2>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://www.twitter.com/<?php echo $twitter_username ?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/<?php echo $facebook_username ?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://plus.google.com/<?php echo $google_plus_username ?>" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                <p class="lead">
                    <?php echo $bio_excerpt ?>
                </p>
                <p>
                    <?php echo $full_bio ?>
                </p>
                <hr>

                <h3>The Numbers <small>They Don't Lie</small></h3>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $num_students['value']; ?> <span>
                                    <?php echo $num_students['append']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $num_reviews['value']; ?> <span>
                                    <?php echo $num_reviews['append']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $num_courses['value']; ?> <span>
                                    <?php echo $num_courses['append']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>