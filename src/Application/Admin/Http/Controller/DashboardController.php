<?php

namespace Application\Admin\Http\Controller;

use Application\Shared\Http\Controller\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class DashboardController extends Controller
{
    public function __invoke(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('dashboard', ['user' => auth()->user()]);
    }
}
