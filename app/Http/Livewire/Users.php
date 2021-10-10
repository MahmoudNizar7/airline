<?php

    namespace App\Http\Livewire;

    use App\Models\User;
    use Illuminate\Validation\Rule;
    use Livewire\Component;

    class Users extends Component
    {
        public $name;
        public $email;
        public $password;
        public $user_id;

        public function mount($user = '')
        {
            if ($user != '') {
                $this->user_id = $user->id;
                $this->name = $user->name;
                $this->email = $user->email;
            }
        }

        public function render()
        {
            return view('livewire.users');
        }

        public function store()
        {

            $this->validate();

            $user = User::create($this->modelData());
            $user->attachRole('user');

            $this->alert('success', 'تم إضافة المستخدم بنجاح', [
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
                'name' => $this->name,
                'email' => $this->email,
            ];

            if (!is_numeric($this->user_id)) {
                $data['password'] = bcrypt($this->password);
            } elseif (is_numeric($this->user_id) && $this->password != '') {
                $data['password'] = bcrypt($this->password);
            }

            return $data;
        }

        public function resetFormData()
        {
            $this->name = null;
            $this->email = null;
            $this->password = null;
        }

        public function update()
        {
            $this->validate();
            $user = User::find($this->user_id);

            $user->update($this->modelData());
            $this->alert('success', 'تم تعديل بيانات المستخدم بنجاح', [
                'position' => 'top-right',
                'timer' => 3000,
                'toast' => true,
                'text' => '',
            ]);

            $this->resetFormData();
        }

        public function rules()
        {
            $rules = [
                'name' => ['required'],
                'email' => ['required', Rule::unique('users', 'email')->ignore($this->user_id)],
            ];

            if (!is_numeric($this->user_id)) {
                $rules['password'] = ['required', 'min:8'];
            }

            return $rules;
        }
    }
