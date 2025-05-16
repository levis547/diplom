<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function reviews() {
        return view('review');
    }

    public function portfolio() {
        return view('portfolio');
    }
    public function services() {
        return view('services');
    }
    public function contacts() {
        return view('contacts');
    }
    public function team() {
        return view('team');
    }
    public function about() {
        return view('about');
    }
    public function privacy_policy() {
        return view('privacy-policy');
    }


}
