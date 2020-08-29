<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'fname' => 'Aidan',
            'lname' => 'Sullivan',

        ];

        return Inertia::render('Dashboard/index', $data);
    }
}
