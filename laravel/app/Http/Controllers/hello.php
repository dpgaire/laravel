<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Hello extends Controller
{
    //Send data from controller to view
    function index()
    {
        $student=['Dp vai','Ram','Krishan','Hari','Shiva'];
        //Multiple array 
        $marks=['20','21','22','23','24'];
        $address=['galyang','pokhara','syangja','chapakot','waling'];
        return view('hello')->withstu($student)->withmks($marks)->withadd($address);
        // return view('hello')->with(['stu'=>$student],['mks'=>$marks]);
        // echo "Hello: ".$fname;
        // return view('hello');
    }
}

?>