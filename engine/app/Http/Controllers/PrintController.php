<?php

namespace App\Http\Controllers;
use PDF;

use Illuminate\Http\Request;

// model
use App\Participant;
use App\Competence;
use App\Answer;
use App\AssessorAnswer;
use App\ValidAnswer;
use App\User;


class PrintController extends Controller
{
    public function printAssignment($id_participant)
    {
        // mengambil data participant berdasarkan id participant
        // dan menyiapkan data untuk surat tugas
        $data['participant']        = Participant::find($id_participant);
        $data['assessor']           = $data['participant']->asesor;
        
        $data['hari_mulai']         = date('l', strtotime($data['participant']->tanggal_mulai_asesi));
        $data['tanggal_mulai']      = date('d', strtotime($data['participant']->tanggal_mulai_asesi));
        $data['bulan_mulai']        = date('F', strtotime($data['participant']->tanggal_mulai_asesi));
        $data['tahun_mulai']        = date('Y', strtotime($data['participant']->tanggal_mulai_asesi));
        
        $data['hari_selesai']       = date('l', strtotime($data['participant']->tanggal_selesai_asesi));
        $data['tanggal_selesai']    = date('d', strtotime($data['participant']->tanggal_selesai_asesi));
        $data['bulan_selesai']      = date('F', strtotime($data['participant']->tanggal_selesai_asesi));
        $data['tahun_selesai']      = date('Y', strtotime($data['participant']->tanggal_selesai_asesi));

        $data['tanggal_sign']       = date('d');
        $data['bulan_sign']         = date('F');
        $data['tahun_sign']         = date('Y');

        $data['bulan_sign']         = $this->month($data['bulan_sign']);
        $data['bulan_mulai']        = $this->month($data['bulan_mulai']);
        $data['bulan_selesai']      = $this->month($data['bulan_selesai']);
        $data['hari_mulai']         = $this->day($data['hari_mulai']);
        $data['hari_selesai']       = $this->day($data['hari_selesai']);
        
        $pdf = PDF::loadView('admin.assessor.assignment', compact('data'));
    	return $pdf->download('Surat Tugas '."{$data['assessor']->nama_lengkap}".'.pdf');
    }

    public function printForm($id_participant, $id_cluster, $id_asesor)
    {
        $data['competence']     = Competence::where('id_klaster', $id_cluster)->with('element')->get();
        $data['answer']         = Answer::where('id_participant', $id_participant)->get();
        $data['asesor_answer']  = AssessorAnswer::where('id_participant', $id_participant)->get();
        $data['valid_answer']   = ValidAnswer::orderBy('id', 'ASC')->get();
        $data['participant']    = Participant::where('id', $id_participant)->with('registration')->first();
        $data['asesor']         = User::where('id', $id_asesor)->first();

        return view('admin.participant.printApl02', compact('data'));
    }

    // fungsi merubah nama hari
    public function day($day) 
    {
        if($day == 'Sunday') {
            $day = 'Minggu';
        } else if($day == 'Monday') {
            $day = 'Senin';
        } else if($day == 'Tuesday') {
            $day = 'Selasa';
        } else if($day == 'Wednesday') {
            $day = 'Rabu';
        } else if($day == 'Thursday') {
            $day = 'Kamis';
        } else if($day == 'Friday') {
            $day = "Juma'at";
        } else {
            $day = "Sabtu";   
        }

        return $day;
    }

    //  fungsi merubah nama bulan
    public function month($month)
    {
        if($month == 'January') {
            $month = 'Januari';
        } else if($month == 'February') {
            $month = 'Februari';
        } else if($month == 'March') {
            $month = 'Maret';
        } else if($month == 'April') {
            $month = 'April';
        } else if($month == 'May') {
            $month = 'Mei';
        } else if($month == 'June') {
            $month = 'Juni';
        } else if($month == 'July') {
            $month = 'Juli';
        } else if($month == 'August') {
            $month = 'Agustus';
        } else if($month == 'September') {
            $month = 'September';
        } else if($month == 'October') {
            $month = 'Oktober';
        } else if($month == 'November') {
            $month = 'November';
        } else {
            $month = 'Desember';
        }

        return $month;
    }
}