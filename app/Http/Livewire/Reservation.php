<?php

    namespace App\Http\Livewire;

    use App\Models\Control\Trip;
    use Livewire\Component;

    class Reservation extends Component
    {
        public $formReservationVisible = false;

        public function render()
        {
            return view('livewire.reservation', ['trips' =>
                Trip::orderBy('date')->paginate(10)
            ]);
        }

        public function showReservationModal()
        {
            $this->emit('createNewReservationEmit');
            // $this->modelFormReset();
            $this->formReservationVisible = true;
        }

        public function store()
        {
            if (!auth()->check()) {
                return abort(403); // or you can return the user to the login page
            }
            $validatedDate = $this->validate([
                'name' => 'required',
                'email' => 'required|email',
            ]);
        }

        public function clientLogin()
        {
            return redirect()->route('client.login');
        }
    }
