<?php

    namespace Database\Seeders;

    use App\Models\Control\Tran;
    use App\Traits\Keys;
    use Illuminate\Database\Seeder;

    class TransTableSeeder extends Seeder
    {
        use Keys;

        public function run()
        {
            foreach ($this->keys() as $key) {
                Tran::create([
                    'key' => $key
                ]);
            }
        }
    }
