<?php

    namespace Database\Seeders;

    use App\Models\Control\Setting;
    use Illuminate\Database\Seeder;

    class SettingTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $keys = ['title', 'description', 'tags', 'rights', 'location', 'link', 'facebook', 'twitter', 'instagram', 'whatsapp', 'linkedin', 'youtube', 'pinterest', 'snapchat', 'email', 'phone','image'];
            foreach ($keys as $key) {
                Setting::create([
                    'key' => $key
                ]);
            }
        }
    }
