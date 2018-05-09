
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-md-12">
            <h1 class="h2">Atualizar Usuário</h1>
        </div>
    </div>
    <div class="col-md-12">
        <form class="form-group" action="<?= base_url()?>Usuarios/salvar_atualizacao" method="post">
            <input type="hidden" id="id" name="id" value="<?= $usuarios[0]->id;?>">
            <div class="form-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o Nome Completo..." value="<?= $usuarios[0]->nome ?>" required>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o CPF..." value="<?= $usuarios[0]->cpf ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="button" class="btn btn-default btn-block" value="Atualizar Senha" disabled>
                    </div>                        
                </div>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o Endereço..." value="<?= $usuarios[0]->endereco ?>"required>
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Informe o Email..." value="<?= $usuarios[0]->email ?>" required>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Informe o Telefone..." value="<?= $usuarios[0]->telefone ?>"required>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-control" id="tipo" name="tipo"  required>
                            <option value="0">--</option>
                            <option value="1" <?= $usuarios[0]->tipo==1?' selected ':'' ;?> >Administrador</option>
                            <option value="2" <?= $usuarios[0]->tipo==2?' selected ':'' ;?> >Gerente</option>

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