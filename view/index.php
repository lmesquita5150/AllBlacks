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

        <style>
            p {color: #117221}
        </style>
    </head>
    <body>
        <h1 class="display-6">AllBlacks</h1>
        <form method="POST" enctype="multipart/form-data" name="upload">
            <input type="hidden" name="action" value="insert" />
            <input type="file" name="arquivo" accept="text/xml" />
            <input type="submit" value="enviar">
        </form>
        <p>Dê duplo clique para editar algum dado.</p>

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
                </tr>
            </thead>
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