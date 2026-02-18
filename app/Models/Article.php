<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['NOMA', 'COULEUR', 'PRIXACHAT', 'PRIXVENTE', 'QTESTK'];

    public function commandes()
    {
        return $this->belongsToMany(Commande::class)->withPivot('qtecommande');
    }
}
