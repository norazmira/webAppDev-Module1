<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'NewUser';
        $role_user->description = 'a new user';
        $role_user ->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'a admin';
        $role_admin ->save();

        $role_accountant = new Role();
        $role_accountant->name = 'Accountant';
        $role_accountant->description = 'a accountant';
        $role_accountant ->save();

        $role_accountant_clerk = new Role();
        $role_accountant_clerk->name = 'AccountantClerk';
        $role_accountant_clerk->description = 'a accountant clerk';
        $role_accountant_clerk ->save();

        $role_auditor = new Role();
        $role_auditor->name = 'Auditor';
        $role_auditor->description = 'a auditor';
        $role_auditor ->save();

        $role_auditor_clerk = new Role();
        $role_auditor_clerk->name = 'AuditorClerk';
        $role_auditor_clerk->description = 'a auditor clerk';
        $role_auditor_clerk ->save();

        $role_company_director = new Role();
        $role_company_director->name = 'CompanyDirector';
        $role_company_director->description = 'a company director';
        $role_company_director ->save();
        
        $role_company_secretary = new Role();
        $role_company_secretary->name = 'CompanySecretary';
        $role_company_secretary->description = 'a company secretary';
        $role_company_secretary ->save();
        

    }
}
