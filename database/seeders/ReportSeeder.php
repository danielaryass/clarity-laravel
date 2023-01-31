<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use model report
use App\Models\Report;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $reports = [
            [
                'nama' => 'John Doe',
                'email' => 'johndoe@example.com',
                'subject' => 'Laporan Error',
                'deskripsi' => 'Saya menemukan error pada halaman checkout'
            ],
            [
                'nama' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'subject' => 'Laporan Bug',
                'deskripsi' => 'Saya menemukan bug pada fitur pencarian'
            ],
            [
                'nama' => 'Mike Johnson',
                'email' => 'mikejohnson@example.com',
                'subject' => 'Laporan Suggestion',
                'deskripsi' => 'Saya ingin menyarankan fitur baru untuk aplikasi ini'
            ],
        ];

        DB::table('report')->insert($reports);
    }
}
