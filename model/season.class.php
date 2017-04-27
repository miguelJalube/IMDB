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
        function get_id() {
            return $this->_id;
        }

        function getAir_date() {
            return $this->air_date;
        }

        function getEpisodes() {
            return $this->episodes;
        }

        function getName() {
            return $this->name;
        }

        function getOverview() {
            return $this->overview;
        }

        function getId() {
            return $this->id;
        }

        function getPoster_path() {
            return $this->poster_path;
        }

        function getSeason_number() {
            return $this->season_number;
        }

        function set_id($_id) {
            $this->_id = $_id;
        }

        function setAir_date($air_date) {
            $this->air_date = dateFormat($air_date);
        }

        function setEpisodes($episodes) {
            $this->episodes = $episodes;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setOverview($overview) {
            $this->overview = $overview;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setPoster_path($poster_path) {
            $this->poster_path = $poster_path;
        }

        function setSeason_number($season_number) {
            $this->season_number = $season_number;
        }


    }
?>