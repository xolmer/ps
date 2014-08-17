<?php

class UserTableSeeder extends seeder{

    public function run(){
        $maintenanceOperator = User::create(
            array(
                'first_name' => 'Mohammadreza',
                'last_name' => 'Soltani',
                'username' => 'saarang',
                'password' => Hash::make('123456'),
                'email_address' => 'sahandfx@gmail.com',
                'phone_number' => '60142239204'
            )
        );

        $superAdminRole = Role::where('name','super_administrator')->get()->first();
        $maintenanceOperator->attachRole($superAdminRole);
    }
}
