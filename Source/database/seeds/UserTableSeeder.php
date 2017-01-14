<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_user = Role:: where('name', 'NewUser')->first();
        $role_admin = Role:: where('name', 'Admin')->first();
        $role_accountant = Role:: where('name', 'Accountant')->first();
        $role_accountant_clerk = Role:: where('name', 'AccountantClerk')->first();
        $role_auditor = Role:: where('name', 'Auditor')->first();
        $role_auditor_clerk = Role:: where('name', 'AuditorClerk')->first();
        $role_company_director = Role:: where('name', 'CompanyDirector')->first();
    	$role_company_secretary = Role:: where('name', 'CompanySecretary')->first();

        $user = new User();
        $user->name = 'Victor';
        $user->email = 'visitor@google.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->name = 'adminkuuu'; 
        $admin->email = 'admin@google.com';
        $admin->password = bcrypt('123456');
        $admin->save();
        $admin->roles()->attach($role_admin);


        $accountant = new User();
        $accountant->name = 'accountant test';
        $accountant->email = 'accountant@google.com';
        $accountant->password = bcrypt('123456');
        $accountant->save();
        $accountant->roles()->attach($role_accountant);

        $accountantclerk = new User();
        $accountantclerk->name = 'accountant clerk test';
        $accountantclerk->email = 'accountantclerk@google.com';
        $accountantclerk->password = bcrypt('123456');
        $accountantclerk->save();
        $accountantclerk->roles()->attach($role_accountant_clerk);

        $auditor = new User();
        $auditor->name = 'auditor test';
        $auditor->email = 'auditor@google.com';
        $auditor->password = bcrypt('123456');
        $auditor->save();
        $auditor->roles()->attach($role_auditor);

        $auditorclerk = new User();
        $auditorclerk->name = 'auditorclerk test';
        $auditorclerk->email = 'auditorclerk@google.com';
        $auditorclerk->password = bcrypt('123456');
        $auditorclerk->save();
        $auditorclerk->roles()->attach($role_auditor_clerk);

        $companydirector = new User();
        $companydirector->name = 'companydirector test';
        $companydirector->email = 'companydirector@google.com';
        $companydirector->password = bcrypt('123456');
        $companydirector->save();
        $companydirector->roles()->attach($role_company_director);
        
        $companysecretary = new User();
        $companysecretary->name = 'companysecretary test';
        $companysecretary->email = 'companysecretary@google.com';
        $companysecretary->password = bcrypt('123456');
        $companysecretary->save();
        $companysecretary->roles()->attach($role_company_secretary);
     }
}
// 