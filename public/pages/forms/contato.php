<?php

require "../../../bootstrap.php";

//dd($_SERVER['REQUEST_METHOD']);

//dd($_POST);

if(isEmpty()){

    flash('message','Preencha todos os campos');

    return redirect("contato");
    
}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's'
]);

$data = [
    'quem' => $validate->email,
    'para' => 'guilherme.cabral999@hotmail.com',
    'mensagem' => $validate->message,
    'assunto' => $validate->subject,
];


if (send($data)){
    flash('message', 'Email enviado com sucesso','sucess');
    return redirect("contato");
}