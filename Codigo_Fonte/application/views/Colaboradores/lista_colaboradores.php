
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-md-10">
            <h1 class="h2">Colaboradores</h1>
        </div>

        <div class="col-md-2">
            <a class="btn btn-primary btn-block" href="<?= base_url() ?>colaboradores/cadastro">Novo Colaborador</a>
        </div>
    </div>


  <div class="col-md-12">

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Entidade</th>
                <th>Valor de Doação</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($colaboradores as $cola) { ?>
                <tr>
                    <td><?= $cola->idCola ?></td>
                    <td><?= $cola->nomeCola ?></td>
                    <td><?= $cola->enderecoCola ?></td>
                    <td><?= $cola->cpfCola ?></td>
                    <td><?= $cola->emailCola ?></td>
                    <td><?= $cola->telefoneCola ?></td>
                    <td><?= $cola->entidadeCola ?></td>
                    <td><?= $cola->valorDoadoCola ?></td>
                    <td><a href="<?= base_url('colaboradores/atualizar/' . $cola->idCola) ?>" class="btn btn-primary btn-group">Atualizar</a></td>
                    <td><a href="<?= base_url('colaboradores/excluir/' . $cola->idCola) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o Colaborador?')">Excluir</a></td>

                </tr>
            <?php } ?>

        </table>


    </div>
