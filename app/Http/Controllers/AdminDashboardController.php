<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Submission;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $count = DB::table('notes')->count();
        $note = Note::orderBy('id', 'DESC')->get();
        $countWisata = Wisata::all()->count();
        $detailWisata = Wisata::selectRaw('id, username, nama_wisata, alamat, credential, DATE(created_at) as created_at')->orderBy('created_at', 'DESC')->get()->groupBy('created_at');
        return view('dashboardadmin', compact('note', 'count', 'detailWisata', 'countWisata'));
    }

    public function store(Request $request)
    {
        $field = $request->validate([
            'title' => 'required',
            'message' => 'required'
        ]);

        $note = Note::create([
            'username' => auth()->user()->username,
            'title' => $field['title'],
            'message' => $field['message']
        ]);

        if ($note) {
            Alert::toast('Catatan berhasil ditambah', 'success');
        } else {
            Alert::toast('Catatan gagal ditambah', 'error');
        }
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        switch ($request->input('action')) {
            case 'update':
                $field = $request->validate([
                    'title' => 'required',
                    'message' => 'required'
                ]);

                $note = Note::find($id);

                $note->update([
                    'username' => auth()->user()->username,
                    'title' => $field['title'],
                    'message' => $field['message']
                ]);

                if ($note) {
                    Alert::toast('Catatan berhasil diubah', 'success');
                    return redirect()->back();
                } else {
                    Alert::toast('Catatan gagal diubah', 'error');
                    return redirect()->back();
                }
            case 'delete':
            default:
                Note::destroy($id);
                Alert::toast('Catatan berhasil dihapus', 'success');
                return redirect('/admin/dashboard');
        }
    }
}
