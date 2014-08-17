<?php


class TimezoneTableSeeder extends seeder {

    public function run(){
        Schema::dropIfExists('timezones');
        $sqlStatements = File::get(__DIR__ . '/SQL files/Timezones.sql');
        DB::unprepared($sqlStatements);
    }
}