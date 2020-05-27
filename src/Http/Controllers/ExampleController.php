<?php

declare(strict_types=1);

namespace Bnw\Skeleton\Http\Controllers;

class ExampleController extends Controller
{
    public function show()
    {
        return view('skeleton::folder.test-view')->with([
            'title' => 'Teste Dois'
        ]);
    }
}