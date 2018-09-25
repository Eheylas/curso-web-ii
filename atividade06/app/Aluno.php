<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model {

    protected $fillable = ['matricula', 'nome', 'curso_id'];

    public function curso() {
        return $this->belongsTo("App\Curso");
    }

}
