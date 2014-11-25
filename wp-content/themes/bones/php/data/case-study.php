<?php
    // CASE STUDY VARIABLE COLLECTION
    $case_vars['title'] = get_the_title();
    $case_vars['permalink'] = get_the_permalink();
    $case_vars['feat-image'] = get_the_post_thumbnail($post->ID, 'full');
    $case_vars['logo'] = get_field('logo');
    $case_vars['tagline'] = get_field('tagline');

    //REPEATER FIELD VARS
    $case_vars['panels'] = get_field('panel');



?>