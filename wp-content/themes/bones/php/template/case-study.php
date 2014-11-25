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
        
        // CONTAINER DIV
        echo '<div class="panel-container cf">';
            echo '<div class="panel-inner cf">';

                    // TITLE, DESCRIPTION, PANEL #
                    echo '<div class="title-holder cf">';
                        echo '<div class="num-holder">'.$num.'</div>';
                        echo '<h3 class="c-title">'.$panel['title'].'</h3>';
                        echo '<p class="c-desc">'.$panel['description'].'</p>';
                    echo '</div>';


                    // IMAGE HOLDER
                    echo '<div class="img-holder cf">';

                    echo '</div>';



            echo '</div>';
        echo '</div>';

        helper($panel);
        
        // INCREMENT PANEL NUMBER
        $num++;
    }

?>