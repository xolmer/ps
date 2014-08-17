<?php namespace SaarangSlt\ServiceProviders;

use Illuminate\Support\ServiceProvider;
class RepositoryServiceProvider extends ServiceProvider{

    public function register(){
        $this->app->bind('SaarangSlt\Repositories\UserRepository\UserRepositoryInterface','SaarangSlt\Repositories\UserRepository\EloquentUserRepository');
        $this->app->bind('SaarangSlt\Repositories\CustomerRepository\CustomerRepositoryInterface','SaarangSlt\Repositories\CustomerRepository\EloquentCustomerRepository');
    }
}