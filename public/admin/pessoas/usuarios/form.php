<?php
$template = 'templates/painel.php';

function adicionar($form) {
    $usuario = model_usuarios();
    $usuario->nome = $form['nome'];
    if (upload_parser('imagem')->is_ok()) {
        $usuario->imagem = upload_parser('imagem')->data();
    }
    $usuario->email = $form['email'];
    $usuario->nivel = $form['nivel'];
    if ($form['senha'] !== '') {
        if ($form['senha'] === $form['confirme']) {
            $usuario->senha = md5($form['senha']);
        }
    }
    $usuario->insert();
    redirect('index');
}

function editar($form) {
    $usuario = model_usuarios();
    if (upload_parser('imagem')->is_ok()) {
        $usuario->imagem = upload_parser($form['imagem'])->data();
    }
    $usuario->nome = $form['nome'];
    $usuario->email = $form['email'];
    $usuario->nivel = $form['nivel'];
    if ($form['senha'] !== '') {
        if ($form['senha'] === $form['confirme']) {
            $usuario->senha = md5($form['senha']);
        }
    }
    $usuario->where([
        'id' => $form['id']
    ]);
    $usuario->update();
    redirect('index');
}

function remover($form) {
    model_usuarios()->where(['id' => $form['id']])->delete();
    redirect('index');
}

function voltar($form) {
    redirect('index');
}

$id = get('id');
$editando = ($id !== '');
if ($editando) {
    $usuario = model_usuarios()->where([
                'id' => $id
            ])->first();
    $titulo = "Usuários Editar";
} else {
    $titulo = "Usuários Adicionar";
    $usuario = new Usuarios();
    $usuario->imagem = file_get_contents('public/img/350x150.png');
}
?>
<form class="container-fluid" >
    <div class="row" style="margin-top:10px">
        <form>
            <div class="col-md-4 " style="margin-bottom:20px">
                <img id='imagem-profile' src="<?= $usuario->imagem?>" class="img-thumbnail" style="width:100%;margin-bottom:5px" alt="">
                <?php
                upload('imagem','change="updateFoto()"', 12);
                function updateFoto($form) {
                    $data = upload_parser('imagem')->image()->encode('jpg',40);
                    
                    attr('#imagem-profile', 'src', srcbase64($data));
                }
                ?>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <?php
                    hidden('id', $usuario->id);
                    label_text('Nome', 'nome', "value='$usuario->nome'", 8);
                    label_text('Nível', 'nivel', "value='$usuario->nivel'", 4);
                    label_text('Email', 'email', "value='$usuario->email'", 6);
                    label_text('Senha', 'senha', 3);
                    label_text('Confirme', 'confirme', 3);
                    if ($editando) {
                        label('', 3);
                        button('Voltar', 'click="voltar()" lock', 3);
                        button('Editar', 'click="editar()" lock', 3);
                        button('Remover', 'color="danger" click="remover()" lock', 3);
                    } else {
                        label('', 6);
                        button('Voltar', 'click="voltar()" lock', 3);
                        button('Adicionar', 'click="adicionar()" lock', 3);
                    }
                    ?>
                </div>
            </div>
        </form> 
    </div>
</form>
