<?php

use App\Attendance;
use App\Department;
use \DateTime as DateTime;
use App\Role;
use App\User;
use App\Employee;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        DB::table('employees')->truncate();
        DB::table('departments')->truncate();
        DB::table('attendances')->truncate();
        $employeeRole = Role::where('name', 'employee')->first();
        $adminRole =  Role::where('name', 'admin')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);

        $employee = User::create([
            'name' => 'Josiah Adeyemo',
            'email' => 'jhardeyemor@gmail.com',
            'password' => Hash::make('josiah')
        ]);

        // 
        $employee->roles()->attach($employeeRole);
        $dob = new DateTime('1997-09-15');
        $join = new DateTime('2021-01-15');
        $admin->roles()->attach($adminRole);
        $employee = Employee::create([
            'user_id' => $employee->id,
            'first_name' => 'Josiah',
            'last_name' => 'adeyemo',
            'dob' => $dob->format('Y-m-d'),
            'sex' => 'Male',
            'desg' => 'Manager',
            'department_id' => '1',
            'join_date' => $join->format('Y-m-d'),
            'salary' => 10520.75
        ]);

        Department::create(['name' => 'Marketing']);
        Department::create(['name' => 'Sales']);
        Department::create(['name' => 'Logistics']);
        Department::create(['name' => 'Staff Resources']);

        // Attendance seeder
        $create = Carbon::create(2021, 12, 31, 10, 00, 23, 'Africa/Lagos');
        $update = Carbon::create(2021, 12, 31, 17, 00, 23, 'Africa/Lagos');
        for ($i=0; $i < 6; $i++) { 
            $attendance = Attendance::create([
                'employee_id' => $employee->id,
                'entry_ip' => '123.156.125.123',
                'entry_location' => 'Lagos: '.$i,
                'created_at' => $create
            ]);
            $attendance->exit_ip = '151.235.124.236';
            $attendance->exit_location = 'Exit location: '.$i;
            $attendance->registered = 'yes';
            $attendance->updated_at = $update;
            $attendance->save();
            $create->addDay();
            $update->addDay();
        }
    }
}
