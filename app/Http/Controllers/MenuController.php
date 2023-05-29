<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::latest()->get();
        return view('Menu.main', compact('menu'));
    }

    public function create()
    {
        return view('Menu.create');
    }

    // menambahkan data
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama_menu'     =>
            'required',
            'harga'   => 'required',
            'deskripsi'   =>  'required',
            'image' => 'nullable',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image', 'public');
        }

        Menu::create($validatedData);

        return redirect()->route('menu.index')
            ->with('success', 'Menu berhasil ditambahkan');
    }

    // edit data
    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $rules = [
            'nama_menu' => 'required',
            'harga'     => 'required',
            'deskripsi' =>  'required',
            'image'     => 'nullable',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image', 'public');
        }

        Menu::where('id_menu', $menu->id_menu)
            ->update($validatedData);

        return redirect()->route('menu.index')
            ->with('success', 'Data Berhasil diupdate');
    }

    // delete data
    public function destroy(Menu $menu)
    {
        if (File::exists('storage/' . $menu->image)) {
            File::delete('storage/' . $menu->image);
        }

        Menu::find($menu->id_menu)->delete();
        return redirect()->route('menu.index')
            ->with('success', 'Menu berhasil dihapus');
    }
}
