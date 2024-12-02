<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Document::create([
            'student_id' => 1,
            'document_type' => 'ID Card',
            'file_path' => 'documents/id_card.pdf',
        ]);

        Document::create([
            'student_id' => 2,
            'document_type' => 'ID Card',
            'file_path' => 'documents/id_card2.pdf',
        ]);

        Document::create([
            'student_id' => 3,
            'document_type' => 'KK',
            'file_path' => 'documents/id_card3.pdf',
        ]);

        Document::create([
            'student_id' => 4,
            'document_type' => 'KTP',
            'file_path' => 'documents/id_card4.pdf',
        ]);

        Document::create([
            'student_id' => 5,
            'document_type' => 'KTP',
            'file_path' => 'documents/id_card5.pdf',
        ]);
    }
}
