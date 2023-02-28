<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\topController;
use App\Http\Controllers\searchController;

class ordersController extends Controller
{
    public function stores()
    {
        $stores = [
            ['name' => 'Ravizza', 'selected' => false],
            ['name' => 'Moscova', 'selected' => false],
            ['name' => 'Sottocorno', 'selected' => false],
            ['name' => 'sempione', 'selected' => false],
            ['name' => 'settala', 'selected' => false],
            ['name' => 'vetra', 'selected' => false],
        ];
        return $stores;
    }

    public function user()
    {
        $user = [
            'name' => 'Massimo',
            'surname' => 'Robida',
            'email' => 'massimo@robida.it',
            'cardNr' => '142',
            'points' => '22',
            'credits' => '3',
        ];

        return $user;
    }
    public function login()
    {
        return Inertia::render('login');
    }

    public function index()
    {
        return Inertia::render('index');
    }

    public function form()
    {
        $props['user'] = $this->user();
        $props['stores'] = $this->stores();
        return Inertia::render('form', $props);
    }

    public function success()
    {
        $props['user'] = $this->user();
        return Inertia::render('success', $props);
    }

    public function userArea()
    {
        $props['user'] = $this->user();
        return Inertia::render('userArea', $props);
    }
}
