<?php $template = "templates/entrar.php"; ?>
<div class="card card-register mx-auto mt-5">
    <div class="card-header">Registrar </div>
    <div class="card-body">
        <form>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="exampleInputName">Primeiro nome</label>
                        <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputLastName">Ultimo nome</label>
                        <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="exampleInputPassword1">Senha</label>
                        <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Senha">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleConfirmPassword">Confirme</label>
                        <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirme a senha">
                    </div>
                </div>
            </div>
            <a class="btn btn-primary btn-block" href="#" click="">Registrar</a>
        </form>
        <div class="text-center">
            <a class="d-block small mt-3" href="index">Entrar</a>
            <a class="d-block small" href="recuperar">Esqueceu a senha?</a>
        </div>
    </div>
</div>