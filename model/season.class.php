<?php
    namespace model;
    class Season{
        private $_id;
        private $air_date;
        private $episodes;
        private $name;
        private $overview;
        private $id;
        private $poster_path;
        private $season_number;

        function __construct($arg, $short = null) {          
                foreach($arg as $key => $value){
                    $this->$key = $value;
                }
                
                $this->air_date = new \DateTime($this->air_date);
                $this->air_date = $this->air_date->format('d.m.Y');
                
        }
        
        public function get_id() {
            return $this->_id;
        }

        public function getAir_date() {
            return $this->air_date;
        }

        public function getEpisodes() {
            return $this->episodes;
        }

        public function getName() {
            return $this->name;
        }

        public function getOverview() {
            return $this->overview;
        }

        public function getId() {
            return $this->id;
        }

        public function getPoster_path() {
            return $this->poster_path;
        }

        public function getSeason_number() {
            return $this->season_number;
        }

        public function set_id($_id) {
            $this->_id = $_id;
        }

        public function setAir_date($air_date) {
            $this->air_date = $air_date;
        }

        public function setEpisodes($episodes) {
            $this->episodes = $episodes;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function setOverview($overview) {
            $this->overview = $overview;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setPoster_path($poster_path) {
            $this->poster_path = $poster_path;
        }

        public function setSeason_number($season_number) {
            $this->season_number = $season_number;
        }


    }
?>