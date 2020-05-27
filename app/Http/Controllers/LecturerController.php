<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LecturerController extends Controller
{
    //CRUD + Download + Upload File Contract 

    public function index(){

        /* $data = array(
            'title'  => 'Lecturer Home',
            'code' => $code,
            'position' => $this->lecturer_model->lecPositionYear($code),
            'research' => $this->lecturer_model->lecResearchPriority($code),
            'subject' => $teach_subjects,
            'info'  => $this->lecturer_model->getPersonalInfo($code),
            'account' => $this->lecturer_model->getAccount($code),
            'isDownloadable' => $isDownloadable
        ); */
        $data = [
            'account'   => AccountLecturer::find($code),
            'info'      => LecturerModel::find($code)
        ];
        return view('index',$data);
    }

    public function subjectList(){
        $subjects = SubjectLecturer::find($code);
        return view('subject',['subjects' => $subjects]);
    }

    public function positionList(){
        $positions = positionLecturer::find($code);
        return view('position',['positions' => $positions]);
    }

    public function researchList(){
        $research = ResearcherLecturer::find($code);
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

    public function editPassword(){
        $info = AccountLecturer::find($code);
        return view('changePassword',['info' => $info]);
    }
    
    public function updatePassword(Request $request){
        $info = AccountLecturer::find($code);
        $info->password = $request->pwd;
        $info->save();
        return redirect('/Lecturer/{code}');
        
    }

}
