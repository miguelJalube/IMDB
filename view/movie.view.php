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
        
        $count = 1;
        $people = '<p><strong>Acteurs:</strong> ';
        if($credits != null){
            foreach($credits[0] as $value){
                if($count != 1 && $value->getCast_id() != null){$people .=  ', ';}
                $people .= '<a href="'.SITE_ROOT.'/person/show/'.$value->getId().'">'.$value->getName().'</a>';
                $count++;
            }
        }
        $people .= '</p>';
        
        $player='';
        if($videos != null){
            foreach($videos[0] as $value){
                $player .= '<iframe width="640" height="400" src="https://www.youtube.com/embed/'.$value->getKey().'" frameborder="0" allowfullscreen></iframe>';
            }
        }
        $count = 1;
        $genres = '<p><strong>Genres:</strong> ';
        foreach($data[0][0]->getGenres() as $value){
            if($count != 1){$genres.=  ', ';}
            $genres.= '<a href="'.SITE_ROOT.'/genre/movies/'.$value->id.'/">';
            $genres.=  $value->name;
            $genres.=  '</a>';
            $count++;
        }
        $genres.=  '</p>';
        
        //images
        $count=1;
        $image = '<div style="height: 497px;" class="carousel carousel2">';
        if($images[0][0]->getBackdrops() == null || $images[0][0]->getBackdrops() == ''){
            $image .='<a style="width:100%;" class="carousel-item" href="#"><img src="../../view/images/1280.jpg"></a>';
        }
        foreach($images[0][0]->getBackdrops() as $value){
            $image .='<a style="width:100%;" class="carousel-item" href="#"><img src="http://image.tmdb.org/t/p/w1280'.$value->file_path.'"></a>';
            $count++;
        }
        $image.= '</div>';
        
        $image = '<div class="card-image">'.$image.'</div>';
        $content = '<div class="card-content"><p><strong>Titre</strong>: '.$header.'</p><p><strong>Description:</strong> '.$description.'</p><p><strong>Date de sortie</strong>: '.$release_date.'</p>'.$genres.$people.'</div>';
        $tag = '<div class="card">';   
        $col = 'col s12 m12';
        echo '<div class="'.$col.'">'.$tag.$image.$content.'</div></div>';
        echo '<div class="'.$col.' center">'.$player.'</div></div>';

    }
    require_once('template/footer.php')
?>
