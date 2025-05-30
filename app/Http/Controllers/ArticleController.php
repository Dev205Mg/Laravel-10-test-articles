<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest; // request si on ajoute methode store et update
use App\Models\Article;
use Illuminate\Http\JsonResponse;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $articles = Article::paginate(10);

        return response()->json($articles);
    }

}
