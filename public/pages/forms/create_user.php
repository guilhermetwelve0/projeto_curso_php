<?php

require "../../../bootstrap.php";

//dd($_SERVER['REQUEST_METHOD']);

//dd($_POST);

if (isEmpty()) {

    flash('message', 'Preencha todos os campos');

    return redirect("create_user");
}

$validate = validate([
    'id' => 's',
    'name' => 's',
    'sobrenome' => 's',
    'email' => 'e',
    'password' => 's'
]);

$cadastrado = create('users', $validate);

//dd($cadastrado);

if($cadastrado){
    flash('message', 'Cadastrado com sucesso', 'success');
    return redirect('create_user');
}
flash('message', 'Erro ao cadastrar');
redirect('create_user');


