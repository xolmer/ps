<?php namespace SaarangSlt\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class EventListenerServiceProvider extends ServiceProvider{

    public function register(){

    }


    public function boot(){
        //now that application is booted and IoC bindings are taken care of we will
        //register all our event listeners which sit in /domain/EventListeners/
        $directory = new \RecursiveDirectoryIterator(app_path() . '/domain/EventListeners/');
        $files = new \RecursiveIteratorIterator($directory);
        //$files inlcudes .. and . so we will filter to it to php files
        $phpfiles = new \RegexIterator($files, '/.php$/i');
        foreach($phpfiles as $file) {
            require_once($file);
        }
    }

}