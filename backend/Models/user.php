<?php 
    namespace Models;

    class User{

        public function __construct(
            private $firstName,
            private $lastName,
            private $email,
            private $password
        ){
        }
        
        public function getFirstName() {
            return $this->firstName;
        }

        public function setFirstName($firstName): self {
            $this->firstName = $firstName;
            return $this;
        }

        public function getLastName() {
            return $this->lastName;
        }

        public function setLastName($lastName): self {
            $this->lastName = $lastName;
            return $this;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email): self {
            $this->email = $email;
            return $this;
        }

        public function getPassword() {
            return $this->password;
        }

        public function setPassword($password): self {
            $this->password = $password;
            return $this;
        }
    }

    echo "user ready";
?>