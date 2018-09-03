<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {

    protected $fillable = ['nome', 'carga_horaria'];

    public function alunos() {
        return $this->hasMany('App\Aluno');
    }

}
