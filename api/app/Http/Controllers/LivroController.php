<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\LivroResource;
use Illuminate\Http\Request;
use App\Models\Livro;
use App\Http\Requests\CadastroEdicaoLivroRequest;

class LivroController extends Controller
{
    public function index(){

        $livros = Livro::all();

        return LivroResource::collection($livros);
    }

    public function cadastroLivro(CadastroEdicaoLivroRequest $request){

        $dados = $request->all();

        $livro = Livro::create($dados);

        return new $livro;
    }

    public function listarLivro(int $id){

        $livro = Livro::findOrFail($id);

        return new LivroResource($livro);
    }

    public function editarLivro(Request $request, int $id){

        $dados = $request->all();
        $livro = Livro::findOrFail($id);
        $livro->update($dados);

        return new LivroResource($livro);

    }

    public function deletarLivro(int $id){

        $livro = Livro::findOrFail($id);
        $livro->delete($id);

        return response()->json([], 204);
    }
}
