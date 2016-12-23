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
            
            function __construct($arg, $short = null) {
                foreach($arg as $key => $value){
                    $this->$key = $value;
                }
                    
                $this->birthday = new \DateTime($this->birthday);
                $this->birthday = $this->birthday->format('d.m.Y');
                
                $this->deathday = new \DateTime($this->deathday);
                $this->deathday = $this->deathday->format('d.m.Y');
            }
            
            public function getKnown_for() {
                return $this->known_for;
            }

            public function setKnown_for($known_for) {
                $this->known_for = $known_for;
            }
            
            public function getAdult() {
                return $this->adult;
            }

            public function getAlso_known_as() {
                return $this->also_known_as;
            }

            public function getBiography() {
                return $this->biography;
            }

            public function getBirthday() {
                return $this->birthday;
            }

            public function getDeathday() {
                return $this->deathday;
            }

            public function getGender() {
                return $this->gender;
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

            public function getName() {
                return $this->name;
            }

            public function getPlace_of_birth() {
                return $this->place_of_birth;
            }

            public function getPopularity() {
                return $this->popularity;
            }

            public function getProfile_path() {
                return $this->profile_path;
            }

            public function setAdult($adult) {
                $this->adult = $adult;
            }

            public function setAlso_known_as($also_known_as) {
                $this->also_known_as = $also_known_as;
            }

            public function setBiography($biography) {
                $this->biography = $biography;
            }

            public function setBirthday($birthday) {
                $this->birthday = $birthday;
            }

            public function setDeathday($deathday) {
                $this->deathday = $deathday;
            }

            public function setGender($gender) {
                $this->gender = $gender;
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

            public function setName($name) {
                $this->name = $name;
            }

            public function setPlace_of_birth($place_of_birth) {
                $this->place_of_birth = $place_of_birth;
            }

            public function setPopularity($popularity) {
                $this->popularity = $popularity;
            }

            public function setProfile_path($profile_path) {
                $this->profile_path = $profile_path;
            }
        }
?>