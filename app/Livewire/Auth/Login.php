<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    use LivewireAlert;
    #[Validate('required|email|min:4|max:255')]
    public string $email;
    #[Validate('required|string')]
    public string $password;

    public function login(): void
    {
        $user = User::query()->where('email', $this->email)->first();
        if ($user) {
            if (Hash::check($this->password, $user->password)) {
                Auth::login($user);
                $this->flash('success', 'Successfully signed in!', [
                    'position' => 'top-end',
                    'timer' => 3000,
                    'toast' => true,
                ]);
                $this->redirectRoute('home');
            }
            $this->alert('error', 'Invalid credentials!', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
            return;
        }
        $this->alert('error', 'User not found!', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
