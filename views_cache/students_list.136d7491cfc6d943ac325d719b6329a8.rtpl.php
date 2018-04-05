<?php if(!class_exists('Rain\Tpl')){exit;}?><?php require $this->checkTemplate("header_dashboard");?>

    <div class="container">
        <div class="page-header">
            <h1>Professores</h1>
        </div>

        <div class="row">
            <div class="col">
                <a href="/cadastrar/professor" class="btn btn-primary">Novo</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>EMAIL</th>
                            <th>TITULAÇÃO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter1=-1;  if( isset($dados) && ( is_array($dados) || $dados instanceof Traversable ) && sizeof($dados) ) foreach( $dados as $key1 => $value1 ){ $counter1++; ?>
                        <tr>
                            <td><?php echo htmlspecialchars( $dados["$counter1"]["idprofessor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $dados["$counter1"]["nomeprofessor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $dados["$counter1"]["emailprofessor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $dados["$counter1"]["titulacaoprofessor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><a href="/exibir/professor" class="btn btn-primary">Exibir</a></td>
                            <td><a href="/excluir/professor" class="btn btn-danger">Excluir</a></td>
                            <td><a href="/editar/professor" class="btn btn-success">Editar</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php require $this->checkTemplate("footer_dashboard");?> 