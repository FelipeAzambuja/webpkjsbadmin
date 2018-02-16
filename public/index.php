<?php
$template = 'templates/entrar.php';

function entrar($form) {

    $usuario = one(orm_usuarios()->select([
                'id' => $form['usuario'],
                'senha' => md5($form['senha'])
    ]));

    if ($usuario == null) {
        alert("Senha errada");
    } else {
        session_set("usuario", $usuario->id);
        redirect("admin/home");
    }
}
?>
<div class="card card-login mx-auto mt-5">
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="usuario">Usuário</label>
                <select id="usuario" class="form-control">
                    <?php foreach (db()->select('usuarios', '') as $linha): ?>
                        <option value="<?= $linha->id ?>"><?= $linha->email ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input class="form-control" id="senha" type="password" placeholder="Senha">
            </div>
            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" id="lembrar" type="checkbox"> Lembrar</label>
                </div>
            </div>
            <a class="btn btn-primary btn-block" href="#" click="entrar()">Entrar</a>
        </form>
        <div class="text-center">
            <a class="d-block small mt-3" href="registrar">Registrar</a>
            <a class="d-block small" href="recuperar">Esqueceu a senha?</a>
        </div>
    </div>
</div>