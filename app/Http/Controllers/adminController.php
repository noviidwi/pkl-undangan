<?php

namespace App\Http\Controllers;

use App\Http\Requests\validationStoreAdmin;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class adminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'posts' => Post::all()->count(),
            'transaksi' => Transaksi::all()->count(),
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function manage()
    {
        return view('admin.manage', [
            'posts' => Post::select('id', 'slug', 'warna_model')->latest()->filter()->get(),
        ]);
    }

    public function transaksiIndex()
    {
        return view('admin.transaksi.index', [
            'transaksi' => Transaksi::select('id_customer', 'id_transaksi', 'nama_customer', 'jumlah_transaksi','tanggal_transaksi')->get(),
        ]);
    }
    public function transaksiCreate()
    {
        return view('admin.transaksi.create');
    }

    public function updateCreate($slug)
    {
        return view('admin.edit', [
            'posts' => Post::where('slug', $slug)->firstOrFail(),
        ]);
    }

    public function updateTransaksi($slug)
    {
        return view('admin.edit', [
            'posts' => Post::where('slug', $slug)->firstOrFail(),
        ]);
    }

    public function updateStore($post, Request $request)
    {
        $validation = $request->validate([
            'slug' => 'required',
            'title' => 'required',
            'warna_model' => 'required',
            'nama_pria' => 'required',
            'slug_nama_pria' => 'required',
            'bapa_pria' => 'required',
            'ibu_pria' => 'required',
            'nama_wanita' => 'required',
            'slug_nama_wanita' => 'required',
            'bapa_wanita' => 'required',
            'ibu_wanita' => 'required',
            'tempat_akad' => 'required',
            'tanggal_akad' => 'required',
            'jam_akad' => 'required',
            'tempat_resepsi' => 'required',
            'tanggal_resepsi' => 'required',
            'jam_resepsi' => 'required',
        ]);

        Post::where('slug', $post)->update($validation);

        return redirect('/dashboard/manage');
    }

    public function destroy($slug)
    {
        $model = Post::where('slug', $slug)->firstOrFail();

        Post::destroy($model->id);

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

    public function store(validationStoreAdmin $request)
    {
        $commonRules = $request->rules();

        $validatedData = $request->validate($commonRules);

        Post::create($validatedData);

        return redirect()->back()->with('success', 'Data berhasil di tambahkan');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
