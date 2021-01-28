<?php

    namespace App\Http\Livewire;

    use App\Models\Control\Client;
    use Illuminate\Support\Facades\File;
    use Illuminate\Validation\Rule;
    use Livewire\Component;
    use Livewire\WithFileUploads;

    class Clients extends Component
    {
        use WithFileUploads;

        public $name;
        public $email;
        public $company;
        public $address;
        public $phone;
        public $password;
        public $image;
        public $image_name;
        public $client_id;

        public $client;

        public function mount($client = '')
        {
            if ($client != '') {
                $this->client_id = $client->id;
                $this->name = $client->name;
                $this->email = $client->email;
                $this->company = $client->company;
                $this->address = $client->address;
                $this->phone = $client->phone;
                $this->image = $client->image;
                $this->image_name = $client->image;
            }
        }


        public function render()
        {
            return view('livewire.clients');
        }


        public function store()
        {

            $this->validate();

            if ($this->image != '') {
                $this->image_name = md5($this->image . microtime() . '.' . $this->image->extension());
                $this->image->storeAS('/', $this->image_name, 'clients');
            }
            $clients = Client::create($this->modelData());
            $clients->attachRole('client');

            $this->alert('success', 'تم إضافة العميل بنجاح', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'text' => '',
            ]);

            $this->resetFormData();
        }

        public function modelData()
        {
            $data = [
                'name' => $this->name,
                'email' => $this->email,
                'company' => $this->company,
                'address' => $this->address,
                'phone' => $this->phone,
                'password' => bcrypt($this->password),
            ];

            if ($this->image != '') {
                $data['image'] = $this->image_name;
            }
            return $data;
        }

        public function resetFormData()
        {
            $this->name = null;
            $this->email = null;
            $this->company = null;
            $this->address = null;
            $this->phone = null;
            $this->password = null;
            $this->image = null;
        }

        public function update()
        {
            $this->validate();
            $client = Client::where('id', $this->client->id)->first();

            if ($this->image != $client->image) {

                if (File::exists('assets/images/clients/' . $client->image)) {
                    unlink('assets/images/clients/' . $client->image);
                }

                $this->image_name = md5($this->image . microtime() . '.' . $this->image->extension());
                $this->image->storeAS('/', $this->image_name, 'uploads');

            }

            $client->update($this->modelData());
            $this->alert('success', 'تم تعديل العميل بنجاح', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'text' => '',
            ]);

            $this->resetFormData();
        }

        public function rules()
        {
            $rules = [
                'name' => ['required', 'max:300'],
                'email' => ['required', Rule::unique('clients', 'email')->ignore($this->client_id)],
                'company' => ['required'],
                'address' => ['required', 'max:500'],
                'phone' => ['required', Rule::unique('clients', 'phone')->ignore($this->client_id)],
            ];
            if($this->client_id = ''){
                $rules['password'] = ['required', 'min:8'];
            }
            return $rules;
        }

    }
