<?php
    require_once('template/header.php');
    if(!isset($data[0][0])){
        $data = \controller\Error::getType('controller/Movie');
        require_once('view/error.view.php');
    }
    else{
        foreach($data[0] as $v){
            echo '<a class="center-align" href="'.SITE_ROOT.'/person/show/'.$v->getId().'"><h1>'.$v->getName().'</h1></a>';
            echo '<img class="responsive-img" style="display: block;margin-left: auto;margin-right: auto;" src="http://image.tmdb.org/t/p/w185'.$v->getProfile_path().'"></img>';
            echo '<p>Known for:</p>';
            echo '<hr/>';
        }
    }
    require_once('template/footer.php');
?>
