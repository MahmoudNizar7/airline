<?php

    namespace Database\Seeders;

    use App\Models\User;
    use Illuminate\Database\Seeder;

    class UsersTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $user = User::create([
                'name' => 'Super Admin',
                'email' => 'info@admin.com',
                'password' => bcrypt('12345678')
            ]);
        $user->attachRole('super_admin');
        }
    }
