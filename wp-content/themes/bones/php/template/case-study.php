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
    $panels = $case_vars['panels'];
    $num = 1;
    foreach ($panels as $key => $panel) {
        $panelClass = ' panel-'.$num;
        $format =' '.cleanString($panel['format']);

        // CONTAINER DIV
        echo '<div class="panel-container cf'.$panelClass.$format.'">';
            echo '<div class="panel-inner cf">';

                    // TITLE, DESCRIPTION, PANEL #
                    echo '<div class="title-holder cf">';
                        echo '<div class="num-title-holder">';
                            echo '<div class="num-holder">'.$num.'</div>';
                            echo '<h3 class="c-title">'.$panel['title'].'</h3>';
                        echo '</div>';
                        echo $panel['description'];
                    echo '</div>';

                    // IMAGE HOLDER
                    // IF GRID
                    if( $format == ' grid') {
                        $panel_class = $panel['grid_style'];
                        if(!$panel_class) {
                            $panel_class = 1;
                        }
                        $grid_style = ' grid-'.$panel_class;
                        echo '<div class="img-holder cf'.$grid_style.'">'; 
                        $events = $panel['events'];
                        
                        foreach ($events as $key => $event) {
                            // STORE VARS
                            $title = $event['event_title'];
                            $pics = $event['event_gallery'];
                            $id = cleanString($title);
                            echo '<ul id="'.$id.'" class="event-gallery clearfix">';

                            foreach ($pics as $key => $pic) {
                                echo '<li class="pic pic-'.$key.'">';
                                    echo '<img src="'.$pic['image']['sizes']['case-study-lightbox'].'">';
                                    // IF FIRST SLIDE - ECHO OVERLAY
                                    if($key==0) {
                                        echo '<div class="case-overlay"><h3>'.$title.'</h3></div>';
                                    }
                                echo '</li>';
                            }
                            echo '</ul>';
                        }
                        echo '</div>';

                        // IF MIDDLE:
                     } elseif( $format == ' middle') {
                        $pics = $panel['pics'];

                        echo '<div class="cf middle-div-holder">';
                        foreach ($pics as $key => $pic) {
                            if($key == 2) {
                                $img_src = $pic['pic']['url'];    
                            } else {
                                $img_src = $pic['pic']['sizes']['square-300'];    
                            }
                            
                            echo '<div class="pic pic-'.$key.'">';
                                echo '<img src="'.$img_src.'">';
                            echo '</div>';
                        }
                        echo '</div>'; // /.middle-div-holder
                        
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