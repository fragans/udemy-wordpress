<?php
$watch_course_video = get_field('watch_course_video');

?>
<section id="featurette">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2>Watch the Course Introduction</h2>
                <div class="embed-container">
                    <?php echo $watch_course_video; ?>
                </div>
            </div>
        </div>
    </div>
</section>
