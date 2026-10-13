<?php
namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    private function dataMahasiswa(): array
    {
        return [
            ['nama' => 'Andi', 'nim' => '242520001', 'ipk' => 3.80],
            ['nama' => 'Fiki Idfi Alnofal', 'nim' => '242520002', 'ipk' => 3.50],
            ['nama' => 'Budi', 'nim' => '242520003', 'ipk' => 3.40],
            ['nama' => 'Siti', 'nim' => '242520004', 'ipk' => 2.90],
            ['nama' => 'Dewi', 'nim' => '242520005', 'ipk' => 1.85],
        ];
    }

    public function profil()
    {
        $nama = 'Fiki Idfi Alnofal';
        $nim = '242520002';
        $prodi = 'Sistem Informasi';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    public function daftar()
    {
        $mahasiswa = $this->dataMahasiswa();
        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function detail($nim)
    {
        $mhs = collect($this->dataMahasiswa())->firstWhere('nim', $nim);
        abort_if($mhs === null, 404);

        return view('mahasiswa.detail', compact('mhs'));
    }
}