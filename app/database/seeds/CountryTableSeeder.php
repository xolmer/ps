<?php


class CountryTableSeeder extends seeder  {

    public function run(){
    
        Schema::dropIfExists('countries');
        $sqlStatements = File::get(__DIR__ . '/SQL files/CounriesList.sql');
        DB::unprepared($sqlStatements);
    
    }

}