<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;
    protected $fillable = ['funcionario_id', 'livro_id', 'entrega'];

    public function Funcionario()
    {
        return $this->hasOne(Funcionario::class, 'id','funcionario_id');
    }

    public function Livro()
    {
        return $this->hasOne(Livro::class, 'id', 'livro_id');
    }    
}
