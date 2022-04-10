<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // return  $submissions[0];
        return view('dashboardadmin', compact('note', 'count', 'submissions', 'countSubmission'));
    }

    public function store(Request $request)
    {
        $field = $request->validate([
            'title' => 'required',
            'message' => 'required'
        ]);

        $note = Note::create([
            'username' => 'nindra',
            'title' => $field['title'],
            'message' => $field['message']
        ]);

        if ($note) {
            return redirect('/admin/dashboard')->with(['success' => 'New note has been create']);
        } else {
            return redirect()->back()->withInput()->with(['error' => 'some problem']);
        }
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
                    'username' => 'nindra',
                    'title' => $field['title'],
                    'message' => $field['message']
                ]);

                if ($note) {
                    return redirect('/admin/dashboard')->with(['success' => 'Note has been updated']);
                } else {
                    return redirect()->back()->withInput()->with(['error' => 'some problem']);
                }
            case 'delete':
                Note::destroy($id);
                return redirect('/admin/dashboard')->with(['success' => 'Note has been deleted']);
            default:
                return 0;
        }
    }
}
