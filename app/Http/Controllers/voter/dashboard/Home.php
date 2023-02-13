<?php

namespace App\Http\Controllers\voter\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
  public function index()
  {
    return view('content.dashboard.home');
  }
}