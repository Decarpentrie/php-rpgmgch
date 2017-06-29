<?php

    class user {
        private $_id;
        private $_email;
        private $_createdAt;

        public function __construct($id, $email, $createdAt){
            $this->setId($id);
            $this->setEmail($email);
            $this->setCreatedAt($createdAt);
        }

        public function getId(){
            return $this->_id;
        }
        public function getEmail(){
            return $this->_email;
        }
        public function getCreatedAt(){
            return $this->_createdAt;
        }

        public function setId($id){
            $this->_id = $id;
        }
        public function setEmail($email){
            $this->_email = $email;
        }
        public function setCreatedAt($createdAt){
            $this->_createdAt = $createdAt;
        }
    };

 ?>
