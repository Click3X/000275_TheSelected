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


<!-- PANEL FUNCTION -->
<?php 
    $panels = $case_vars['panels'];
    // helper($panels);
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
                    if( $format == ' gallery') { echo '<div class="img-holder cf">'; }
                        $pics = $panel['pics'];
                        foreach ($pics as $key => $pic) {
                            // helper($pic);
                            echo '<div class="pic pic-'.$key.'">';
                                echo '<img src="'.$pic['pic']['url'].'">';
                            echo '</div>';
                        }
                    
                    if( $format == ' grid') { echo '</div>'; }

            echo '</div>';
        echo '</div>';

        // helper($panel);

        // INCREMENT PANEL NUMBER
        $num++;
    }

?>