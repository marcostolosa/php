<?php
session_start();
include 'TokenCSRF.php';

$csrf = new csrf();


// Gerando e validando o Id do token
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);

// Gerando nomes de formulário aleatório
$form_names = $csrf->form_names(array('user', 'password'), false);


if(isset($_POST[$form_names['user']], $_POST[$form_names['password']])) {
        // Verificando se o valor e o id do token são válidos.
        if($csrf->check_valid('post')) {
                // Obtendo as variáveis do formulário.
                $user = $_POST[$form_names['user']];
                $password = $_POST[$form_names['password']];

                // A função do formulário vai aqui
        }
        // Recrie um novo valor aleatório para o formulário.
        $form_names = $csrf->form_names(array('user', 'password'), true);
}

?>

<form action="index.php" method="post">
<input type="hidden" name="<?= $token_id; ?>" value="<?= $token_value; ?>" />
<input type="text" name="<?= $form_names['user']; ?>" /><br/>
<input type="text" name="<?= $form_names['password']; ?>" />
<input type="submit" value="Login"/>
</form>
