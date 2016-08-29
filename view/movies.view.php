<?php 
    require_once('template/header.php');
    if(!isset($data[0][0])){
        $data = \controller\Error::getType('controller/Movie');
        require_once('view/error.view.php');
    }
    else{
        echo '<div class="row">';
        foreach($data[0] as $v){         
            echo '<a class="center-align" href="'.SITE_ROOT.'/movie/show/'.$v->getId().'"><h1>'.$v->getTitle().'</h1></a>';
            echo '<img class="responsive-img" style="display: block;margin-left: auto;margin-right: auto;" src="http://image.tmdb.org/t/p/w185'.$v->getPoster_path().'"></img>';
            echo '<p class="center-align">'.$v->getOverview().'</p>';
            echo '<hr/>';
        }
        echo '</div>';
    }
    require_once('template/header.php');
?>
