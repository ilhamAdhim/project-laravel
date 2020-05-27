<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccountLecturer;
use App\LecturerModel;
use App\SubjectLecturer;
use App\positionLecturer;
use App\ResearchLecturer;

class LecturerController extends Controller
{
    //CRUD + Download + Upload File Contract 

    public function index($code){

        /* $data = array(
            'title'  => 'Lecturer Home',
            'code' => $code,
            'position' => $this->lecturer_model->lecPositionYzear($code),
            'research' => $this->lecturer_model->lecResearchPriority($code),
            'subject' => $teach_subjects,
            'info'  => $this->lecturer_model->getPersonalInfo($code),
            'account' => $this->lecturer_model->getAccount($code),
            'isDownloadable' => $isDownloadable
        ); */
        $data = [
            'account'   => AccountLecturer::where('code',$code)->get(),
            'info'      => LecturerModel::where('code',$code)->get()
        ];
        return view('home',$data);
    }

    public function subjectList($code){
        $subjects = SubjectLecturer::where('code',$code)->get();
        return view('subject',['subjects' => $subjects]);
    }

    public function positionList($code){
        $positions = positionLecturer::where('code',$code)->get();
        return view('position',['positions' => $positions]);
    }

    public function researchList($code){
        $research = ResearcherLecturer::where('code',$code)->get();
        return view('research',['research' => $research]);
    }

// public function detail($id){
    //     $mahasiswa = Mahasiswa::find($id);
    //     return view('detail',['mahasiswa'=>$mahasiswa]);
    // }

    // public function edit($id){
    //     $mahasiswa = Mahasiswa::find($id);
    //     return view('edit',['mahasiswa'=>$mahasiswa]);
    // }

    // public function update($id, Request $request){
    //     $mahasiswa = Mahasiswa::find($id);
    //     $mahasiswa->nama = $request->namamhs;
    //     $mahasiswa->nim = $request->nimmhs;
    //     $mahasiswa->email = $request->emailmhs;
    //     $mahasiswa->jurusan = $request->jurusanmhs;
        
    //     $mahasiswa->save();

    //     return redirect('/mahasiswa');
    // }

    // public function hapus($id){
    //     $mahasiswa = Mahasiswa::find($id);
    //     $mahasiswa->delete();
    //     return redirect('/mahasiswa');
// }

    public function editPassword($code){
        $info = AccountLecturer::where('code',$code)->get();
        return view('changePassword',['info' => $info]);
    }
    
    public function updatePassword(Request $request,$code){
        $info = AccountLecturer::where('code',$code)->get();
        $info->password = $request->pwd;
        $info->save();
        return redirect('/Lecturer/{code}');
        
    }

}
