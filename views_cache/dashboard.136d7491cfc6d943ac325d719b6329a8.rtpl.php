<?php if(!class_exists('Rain\Tpl')){exit;}?><?php require $this->checkTemplate("header_dashboard");?>

    <div class="container">
        <div class="page-header">
            <h1>Painel de Controle</h1>
            <p>Olá <?php echo htmlspecialchars( $dados["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
        </div>
    </div>

<?php require $this->checkTemplate("footer_dashboard");?>    