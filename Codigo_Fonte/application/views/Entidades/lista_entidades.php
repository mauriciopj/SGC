
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-md-10">
            <h1 class="h2">Entidades</h1>
        </div>

        <div class="col-md-2">
            <a class="btn btn-primary btn-block" href="<?= base_url() ?>Entidades/cadastro">Nova Entidade</a>
        </div>
    </div>


  <div class="col-md-12">

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Entidade</th>
                <th>CNPJ</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Endereço</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($entidades as $ent) { ?>
                <tr>
                    <td><?= $ent->id ?></td>
                    <td><?= $ent->nome ?></td>
                    <td><?= $ent->cnpj ?></td>
                    <td><?= $ent->telefone ?></td>
                    <td><?= $ent->email ?></td>
                    <td><?= $ent->endereco ?></td>
                    <td><a href="<?= base_url('entidades/atualizar/' . $ent->id) ?>" class="btn btn-primary btn-group">Editar</a></td>
                    <td><a href="<?= base_url('entidades/excluir/' . $ent->id) ?>" class="btn btn-danger btn-group btn-group" onclick="return confirm('Deseja realmente excluir o usuario?')">Excluir</a></td>

                </tr>
            <?php } ?>

        </table>


    </div>
