<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DoctorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:doctor');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doctor');
    }
}