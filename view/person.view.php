<?php 
    require_once('template/header.php');
    if(!isset($data[0][0])){
        $data = \controller\Error::getType('controller/Movie');
        require_once('view/error.view.php');
    }
    else{
        echo '<h1 class="center-align">'.$data[0][0]->getName().'</h1>';
        echo '<div style="dsiplay:block;"><img style="display: block;margin-left: auto;margin-right: auto;" class="center-align" src="http://image.tmdb.org/t/p/w185'.$data[0][0]->getProfile_path().'"/></div>';
        echo '<p>'.$data[0][0]->getBiography().'</p>';
    }
    require_once('template/footer.php')
?>
