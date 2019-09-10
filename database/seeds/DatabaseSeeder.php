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
            'cpf'           => '2313123',
            'name'          =>  'Rafael',
            'phone'         =>  '3354435',
            'birth'         =>  '1980-10-11',
            'gender'        =>  'M',
            'notes'        =>  'M',
            'email'         =>  'joao@teste.com',
            'password'      =>  bcrypt('123456'), 
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
