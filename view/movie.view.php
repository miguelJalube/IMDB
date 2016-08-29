<?php
    require_once('template/header.php');
    if(!isset($data[0][0])){
        $data = \controller\Error::getType('controller/Movie');
        require_once('view/error.view.php');
    }
    else{
        echo '<h1 class="center-align">'.$data[0][0]->getTitle().'</h1>';
        echo '<img width="300" style="display: block;margin-left: auto;margin-right: auto;" class="responsive-img center-align" src="http://image.tmdb.org/t/p/w185'.$data[0][0]->getPoster_path().'"/>';
        echo '<p>'.$data[0][0]->getOverview().'</p>';
        echo '<p>Genres :</p>';
        echo '<ul>';
        foreach($data[0][0]->getGenres() as $v){
            echo '<li><a href="'.SITE_ROOT.'/genre/movies/'.$v->id.'/">';
            echo $v->name;
            echo '</a></li>';
        }
        echo '</ul>';
    }
    require_once('template/footer.php')
?>
