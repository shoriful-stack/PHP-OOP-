<?php

interface Authentication {
    public function login(string $username, string $password);
    public function Registration(string $username, string $password, int $uid);
}
class ManageAuthentication implements Authentication {
    public function login(string $username, string $password){

    }
    public function Registration(string $username, string $password, int $uid){
        
    }
}