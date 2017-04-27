<?php
    namespace model;
    class Movie{
        private $adult;
        private $backdrop_path;
        private $belongs_to_cellection;
        private $budget;
        private $character;
        private $credit_id;
        private $genres;
        private $homepage;
        private $id;
        private $imdb_id;
        private $media_type;
        private $original_language;
        private $original_title;
        private $overview;
        private $popularity;
        private $poster_path;
        private $production_companies;
        private $production_countries;
        private $release_date;
        private $revenue;
        private $runtime;
        private $spoken_languages;
        private $status;
        private $tagline;
        private $title;
        private $video;
        private $vote_average;
        private $vote_count;

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
        
        function getAdult() {
            return $this->adult;
        }

        function getBackdrop_path() {
            return $this->backdrop_path;
        }

        function getBelongs_to_cellection() {
            return $this->belongs_to_cellection;
        }

        function getBudget() {
            return $this->budget;
        }

        function getCharacter() {
            return $this->character;
        }

        function getCredit_id() {
            return $this->credit_id;
        }

        function getGenres() {
            return $this->genres;
        }

        function getHomepage() {
            return $this->homepage;
        }

        function getId() {
            return $this->id;
        }

        function getImdb_id() {
            return $this->imdb_id;
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

        function getProduction_companies() {
            return $this->production_companies;
        }

        function getProduction_countries() {
            return $this->production_countries;
        }

        function getRelease_date() {
            return $this->release_date;
        }

        function getRevenue() {
            return $this->revenue;
        }

        function getRuntime() {
            return $this->runtime;
        }

        function getSpoken_languages() {
            return $this->spoken_languages;
        }

        function getStatus() {
            return $this->status;
        }

        function getTagline() {
            return $this->tagline;
        }

        function getTitle() {
            return $this->title;
        }

        function getVideo() {
            return $this->video;
        }

        function getVote_average() {
            return $this->vote_average;
        }

        function getVote_count() {
            return $this->vote_count;
        }

        function setAdult($adult) {
            $this->adult = $adult;
        }

        function setBackdrop_path($backdrop_path) {
            $this->backdrop_path = $backdrop_path;
        }

        function setBelongs_to_cellection($belongs_to_cellection) {
            $this->belongs_to_cellection = $belongs_to_cellection;
        }

        function setBudget($budget) {
            $this->budget = $budget;
        }

        function setCharacter($character) {
            $this->character = $character;
        }

        function setCredit_id($credit_id) {
            $this->credit_id = $credit_id;
        }

        function setGenres($genres) {
            $this->genres = $genres;
        }

        function setHomepage($homepage) {
            $this->homepage = $homepage;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setImdb_id($imdb_id) {
            $this->imdb_id = $imdb_id;
        }

        function setMedia_type($media_type) {
            $this->media_type = $media_type;
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
            $this->poster_path = $poster_path;
        }

        function setProduction_companies($production_companies) {
            $this->production_companies = $production_companies;
        }

        function setProduction_countries($production_countries) {
            $this->production_countries = $production_countries;
        }

        function setRelease_date($release_date) {
            $this->release_date = dateFormat($release_date);
        }

        function setRevenue($revenue) {
            $this->revenue = $revenue;
        }

        function setRuntime($runtime) {
            $this->runtime = $runtime;
        }

        function setSpoken_languages($spoken_languages) {
            $this->spoken_languages = $spoken_languages;
        }

        function setStatus($status) {
            $this->status = $status;
        }

        function setTagline($tagline) {
            $this->tagline = $tagline;
        }

        function setTitle($title) {
            $this->title = $title;
        }

        function setVideo($video) {
            $this->video = $video;
        }

        function setVote_average($vote_average) {
            $this->vote_average = $vote_average;
        }

        function setVote_count($vote_count) {
            $this->vote_count = $vote_count;
        }

    }
?>