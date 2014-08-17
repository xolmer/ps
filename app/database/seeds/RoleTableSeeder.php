<?php

class RoleTableSeeder extends seeder{

    public function run(){

        Role::create(array('name' =>'super_administrator'));
        Role::create(array('name' =>'admin'));

    }
}