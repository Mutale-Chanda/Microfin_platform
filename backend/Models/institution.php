<?php
    namespace Models;

    class Institution{

        public function __construct(
            private $name,
            private $summary,
            private $loanTypes,
            private $socials,
            private $logo = null,
            private $admin = null,
            private $paidAdvert = null
            ){
        }

        
        public function getName() {
            return $this->name;
        }

        public function setName($name): self {
            $this->name = $name;
            return $this;
        }

        public function getLogo() {
            return $this->logo;
        }

        public function setLogo($logo): self {
            $this->logo = $logo;
            return $this;
        }

        public function getSummary() {
            return $this->summary;
        }

        public function setSummary($summary): self {
            $this->summary = $summary;
            return $this;
        }

        public function getLoanTypes() {
            return $this->loanTypes;
        }

        public function setLoanTypes($loanTypes): self {
            $this->loanTypes = $loanTypes;
            return $this;
        }

        public function getSocials() {
            return $this->socials;
        }

        public function setSocials($socials): self {
            $this->socials = $socials;
            return $this;
        }

        public function getAdmin() {
            return $this->admin;
        }

        public function setAdmin($admin): self {
            $this->admin = $admin;
            return $this;
        }

        public function getPaidAdvert() {
            return $this->paidAdvert;
        }

        public function setPaidAdvert($paidAdvert): self {
            $this->paidAdvert = $paidAdvert;
            return $this;
        }
    }

    echo "institution ready";
?>