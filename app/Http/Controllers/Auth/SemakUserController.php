<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Infoipt;
use App\Models\PeringkatPengajian;
use App\Models\Kursus;
use App\Models\Akademik;
use App\Models\TarikhIklan;



class SemakUserController extends Controller
{

    public function index(){

        addJavascriptFile('assets/js/custom/authentication/semak/general.js');
        $iklan = TarikhIklan::orderBy('created_at', 'desc')->first();
        $catatan = $iklan->catatan ?? "";

        $ipt = InfoIpt::orderby("nama_institusi","asc")
             ->where('jenis_institusi','=','IPTS')
             ->get();
        $kodperingkat = PeringkatPengajian::orderby("peringkat","asc")
            ->get();

        return view('pages.auth.semaksyarat', compact('catatan'))
        ->with("ipt",$ipt)
        ->with("kod_peringkat",$kodperingkat);
   }


   public function getPeringkat($ipt=0){

        $peringkatData['data'] = Kursus::select('bk_kursus.kod_peringkat','bk_peringkat_pengajian.peringkat')
            ->join('bk_peringkat_pengajian', function ($join) {
                $join->on('bk_kursus.kod_peringkat', '=', 'bk_peringkat_pengajian.kod_peringkat'); })
            ->where('id_institusi',$ipt)
            ->groupBy('bk_kursus.kod_peringkat','bk_peringkat_pengajian.peringkat')
            ->get();
            return response()->json($peringkatData);

    }

    public function getKursus($kodperingkat=0,$ipt=0){

        $kursusData['data'] = Kursus::orderby("nama_kursus","asc")
            ->where('kod_peringkat',$kodperingkat)
            ->where('id_institusi',$ipt)
            ->get();
    
            return response()->json($kursusData);
    
    }

    public function store(Request $request)
    {
        $request->validate([
            'terimHLP' => ['required'],
            'cuti' => ['required'],
            'id_institusi' => ['required'],
            'peringkat_pengajian' => ['required'],
            'nama_kursus' => ['required'],
            
        ]);

            $terimHLP = $request->terimHLP;
            $cuti = $request->cuti;
            
            if ($terimHLP == 'ya') {
                return redirect()->route('login')
                ->with('message', 'Anda tidak layak daftar kerana anda penerima HLP');
                
            } else if ($cuti == 'ya') {
                return redirect()->route('login')
                ->with('message', 'Anda tidak layak daftar kerana anda penerima Cuti Belajar Bergaji Penuh');
                
            } 
            
            else {

                $user = Akademik::create([
                    'smoku_id' => $request->session()->get('id'),
                    'id_institusi' => $request->id_institusi,
                    'peringkat_pengajian' => $request->peringkat_pengajian,
                    'nama_kursus' => $request->nama_kursus,
                    'status' => 1,
                    
                ]);
                
                $user->save();

                //return redirect()->route('daftarlayak');
            }

        

        
    }
    
}
