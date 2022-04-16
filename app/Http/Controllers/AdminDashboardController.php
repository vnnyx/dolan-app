<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdminDashboardController extends Controller
{


    //    public function __construct()
    //    {
    //        $this->middleware('auth');
    //    }

    public function index()
    {
        $count = DB::table('notes')->count();
        $note = Note::orderBy('id', 'DESC')->get();
        $countSubmission = Submission::whereStatus(0)->count();
        $submissions = Submission::selectRaw('id,name,location,DATE(created_at) as created_at')->whereStatus(0)->orderBy('created_at', 'DESC')->get()->groupBy('created_at');
        return view('dashboardadmin', compact('note', 'count', 'submissions', 'countSubmission'));
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
