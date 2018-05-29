
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-md-12">
            <h1 class="h2">Novo Setor</h1>
        </div>
    </div>
    <div class="col-md-12">
        <form class="form-group" action="<?= base_url()?>Setor/cadastrar" method="post">
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="nome">Descrição:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome do Setor...">
                </div>                       
                <div class="col-md-5 form-group">
                    <label for="bairros">Bairros Disponíveis para o Setor:</label>
                    <select multiple name="bairro[]" id="bairro" class="form-control" required>
                        <option value="0">  </option> 
                        <?php foreach($bairros as $bairro){ ?>
                        <option value="<?= $bairro->id?>"> <?= $bairro->nome; ?> </option>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-7 form-group"><br><br>
                    <form class="form-group" action="<?= base_url()?>Setor/incluirBairro" method="post">
                        <button type="submit" class="btn btn-success">Novo Bairro</button>
                    </form>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <button type="reset" class="btn btn-default" >Cancelar</button>
        </form>

    </div>
