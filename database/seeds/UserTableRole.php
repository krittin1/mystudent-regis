<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Subject;
class UserTableRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        factory('App\User::class')->create(
            [
                'name' => 'admin',
                'password' => bcryt('admin'),
                'role' => 'ADMINISTRATOR'
            ]
        );

        factory(User::class, 10)->create(
            [

            'role' => 'TEACHER'

            ]
        )->each( function ($user) {
            factory(Subject::class, 5)->create(['subjectID'=>$user->id]);
        });

        factory(User::class, 1000)->create(
            [
                'role' => 'STUDENT'
            ]

        );

    }
}
