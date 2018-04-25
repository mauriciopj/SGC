
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-md-10">
            <h1 class="h2">Usuários</h1>
        </div>

        <div class="col-md-2">
            <a class="btn btn-primary btn-block" href="<?= base_url() ?>Usuarios/cadastro">Novo Usuário</a>             
        </div>
    </div>
    

  <div class="col-md-12">

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>CPF</th>
                <th>Senha</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Tipo</th>
                <th>Entidade</th>
                <th></th>
                <th></th>
            </tr>                
            <?php foreach ($usuarios as $usu) { ?>
                <tr>
                    <td><?= $usu->id ?></td>
                    <td><?= $usu->nome ?></td>
                    <td><?= $usu->endereco ?></td>
                    <td><?= $usu->cpf ?></td>
                    <td><?= $usu->senha ?></td>
                    <td><?= $usu->email ?></td>
                    <td><?= $usu->telefone ?></td>
                    <td><?= $usu->tipo==1?'Administrador':'Gerente' ?> </td>
                    <td><?= $usu->entidade ?></td>
                    <td><a href="<?= base_url('usuarios/atualizar/' . $usu->id) ?>" class="btn btn-primary btn-group">Atualizar</a></td>
                    <td><a href="<?= base_url('usuarios/excluir/' . $usu->id) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o usuario?')">Excluir</a></td>

                </tr>                
            <?php } ?>

        </table>


    </div>