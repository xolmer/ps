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
                'mobile_number' => '60142239204',
                'theme_color' => 'default'
            )
        );

        $developer = User::create(
            array(
                'first_name' => 'Kaveh',
                'last_name' => 'Aidi',
                'username' => 'xolmer',
                'password' => Hash::make('227522'),
                'email_address' => 'kahxyz@gmail.com',
                'mobile_number' => '601124123561',
                'theme_color' => 'default'
            )
        );

        $superAdminRole = Role::where('name','super_administrator')->get()->first();
        $maintenanceOperator->attachRole($superAdminRole);
        $developer->attachRole($superAdminRole);
    }
}
