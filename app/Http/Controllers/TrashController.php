<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use RealRashid\SweetAlert\Facades\Alert as Alert;

class TrashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::onlyTrashed()->get();
        return view('system.trash.doctor',compact('doctors'));
    }

    public function restore($id){
        $doctor = Doctor::onlyTrashed()->find($id);
        if($doctor){
            $doctor->restore();

        }
        Alert::success('Success!','Doctor Restored Successfully');
        return redirect()->route('trash.index');

    }

    public function destroy($id)
    {
        $doctor = Doctor::onlyTrashed()->find($id);
        if($doctor){
            $doctor->forceDelete();
        }
        Alert::success('Success!','Doctor Deleted Permanently');
        return redirect()->route('trash.index');
    }
}
