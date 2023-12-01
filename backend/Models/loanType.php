<?php
    namespace Models;
    
    class LoanType{
        
        public function __construct(
            private $name, 
            private $description, 
            private $requirements = null){
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name): self {
            $this->name = $name;
            return $this;
        }


        public function getDescription() {
            return $this->description;
        }

        public function setDescription($description): self {
            $this->description = $description;
            return $this;
        }

        public function getRequirements() {
            return $this->requirements;
        }

        public function setRequirements($requirements): self {
            $this->requirements = $requirements;
            return $this;
        }
    }

    echo "loan type ready";
?>