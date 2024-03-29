<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>

    <style>
        body{font-family: Arial, Helvetica, sans-serif}
        .content{display: flex; justify-content: center}
        .contato{width: 100%; max-width: 500px}
        .form{display: flex; flex-direction: column}
        .field{padding: 10px; margin-bottom: 15px; border: 1px solid #DDD; border-radius: 5px; font-family: Arial, Helvetica, sans-serif; font-size: 16px}
        textarea{height: 150px;}

    </style>

</head>



<body>
    <section class="content">
        <div class="contato">
            <h3>Formulário de contato</h3>  
            <form action="envia.php" class="form" method="POST">
                <input class="field" name="name" placeholder="Nome">
                <input class="field" name="email" placeholder="E-mail">
                <textarea class="field" name="mensagem" placeholder="Digite sua mensagem aqui"></textarea>
                <input class="field" type="submit" value="Enviar">
            </form>
        </div>
    </section>


</body>
</html>