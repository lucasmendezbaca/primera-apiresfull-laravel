<?php

namespace App\Http\Controllers;

use App\Http\Resources\V1\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // public function index() {
    //     return BookResource::collection(Book::latest()->paginate());
    // }

    // public function show(Book $book) {
    //     return new BookResource($book);
    // }

    // public function destroy(Book $book) {
    //     if($book->delete()) {
    //         return response()->json(['message' => 'Libro eliminado correctamente'], 204);
    //     }

    //     return response()->json(['message' => 'Error al eliminar el libro'], 404);
    // }
}
