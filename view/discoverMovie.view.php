<?php 
    require_once('template/header.php');
    /*echo '<pre>';
    print_r($data);*/
    if(!isset($data) || $data == null){
        $data = \controller\Error::getType('controller\Multi');
        require_once('view/error.view.php');
    }else{
        echo '<div class="row">';
        foreach($data[0] as $v){
            $id = $v->getId();
            $link = SITE_ROOT.'/movie/show/'.$id;
            $header = $v->getTitle();
            $image = '<div class="card-image"><img style="width:185px;height:278px;" alt="'.$v->getTitle().'" src="http://image.tmdb.org/t/p/w185'.$v->getPoster_path().'"/></div>';
            $description = '<div class="card-stacked"><div class="card-content"><p><strong>Titre</strong>: '.$header.'</p><p><strong>Date de sortie</strong>: '.$v->getRelease_date().'</p><p><strong>Type:</strong> '.$v->getMedia_type().'</p></div><div class="card-action"><a href="'.$link.'">Lire la suite</a></div></div>';
            $tag = '<div class="card horizontal hoverable">';   
            $col = 'col s12 m12';
            echo '<div class="'.$col.'">'.$tag.$image.$description.'</div></div>';
        }
        echo '</div>';
    }
    require_once('template/footer.php');
?>