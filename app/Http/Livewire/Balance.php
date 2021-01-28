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

            $final_balance = 0;
            $balance_id = null;

            $client = Client::with(['balance'])->find($this->client_id);

            if ($client->balance != '') {

                $final_balance = $client->balance->balance + $this->balance;

                $client->balance->update([
                    'balance' => $final_balance
                ]);

                $balance_id = $client->balance->id;

            } else {

                $final_balance = $this->balance;
                $balance = \App\Models\Control\Balance::create($this->modelData());
                $balance_id = $balance->id;

            }

            Movement::create([
                'client_id' => $this->client_id,
                'balance_id' => $balance_id,
                'value' => $this->balance,
                'remainder' => $final_balance,
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

            $client = Client::with(['balance'])->find($this->client_id);

            return [
                'balance' => ['required'],
                'client_id' => ['required', $client->balance != null ? Rule::unique('balances', 'client_id')->ignore($client->balance['id']) : Rule::unique('balances', 'client_id')],
            ];
        }

    }
