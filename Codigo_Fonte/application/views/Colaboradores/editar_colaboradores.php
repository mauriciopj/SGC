
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-md-12">
            <h1 class="h2">Atualizar Colaboradores</h1>
        </div>
    </div>
    <div class="col-md-12">
        <form class="form-group" action="<?= base_url() ?>Colaboradores/salvar_atualizacao" method="post">
            <input type="hidden" id="idCola" name="idCola" value="<?= $colaboradores[0]->idCola; ?>">
            <div class="form-group">
                <label for="nomeCola">Nome Completo:</label>
                <input type="text" class="form-control" id="nomeCola" name="nomeCola" placeholder="Informe o Nome Completo..." value="<?= $colaboradores[0]->nomeCola ?>" required>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cpfCola">CPF</label>
                        <input type="text" class="form-control" id="cpfCola" name="cpfCola" placeholder="Informe o CPF..." value="<?= $colaboradores[0]->cpfCola ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="emailCola">E-Mail</label>
                        <input type="email" class="form-control" id="emailCola" name="emailCola" aria-describedby="emailHelp" placeholder="Informe o Email..." value="<?= $colaboradores[0]->emailCola ?>" required>
                    </div>                  
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="ruaCola">Rua:</label>
                        <input type="text" class="form-control" id="ruaCola" name="ruaCola" placeholder="Informe a Rua..."  value="<?= $colaboradores[0]->ruaCola ?>" required>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for="numeroCola">Numero:</label>
                        <input type="email" class="form-control" id="numeroCola" name="numeroCola"  value="<?= $colaboradores[0]->numeroCola ?>" required>
                    </div>                       
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="bairroCola">Bairro</label>
                        <input type="text" class="form-control" id="bairroCola" name="bairroCola" placeholder="Informe o Bairro..." value="<?= $colaboradores[0]->bairroCola ?>" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefoneCola">Telefone</label>
                        <input type="text" class="form-control" id="telefoneCola" name="telefoneCola" placeholder="Informe o Telefone..." value="<?= $colaboradores[0]->telefoneCola ?>"required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="entidadeCola">Entidade</label>
                        <input type="text" class="form-control" id="entidadeCola" name="entidadeCola" placeholder="Informe a Entidade..." value="<?= $colaboradores[0]->entidadeCola ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valorDoadoCola">Valor de Doação</label>
                        <input type="text" class="form-control" id="valorDoadoCola" name="valorDoadoCola" placeholder="Informe o Valor de Doação..." value="<?= $colaboradores[0]->valorDoadoCola ?>" required >
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" >Salvar</button>
            <button type="reset" class="btn btn-default" >Cancelar</button>
        </form>

    </div>