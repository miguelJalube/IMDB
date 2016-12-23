<?php

namespace controller;

class Home{
        private $search;
    
	public function __construct($void = NULL ,$urlParams=null){
            if(!empty($urlParams)){$this->search = $urlParams;}else{$this->search=1;}
	}
	
	public function show(){
            try{
                if($this->search<=1000 && $this->search>=1){
                    if(!empty($this->search)){$page = '&page=';}else{$page ='';}
                    $url[0] = '/discover/movie?'.LANGUAGE.'&sort_by=popularity.desc'.$page.$this->search;
                    $url[1] = '/person/popular?'.LANGUAGE;
                    $request = new \model\request($url,array('Movie','Person'), true);
                    $data = $request->execute();

                    /*$back = '<div style="float:left;"><h3 style="display:inline;" class="left-align"><a href="'.SITE_ROOT.'/home/show?page='.($this->search - 1 ).'">Précedent</a></h3></div>';
                    $next = '<div style="float:right;"><h3 style="display:inline;" class="right-align"><a href="'.SITE_ROOT.'/home/show?page='.($this->search + 1 ).'">Suivant</a></h3></div>';

                    if($this->search == 1){
                        $back='';
                    }elseif($this->search >= 9){
                        $next='';
                    }*/
                    require_once('view/home.view.php');
                }  else {
                    require_once('view/template/header.php');
                    $data = \controller\Error::getType(__CLASS__);
                    require_once('view/error.view.php');
                    require_once('view/template/footer.php');
                }
            }
            catch (Exception $e) {echo 'Exception reçue : ',  $e->getMessage(), "\n";}
	}
}

?>
