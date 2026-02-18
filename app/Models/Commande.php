<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    // الحقول التي تسمح بالإدخال (مهمة جداً للـ Seeder)
    protected $fillable = ['client_id', 'date_commande'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_commande')
            ->withPivot('qtecommande')
            ->withTimestamps();
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->articles as $article) {
            $total += $article->PRIXVENTE * $article->pivot->qtecommande;
        }

        return $total;
    }
}
