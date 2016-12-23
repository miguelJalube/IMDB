<?php 
    require_once('template/header.php');
    /*echo '<pre>';
    print_r($data);*/
    if(!isset($data) || $data == null){
        $data = \controller\Error::getType('controller\Discover');
        require_once('view/error.view.php');
    }else{
        echo '<div class="col s12 m12"><h4 class header>Séries populaires</h4></div>';
        foreach($data[0] as $v){
            $id = $v->getId();
            $link = SITE_ROOT.'/tv/show/'.$id;
            $header = $v->getName();
            $image = '<div class="card-image"><img style="width:185px;height:278px;" alt="'.$header.'" src="http://image.tmdb.org/t/p/w185'.$v->getPoster_path().'"/></div>';
            $description = '<div class="card-stacked"><div class="card-content"><p><strong>Nom</strong>: '.$header.'</p><p><strong>Date de la première diffusion</strong>: '.$v->getFirst_air_date().'</p><p></div><div class="card-action"><a href="'.$link.'">Lire la suite</a></div></div>';
            $tag = '<div class="card horizontal hoverable">';   
            $col = 'col s12 m12';
            echo '<div class="'.$col.'">'.$tag.$image.$description.'</div></div>';
        }
        echo '</div>';
    }
    require_once('template/footer.php');
?>