<?php
    namespace model;
    class Credits{
        private $cast_id;
        private $character;
        private $credit_id;
        private $id;
        private $name;
        private $order;
        private $profile_path;
        private $department;
        private $job;
        
        function __construct($arg, $short = null) {
            foreach($arg as $key => $value){
                $this->$key = $value;
            }
        }
        
        public function getCast_id() {
            return $this->cast_id;
        }

        public function getCharacter() {
            return $this->character;
        }

        public function getCredit_id() {
            return $this->credit_id;
        }

        public function getId() {
            return $this->id;
        }

        public function getName() {
            return $this->name;
        }

        public function getOrder() {
            return $this->order;
        }

        public function getProfile_path() {
            return $this->profile_path;
        }

        public function getDepartment() {
            return $this->department;
        }

        public function getJob() {
            return $this->job;
        }

        public function setCast_id($cast_id) {
            $this->cast_id = $cast_id;
        }

        public function setCharacter($character) {
            $this->character = $character;
        }

        public function setCredit_id($credit_id) {
            $this->credit_id = $credit_id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function setOrder($order) {
            $this->order = $order;
        }

        public function setProfile_path($profile_path) {
            $this->profile_path = $profile_path;
        }

        public function setDepartment($department) {
            $this->department = $department;
        }

        public function setJob($job) {
            $this->job = $job;
        }


    }