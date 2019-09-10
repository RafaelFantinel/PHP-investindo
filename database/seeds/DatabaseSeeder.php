<?php

use Illuminate\Database\Seeder;
use App\Entities\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf'           => '9887878',
            'name'          =>  'Rafael',
            'phone'         =>  '3354435',
            'birth'         =>  '1980-10-11',
            'gender'        =>  'M',
            'notes'        =>  'M',
            'email'         =>  'joao2@teste.com',
            'password'      => env('PASSWORD_HASH')? bcrypt('123456')  :'123456', 
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}

