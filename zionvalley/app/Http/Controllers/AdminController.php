<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Members;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_member');
    }

    public function upload(Request $request)
    {
        $members = new members;

        $image = $request->file;

        $imagename = time() . '.' . $image->getClientoriginalExtension();

        $request->file->move('membersimage', $imagename);

        $members->image = $imagename;

        $members->name = $request->name;
        $members->phone = $request->phone;
        $members->idnumber = $request->idnumber;
        $members->position = $request->position;

        $members->save();

        return redirect()->back()->with('message','Member Added Successfully!');
    }
}
