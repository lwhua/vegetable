<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Grade;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);

        // DB::table('users')->delete();

        User::create([
        'name' => 'admin',
        'phone' => '18102268011',
        'password' => Hash::make('admin'),
        'is_admin' => 1,
        'email'=>'870089402@qq.com',
        // 'ip' => $_SERVER["REMOTE_ADDR"],
        ]);

        User::create([
        'name' => 'test1',
        'password' => Hash::make('123456'),
        'email'=>'870089403@qq.com',
        'phone' => '18102268012',
        // 'ip' => $_SERVER["REMOTE_ADDR"],
        ]);

        User::create([
        'name' => 'test2',
        'password' => Hash::make('654321'),
        'email'=>'870089404@qq.com',
        'phone' => '18102268013',
        // 'ip' => $_SERVER["REMOTE_ADDR"],
        ]);

        
    }
}
