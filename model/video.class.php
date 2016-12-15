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

        function __construct($arg, $short = null) {
            foreach($arg as $key => $value){
                $this->$key = $value;
            }
        }
        
        public function getId() {
            return $this->id;
        }

        public function getIso_639_1() {
            return $this->iso_639_1;
        }

        public function getIso_3166_1() {
            return $this->iso_3166_1;
        }

        public function getKey() {
            return $this->key;
        }

        public function getName() {
            return $this->name;
        }

        public function getSite() {
            return $this->site;
        }

        public function getSize() {
            return $this->size;
        }

        public function getType() {
            return $this->type;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setIso_639_1($iso_639_1) {
            $this->iso_639_1 = $iso_639_1;
        }

        public function setIso_3166_1($iso_3166_1) {
            $this->iso_3166_1 = $iso_3166_1;
        }

        public function setKey($key) {
            $this->key = $key;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function setSite($site) {
            $this->site = $site;
        }

        public function setSize($size) {
            $this->size = $size;
        }

        public function setType($type) {
            $this->type = $type;
        }



    }
?>