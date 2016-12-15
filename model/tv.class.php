<?php
    namespace model;
    class Tv{
        private $created_by;
        private $episode_run_time;
        private $first_air_date;
        private $in_production;
        private $languages;
        private $last_air_date;
        private $name;
        private $networks;
        private $number_of_episodes;
        private $number_of_seasons;
        private $origin_country;
        private $original_language;
        private $original_name;
        private $type;
        private $backdrop_path;
        private $genres;
        private $homepage;
        private $id;
        private $overview;
        private $popularity;
        private $poster_path;
        private $production_companies;
        private $status;
        private $vote_average;
        private $vote_count;

        function __construct($arg, $short = null) {          
                $this->id = $arg->id;
                $this->original_name = $arg->original_name;
                $this->first_air_date = $arg->first_air_date;
                $this->poster_path = $arg->poster_path;
                $this->name = $arg->name;
                $this->backdrop_path = $arg->backdrop_path;
                $this->languages = $arg->languages;
                $this->overview = $arg->overview;
                $this->popularity = $arg->popularity;
                $this->vote_average = $arg->vote_average;
                $this->vote_count = $arg->vote_count;
                $this->genres = $arg->genres;
                $this->homepage = $arg->homepage;
                $this->status = $arg->status;
                $this->production_companies = $arg->production_companies;
                $this->created_by = $arg->created_by;
                $this->episode_run_time = $arg->episode_run_time;
                $this->in_production = $arg->in_production;
                $this->last_air_date = $arg->last_air_date;
                $this->networks = $arg->networks;
                $this->number_of_episodes = $arg->number_of_episodes;
                $this->number_of_seasons = $arg->number_of_seasons;
                $this->origin_country = $arg->origin_country;
                $this->type = $arg->type;
                $this->original_language = $arg->original_language;
                
                $this->last_air_date = new \DateTime($this->last_air_date);
                $this->last_air_date = $this->last_air_date->format('d.m.Y');
                
                $this->first_air_date = new \DateTime($this->first_air_date);
                $this->first_air_date = $this->first_air_date->format('d.m.Y');
        }
        public function getCreated_by() {
            return $this->created_by;
        }

        public function getEpisode_run_time() {
            return $this->episode_run_time;
        }

        public function getFirst_air_date() {
            return $this->first_air_date;
        }

        public function getIn_production() {
            return $this->in_production;
        }

        public function getLanguages() {
            return $this->languages;
        }

        public function getLast_air_date() {
            return $this->last_air_date;
        }

        public function getName() {
            return $this->name;
        }

        public function getNetworks() {
            return $this->networks;
        }

        public function getNumber_of_episodes() {
            return $this->number_of_episodes;
        }

        public function getNumber_of_seasons() {
            return $this->number_of_seasons;
        }

        public function getOrigin_country() {
            return $this->origin_country;
        }

        public function getOriginal_language() {
            return $this->original_language;
        }

        public function getOriginal_name() {
            return $this->original_name;
        }

        public function getType() {
            return $this->type;
        }

        public function getBackdrop_path() {
            return $this->backdrop_path;
        }

        public function getGenres() {
            return $this->genres;
        }

        public function getHomepage() {
            return $this->homepage;
        }

        public function getId() {
            return $this->id;
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

        public function getStatus() {
            return $this->status;
        }

        public function getVote_average() {
            return $this->vote_average;
        }

        public function getVote_count() {
            return $this->vote_count;
        }


    }
?>