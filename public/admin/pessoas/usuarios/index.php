<?php
$template = 'templates/painel.php' ;
$titulo = "Usuários" ;
?>
<form class="container-fluid" >
    <div class="row">
        <div class="col-md-12">
            <a href="<?= $url ?>admin/pessoas/usuarios/form" class="btn btn-primary pull-right" style="color:white" >Adicionar</a>
        </div>
    </div>
    <div class="row" style="margin-top:10px">
        <div class="col-md-12">
            <table class="datatables">
                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Nome</th>
                        <th>Nivel</th>
                        <th>Email</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( orm_usuarios()->select( [] ) as $usuario ): ?>
                        <tr>
                            <td>
                                <?= imgtag64( $usuario->imagem , 'class="img-thumbnail" style="width:200px"' ) ?>
                            </td>
                            <td><?= $usuario->nome ?></td>
                            <td><?= $usuario->nivel ?></td>
                            <td><?= $usuario->email ?></td>
                            <td style="text-align: center">
                                <a href="<?= $url ?>admin/pessoas/usuarios/form?id=<?= $usuario->id ?>" class="btn ">
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
