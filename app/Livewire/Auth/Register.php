<?php

namespace App\Livewire\Auth;

use App\Helpers\Core;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    use LivewireAlert;

    #[Validate('required|string|min:2|max:255')]
    public string $name;
    #[Validate('required|email|min:4|max:255')]
    public string $email;
    #[Validate('required|string|min:8|max:255')]
    public string $password;
    #[Validate('required|string|same:password|min:8|max:255')]
    public string $password_confirmation;

    public function register(): void
    {
        $this->validate();
        $user = User::query()->where('email', $this->email)->first();
        if (!$user) {
            $user = User::query()->create([
                'code' => Core::generateUserCode(),
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
            Auth::login($user);

            $this->flash('success', 'Successfully registered!', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
            $this->redirectRoute('home');
            return;
        }
        $this->alert('error', 'Email already exists!', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
