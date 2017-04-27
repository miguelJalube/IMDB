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
        
        function getCast_id() {
            return $this->cast_id;
        }

        function getCharacter() {
            return $this->character;
        }

        function getCredit_id() {
            return $this->credit_id;
        }

        function getId() {
            return $this->id;
        }

        function getName() {
            return $this->name;
        }

        function getOrder() {
            return $this->order;
        }

        function getProfile_path() {
            return $this->profile_path;
        }

        function getDepartment() {
            return $this->department;
        }

        function getJob() {
            return $this->job;
        }

        function setCast_id($cast_id) {
            $this->cast_id = $cast_id;
        }

        function setCharacter($character) {
            $this->character = $character;
        }

        function setCredit_id($credit_id) {
            $this->credit_id = $credit_id;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setOrder($order) {
            $this->order = $order;
        }

        function setProfile_path($profile_path) {
            $this->profile_path = $profile_path;
        }

        function setDepartment($department) {
            $this->department = $department;
        }

        function setJob($job) {
            $this->job = $job;
        }


    }