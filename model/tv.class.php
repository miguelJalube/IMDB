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
        
        function getCreated_by() {
            return $this->created_by;
        }

        function getEpisode_run_time() {
            return $this->episode_run_time;
        }

        function getFirst_air_date() {
            return $this->first_air_date;
        }

        function getIn_production() {
            return $this->in_production;
        }

        function getLanguages() {
            return $this->languages;
        }

        function getLast_air_date() {
            return $this->last_air_date;
        }

        function getName() {
            return $this->name;
        }

        function getNetworks() {
            return $this->networks;
        }

        function getNumber_of_episodes() {
            return $this->number_of_episodes;
        }

        function getNumber_of_seasons() {
            return $this->number_of_seasons;
        }

        function getOrigin_country() {
            return $this->origin_country;
        }

        function getOriginal_language() {
            return $this->original_language;
        }

        function getOriginal_name() {
            return $this->original_name;
        }

        function getType() {
            return $this->type;
        }

        function getBackdrop_path() {
            return $this->backdrop_path;
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

        function getStatus() {
            return $this->status;
        }

        function getVote_average() {
            return $this->vote_average;
        }

        function getVote_count() {
            return $this->vote_count;
        }

        function getSeasons() {
            return $this->seasons;
        }

        function setCreated_by($created_by) {
            $this->created_by = $created_by;
        }

        function setEpisode_run_time($episode_run_time) {
            $this->episode_run_time = $episode_run_time;
        }

        function setFirst_air_date($first_air_date) {
            $this->first_air_date = dateFormat($first_air_date);
        }

        function setIn_production($in_production) {
            $this->in_production = $in_production;
        }

        function setLanguages($languages) {
            $this->languages = $languages;
        }

        function setLast_air_date($last_air_date) {
            $this->last_air_date = dateFormat($last_air_date);
        }

        function setName($name) {
            $this->name = $name;
        }

        function setNetworks($networks) {
            $this->networks = $networks;
        }

        function setNumber_of_episodes($number_of_episodes) {
            $this->number_of_episodes = $number_of_episodes;
        }

        function setNumber_of_seasons($number_of_seasons) {
            $this->number_of_seasons = $number_of_seasons;
        }

        function setOrigin_country($origin_country) {
            $this->origin_country = $origin_country;
        }

        function setOriginal_language($original_language) {
            $this->original_language = $original_language;
        }

        function setOriginal_name($original_name) {
            $this->original_name = $original_name;
        }

        function setType($type) {
            $this->type = $type;
        }

        function setBackdrop_path($backdrop_path) {
            $this->backdrop_path = $backdrop_path;
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

        function setStatus($status) {
            $this->status = $status;
        }

        function setVote_average($vote_average) {
            $this->vote_average = $vote_average;
        }

        function setVote_count($vote_count) {
            $this->vote_count = $vote_count;
        }

        function setSeasons($seasons) {
            $this->seasons = $seasons;
        }


    }
?>