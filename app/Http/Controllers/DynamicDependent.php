<?php

//rakit.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DynamicDependent extends Controller
{
    public function index()
    {
        return view('dynamic_dependent');
    }
}
?>