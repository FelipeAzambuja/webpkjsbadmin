<?php
$template = 'templates/painel.php';
$id = get('id');
$editando = ($id !== '');
$projeto = null;
if ($editando) {
    $projeto = one(orm_projetos()->select(['id' => $id]));
    $titulo = 'Editando Projeto';
} else {
    $projeto = new Projetos();
    $titulo = 'Cadastro de Projeto';
}

function adicionar($form) {
    if ($form['cliente'] === 'false') {
        alert('Selecione um cliente');
        exit();
    }
    if ($form['fim'] === '') {
        unset($form['fim']);
    }
    $projeto = orm_projetos();
    $projeto->fromArray($form);
    $projeto->insert();
    redirect('lista');
}

function editar($form) {
    $projeto = orm_projetos();
    if ($projeto->fim === null) {
        if ($form['fim'] === '') {
            unset($form['fim']);
        }
    } else {
        if ($form['fim'] === '') {
            $form['fim'] = null;
        }
    }
    $projeto->fromArray($form);
    $projeto->update(['id' => $form['id']]);
    redirect('lista');
}

function remover($form) {
    orm_projetos()->delete(['id' => $form['id']]);
    redirect('lista');
}

function voltar() {
    redirect('lista');
}
?>
<div class='container-fluid'>
    <div class="row">
        <form class="col-md-12">
            <div class='row'>
                <?php
                hidden('id', $projeto->id);
                label_text('Nome', 'nome', "value='$projeto->nome'", 6);
                $clientes = orm_clientes()->select();
                label_combo('Cliente', 'cliente', col($clientes, 'id'), col($clientes, 'nome'), "value='{$projeto->cliente->id}'", 6);
                $projeto->inicio = ($projeto->inicio === null) ? cdate()->format('d/m/Y') : $projeto->inicio;
                label_calendar('Início', 'inicio', "value='$projeto->inicio' blur='calculaFinal()'", 3);

                function calculaFinal($form) {
                    setValue('#prazo', cdate($form['inicio'])->format('d/m/Y', '+90 days'));
                }

                label_calendar('Fim', 'fim', "value='$projeto->fim'", 3);
                label_calendar('Prazo', 'prazo', "value='$projeto->prazo'", 3);
                label('', 3);
//                label_combo('Contrato', 'contrato', [1], ['b'], 3);

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
        </form>
    </div>
</div>