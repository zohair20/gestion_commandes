<?php

namespace App\Http\Controllers;

use App\Models\Commande;

class CommandeController extends Controller
{
    public function index()
    {
        $commandes = Commande::with('client')->paginate(10);

        return view('commandes.index', compact('commandes'));
    }

    public function show(Commande $commande)
    {
        $articles = $commande->articles;
        $total = $commande->getTotal();
        $client = $commande->client();

        return view('commandes.show', compact('commande', 'articles', 'total'));
    }
}
