<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller //Controller que se refere a view Home
{
public function index(){

return view('Home');
    

}
}
