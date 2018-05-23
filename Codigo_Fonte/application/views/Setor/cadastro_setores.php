
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-md-12">
            <h1 class="h2">Novo Setor</h1>
        </div>
    </div>
    <div class="col-md-12">
        <form class="form-group" action="<?= base_url()?>Setor/cadastrar" method="post">
            <div class="form-group">
                <label for="nome">Descrição:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome do Setor...">
            </div>           
            <div class="form-group">
                <label for="endereco">Bairros Disponíveis para o Setor:</label>
                <textarea type="textarea" rows="8" class="form-control" id="endereco" name="endereco" placeholder="Informe o Endereço..."> </textarea>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <button type="reset" class="btn btn-default" >Cancelar</button>
        </form>

    </div>
