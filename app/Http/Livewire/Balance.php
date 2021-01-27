<?php

    namespace App\Http\Livewire;

    use App\Models\Control\Client;
    use App\Models\Control\Movement;
    use Illuminate\Validation\Rule;
    use Livewire\Component;

    class Balance extends Component
    {

        public $client_id;
        public $balance;


        public function render()
        {
            return view('livewire.balance', [
                'clients' => $this->getClients()
            ]);
        }

        public function getClients()
        {
            return Client::orderByDesc('id', 'desc')->get();
        }


        public function store()
        {
            $this->validate();
            \App\Models\Control\Balance::create($this->modelData());
            Movement::create([
                'client_id' => $this->client_id,
                'value' => +$this->balance,
                'about' => 'شحن الرصيد'
            ]);

            $this->alert('success', 'تم إضافة الرصيد للعميل', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'text' => '',
            ]);

            $this->resetFormData();
        }

        public function modelData()
        {
            return [
                'balance' => $this->balance,
                'client_id' => $this->client_id,
            ];
        }

        public function resetFormData()
        {
            $this->balance = null;
            $this->client_id = null;
        }


        public function rules()
        {
            return [
                'balance' => ['required'],
                'client_id' => ['required', Rule::unique('balances', 'client_id')],
            ];
        }

    }
