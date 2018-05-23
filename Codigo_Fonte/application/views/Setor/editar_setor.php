
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-md-12">
            <h1 class="h2">Atualizar Entidade</h1>
        </div>
    </div>
    <div class="col-md-12">
        <form class="form-group" action="<?= base_url()?>Entidades/salvar_atualizacao" method="post">
            <input type="hidden" id="id" name="id" value="<?= $entidade[0]->id;?>">
            <div class="form-group">
                <label for="nome">Nome da Entidade:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome da Entidade..." value="<?= $entidade[0]->nome?>">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cnpj">CNPJ</label>
                        <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ" value="<?= $entidade[0]->cnpj;?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Informe o Telefone..." value="<?= $entidade[0]->telefone;?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Informe o Email..." value="<?= $entidade[0]->email;?>">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o Endereço..." value="<?= $entidade[0]->endereco;?>">
            </div>
            <button type="submit" class="btn btn-success">Salvar Alterações</button>
            <button type="reset" class="btn btn-default" >Cancelar</button>
        </form>

    </div>
