<?php namespace SaarangSlt\ServiceProviders;

use Illuminate\Support\ServiceProvider;
class RepositoryServiceProvider extends ServiceProvider{

    public function register(){
        $this->app->bind('SaarangSlt\Repositories\UserRepository\UserRepositoryInterface','SaarangSlt\Repositories\UserRepository\EloquentUserRepository');
        $this->app->bind('SaarangSlt\Repositories\CustomerRepository\CustomerRepositoryInterface','SaarangSlt\Repositories\CustomerRepository\EloquentCustomerRepository');
        $this->app->bind('SaarangSlt\Repositories\MailRepository\MailRepositoryInterface','SaarangSlt\Repositories\MailRepository\EloquentMailRepository');
        $this->app->bind('SaarangSlt\Repositories\MoneyChangerRepository\MoneyChangerRepositoryInterface','SaarangSlt\Repositories\MoneyChangerRepository\EloquentMoneyChangerRepository');
        $this->app->bind('SaarangSlt\Repositories\TodoRepository\TodoRepositoryInterface','SaarangSlt\Repositories\TodoRepository\EloquentTodoRepository');
    }
}