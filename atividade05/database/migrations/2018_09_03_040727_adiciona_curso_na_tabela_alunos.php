<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaCursoNaTabelaAlunos extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('alunos', function (Blueprint $table) {
            $table->integer('curso_id')
                    ->unsigned()
                    ->nullable();

            $table->foreign('curso_id')
                    ->references('id')
                    ->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('alunos', function (Blueprint $table) {
            $table->dropForeign('alunos_curso_id_foreign');
            $table->dropColumn('curso_id');
        });
    }

}
