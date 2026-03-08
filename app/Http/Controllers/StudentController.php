<?php
namespace App\Http\Controllers; // Ganti jadi A Kapital
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Ganti jadi A Kapital
use App\Http\Controllers\Controllers\Response;

class StudentController extends Controller
{
    // Fungsi untuk menampilkan data (READ)
    // PUT/PATCH /api/students/{nim}
public function destroy($nim)
{

// Manipulasi data dalam basis data
// Dipelajari setelah mendapatkan materi DDL dan DML di Basis Data
// Mengembalikan respons dalam format JSON
return response()->json([
"message" => "Student {$nim} deleted successfully (dummy)"
]);
}
}