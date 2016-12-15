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

        function __construct($arg, $short = null) {          
            if(isset($arg->cast)){
                $this->adult = $arg->cast['adult'];
                $this->id = $arg->cast['id'];
                $this->original_title = $arg->cast['original_title'];
                $this->release_date = $arg->cast['release_date'];
                $this->poster_path = $arg->cast['poster_path'];
                $this->title = $arg->cast['title'];
                $this->character = $arg->cast['character'];
                $this->credit_id = $arg->cast['credit_id'];
                $this->media_type = $arg->cast['media_type'];
            }elseif($short==null){
                $this->adult = $arg->adult;
                $this->id = $arg->id;
                $this->original_title = $arg->original_title;
                $this->release_date = $arg->release_date;
                $this->poster_path = $arg->poster_path;
                $this->title = $arg->title;
                $this->backdrop_path = $arg->backdrop_path;
                $this->original_language = $arg->original_language;
                $this->overview = $arg->overview;
                $this->popularity = $arg->popularity;
                $this->video = $arg->video;
                $this->vote_average = $arg->vote_average;
                $this->vote_count = $arg->vote_count;
                $this->genres = $arg->genres;
                $this->budget = $arg->budget;
                $this->homepage = $arg->homepage;
                $this->belongs_to_collection = $arg->belongs_to_collection;
                $this->tagline = $arg->tagline;
                $this->status = $arg->status;
                $this->production_companies = $arg->production_companies;
                $this->production_countries = $arg->production_countries;
                $this->imdb_id = $arg->imdb_id;
                $this->revenue = $arg->revenue;
                $this->runtime = $arg->runtime;
                $this->spoken_languages = $arg->spoken_languages;
            }elseif($short!=null){
                $this->adult = $arg->adult;
                $this->id = $arg->id;
                $this->original_title = $arg->original_title;
                $this->release_date = $arg->release_date;
                $this->poster_path = $arg->poster_path;
                $this->title = $arg->title;
                $this->backdrop_path = $arg->backdrop_path;
                $this->original_language = $arg->original_language;
                $this->overview = $arg->overview;
                $this->popularity = $arg->popularity;
                $this->video = $arg->video;
                $this->vote_average = $arg->vote_average;
                $this->vote_count = $arg->vote_count;
                $this->genre_ids = $arg->genre_ids;
            }
            $this->release_date = new \DateTime($this->release_date);
            $this->release_date = $this->release_date->format('d.m.Y');

        }
        public function getCharacter() {
            return $this->character;
        }

        public function getCredit_id() {
            return $this->credit_id;
        }

        public function getMedia_type() {
            return $this->media_type;
        }

        public function setCharacter($character) {
            $this->character = $character;
        }

        public function setCredit_id($credit_id) {
            $this->credit_id = $credit_id;
        }

        public function setMedia_type($media_type) {
            $this->media_type = $media_type;
        }


        public function getBackdrop_path() {
            return $this->backdrop_path;
        }

        public function getBelongs_to_cellection() {
            return $this->belongs_to_cellection;
        }

        public function getBudget() {
            return $this->budget;
        }

        public function getGenres() {
            return $this->genres;
        }

        public function getAdult() {
            return $this->adult;
        }

        public function getHomepage() {
            return $this->homepage;
        }

        public function getId() {
            return $this->id;
        }

        public function getImdb_id() {
            return $this->imdb_id;
        }

        public function getOriginal_language() {
            return $this->original_language;
        }

        public function getOriginal_title() {
            return $this->original_title;
        }

        public function getOverview() {
            return $this->overview;
        }

        public function getPopularity() {
            return $this->popularity;
        }

        public function getPoster_path() {
            return $this->poster_path;
        }

        public function getProduction_companies() {
            return $this->production_companies;
        }

        public function getProduction_countries() {
            return $this->production_countries;
        }

        public function getRelease_date() {
            return $this->release_date;
        }

        public function getRevenue() {
            return $this->revenue;
        }

        public function getRuntime() {
            return $this->runtime;
        }

        public function getSpoken_languages() {
            return $this->spoken_languages;
        }

        public function getStatus() {
            return $this->status;
        }

        public function getTagline() {
            return $this->tagline;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getVideo() {
            return $this->video;
        }

        public function getVote_average() {
            return $this->vote_average;
        }

        public function getVote_count() {
            return $this->vote_count;
        }

        public function setAdult($adult) {
            $this->adult = $adult;
        }

        public function setHomepage($homepage) {
            $this->homepage = $homepage;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setImdb_id($imdb_id) {
            $this->imdb_id = $imdb_id;
        }

        public function setOriginal_language($original_language) {
            $this->original_language = $original_language;
        }

        public function setOriginal_title($original_title) {
            $this->original_title = $original_title;
        }

        public function setOverview($overview) {
            $this->overview = $overview;
        }

        public function setPopularity($popularity) {
            $this->popularity = $popularity;
        }

        public function setPoster_path($poster_path) {
            $this->poster_path = $poster_path;
        }

        public function setProduction_companies($production_companies) {
            $this->production_companies = $production_companies;
        }

        public function setProduction_countries($production_countries) {
            $this->production_countries = $production_countries;
        }

        public function setRelease_date($release_date) {
            $this->release_date = $release_date;
        }

        public function setRevenue($revenue) {
            $this->revenue = $revenue;
        }

        public function setRuntime($runtime) {
            $this->runtime = $runtime;
        }

        public function setSpoken_languages($spoken_languages) {
            $this->spoken_languages = $spoken_languages;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        public function setTagline($tagline) {
            $this->tagline = $tagline;
        }

        public function setTitle($title) {
            $this->title = $title;
        }

        public function setVideo($video) {
            $this->video = $video;
        }

        public function setVote_average($vote_average) {
            $this->vote_average = $vote_average;
        }

        public function setVote_count($vote_count) {
            $this->vote_count = $vote_count;
        }


    }
?>