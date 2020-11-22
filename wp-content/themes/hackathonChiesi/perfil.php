<?php /* Template Name: Perfil */ ?>
<?php
$title = "Home";
get_header();
?>

<section class="container login">
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-center">
                <div class="img-perfil">
                    <img id="imgPerfil" alt="" src="<?php bloginfo('template_url'); ?>/assets/img/default.png">
                </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4 d-flex justify-content-center align-items-center mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center mb-2">
                        <label for="usuario">
                            Usuario:
                        </label>
                        <input id="usuarioLogin" name="usuario" type="text">
                    </div>

                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <label for="senha">
                            Senha:
                        </label>
                        <input id="senhaLogin" name="senha" type="password">
                    </div>

                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <button class='button-default green' onclick="checkLogin()">
                            Entrar
                        </button>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        Não Possui cadastro?
                     
                    </div>

                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="<?php echo get_bloginfo('url')?>/perfil" class='d-block m-0 mt-2 button-default green'>
                            Registre-se
                        </a>
                    </div>
                </div>
            </div>
          
        </div>
     
    </div>
</section>


<?php
get_footer();

?>
