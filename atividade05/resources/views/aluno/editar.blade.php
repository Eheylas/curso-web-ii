<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Editar Aluno</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <h1>Editar Aluno</h1>
        <form action="/aluno/salvar" class="form-horizontal" method="get">
            <input type="hidden" name="id" size="15" value="<?php echo $aluno->id; ?>"/>
            <div class="">
                <label class="control-label">Matrícula</label>
                <div class="">
                    <input type="text" name="matricula" size="15" value="<?php echo $aluno->matricula; ?>"/>
                </div>
            </div>
            <div class="">
                <label class="control-label">Nome</label>
                <div class="">
                    <input type="text" name="nome" size="40" value="<?php echo $aluno->nome; ?>"/>
                </div>
            </div>
            <div>
                <label>E-mail</label>
                <div>
                    <input type="text" name="email" size="40"
                           value="<?php echo $aluno->email ?>"/>
                </div>
            </div>
            <div>
                <label>Curso</label>
                <div>
                    <select name="curso_id">
                        <option value="">Selecione um Curso</option>
                        <option value="<?php echo $curso_id = 1 ?>">ADS</option>
                        <option value="<?php echo $curso_id = 2 ?>">SI</option>
                        <option value="<?php echo $curso_id = 3 ?>">RC</option>
                    </select>
                </div>
            </div>
            <div class="">
                <label class="control-label"></label>
                <div class="">
                    <button type="submit" class="btn">Salvar</button>
                    <a href="/aluno/listar">Desistir</a>
                </div>
            </div>
        </form>
    </body>
</html>
