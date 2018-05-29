<head>  
    <link href="<?= base_url() ?>assets/css/signin.css" rel="stylesheet">
</head>




<form class="form-signin" method="post" action="<?= base_url() ?>dashboard/logar">
    <h1 class="h3 mb-3 font-weight-normal">SGC - Gerenciamento de Entidades:</h1>
    <label for="email" class="sr-only">Email:</label>
    <input type="email" id="email" class="form-control" name="email" placeholder="Insira seu e-mail" required autofocus>
    <label for="senha" class="sr-only">Senha</label>
    <input type="password" id="senha" class="form-control" name="senha" placeholder="insira a senha" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</form>

