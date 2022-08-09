<?php

namespace App\Http\Controllers;

use App\Models\Clubs;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHomePage() 
    {
        return view('home.home-page', [
            'title' => 'Home',
            'active' => 'home',
        ]);
    }

    public function searchBar()
    {
        return view('home.home-page', [
            'title' => 'Search Bar',
            'active' => 'home',
            'input_value' => null,
        ]);
    }
    
    public function infoSection()
    {
        return view('home.home-page', [
            'title' => 'Info Section',
            'active' => 'home',
            'club' => Clubs::search()->get(),
            'input_value' => request('search_bar'),
        ]);
    }
}
