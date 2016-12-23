<?php
    require_once('template/header.php');
    if(!isset($data) || $data == null){
        $data = \controller\Error::getType('controller\Movie');
        require_once('view/error.view.php');
    }
    else{
        $id = $data[0][0]->getId();
        $link = SITE_ROOT.'/tv/show/'.$id;
        $header = $data[0][0]->getName();
        $description = $season[0][0]->getOverview();
        $name = $season[0][0]->getName();
        $poster = $data[0][0]->getBackdrop_path();
        $number = $season[0][0]->getSeason_number();
        //$poster = $images[0][0]->getBackdrops();
        $first_air_date = $season[0][0]->getAir_date();
        
        //acteurs
        /*$count = 1;
        $people = '<p><strong>Acteurs:</strong> ';
        if($credits != null){
            foreach($credits[0] as $value){
                if($count != 1 && $value->getCast_id() == null){$people .=  ', ';}
                $people .= '<a href="'.SITE_ROOT.'/person/show/'.$value->getId().'">'.$value->getName().'</a>';
                $count++;
            }
        }
        $people .= '</p>';*/
        
        //Bande annonce
        $player='';
        if($videos != null){
            foreach($videos[0] as $value){
                $player .= '<iframe width="640" height="400" src="https://www.youtube.com/embed/'.$value->getKey().'" frameborder="0" allowfullscreen></iframe>';
            }
        }
        
        //genres
        $count=1;
        $genres = '<p><strong>Genres:</strong> ';
        foreach($data[0][0]->getGenres() as $v){
            if($count != 1){$genres.=  ', ';}
            $genres.= '<a href="'.SITE_ROOT.'/genre/movies/'.$v->id.'/">';
            $genres.=  $v->name;
            $genres.=  '</a>';
            $count++;
        }
        $genres.=  '</p>';
        
        /*$count=1;
        $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
        $image = '<div class="carousel">';
        foreach($images[0][0]->getBackdrops() as $value){
            $image .='<a class="carousel-item" href="#'.$f->format($count).'!"><img style="width:100%;" src="http://image.tmdb.org/t/p/w185'.$value->file_path.'"></a>';
            $count++;
        }
        $image.= '</div>';*/
        
        //$image = '<div class="card-image">'.$image.'</div>';
        $image = '<div class="card-image"><img src="http://image.tmdb.org/t/p/w1280'.$poster.'"/></div>';
        $content = '<div class="card-content"><p><strong>Série</strong>: '.$header.' '.$name.'<p><strong>Saison:</strong> '.$number.'<p><strong>Description:</strong> '.$description.'</p><p><strong>Date de la première diffusion</strong>: '.$first_air_date.'</p>'.$genres.'</div>';
        $tag = '<div class="card">';
        $col = 'col s12 m12';
        echo '<div class="'.$col.'">'.$tag.$image.$content.'</div></div>';
        echo '<div class="'.$col.' center">'.$player.'</div></div>';
        /*echo '<pre>';
        print_r($images);*/
    }
    require_once('template/footer.php')
?>
