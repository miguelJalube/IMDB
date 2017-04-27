<?php

namespace model;
    class Person{
        private $adult;
        private $also_known_as;
        private $biography;
        private $birthday;
        private $deathday;
        private $gender;
        private $homepage;
        private $id;
        private $imdb_id;
        private $name;
        private $place_of_birth;
        private $popularity;
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

        function getAdult() {
            return $this->adult;
        }

        function getAlso_known_as() {
            return $this->also_known_as;
        }

        function getBiography() {
            return $this->biography;
        }

        function getBirthday() {
            return $this->birthday;
        }

        function getDeathday() {
            return $this->deathday;
        }

        function getGender() {
            return $this->gender;
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

        function getName() {
            return $this->name;
        }

        function getPlace_of_birth() {
            return $this->place_of_birth;
        }

        function getPopularity() {
            return $this->popularity;
        }

        function getProfile_path() {
            return $this->profile_path;
        }

        function getKnown_for() {
            return $this->known_for;
        }

        function setAdult($adult) {
            $this->adult = $adult;
        }

        function setAlso_known_as($also_known_as) {
            $this->also_known_as = $also_known_as;
        }

        function setBiography($biography) {
            $this->biography = $biography;
        }

        function setBirthday($birthday) {
            $this->birthday = dateFormat($birthday);
        }

        function setDeathday($deathday) {
            $this->deathday = dateFormat($deathday);
        }

        function setGender($gender) {
            $this->gender = $gender;
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

        function setName($name) {
            $this->name = $name;
        }

        function setPlace_of_birth($place_of_birth) {
            $this->place_of_birth = $place_of_birth;
        }

        function setPopularity($popularity) {
            $this->popularity = $popularity;
        }

        function setProfile_path($profile_path) {
            $this->profile_path = brokenImg($profile_path, 300);
        }

        function setKnown_for($known_for) {
            $this->known_for = $known_for;
        }


    }
?>