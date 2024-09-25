<?php

namespace App\Http\Controllers;

use App\Models\DataSuplier;
use Illuminate\Http\Request;

class DataSupplier extends Controller
{
    //
    public function dataSupplier()
    {
        $dataSupplier = DataSuplier::where('status', '=', Null)->get();

        return view('dashboard.dataSupplier', [
            'dataSupplier' => $dataSupplier,
        ]);
    }

    public function formDataSupplier()
    {
        return view('form.dataSupplierForm');
    }

    public function destroy($slug)
    {
        // dd($slug);
        $dataSupplier = DataSuplier::where('id_supplier', $slug)->firstOrFail();
        $dataSupplier->status = 'Persetujuan Penghapusan Data Supplier';
        $dataSupplier->save();

        return redirect('/data-supplier')->with('success', 'data Supplier On Waiting');
    }

    public function dataSupplierCreated(Request $request)
    {
        $request->validate([
            'id_supplier' => 'required',
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        DataSuplier::create([
            'id_supplier' => $request->id_supplier,
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'status' => 'Persetujuan Pembuatan Data Supplier',
        ]);

        return redirect('/data-supplier')->with('success', 'Data Supplier created');
    }

    public function editDataSupplier($slug){
        $dataSupplier = DataSuplier::where('id_supplier', $slug)->firstOrFail();

        return view('form.dataSupplierForm',[
            'dataSupplier' => $dataSupplier
        ]);
    }

    public function editedDataSupplier($slug, Request $request){
        $dataSupplier = DataSuplier::where('id_supplier', $slug)->firstOrFail();

        $dataSupplier->update([
            'id_supplier' => $request->id_supplier,
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'status' => 'Persetujuan Edit Data Supplier'
        ]);

        return redirect('/data-supplier')->with('success', 'Data Has Updated');
    }
}
