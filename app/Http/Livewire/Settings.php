<?php

    namespace App\Http\Livewire;

    use App\Models\Control\Setting;
    use Livewire\Component;
    use Livewire\WithFileUploads;

    class Settings extends Component
    {
        use WithFileUploads;

        public $title;
        public $description;
        public $tags;
        public $rights;
        public $location;
        public $link;
        public $facebook;
        public $twitter;
        public $instagram;
        public $whatsapp;
        public $linkedin;
        public $youtube;
        public $pinterest;
        public $snapchat;
        public $email;
        public $phone;
        public $image;
        public $image_name;


        public function mount($settings = '')
        {
            $keys = ['title', 'description', 'tags', 'rights', 'location', 'link', 'facebook', 'twitter', 'instagram', 'whatsapp', 'linkedin', 'youtube', 'pinterest', 'snapchat', 'email', 'phone'];
            if ($settings != '') {
                foreach ($keys as $index => $key) {
                    $this->$key = $settings[$index]->value;
                }
                $this->image = $settings[16]->value;
                $this->image_name = $settings[16]->value;

            }
        }


        public function render()
        {
            return view('livewire.settings');
        }

        public function store()
        {


        }

        /*
        public function resetFormData()
         {
             $this->title = null;
             $this->description = null;
             $this->tags = null;
             $this->rights = null;
             $this->location = null;
             $this->link = null;
             $this->facebook = null;
             $this->twitter = null;
             $this->instagram = null;
             $this->whatsapp = null;
             $this->linkedin = null;
             $this->youtube = null;
             $this->pinterest = null;
             $this->snapchat = null;
             $this->email = null;
             $this->phone = null;
             $this->image = null;
             $this->image_name = null;
         }
        */

        /*
                public function modelData()
                {
                    $data = [
                        'title' => $this->title,
                        'description' => $this->description,
                        'tags' => $this->tags,
                        'rights' => $this->rights,
                        'location' => $this->location,
                        'link' => $this->link,
                        'facebook' => $this->facebook,
                        'twitter' => $this->twitter,
                        'instagram' => $this->instagram,
                        'whatsapp' => $this->whatsapp,
                        'linkedin' => $this->linkedin,
                        'youtube' => $this->youtube,
                        'pinterest' => $this->pinterest,
                        'snapchat' => $this->snapchat,
                        'email' => $this->email,
                        'phone' => $this->phone,
                    ];

                    if ($this->image != $this->image_name) {
                        $data['image'] = $this->image_name;
                    }
                    return $data;
                }
        */
    }
