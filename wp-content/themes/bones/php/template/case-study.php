<?php
// CASE STUDY SINGLE PAGE CODE
// WILL BE PLACED INSIDE LOOOP AND DEPENDENT ON CORRENSPODING DATA FILE
// DECLARED ON single-case_study.php
?>

<!-- LOGO -->
<div class="c-logo">
    <img src="<?php echo $case_vars['logo']['sizes']['case-study-logo']; ?>">
</div>

<!-- TAGLINE -->
<div class="c-tagline">
    <h3><?php echo $case_vars['tagline']; ?></h3>
</div>

<!-- PANELS -->
<?php 
    $myid=get_the_ID();
    $panels = $case_vars['panels'];
    $num = 1;
    foreach ($panels as $key => $panel) {
        $panelClass = ' panel-'.$num;
        $format =' '.cleanString($panel['format']);

        // CONTAINER DIV
        echo '<div class="panel-container cf'.$panelClass.$format.'">';
            echo '<div class="panel-inner cf">';

                    // TITLE, DESCRIPTION, PANEL #
                    // DONT PRINT PANEL 4 IF PAGE IS COINTREAU, OR SAILOR JERRY
                    if ( ($myid == 110 || $myid == 55) && ( $num == 4 ) ) {
                    } else {
                        echo '<div class="title-holder cf">';
                            echo '<div class="num-title-holder">';
                                echo '<div class="num-holder">'.$num.'</div>';
                                echo '<h3 class="c-title">'.$panel['title'].'</h3>';
                            echo '</div>';
                            echo $panel['description'];
                        echo '</div>';

                    }

                    // // IF PAGE IS CONTREAU OR SAILOR JERRY, INCLUDE PANEL 4 PARAGRAPH AND TITLE IN PANEL 3'S CONTAINER
                    // if ( ($myid == 110 || $myid == 55) && ( $num == 3 ) ) {
                    //     echo '<div class="title-holder cf">';
                    //         echo '<div class="num-title-holder">';
                    //             echo '<div class="num-holder">'.($num+1).'</div>';
                    //             echo '<h3 class="c-title">'.$panels[($key+1)]['title'].'</h3>';
                    //         echo '</div>';
                    //         echo $panels[($key+1)]['description'];
                    //     echo '</div>';
                    // } 

                    // IMAGE HOLDER
                    // IF GRID -----------------------------------------------------------------------------------------------------
                    if( $format == ' grid') {
                        $panel_class = $panel['grid_style'];
                        if(!$panel_class) {
                            $panel_class = 1;
                        }
                        $grid_style = ' grid-'.$panel_class;
                        echo '<div class="img-holder cf'.$grid_style.'">'; 
                        $events = $panel['events'];
                        
                        $album_count = 0;
                        foreach ($events as $key => $event) {
                            // STORE VARS
                            $title = $event['event_title'];
                            $pics = $event['event_gallery'];
                            $id = cleanString($title);
                            echo '<ul id="'.$id.'" class="event-gallery clearfix">';

                            foreach ($pics as $key => $pic) {
                                echo '<li class="pic pic-'.$key.'">';
                                    // IF FIRST SLIDE - ECHO OVERLAY
                                    if($key==0) {
                                        // TAKING OUT LIGHTBOX CLICK THROUGH LINKS
                                        // echo '<a class="">';
                                        // PUTTING IN LIGHTBOX
                                        echo '<a href="'.$pic['image']['sizes']['case-study-lightbox'].'" class="swipebox" title="'.$title.'">';
                                            echo '<div class="album-cover album-cover-'.$album_count.'" style="background-image:url('.$pic['image']['sizes']['case-study-lightbox'].');"></div>';
                                            echo '<div class="case-overlay"><h3>'.$title.'</h3></div>';
                                        echo '</a>';

                                    } else {
                                        echo '<a href="'.$pic['image']['sizes']['case-study-lightbox'].'" class="swipebox" title="'.$title.'">';
                                            // echo '<img src="'.$pic['image']['sizes']['case-study-lightbox'].'">';
                                        echo '</a>';
                                    }
                                echo '</li>';
                            }
                            echo '</ul>';

                            $album_count++;
                        }
                        echo '</div>';
                    // END GRID -----------------------------------------------------------------------------------------------------

                    // IF MIDDLE:
                     } elseif( $format == ' middle') {
                        $pics = $panel['pics'];
                        echo '<div class="cf middle-div-holder">';
                        foreach ($pics as $key => $pic) {
                            $maxW = $pic['pic']['width'].'px';
                            $maxH = $pic['pic']['height'].'px';
                            $img_src = $pic['pic']['url'];
                            echo '<div class="pic pic-'.$key.'">';
                                echo '<img src="'.$img_src.'" style="max-width:'.$maxW.'; max-height:'.$maxH.'; ">';
                            echo '</div>';
                        }
                        echo '</div>'; // /.middle-div-holder

                        // IF PAGE IS CONTREAU OR SAILOR JERRY, INCLUDE PANEL 4 PARAGRAPH AND TITLE IN PANEL 3'S CONTAINER
                        if ( ($myid == 110 || $myid == 55) && ( $num == 3 ) ) {
                            echo '<div class="title-holder cf">';
                                echo '<div class="num-title-holder">';
                                    echo '<div class="num-holder">'.($num+1).'</div>';
                                    echo '<h3 class="c-title">'.$panels[$key]['title'].'</h3>';
                                echo '</div>';
                                echo $panels[$key]['description'];
                            echo '</div>';
                        } 

                        
                        // LOGO
                        echo '<div class="panel-logo"></div>';

                    // IF NOT GRID OR INTRO:
                    } else {
                        $pics = $panel['pics'];
                        foreach ($pics as $key => $pic) {
                            echo '<div class="pic pic-'.$key.'">';
                                echo '<img src="'.$pic['pic']['url'].'">';
                            echo '</div>';
                        }
                    }
                    // CLOSE OUT PANEL
            echo '</div>';
        echo '</div>';

        // INCREMENT PANEL NUMBER
        $num++;
    }

?>