<?php
    namespace Models;

    class Social{

        public function __construct(
            private $name, 
            private $link = null,
            private $icon = null
        ){
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name): self {
            $this->name = $name;
            return $this;
        }

        public function getIcon() {
            return $this->icon;
        }

        public function setIcon($icon): self {
            $this->icon = $icon;
            return $this;
        }

        public function getLink() {
            return $this->link;
        }

        public function setLink($link): self {
            $this->link = $link;
            return $this;
        }
    }

    $fb = new Social('Facebook', 'https://www.fb', 'null');
    $x = new Social('X', 'https://www.twitter', 'null');
    $site = new Social('Website', 'https://www.website', 'null');

    $socials = [$fb, $x, $site];

    foreach($socials as $media){
        print_r(
            $media->getName()." -> "
            .$media->getLink()." -> "
            .$media->getIcon()."\n"
        );
    }

    echo "socials ready";
?>