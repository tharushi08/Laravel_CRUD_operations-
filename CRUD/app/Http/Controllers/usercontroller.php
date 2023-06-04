<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class usercontroller extends Controller
{
    function show()
    {
        $data = student::all();
        return view ('main',['members'=>$data]);
    }

    function AddData(Request $req)
    {
        $students = new student();
        $students->Name =$req->Name;
        $students->Password =$req->Password;
        $students->Date =$req->Date;
        $students->save();
        return redirect('crud');  
    }

    function delete($ID)
    {
        $data = student::find($ID);
        $data->delete();
        return redirect('crud');
    }

    function showdata($ID)
    {
        $data = student::find($ID);
        return view ('update',['data'=>$data]);
    }

}
