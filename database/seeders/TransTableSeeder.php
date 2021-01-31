<?php

    namespace Database\Seeders;

    use App\Models\Control\Tran;
    use Illuminate\Database\Seeder;

    class TransTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $keys = ['Home', 'My Trips', 'Contact Us', 'Sign Up', 'Profile', 'Sign In', 'Sign Out', 'Trips Gartr', 'From', 'To', 'Trip Number',
                'Flying line', 'Price', 'Seats Number', 'Trip Date', 'Trip Hour', 'Reserve', 'Reserve Now', 'Adults', 'Children', 'Baby',
                'Username', 'Company Name', 'Address', 'Phone Number', 'Email', 'Password', 'Password Confirmation', 'First Name', 'Last Name',
                'Birth Of Date', 'Nationality', 'Passport Number', 'Passport Expiration Date', 'Total Cost', 'Options', 'Ticket details',
                'Print', 'Current balance', 'Reservation Details', 'Passenger details', 'Contact Form', 'Name', 'Topic', 'Message Text',
                'Submit', 'Reservation Type', 'confirmed reservation', 'Initial reservation', 'Reservation status',
                'Account balance statement', 'View ticket', 'Your reservation has been confirmed', 'Logo'];

            foreach ($keys as $key) {
                Tran::create([
                    'key' => $key
                ]);
            }
        }
    }
