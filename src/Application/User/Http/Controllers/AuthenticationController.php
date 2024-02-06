<?php

namespace Application\User\Http\Controllers;


use Application\Shared\Http\Controller\Controller;
use Application\User\Http\Requests\LoginRequest;
use Application\User\Http\Requests\RegisterRequest;
use Domains\User\DTOs\UserDTO;
use Domains\User\Repositories\UserRepositoryContract;
use Illuminate\Http\RedirectResponse;

class AuthenticationController extends Controller
{


    public function __construct(
        protected UserRepositoryContract $userRepository
    )
    {
    }

    public function login(LoginRequest $request)
    {

        $userDTO = new UserDTO(
            name: null,
            phone: null,
            email: $request->validated('email'),
            password: $request->validated('password')
        );

        if (!auth()->attempt(['email' => $userDTO->email, 'password' => $userDTO->password])) {
            return back();
        }

        session()->regenerate();

        return redirect(route('dashboard'));
    }


    public function register(RegisterRequest $request)
    {

        $userDTO = new UserDTO(
            name: $request->validated('name'),
            phone: $request->validated('phone'),
            email: $request->validated('email'),
            password: $request->validated('password')
        );

        $user = $this->userRepository->create($userDTO);
        auth()->loginUsingId($user->id);

        return redirect(route('dashboard'));
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();
        return redirect()->route('auth.login-view');
    }

    public function loginView()
    {
        return view('signin');
    }

    public function registerView()
    {
        return view('signup');
    }
}
