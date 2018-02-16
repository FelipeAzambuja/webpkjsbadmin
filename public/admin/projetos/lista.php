<?php
$template = 'templates/painel.php';
$titulo = 'Bem vindo';
?>
<form class="container-fluid" >
    <div class="row">
        <div class="col-md-12">
            <a href="<?= $url ?>admin/projetos/form" class="btn btn-primary pull-right" style="color:white" >Adicionar</a>
        </div>
    </div>
    <div class="row" style="margin-top:10px">
        <div class="col-md-12">
            <table class="datatables">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cliente</th>
                        <th>Datas</th>
                        <th>Prazo</th>
                        <th>Horas</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (orm_projetos()->select([]) as $projeto): ?>
                        <tr>
                            <td>
                                <?= $projeto->nome ?>
                            </td>
                            <td><a href="<?= $url ?>admin/pessoas/clientes/form?id=<?= $projeto->cliente->id ?>" target="_blank"><?= $projeto->cliente->nome ?></a></td>
                            <td>
                                <?= $projeto->inicio ?>
                                <?php if ($projeto->fim !== NULL): ?>
                                    - 
                                    <?= $projeto->fim ?>
                                <?php endif; ?>
                            </td>
                            <td><?= cdate($projeto->prazo)->format('d/m/Y') ?></td>
                            <td>
                                <?php if ($projeto->horas === '0:0:0' || $projeto->horas === null): ?>
                                    Projeto não iniciado
                                <?php else: ?>
                                    <?= $projeto->horas ?>
                                <?php endif; ?>
                            </td>
                            <td style="text-align: center">
                                <a href="<?= $url ?>admin/projetos/form?id=<?= $projeto->id ?>" class="btn ">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</form>
