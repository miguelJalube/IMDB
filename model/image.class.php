<?php
    namespace model;
    class Image{
        private $id;
        private $backdrops;
        private $posters;

        function __construct($arg, $short = null) {
            foreach($arg as $key => $value){
                $this->$key = $value;
            }
        }
        
        public function getId() {
            return $this->id;
        }

        public function getBackdrops() {
            return $this->backdrops;
        }

        public function getPosters() {
            return $this->posters;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setBackdrops($backdrops) {
            $this->backdrops = $backdrops;
        }

        public function setPosters($posters) {
            $this->posters = $posters;
        }
    }
?>