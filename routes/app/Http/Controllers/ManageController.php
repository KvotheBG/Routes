<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
	public function __construct() {
		$this->middleware(['auth', 'check_role']);
	}
    public function index() {
    	return view('manage');
    }
}
