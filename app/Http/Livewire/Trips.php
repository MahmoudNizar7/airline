<?php

    namespace App\Http\Livewire;

    use App\Models\Control\Trip;
    use Livewire\Component;
    use Livewire\WithFileUploads;

    class Trips extends Component
    {
        use WithFileUploads;

        public $from;
        public $to;
        public $travel_no;
        public $air_line;
        public $price;
        public $baby_price;
        public $seats;
        public $date;
        public $image;
        public $image_name;

        public function render()
        {
            return view('livewire.trips');
        }

        public function store()
        {

            $this->validate();

            if ($this->image != '') {
                $this->image_name = md5($this->image . microtime() . '.' . $this->image->extension());
                $this->image->storeAS('/', $this->image_name, 'trips');
            }
            $clients = Trip::create($this->modelData());


            $this->alert('success', 'تم إضافة الرحلة بنجاح', [
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
                'from' => $this->from,
                'to' => $this->to,
                'travel_no' => $this->travel_no,
                'air_line' => $this->air_line,
                'price' => $this->price,
                'baby_price' => $this->baby_price,
                'seats' => $this->seats,
                'date' => $this->date,
            ];

            if ($this->image != '') {
                $data['image'] = $this->image_name;
            }
            return $data;
        }

        public function resetFormData()
        {
            $this->from = null;
            $this->to = null;
            $this->travel_no = null;
            $this->air_line = null;
            $this->price = null;
            $this->baby_price = null;
            $this->seats = null;
            $this->date = null;
            $this->image = null;
        }

        public function rules()
        {
            $role = ['required'];
            return [
                'from' => $role,
                'to' => $role,
                'travel_no' => $role,
                'air_line' => $role,
                'price' => $role,
                'baby_price' => $role,
                'seats' => $role,
                'date' => $role,
            ];
        }


    }
