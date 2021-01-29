<?php

    namespace App\Http\Livewire;

    use App\Models\Control\Country;
    use Illuminate\Support\Facades\File;
    use Livewire\Component;
    use Livewire\WithFileUploads;

    class Countries extends Component
    {
        use WithFileUploads;

        public $name_ar;
        public $name_en;
        public $code;
        public $image;
        public $image_name;

        public $country;

        public function mount($country = '')
        {
            if ($country != '') {
                $this->name_ar = $country->name_ar;
                $this->name_en = $country->name_en;
                $this->code = $country->code;
                $this->image = $country->image;
                $this->image_name = $country->image;
            }
        }

        public function update()
        {
            $this->validate();

            $country = Country::find($this->country->id);

            if ($this->image != $country->image) {

                if (File::exists('assets/images/countries/' . $country->image)) {
                    unlink('assets/images/countries/' . $country->image);
                }

                $this->image_name = md5($this->image . microtime() . '.' . $this->image->extension());
                $this->image->storeAS('/', $this->image_name, 'countries');

            }

            $country->update($this->modelData());
            $this->alert('success', 'تم تعديل بيانات الدولة بنجاح', [
                'position' => 'top-right',
                'timer' => 3000,
                'toast' => true,
                'text' => '',
            ]);

            $this->resetFormData();
        }

        public function render()
        {
            return view('livewire.countries');
        }

        public function store()
        {
            $this->validate();

            if ($this->image != '') {
                $this->image_name = md5($this->image . microtime() . '.' . $this->image->extension());
                $this->image->storeAS('/', $this->image_name, 'countries');
            }
            Country::create($this->modelData());

            $this->alert('success', 'تم إضافة الدولة بنجاح', [
                'position' => 'top-right',
                'timer' => 3000,
                'toast' => true,
                'text' => '',
            ]);

            $this->resetFormData();
        }

        public function modelData()
        {
            $data = [
                'name_ar' => $this->name_ar,
                'name_en' => $this->name_en,
                'code' => $this->code,
            ];

            if ($this->image != $this->image_name) {
                $data['image'] = $this->image_name;
            }
            return $data;
        }

        public function resetFormData()
        {
            $this->name_ar = null;
            $this->name_en = null;
            $this->code = null;
            $this->image = null;
            $this->image_name = null;
        }

        public function rules()
        {
            $role = ['required'];
            return [
                'name_ar' => $role,
                'name_en' => $role,
                'code' => $role,
            ];
        }


    }
