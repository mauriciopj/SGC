
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-md-12">
            <h1 class="h2">Novo Colaborador</h1>
        </div>
    </div>
    <div class="col-md-12">
        <form class="form-group" action="<?= base_url() ?>Colaboradores/cadastrar" method="post">
            <div class="form-group">
                <label for="nomeCola">Nome Completo:</label>
                <input type="text" class="form-control" id="nomeCola" name="nomeCola" placeholder="Informe o Nome Completo..." required>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cpfCola">CPF</label>
                        <input type="text" class="form-control" id="cpfCola" name="cpfCola" placeholder="Informe o CPF..." required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="emailCola">E-Mail</label>
                        <input type="email" class="form-control" id="emailCola" name="emailCola" aria-describedby="emailHelp" placeholder="Informe o Email..."required>
                    </div>                       
                </div>
            </div>
            <div class="form-group">
                <label for="enderecoCola">Endereço</label>
                <input type="text" class="form-control" id="enderecoCola" name="enderecoCola" placeholder="Informe o Endereço..."required>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefoneCola">Telefone</label>
                        <input type="text" class="form-control" id="telefoneCola" name="telefoneCola" placeholder="Informe o Telefone..."required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="entidadeCola">Entidade</label>
                        <input type="text" class="form-control" id="entidadeCola" name="entidadeCola" placeholder="Informe a Entidade...">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valorDoadoCola">Valor de Doação</label>
                        <input type="text" class="form-control" id="valorDoadoCola" name="valorDoadoCola" placeholder="Informe O Valor de Doação...">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" >Salvar</button>
            <button type="reset" class="btn btn-default" >Cancelar</button>
        </form>

    </div>