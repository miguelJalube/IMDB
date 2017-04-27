<?php
    namespace model;
    class Video{
        private $id;
        private $iso_639_1;
        private $iso_3166_1;
        private $key;
        private $name;
        private $site;
        private $size;
        private $type;

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

        function getIso_639_1() {
            return $this->iso_639_1;
        }

        function getIso_3166_1() {
            return $this->iso_3166_1;
        }

        function getKey() {
            return $this->key;
        }

        function getName() {
            return $this->name;
        }

        function getSite() {
            return $this->site;
        }

        function getSize() {
            return $this->size;
        }

        function getType() {
            return $this->type;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setIso_639_1($iso_639_1) {
            $this->iso_639_1 = $iso_639_1;
        }

        function setIso_3166_1($iso_3166_1) {
            $this->iso_3166_1 = $iso_3166_1;
        }

        function setKey($key) {
            $this->key = $key;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setSite($site) {
            $this->site = $site;
        }

        function setSize($size) {
            $this->size = $size;
        }

        function setType($type) {
            $this->type = $type;
        }

    }
?>