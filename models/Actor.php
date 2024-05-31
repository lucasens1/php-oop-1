<?php

class Actor {
    public string $actor_name;
    public string $actor_surname;
    public int $actor_age;

    #---------------------------- Set & Get ---------------------------
    public function setActorName(string $actor_name){
        $this->actor_name = $actor_name;
    }
    public function setActorSurname(string $actor_surname){
        $this->actor_surname = $actor_surname;
    }
    public function setActorAge(int $actor_age){
        $this->actor_age = $actor_age;
    }

    public function getFullActorDesc(){
        return 'Attore : '.$this->actor_name.' '.$this->actor_surname.','.$this->actor_age;
    }

}