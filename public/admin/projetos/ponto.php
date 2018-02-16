<?php
orm_ponto();
if (get('tabela') === '1') {

    exit();
}
$template = 'templates/painel.php';

function init() {
    tabela();
}

function tabela() {
    global $url;
    ob_start();
    ?>
    <table class='datatables'>
        <thead>
            <tr>
                <td>Projeto</td>
                <td>Entrada</td>
                <td>Saída</td>
                <td>Soma</td>
                <td>Ganho</td>
                <td>Obs</td>
                <td>Opções</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach (orm_ponto()->select() as $ponto) : ?>
                <tr>
                    <td>
                        <a target='_blank' href='<?= $url ?>admin/projetos/form?id=<?= $ponto->projeto->id ?>'><?= $ponto->projeto->nome ?></a>
                        - 
                        <a target='_blank' href='<?= $url ?>admin/pessoas/clientes/form?id=<?= $ponto->projeto->cliente->id ?>'><?= $ponto->projeto->cliente->nome ?></a>
                    </td>
                    <td><?= $ponto->abertura ?></td>
                    <td><?= $ponto->fechamento ?></td>
                    <td><?= $ponto->soma ?></td>
                    <td><?= 0 ?></td>
                    <td><?= $ponto->descricao ?></td>
                    <td>
                        
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php
    $html = ob_get_contents();
    ob_end_clean();
    html('#tabela', $html);
}

$titulo = 'Ponto';
?>
<form class="container-fluid" >
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <?php
                $projetos = orm_projetos()->select();
                label_combo('Projeto', 'projeto', col($projetos, 'id'), col($projetos, 'nome'), 3);
                label_mask('Momento', 'momento', '99/99/9999 99:99:99', 'value="' . cdate()->format('d/m/Y H:i:s') . '"', 3);
                label_text('Obs', 'obs', 6);

                label('', 9);
                button('Marcar', 'click="marcar()" lock ', 3);

                function marcar($form) {
                    setValue('#momento', cdate()->format('d/m/Y H:i:s'));
                    $ponto = one(orm_ponto()->select([
                                'projeto' => $form['projeto'],
                                    ], "order by id desc limit 1"));
                    if ($ponto === null) {
                        orm_ponto()->fromArray([
                            'projeto' => $form['projeto'],
                            'abertura' => $form['momento']
                        ])->insert();
                    } else {
                        if ($ponto->fechamento === null) {
                            orm_ponto()->
                                    setProjeto($form['projeto'])->
                                    setFechamento($form['momento'])->
                                    update([
                                        'id' => $ponto->id
                            ]);
                            $ponto = orm_ponto()->byId($ponto->id);
                            $diff = cdate($ponto->abertura)->toDateTime()->diff(cdate($ponto->fechamento)->toDateTime());
                            $horas = $diff->s / 3600;
                            orm_ponto()->setSoma($horas)->update([
                                'id' => $ponto->id
                            ]);
                        } else {
                            orm_ponto()->fromArray([
                                'projeto' => $form['projeto'],
                                'abertura' => $form['momento']
                            ])->insert();
                        }
                    }
//                    cd($ponto);
                    setValue('#obs', '');
                    focus('#projeto');
                    tabela();
                    alert('Marcado com sucesso');
                }
                ?>
            </div>
        </div>
    </div>
</form>
<div class='container-fluid' style='margin-top: 15px'>
    <div class='row'>
        <form>
            <?php
            label('')
            ?>
        </form>
    </div>
    <div class='row'>
        <div class='col-md-12' id='tabela' >

        </div>
    </div>
</div>