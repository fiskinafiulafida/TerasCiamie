<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutAdminController extends Controller
{
    public function index()
    {
        $abouts = About::latest()->get();
        return view('About.mainAdmin', compact('abouts'));
    }

    public function edit(About $abouts)
    {
        return view('About.editAdmin', compact('abouts'));
    }

    public function update(Request $request, About $abouts)
    {
        $request->validate([
            'deskripsi' => 'required',
            'nama_about' => 'required',
            'keterangan' => 'keterangan',
        ]);

        $abouts->update($request->all());

        return redirect()->route('aboutAdmin.index')->with('succes', 'Data Berhasil di Update');
    }

    // delete data
    public function destroy(About $abouts)
    {
        $abouts->delete();

        return redirect()->route('aboutAdmin.index')->with('succes', 'Data Berhasil di Hapus');
    }
}
