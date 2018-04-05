<?php if(!class_exists('Rain\Tpl')){exit;}?>
<?php require $this->checkTemplate("header");?>
    <h2>Hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
<?php require $this->checkTemplate("footer");?>
