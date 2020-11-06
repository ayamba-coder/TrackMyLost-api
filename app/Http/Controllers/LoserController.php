<?php

namespace App\Http\Controllers;
use App\Models\Loser;
use Illuminate\Http\Request;

class LoserController extends Controller
{
    public function index()
    {
        return Loser::all();
    }

    public function show($id)
    {
        return Loser::find($id);
    }

    public function store(Request $request)
    {
        return Loser::create($request->all());
    }
    
    public function update(Request $request, $id)
    {
        $article = Loser::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Loser::findOrFail($id);
        $article->delete();

        return 204;
    }
}
