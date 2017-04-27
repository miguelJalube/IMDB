<?php
    namespace model;
    class Image{
        private $id;
        private $backdrops;
        private $posters;

        //  Constructeur
        function __construct($data) {
            $this->hydrate($data);
        }
        
        //  Fonction permettant d'instancier automatiquement l'objet
	public function hydrate($data) {
            foreach ($data as $key => $value) {
                $method = 'set' . ucfirst($key);
                if(!isset($value)){
                    $v = null;
                }else{
                    $v = $value;
                }
                if (method_exists($this, $method)) {
                        $this -> $method($v);
                }
            }
	}
        
        function getId() {
            return $this->id;
        }

        function getBackdrops() {
            return $this->backdrops;
        }

        function getPosters() {
            return $this->posters;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setBackdrops($backdrops) {
            $this->backdrops = $backdrops;
        }

        function setPosters($posters) {
            $this->posters = $posters;
        }


    }
?>