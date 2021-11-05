$nome = $_POST['nome'];
    $email = $_POST['email'];

    echo 'Nome..:'.$nome.'<br>';
    echo 'E-mail..:'.$email.'<br><br>';
    echo '<a href="form.php">Voltar</a>';
    <?php
    if(isset($_POST['acao']) && $_POST['acao']=='dados_form'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        echo 'Nome..: '.$nome.'<br>';
        echo 'E-mail..: '.$email.'<br>';

        echo '<a href="form.php">Voltar</a>';
    }
?>
    