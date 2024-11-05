<?php

namespace App\Http\Controllers;

use App\Models\DataManagement as ModelsDataManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataManagement extends Controller
{
    //

    public function waitings()
    {
        $dataManagement = ModelsDataManagement::all();

        return view('modification.index', [
            'dataManagements' => $dataManagement
        ]);
    }
    public function dataJijul()
    {
        $dataManagement = ModelsDataManagement::where('user_id', '=', 3)->get();

        return view('dashboard.dataJijul', [
            'dataManagements' => $dataManagement
        ]);
    }

    public function dataAji()
    {
        $dataManagement = ModelsDataManagement::where('user_id', '=', 5)->get();

        return view('dashboard.dataAji', [
            'dataManagements' => $dataManagement
        ]);
    }

    public function dataYuli()
    {
        $dataManagement = ModelsDataManagement::where('user_id', '=', 2)->get();

        return view('dashboard.dataYuli', [
            'dataManagements' => $dataManagement
        ]);
    }

    public function dataRani()
    {
        $dataManagement = ModelsDataManagement::where('user_id', '=', 4)->get();

        return view('dashboard.dataRani', [
            'dataManagements' => $dataManagement
        ]);
    }

    public function dataIbad()
    {
        $dataManagement = ModelsDataManagement::where('user_id', '=', 6)->get();

        return view('dashboard.dataIbad', [
            'dataManagements' => $dataManagement
        ]);
    }

    public function createData()
    {

        return view('form.dataForm', []);
    }

    public function dataCreated(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'link' => 'required',
            'post' => 'required',
            'view' => 'required|numeric',
        ]);

        ModelsDataManagement::create([
            'user_id'   => Auth::user()->id,
            'user_name' => $request->username,
            'link' => $request->link,
            'post' => $request->post,
            'view' => $request->view,
        ]);

        return redirect('/waitings')->with('success', 'Data Created Successfully');
    }

    public function editData($slug)
    {
        $dataManagement = ModelsDataManagement::where('id', $slug)->firstOrFail();

        return view('form.dataForm', [
            'dataManagement' => $dataManagement
        ]);
    }

    public function dataEdited($slug, Request $request)
    {
        $dataManagement = ModelsDataManagement::where('id', $slug)->firstOrFail();

        $dataManagement->update([
            'user_name' => $request->username,
            'link' => $request->link,
            'post' => $request->post,
            'view' => $request->view
        ]);

        return redirect('/waitings')->with('success', 'Data Edited');
    }

    public function destroyData($slug)
    {
        $dataManagement = ModelsDataManagement::where('id', $slug)->firstOrFail();
        $dataManagement->delete();

        return redirect('/waitings')->with('success', 'Data Deleted');
    }
}
