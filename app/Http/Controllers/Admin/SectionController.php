<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function sections() {
        $sections = Section::get();
        return view('admin.sections.sections')->with(compact('sections'));
    }

    public function changeSectionsStatus(Request $request) {
        $user = Section::find($request->section_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success'=>'Status change successfully.']);
    }

    public function addSections() {
        return view('admin.sections.add-section');
    }

    public function addSectionsUpload(Request $request) {
        $data = new Section();
        $data->name = $request->name;
        if ($request->status) {
            $data->status = $request->status;
        } else {
            $data->status = 0;
        }
        $data->save();
        return redirect('admin-section');
    }

    public function editSections($section_id) {
        $data = Section::find($section_id);
        return view('admin.sections.edit-section')->with(compact('data'));
    }

    public function editSectionsUpload(Request $request) {
        $data = Section::find($request->section_id);
        $data->name = $request->name;
        if ($request->status) {
            $data->status = $request->status;
        } else {
            $data->status = 0;
        }
        $data->save();
        return redirect('admin-section');
    }

    public function deleteSections($section_id) {
        $data = Section::find($section_id);
        $data->delete();
        return redirect('admin-section');
    }
}
