<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\Suplier;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = \App\Profile::all();

        return view('profile.index', compact('profiles'));
    }
    
    public function create()
    {
        $supliers = Suplier::all();

        return view('profile.create', compact('supliers'));
    }
    public function store(Request $request)
    {
        $suplier = Profile::create([
            'nama' => $request->nama,
            'tempat' => $request->tempat,
            'tanggal' => $request->tanggal,
            'kelamin' => $request->kelamin,
            'usia' => $request->usia,
            'hoby' => $request->hoby,

        ]);

        flash()->success('Profile berhasil ditambahkan');
        return redirect(route('profile'));
    }
    public function edit($id)
    {
        $profile = Profile::findOrFail($id);

        $supliers = Suplier::all();
        return view('profile.edit', compact('supliers', 'profile'));
    }
    public function update(Request $request, $id)
    {
        $profile = Profile::where('id', $id)->first();

        $profile->nama = $request->input('nama');
        $profile->tempat = $request->input('tempat');
        $profile->tanggal = $request->input('tanggal');
        $profile->kelamin = $request->input('kelamin');
        $profile->usia = $request->input('usia');
        $profile->hoby = $request->input('hoby');

        $profile->save();

        flash()->success('Profile berhasil di ubah');
        return redirect(route('profile'));
    }
    public function show($id)
    {
        $profile = profile::findOrFail($id);

        return view('profile.detail', compact('profile'));
    }

    public function destroy($id)
    {
        $profile =  Profile::findOrFail($id);
        $profile->delete();

        flash()->success('Profile berhasil dihapus');
        return redirect(route('profile'));
    }
}
