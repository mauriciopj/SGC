
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-md-10">
            <h1 class="h2">Setores</h1>
        </div>

        <div class="col-md-2">
            <a class="btn btn-primary btn-block" href="<?= base_url() ?>Setor/cadastro">Novo Setor</a>
        </div>
    </div>


  <div class="col-md-12">

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($setores as $setor) { ?>
                <tr>
                    <td><?= $setor->id ?></td>
                    <td><?= $setor->descricao ?></td>                    
                    <td><a href="<?= base_url('setor/consulta_bairros/' . $setor->id) ?>" class="btn btn-primary btn-group">Consultar Bairros</a></td>
                    <td><a href="<?= base_url('setor/atualizar/' . $setor->id) ?>" class="btn btn-primary btn-group">Editar</a></td>
                    <td><a href="<?= base_url('setor/excluir/' . $setor->id) ?>" class="btn btn-danger btn-group btn-group" onclick="return confirm('Deseja realmente excluir este Setor?')">Excluir</a></td>

                </tr>
            <?php } ?>

        </table>


    </div>
