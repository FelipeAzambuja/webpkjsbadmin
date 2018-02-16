<?php
$template = 'templates/painel.php' ;
$titulo = "Clientes" ;
?>
<form class="container-fluid" >
    <div class="row">
        <div class="col-md-12">
            <a href="<?= $url ?>admin/pessoas/clientes/form" class="btn btn-primary pull-right" style="color:white" >Adicionar</a>
        </div>
    </div>
    <div class="row" style="margin-top:10px">
        <div class="col-md-12">
            <table class="datatables">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Contato</th>
                        <th>Telefone</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( orm_clientes()->select( [] ) as $cliente ): ?>
                        <tr>
                            <td>
                                <?= imgtag64( $cliente->foto , 'class="img-thumbnail" style="width:200px"' ) ?>
                            </td>
                            <td><?= $cliente->nome ?></td>
                            <td><?= $cliente->contato ?></td>
                            <td><?= $cliente->telefone ?></td>
                            <td><?= $cliente->celular ?></td>
                            <td><?= $cliente->email ?></td>
                            <td style="text-align: center">
                                <a href="<?= $url ?>admin/pessoas/clientes/form?id=<?= $cliente->id ?>" class="btn ">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ; ?>
                </tbody>
            </table>
        </div>
    </div>
</form>
