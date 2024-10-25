<?php

namespace App\Http\Controllers\TemplateSurat;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Element\TextRun;
use PhpOffice\PhpWord\Element\Text;
use App\Http\Controllers\Controller;

class TestingTemp extends Controller
{
    public function previewDocx()
    {
        // Path ke file asli .docx
        $filePath = public_path('template-surat/SE-Perkuliahan.docx');

        // Pastikan file benar-benar ada sebelum melanjutkan
        if (!file_exists($filePath)) {
            return "File tidak ditemukan.";
        }

        // Load file menggunakan TemplateProcessor
        $templateProcessor = new TemplateProcessor($filePath);

        // Ganti placeholder ${semester} dengan "Genap T.A 2024/2025"
        $templateProcessor->setValue('semester', 'Genap T.A 2024/2025');

        // Tentukan path untuk menyimpan file sementara
        $tempFilePath = public_path('template-surat/temp_SE-Perkuliahan.docx');
        $templateProcessor->saveAs($tempFilePath);

        // URL untuk ditampilkan di Google Docs Viewer
        $tempFileUrl = asset('template-surat/temp_SE-Perkuliahan.docx');

        // Kirim URL sementara ke view
        return view('preview-docx', compact('tempFileUrl'));
    }
}
