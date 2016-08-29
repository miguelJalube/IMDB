<?php 
    require_once('template/header.php');
    foreach($data as $key => $c){
        if(!isset($c)){
            $data = \controller\Error::getType('controller/Movie');
            require_once('view/error.view.php');
        }
        else{
            if($key == 0){
                $nbCols = 9;
                $headingTag = '';
                $heading = 'h3';
                $imgWidth = 500;
                $headingTagClose = '';
            }else{
                $nbCols = 3;
                $headingTag = '<ul class="collection with-header"><li class="collection-header">Artistes</li>';
                $headingTagClose = '</ul>';
                $imgWidth = 80;
            }
            echo '<div class="col s'.$nbCols.'">'.$headingTag;            
            foreach($c as $v){
                if($key == 0){
                    $id = $v->getId();
                    $link = SITE_ROOT.'/movie/show/'.$id;
                    $header = '<a class="center-align" href="'.$link.'"><'.$heading.'>'.$v->getTitle().'</'.$heading.'></a>';
                    $image = '<div class="col s12 center-align"><img width="'.$imgWidth.'" class="center-align" src="http://image.tmdb.org/t/p/w185'.$v->getBackdrop_path().'"/></div>';
                    $description = '<div class="col s12"><p class="center-align">'.$v->getOverview().'</p></div>';
                    $hr = '<hr/>';
                    $tag = 'div class="row"';
                } elseif ($key == 1){
                    $id = $v->getId();
                    $link = SITE_ROOT.'/person/show/'.$id;
                    $header = '<a class="left-align" href="'.$link.'">'.$v->getName().'</a>';
                    $image = ''/*$v->getProfile_path()*/;
                    $description = '';
                    $hr = null;
                    $tag = 'li class="collection-item"';
                }
                echo '<'.$tag.'>'
                       . $header
                       . $image
                       . $description
                   . '</'.$tag.'>'
                   . $hr;
            }
            echo   $headingTagClose;
            echo '</div>';
        }
    }
    echo '<div class="col s12">';
    echo $back;
    echo $next;
    echo '</div>';
    require_once('template/footer.php');
?>