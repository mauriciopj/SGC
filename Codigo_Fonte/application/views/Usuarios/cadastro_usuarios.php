
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-md-12">
            <h1 class="h2">Novo Usuário</h1>
        </div>
    </div>
    <div class="col-md-12">
        <form class="form-group" action="<?= base_url()?>Usuarios/cadastrar" method="post">
            <div class="form-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o Nome Completo..." required>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o CPF..." required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe a Senha..." required>
                    </div>                        
                </div>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o Endereço..."required>
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Informe o Email..."required>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Informe o Telefone..."required>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-control" id="tipo" name="tipo" required>
                            <option value="0">--</option>
                            <option value="1">Administrador</option>
                            <option value="2">Gerente</option>

                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="entidade">Entidade</label>
                        <input type="text" class="form-control" id="entidade" name="entidade" placeholder="Informe a Entidade...">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" >Salvar</button>
            <button type="reset" class="btn btn-default" >Cancelar</button>
        </form>

    </div>