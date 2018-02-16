<?php $template = 'templates/entrar.php' ?>
<div class="card card-login mx-auto mt-5">
    <div class="card-header">Recuperar a senha</div>
    <div class="card-body">
        <div class="text-center mt-4 mb-5">
            <h4>Esqueceu sua senha?</h4>
            <p>Digite seu email e enviaremos um email com instruções para recuperar sua senha.</p>
        </div>
        <form>
            <div class="form-group">
                <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Digite seu enderço de email">
            </div>
            <a class="btn btn-primary btn-block" href="login.html">Pedir email</a>
        </form>
        <div class="text-center">
            <a class="d-block small mt-3" href="registrar">Registrar</a>
            <a class="d-block small" href="index">Entrar</a>
        </div>
    </div>
</div>