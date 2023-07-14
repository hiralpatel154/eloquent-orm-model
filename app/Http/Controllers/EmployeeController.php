<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    function addEmployee(Request $req){
        // dd($req);
        $req->validate([
            'name'=>'required',
            'email_address'=>'required|unique:employees',
            'age'=>'required'
        ]);
        $employee = new Employee;
        $employee->name=$req->name;
        $employee->email_address=$req->email_address;
        $employee->age=$req->age;
        // $employee->image=$req->uploadfile;
        $employee->save();
        return redirect('read');
    }

    function employeeList(Request $req){
        // dd($req);
        $data = Employee :: all();
        return view('crud/read', ['employees'=> $data]);
    }
    function editList($id){
        $data = Employee :: find($id);
        return view('crud/update', ['employees'=> $data]);
    }
    function updateList(Request $req){
        $data = Employee :: find($req->id);
        $data->name=$req->name;
        $data->email_address=$req->email;
        $data->age=$req->age;
        $data->save();
        return redirect('read');
    }
    function deleteEmployee($id){
        $data = Employee :: find($id);
        $data->delete();
        return redirect('read');
    }
}
