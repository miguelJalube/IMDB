<?php 
    require_once('template/header.php');
    if(!isset($data) || $data == null){
        $data = \controller\Error::getType('controller\Person');
        require_once('view/error.view.php');
    }
    else{                
        $header = $data[0][0]->getName();
        $poster = '<img alt="'.$header.'" class="bordered-img" src="http://image.tmdb.org/t/p/w300'.$data[0][0]->getProfile_path().'"/>';
        $description = $data[0][0]->getBiography();
        $birthday = $data[0][0]->getBirthday();
        $place_of_birth = $data[0][0]->getPlace_of_birth();
        $data[0][0]->getDeathday() != null ? $deathday = '<p><strong>Date de décès</strong>: '.$data[0][0]->getDeathday().'</p>': $deathday = '';
        $homepage = $data[0][0]->getHomepage();
        $count = 1;
        $alias = '<p><strong>Alias</strong>: ';
        foreach($data[0][0]->getAlso_known_as() as $v){
            if($count != 1){$alias .= ', ';}
            $alias .= $v;
            $count++;
        }
        $alias .= '</p>';
        
        $image = '<div class="bordered-img" style="float:left;" >'.$poster.'</div>';
        $content = '<p><strong>Titre</strong>: '.$header.'</p><p><strong>Description</strong>: '.$description.'</p><p><strong>Date de naissance</strong>: '.$birthday.'</p>'.$deathday.$alias.'<p><strong>Site web</strong>: <a href="'.$homepage.'">'.$homepage.'</a></p></div>';
        $tag = '<div style="height:278px;" >';   
        $col = 'col s12 m12';
        echo '<div class="'.$col.'">'.$tag.$image.$content.'</div></div>';

    }
    require_once('template/footer.php')
?>
