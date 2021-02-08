<?php

    namespace App\Http\Livewire;

    use App\Models\Control\Trip;
    use Livewire\Component;

    class Reservation extends Component
    {
        public function render()
        {
            return view('livewire.reservation', ['trips' =>
                Trip::orderBy('date')->paginate(10)
            ]);
        }

        public function clientLogin()
        {
            return redirect()->route('client.login');
        }

    }
