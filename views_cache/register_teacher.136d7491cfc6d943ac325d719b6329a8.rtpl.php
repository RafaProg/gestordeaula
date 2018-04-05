<?php if(!class_exists('Rain\Tpl')){exit;}?><?php require $this->checkTemplate("header_dashboard");?>

    <div class="container">
        <div class="page-header">
            <h1>Cadastrar Professor</h1>
        </div>

        <div class="row">
            <div class="col">
                <form method="post" action="/cadastrar/professor">
                <input type="text" class="form-control" name="nome" placeholder="NOME">
                <br>
                <input type="text" class="form-control" name="email" placeholder="E-MAIL">
                <br>
                <input type="text" class="form-control" name="titulacao" placeholder="TITULAÇÃO">
                <br>
                <br>
                <button type="submitt" class="btn btn-primary">Cadastrar</button>
                <a href="/lista/professor" class="btn btn-danger">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

<?php require $this->checkTemplate("footer_dashboard");?> 