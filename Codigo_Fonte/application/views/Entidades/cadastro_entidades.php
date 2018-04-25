
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-md-12">
            <h1 class="h2">Nova Entidade</h1>
        </div>
    </div>
    <div class="col-md-12">
        <form>
            <div class="form-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" class="form-control" id="nome" placeholder="Informe o Nome Completo...">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" placeholder="Informe o CPF...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Informe a Senha...">
                    </div>                        
                </div>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" placeholder="Informe o Endereço...">
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Informe o Email...">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" placeholder="Informe o Telefone...">
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-control" id="tipo" name="cargo">
                            <option value="0">--</option>
                            <option value="1">Administrador</option>
                            <option value="2">Gerente</option>

                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="entidade">Entidade</label>
                        <input type="text" class="form-control" id="entidade" placeholder="Informe a Entidade...">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

    </div>