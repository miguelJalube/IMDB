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
        $description = $data[0][0]->getOverview();
        $name = $data[0][0]->getName();
        $poster = $images[0][0]->getBackdrops();
        //$poster = $images[0][0]->getBackdrops();
        $first_air_date = $data[0][0]->getFirst_air_date();
        
        //acteurs
        $count = 1;
        $people = '<p><strong>Acteurs:</strong> ';
        if($credits != null){
            foreach($credits[0] as $value){
                if($count != 1 && $value->getCast_id() == null){$people .=  ', ';}
                $people .= '<a href="'.SITE_ROOT.'/person/show/'.$value->getId().'">'.$value->getName().'</a>';
                $count++;
            }
        }
        $people .= '</p>';
        
        //Saisons
        
        if($data[0][0]->getSeasons() != null){
            $seasonArray = $data[0][0]->getSeasons();
            array_shift($seasonArray);
            $nbSeasons = count($seasonArray);
            if($nbSeasons != 0){
                $count = 1;
                $seasons = '<p><strong>Saisons:</strong></p><div class="carousel carousel2">';
                $width = (100 / $nbSeasons);
                foreach($seasonArray as $value){
                    if($value->poster_path != null && $value->poster_path != ''){
                       $poster_path =  'http://image.tmdb.org/t/p/w185'.$value->poster_path;
                    }else{
                       $poster_path = '../../view/images/185.jpg';
                    }
                    $seasons .= '<a title="Saison '.$value->season_number.'" class="carousel-item" href="'.SITE_ROOT.'/tv/season/'.$id.'/'.$value->season_number.'"><img style="" src="'.$poster_path.'"></a>';
                    $count++;
                }
                $seasons .= '</div>';
            }else{
                $seasons = '';
            }
        }
        
        
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
        $content = '<div class="card-content"><p><strong>Nom</strong>: '.$header.'</p><p><strong>Description:</strong> '.$description.'</p><p><strong>Date de la première diffusion</strong>: '.$first_air_date.'</p>'.$genres.$people.$seasons.'</div>';
        $tag = '<div class="card">';
        $col = 'col s12 m12';
        echo '<div class="'.$col.'">'.$tag.$image.$content.'</div></div>';
        echo '<div class="'.$col.' center">'.$player.'</div></div>';
    }
    require_once('template/footer.php')
?>
