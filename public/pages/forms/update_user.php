<?php

require "../../../bootstrap.php";

//dd($_SERVER['REQUEST_METHOD']);

//dd($_POST);

 $id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);

if (isEmpty()) {

    flash('message', 'Preencha todos os campos');

    return redirect("/edit_user&id={$id}");
}

$validate = validate([
    'id' => 's',
    'name' => 's',
    'sobrenome' => 's',
    'email' => 'e',
]);

$atualizado = update('users', $validate);

//dd($cadastrado);

// if ($atualizado) {
//     flash('message', 'Atualizando com sucesso', 'success');
//     return redirect('/edit_user&id={$id}');
// }
// flash('message', 'Erro ao atualizar');
// redirect('/edit_user&id={$id}');
