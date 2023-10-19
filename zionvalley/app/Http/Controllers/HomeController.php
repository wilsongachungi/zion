<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {

        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                return view('user.home');
            } elseif (Auth::user()->usertype == '2') {
                return view('admin.member');
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        return view('user.home');
    }

    public function appointment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'date' => 'required|after:yesterday',
            'bookfor' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        // $data = new appointment();

        // $data->name = $request->name;
        // $data->email = $request->email;
        // $data->date = $request->date;
        // $data->phone = $request->phone;
        // $data->bookfor = $request->bookfor;
        // $data->message = $request->message;

        $request['status'] = 'In progress';

        if (Auth::id()) {
            $request['user_id'] = Auth::user()->id;
        }

        $appointment = Appointment::create($request->all());

        // $data->save();

        return redirect()->back()->with('message', 'Thank you! Message sent sucessfully. Will contact you soon ');
    }

    public function message()
    {
        if (Auth::id()) {
            return view('user.message');
        } else {
            return redirect()->back();
        }
    }

    public function home()
    {
        return view('user.home');
    }

    public function community()
    {
        return view('user.community');
    }

    public function project()
    {
        return view('user.project');
    }

}
