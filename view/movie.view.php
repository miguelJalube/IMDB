<?php
    require_once('template/header.php');
    if(!isset($data) || $data == null){
        $data = \controller\Error::getType('controller\Movie');
        require_once('view/error.view.php');
    }
    else{
        $id = $data[0][0]->getId();
        $link = SITE_ROOT.'/movie/show/'.$id;
        $header = $data[0][0]->getTitle();
        $poster = $data[0][0]->getBackdrop_path();
        $description = $data[0][0]->getOverview();
        $release_date = $data[0][0]->getRelease_date();
        $player='';
        foreach($videos[0] as $value){
            $player .= '<iframe width="640" height="400" src="https://www.youtube.com/embed/'.$value->getKey().'" frameborder="0" allowfullscreen></iframe>';
        }
        
        $count = 1;
        $genres = '<p><strong>Genres:</strong> ';
        foreach($data[0][0]->getGenres() as $v){
            if($count != 1){$genres.=  ', ';}
            $genres.= '<a href="'.SITE_ROOT.'/genre/movies/'.$v->id.'/">';
            $genres.=  $v->name;
            $genres.=  '</a>';
            $count++;
        }
        $genres.=  '</p>';
        
        $image = '<div class="card-image"><img alt="'.$header.'" src="http://image.tmdb.org/t/p/w1280'.$poster.'"/></div>';
        $content = '<div class="card-content"><p><strong>Titre</strong>: '.$header.'</p><p><strong>Description:</strong> '.$description.'</p><p><strong>Date de sortie</strong>: '.$release_date.'</p>'.$genres.'</div>';
        $tag = '<div class="card">';   
        $col = 'col s12 m12';
        echo '<div class="'.$col.'">'.$tag.$image.$content.'</div></div>';
        echo '<div class="'.$col.' center">'.$player.'</div></div>';

    }
    require_once('template/footer.php')
?>
