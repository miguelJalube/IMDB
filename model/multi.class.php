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

        function __construct($arg, $short = null) {          
            /*echo '<pre>';
            print_r($arg);*/
            if($arg->media_type == 'movie'){
                $this->backdrop_path = $arg->backdrop_path;
                $this->id = $arg->id;
                $this->media_type = 'Film';
                $this->original_language = $arg->original_language;
                $this->original_title = $arg->original_title;
                $this->overview = $arg->overview;
                $this->popularity = $arg->popularity;
                $this->poster_path = $arg->poster_path;
                $this->release_date = $arg->release_date;
                $this->title = $arg->title;
                $this->video = $arg->video;
                $this->vote_average = $arg->vote_average;
                $this->vote_count = $arg->vote_count;
                $this->adult = $arg->adult;
                $this->genre_ids = $arg->genre_ids;
            }elseif($arg->media_type == 'person'){
                $this->id = $arg->id;
                $this->adult = $arg->adult;
                $this->name = $arg->name;
                $this->profile_path = $arg->profile_path;
                $this->known_for = $arg->known_for;
                $this->media_type = 'Acteur';
            }else{
                $this->backdrop_path = $arg->backdrop_path;
                $this->id = $arg->id;
                $this->media_type = 'Série TV';
                $this->original_language = $arg->original_language;
                $this->overview = $arg->overview;
                $this->popularity = $arg->popularity;
                $this->poster_path = $arg->poster_path;
                $this->name = $arg->name;
                $this->original_name = $arg->original_name;
                $this->vote_average = $arg->vote_average;
                $this->vote_count = $arg->vote_count;
                $this->genre_ids = $arg->genre_ids;
                $this->origin_country = $arg->origin_country;
                $this->first_air_date = $arg->first_air_date;
            }
        }
        public function getBackdrop_path() {
            return $this->backdrop_path;
        }

        public function getId() {
            return $this->id;
        }

        public function getMedia_type() {
            return $this->media_type;
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

        public function getRelease_date() {
            return $this->release_date;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getVideo() {
            return $this->video;
        }

        public function getGenre_ids() {
            return $this->genre_ids;
        }

        public function getFirst_air_date() {
            return $this->first_air_date;
        }

        public function getOrigin_country() {
            return $this->origin_country;
        }

        public function getVote_average() {
            return $this->vote_average;
        }

        public function getVote_count() {
            return $this->vote_count;
        }

        public function getAdult() {
            return $this->adult;
        }

        public function getName() {
            return $this->name;
        }

        public function getProfile_path() {
            return $this->profile_path;
        }

        public function getKnown_for() {
            return $this->known_for;
        }
    }
?>