<?php
$template = 'templates/painel.php';

function adicionar($form) {
    $cliente = orm_clientes();
    $cliente->fromArray($form);
    redirect('index');
}

function editar($form) {
    $cliente = orm_clientes();
    $cliente->fromArray($form);
    $cliente->update(['id' => $form['id']]);
    redirect('index');
}

function remover($form) {
    orm_clientes()->delete(['id' => $form['id']]);
    redirect('index');
}

function voltar($form) {
    redirect('index');
}

$id = get('id');
$editando = ($id !== '');
if ($editando) {
    $cliente = one(orm_clientes()->select([
                'id' => $id
    ]));
    $titulo = "Clientes Editar";
} else {
    $titulo = "Clientes Adicionar";
    $cliente = new Clientes();
    $cliente->foto = file_get_contents('public/img/350x150.png');
}
?>
<form class="container-fluid" >
    <div class="row" style="margin-top:10px">
        <form>
            <div class="col-md-4 " style="margin-bottom:20px">
                <?= imgtag64($cliente->foto, 'class="img-thumbnail" style="width:100%;margin-bottom:5px"') ?>
                <?php
                upload('foto', 12);
                ?>
            </div>
            <div class="col-md-8">
                <div class="row" style="margin-bottom: 20px">
                    <?php
                    hidden('id', $cliente->id);
                    label_text('Nome', 'nome', "value='$cliente->nome'", 8);
                    label_text('Contato', 'contato', "value='$cliente->contato'", 4);

                    label_text('Telefone', 'telefone', "value='$cliente->telefone'", 6);
                    label_text('Celular', 'celular', "value='$cliente->celular'", 6);

                    label_text('Skype', 'skype', "value='$cliente->skype'", 6);
                    label_text('Email', 'email', "value='$cliente->email'", 6);

                    label_text('Logradouro', 'logradouro', "value='$cliente->logradouro'", 10);
                    label_text('Número', 'numero', "value='$cliente->numero'", 2);


                    label_text('CEP', 'cep', "value='$cliente->cep'", 3);
                    label_text('Bairro', 'bairro', "value='$cliente->bairro'", 9);

                    label_text('Cidade', 'cidade', "value='$cliente->cidade'", 4);
                    label_text('UF', 'uf', "value='$cliente->uf'", 2);
                    label_text('Complemento', 'complemento', "value='$cliente->complemento'", 6);

                    label_text('CPF', 'cpf', "value='$cliente->cpf'", 6);
                    label_text('CNPJ', 'cnpj', "value='$cliente->cnpj'", 6);
                    label_text('IE', 'ie', "value='$cliente->ie'", 6);
                    label_text('IM', 'im', "value='$cliente->im'", 6);

                    label_text('Obs', 'obs', "value='$cliente->obs'", 12);


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
