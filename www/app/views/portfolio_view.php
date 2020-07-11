<h1>Портфолио</h1>

<div class="row">
    <?php

    foreach($data as $project){
        echo '<div class="col-md-4"><h2>'.$project['name'].'</h2><p>'.$project['description'].'</p></div>';
    }

    ?>

</div>