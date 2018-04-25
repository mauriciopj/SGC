
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-md-12">
            <h1 class="h2">Nova Entidade</h1>
        </div>
    </div>
    <div class="col-md-12">
        <form>
            <div class="form-group" action="<?= base_url()?>Entidades/cadastrar" method="post">
                <label for="nome">Nome da Entidade:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome da Entidade...">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cnpj">CNPJ</label>
                        <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Informe o Telefone...">
                    </div>                   
                </div>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o Endereço...">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Informe o Email...">
            </div>           
            <button type="submit" class="btn btn-success">Salvar</button>
            <button type="reset" class="btn btn-default" >Cancelar</button>
        </form>

    </div>