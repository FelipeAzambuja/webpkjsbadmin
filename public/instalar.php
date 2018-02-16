<?php
$template = 'templates/entrar.php';

function init($form) {
    hide('#nome');
}

function buscarBancos($form) {
    try {
        $db = new Db('mysql', $form['endereco'], '', $form['usuario'], $form['senha']);
    } catch (Exception $exc) {
        send_log('danger', 'Não foi possivel conectar com o banco de dados<hr>' . $exc->getTraceAsString());
        exit();
    }
    $query = $db->query('show databases');
    ob_start();
    ?>
    <option value="-1">Tentar criar o banco de dados</option>
    <?php foreach ($query as $rs) : ?>
        <option value="<?= $rs->Database ?>"><?= $rs->Database ?></option>
    <?php endforeach; ?>
    <?php
    $html = ob_get_contents();
    ob_end_clean();
    setHtml('#banco', $html);
}

function mostrarTexto($form) {
    if ($form['banco'] === '-1') {
        show('#nome');
    } else {
        hide('#nome');
    }
}

function send_log($type, $message) {
    ob_start();
    ?>
    <div class="alert alert-<?= $type ?> alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong><?= cdate()->format('d/m/Y H:i:s') ?></strong> 
        <?= $message ?>
    </div>
    <?php
    $html = ob_get_contents();
    ob_end_clean();
    append('#log', $html);
}

function instalar($form) {
    attr('#pgb', 'style', 'width:10%');
    html('#pgb', 'Mysql');
    if ($form['banco'] === '-1') {
        try {
            $db = new Db('mysql', $form['endereco'], '', $form['usuario'], $form['senha']);
        } catch (Exception $exc) {
            send_log('danger', 'Não foi possivel conectar com o banco de dados<hr>' . $exc->getTraceAsString());
            exit();
        }
        try {
            if ($db->query("create database $form[nomebanco]") === false) {
                send_log('danger', 'Não foi possivel criar o banco de dados 1<hr>' . $db->last_error);
                exit();
            } else {
                $banco = $form['nomebanco'];
            }
        } catch (Exception $exc) {
            send_log('danger', 'Não foi possivel criar o banco de dados <hr>' . $exc->getTraceAsString());
            exit();
        }
    } else {
        $banco = $form['banco'];
    }
    file_put_contents('config.bck.php', file_get_contents('config.php'));
    $code = '';
    $code .= '<?php'.PHP_EOL;
    $code .= 'conf::$dateFormat = \'d/m/Y\' ;'.PHP_EOL;
    $code .= 'conf::$servidor = \'mysql\' ;'.PHP_EOL;
    $code .= 'conf::$endereco = \'' . $form['endereco'] . '\' ;'.PHP_EOL;
    $code .= 'conf::$usuario = \'' . $form['usuario'] . '\' ;'.PHP_EOL;
    $code .= 'conf::$senha = \'' . $form['senha'] . '\' ;'.PHP_EOL;
    $code .= 'conf::$base = \'' . $banco . '\' ;'.PHP_EOL;
    $code .= 'conf::$session = \'database\';'.PHP_EOL;
    file_put_contents('config.new.php', $code);
    bind()->setTimeout('instalar2()', 1000);
}

function instalar2($form) {
    attr('#pgb', 'style', 'width:20%');
    html('#pgb', 'Dados');
    bind()->setTimeout('instalar3()', 1000);
}

function instalar3($form) {
    attr('#pgb', 'style', 'width:30%');
    html('#pgb', 'Aguarde');
    bind()->setTimeout('instalar4()', 1000);
}

function instalar4($form) {
    attr('#pgb', 'style', 'width:40%');
    html('#pgb', 'Aguarde');
    bind()->setTimeout('instalar5()', 1000);
}

function instalar5($form) {
    attr('#pgb', 'style', 'width:50%');
    html('#pgb', 'Aguarde');
    bind()->setTimeout('instalar6()', 1000);
}

function instalar6($form) {
    attr('#pgb', 'style', 'width:60%');
    html('#pgb', 'Aguarde');
    bind()->setTimeout('instalar7()', 1000);
}

function instalar7($form) {
    attr('#pgb', 'style', 'width:70%');
    html('#pgb', 'Aguarde');
    bind()->setTimeout('instalar8()', 1000);
}

function instalar8($form) {
    attr('#pgb', 'style', 'width:80%');
    html('#pgb', 'Aguarde');
    bind()->setTimeout('instalar9()', 1000);
}

function instalar9($form) {
    attr('#pgb', 'style', 'width:90%');
    html('#pgb', 'Quase pronto');
    bind()->setTimeout('instalar10()', 1000);
}

function instalar10($form) {
    attr('#pgb', 'style', 'width:100%');
    html('#pgb', 'Instalado com sucesso');
}
?>
<div class="card card-login mx-auto mt-5">
    <div class="card-header">Instalar o painel</div>
    <div class="card-body">
        <form class="row">
            <?php
            label_text('Endereço', 'endereco', 'value="127.0.0.1" placeholder="Endereço do servidor"', 12);
            label_text('Usuário', 'usuario', 'placeholder="Usuário do servidor"', 12);
            label_password('Senha', 'senha', 'blur="buscarBancos()"', 12);
            label_combo('Banco de dados', 'banco', [''], [''], 'blur="mostrarTexto()"', 12);
            row('w-100', 'nome');
            label_text('Nome do banco de dados', 'nomebanco', 12);
            row();
            button('Instalar', 'class="btn-success" click="instalar()"', 12);
            ?>
        </form>
        <div class="progress mt-2" style="height:30px">
            <div class="progress-bar progress-bar-striped" id="pgb" style="width:0%"></div>
        </div>

        <div class="mt-2 p-2" id="log" >

        </div>

    </div>
</div>