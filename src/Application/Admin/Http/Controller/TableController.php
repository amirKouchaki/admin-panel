<?php

namespace Application\Admin\Http\Controller;

use Application\Shared\Http\Controller\Controller;
use Domains\Product\Repositories\ProductRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class TableController extends Controller
{
    public function __construct(protected ProductRepository $repository)
    {
    }

    public function __invoke(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('tables',['products' => $this->repository->getAllWithCategory()]);
    }
}
