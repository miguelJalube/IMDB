<?php 
    require_once('template/header.php');
    if(!isset($data) || $data == null){
        $data = \controller\Error::getType('controller\Home');
        require_once('view/error.view.php');
    }else{
        echo '<div class="row"><div class="col s12 m12"><h4 class header>Films populaires</h4></div><!--/div>';
        echo '<div class="row"-->';
        foreach($data as $key => $c){
            if($key == 0){
                $nbCols = 9;
                $headingTag = '';
                $heading = 'h3';
                $imgWidth = '100%';
                $headingTagClose = '';
            }else{
                $nbCols = 3;
                $headingTag = '<ul class="collection with-header"><li class="collection-header">Acteurs</li>';
                $headingTagClose = '</ul>';
                $imgWidth = 80;
            }
            echo '<div class="col s'.$nbCols.' m'.$nbCols.'">'.$headingTag;            
            foreach($c as $v){
                if($key == 0){
                    $id = $v->getId();
                    $link = SITE_ROOT.'/movie/show/'.$id;
                    $header = $v->getTitle();
                    $image = '<div class="card-image"><img style="width:185px;height:278px;" alt="'.$v->getTitle().'" src="http://image.tmdb.org/t/p/w185'.$v->getPoster_path().'"/></div>';
                    $description = '<div class="card-stacked"><div class="card-content"><p><strong>Titre</strong>: '.$header.'</p><p><strong>Date de sortie</strong>: '.$v->getRelease_date().'</p></div><div class="card-action"><a href="'.$link.'">Lire la suite</a></div></div>';
                    $tag = 'div class="card horizontal hoverable"';               
                } elseif ($key == 1){
                    $id = $v->getId();
                    $link = SITE_ROOT.'/person/show/'.$id;
                    $header = '';
                    $image = ''/*$v->getProfile_path()*/;
                    $description = '<a class="left-align" href="'.$link.'">'.$v->getName().'</a>';
                    $tag = 'li class="collection-item"';
                }
                echo '<'.$tag.'>'.$image.$description.'</'.$tag.'>';
            }
            echo   $headingTagClose;
            echo '</div>';
        }
        echo '</div>';
    }
    echo '<div class="col s12">';
    echo $back;
    echo $next;
    echo '</div>';
    require_once('template/footer.php');
?>