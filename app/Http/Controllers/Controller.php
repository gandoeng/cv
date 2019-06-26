<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Alert;


class Controller extends BaseController
{
   //halaman login
	public function login(){
		return view('admin/login');
	}

	public function proses(Request $request){
		$uname = $request->input('username');
		$password = $request->input('password');

		$cekNama = DB::table('admin')->select('nama')->where('nama','=',$uname)->value('nama');
		$cekSandi = DB::table('admin')->select('sandi')->where('sandi','=',$password)->value('sandi');

		
		if($cekNama != NULL and $cekSandi != NULL){
			return redirect('forms');
		}else{
			Alert::warning('Login Gagal', 'LOGIN');
			return redirect('login');
		}
	}

	//halaman form
	public function forms(){
		return view('admin/forms');
	}

	public function edukasiInput(Request $request){
		$sekolah = $request->input('sekolah');
		$tahunMasuk = $request->input('tahunMasuk');
		$tahunKeluar = $request->input('tahunKeluar');
		$kota = $request->input('kota');
		$negara = $request->input('negara');

		DB::table('table_edukasi')->insert([
			'sekolah' => $sekolah, 'tahun_masuk' => $tahunMasuk, 'tahun_keluar' => $tahunKeluar, 'kota' => $kota, 'negara' => $negara 
		]);

		Alert::success('Data Berhasil Ditambahkan','BERHASIL');
		return redirect('forms');

	}

	public function pengalamanInput(Request $request){
		$kantor = $request->input('kantor');
		$pekerjaan = $request->input('pekerjaan');
		$tahunMasuk = $request->input('tahunMasuk');
		$tahunKeluar = $request->input('tahunKeluar');
		$kota = $request->input('kota');
		$negara = $request->input('negara');

		DB::table('table_pengalaman')->insert([
			'kantor' => $kantor, 'jenis'=>$pekerjaan, 'tahun_masuk' => $tahunMasuk, 'tahun_keluar' => $tahunKeluar, 'kota' => $kota, 'negara' => $negara
		]);

		Alert::success('Data Berhasil Ditambahkan', 'BERHASIL');

		return redirect('forms');
	}

	public function skillInput(Request $request){
		$keahlian = $request->input('keahlian');
		$persentase = $request->input('persentase');

		DB::table('table_skill')->insert([
			'keahlian' => $keahlian, 'persentase' => $persentase
		]);

		Alert::success('Data Berhasil Ditambahkan', 'BERHASIL');

		return redirect('forms');

	}

	public function uploadCV(Request $request){
		$cv = $request->file('file_cv');

		if($cv != NULL){
			$nama = $cv->getClientOriginalName();

			DB::table('table_cv')->insert([
				'nama' => $nama
			]);

			$cv->move('file_upload',$nama);

			Alert::success('Data Berhasil Ditambahkan', 'BERHASIL');

			return redirect('forms');

		} else {
			Alert::warning('Upload gagal', 'UPLOAD');

			return redirect('forms');
		}
		
	}

	public function beritaInput(Request $request){
		$file_gambar = $request->file('file_gambar');
		$judul = $request->input('judul');
		$isiBerita = $request->input('isiBerita');

		
		if($file_gambar != NULL){
			$nama = $file_gambar->getClientOriginalName();
			DB::table('table_berita')->insert([
				'judul' => $judul, 'isi' => $isiBerita, 'gambar' => $nama
			]);
			
			$file_gambar->move('file_upload',$nama);

			Alert::success('Data Berhasil Ditambahkan', 'BERHASIL');
			return redirect('forms');
		} else {
			Alert::warning('Upload gagal', 'UPLOAD');
			return redirect('forms');
		}

		//return $file_gambar;
	} 

	public function portfolioInput(Request $request){
		$namaProjek = $request->input('namaProjek');
		$jenis = $request->input('jenisProjek');
		$client = $request->input('client');
		$gambar = $request->file('file_gambar');
		$isi = $request->input('isiPortfolio');

		if($gambar != NULL){
			$nama = $gambar->getClientOriginalName();

			DB::table('table_portfolio')->insert([
				'nama' => $namaProjek, 'jenis' => $jenis, 'client' => $client, 'gambar' => $nama, 'isi' => $isi
			]);

			$gambar->move('file_upload',$nama);
			Alert::success('Data Berhasil Ditambahkan', 'BERHASIL');
			return redirect('forms');

		} else {
			Alert::warning('Upload gagal', 'UPLOAD');
			return redirect('forms');
		}
	}

	public function tablesTampil(){
		$edukasi = DB::table('table_edukasi')->get();
		$pengalaman = DB::table('table_pengalaman')->get();
		$berita = DB::table('table_berita')->get();
		$cv = DB::table('table_cv')->get();
		$portfolio = DB::table('table_portfolio')->get();
		$skill = DB::table('table_skill')->get();

		return view('admin/tables')->with('edukasi', $edukasi)->with('pengalaman', $pengalaman)->with('berita', $berita)->with('cv', $cv)->with('portfolio', $portfolio)->with('skill', $skill);

	}

	public function hapusEdukasi($id){
		DB::table('table_edukasi')->where('id','=',$id)->delete();
		return redirect('tables');
	}

	public function hapusPengalaman($id){
		DB::table('table_pengalaman')->where('id','=',$id)->delete();
		return redirect('tables');
	}

	public function hapusSkill($id){
		DB::table('table_skill')->where('id','=',$id)->delete();
		return redirect('tables');
	}

	public function hapusBerita($id){
		DB::table('table_berita')->where('id','=',$id)->delete();
		return redirect('tables');
	}

	public function hapusPortfolio($id){
		DB::table('table_portfolio')->where('id','=',$id)->delete();
		return redirect('tables');
	}

	public function hapusCV($id){
		DB::table('table_cv')->where('id','=',$id)->delete();
		return redirect('tables');
	}

}
