<?php
/* print_r($resultData);
 */
?>
<!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS CDN -->
        <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet"  href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <!-- <link rel="stylesheet"  href="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js.css"> -->
        <link rel="stylesheet"  href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">
        <link rel="stylesheet"  href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">
        <link rel="stylesheet"  href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
       <!--  <link rel="stylesheet" type="text/css" href="style.css"> -->


        <title>Document</title>
    </head>
    <body>
        <h1 class="display-6">AllBlacks</h1>
        <?php
           /*  if(isset($_POST['acao'])){
                $arquivo =$_FILES['file'];
                 $arquivoNovo = explode('.',$arquivo['name']);
                if($arquivoNovo[sizeof($arquivoNovo)-1] != 'xml'){
                    die('voce não pode importar este tipo de srquivo por favor escolha um xml valido');
                }else{
                    echo'importado com sucesso';
                }
            } */

         /*    $xml=simplexml_load_file("clientes.xml");
                echo $xml->getName() . "<br>"; */


        ?>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo"/>
            <input type="submit" name="acao" value="enviar">
        </form>

        <div class="container">
        <table id="lista" class="table table-bordered display table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Documento</th>
                    <th>Cep</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ativo</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <!-- <tbody>
                <?php foreach($resultData as $key => $vl): ?>
                    <tr>
                        <td><?=$vl->nome?></td>
                        <td><?=$vl->documento?></td>
                        <td><?=$vl->cep?></td>
                        <td><?=$vl->endereco?></td>
                        <td><?=$vl->bairro?></td>
                        <td><?=$vl->cidade?></td>
                        <td><?=$vl->uf?></td>
                        <td><?=$vl->telefone?></td>
                        <td><?=$vl->email?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody> -->
        </table>
        </div>
    <!-- JS CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
    <script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
    <script src="index.js"></script>
</body>
</html>