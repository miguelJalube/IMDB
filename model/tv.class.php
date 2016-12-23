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
        private $seasons;

        function __construct($arg, $short = null) {          
                foreach($arg as $key => $value){
                    $this->$key = $value;
                }
                
                $this->last_air_date = new \DateTime($this->last_air_date);
                $this->last_air_date = $this->last_air_date->format('d.m.Y');
                
                $this->first_air_date = new \DateTime($this->first_air_date);
                $this->first_air_date = $this->first_air_date->format('d.m.Y');
        }
        public function getSeasons() {
            return $this->seasons;
        }

        public function setSeasons($seasons) {
            $this->seasons = $seasons;
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