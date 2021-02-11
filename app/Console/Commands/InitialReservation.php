<?php

    namespace App\Console\Commands;

    use App\Models\Front\Reservation;
    use Illuminate\Console\Command;

    class InitialReservation extends Command
    {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'initial:reservation';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'If two hours have passed since the initial reservation without confirmation, it will be deleted';

        /**
         * Create a new command instance.
         *
         * @return void
         */
        public function __construct()
        {
            parent::__construct();
        }

        /**
         * Execute the console command.
         *
         * @return int
         */
        public function handle()
        {
            $reservations = Reservation::where('confirmation', 0)->get();

            foreach ($reservations as $reservation) {

                $diff = now()->diffInMinutes($reservation->created_at);
                if ($diff >= 2) {
                    $reservation->delete();
                }

            }

        }
    }
