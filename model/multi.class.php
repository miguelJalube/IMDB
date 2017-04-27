<?php
    namespace model;
    class Multi{
        private $backdrop_path;
        private $id;
        private $media_type;
        private $original_language;
        private $original_title;
        private $overview;
        private $popularity;
        private $poster_path;
        private $release_date;
        private $title;
        private $video;
        private $genre_ids;
        private $first_air_date;
        private $origin_country;
        private $vote_average;
        private $vote_count;
        private $adult;
        private $name;
        private $profile_path;
        private $known_for;

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
        
        function getBackdrop_path() {
            return $this->backdrop_path;
        }

        function getId() {
            return $this->id;
        }

        function getMedia_type() {
            return $this->media_type;
        }

        function getOriginal_language() {
            return $this->original_language;
        }

        function getOriginal_title() {
            return $this->original_title;
        }

        function getOverview() {
            return $this->overview;
        }

        function getPopularity() {
            return $this->popularity;
        }

        function getPoster_path() {
            return $this->poster_path;
        }

        function getRelease_date() {
            return $this->release_date;
        }

        function getTitle() {
            return $this->title;
        }

        function getVideo() {
            return $this->video;
        }

        function getGenre_ids() {
            return $this->genre_ids;
        }

        function getFirst_air_date() {
            return $this->first_air_date;
        }

        function getOrigin_country() {
            return $this->origin_country;
        }

        function getVote_average() {
            return $this->vote_average;
        }

        function getVote_count() {
            return $this->vote_count;
        }

        function getAdult() {
            return $this->adult;
        }

        function getName() {
            return $this->name;
        }

        function getProfile_path() {
            return $this->profile_path;
        }

        function getKnown_for() {
            return $this->known_for;
        }

        function setBackdrop_path($backdrop_path) {
            $this->backdrop_path = $backdrop_path;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setMedia_type($media_type) {
            $this->media_type = mediaTrnslt($media_type);
        }

        function setOriginal_language($original_language) {
            $this->original_language = $original_language;
        }

        function setOriginal_title($original_title) {
            $this->original_title = $original_title;
        }

        function setOverview($overview) {
            $this->overview = $overview;
        }

        function setPopularity($popularity) {
            $this->popularity = $popularity;
        }

        function setPoster_path($poster_path) {
            $this->poster_path = brokenImg($poster_path, 185);
        }

        function setRelease_date($release_date) {
            $this->release_date = dateFormat($release_date);
        }

        function setTitle($title) {
            $this->title = $title;
        }

        function setVideo($video) {
            $this->video = $video;
        }

        function setGenre_ids($genre_ids) {
            $this->genre_ids = $genre_ids;
        }

        function setFirst_air_date($first_air_date) {
            $this->first_air_date = dateFormat($first_air_date);
        }

        function setOrigin_country($origin_country) {
            $this->origin_country = $origin_country;
        }

        function setVote_average($vote_average) {
            $this->vote_average = $vote_average;
        }

        function setVote_count($vote_count) {
            $this->vote_count = $vote_count;
        }

        function setAdult($adult) {
            $this->adult = $adult;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setProfile_path($profile_path) {
            $this->profile_path = brokenImg($profile_path, 185);
        }

        function setKnown_for($known_for) {
            $this->known_for = $known_for;
        }


    }
?>