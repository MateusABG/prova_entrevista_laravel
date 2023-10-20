<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
    <head> 
        <title>Pagina de Clientes</title> 
    <link
    href="../resources/css/app.css" rel="stylesheet"> 
    <link rel="stylesheet"
    href="../resources/css/bootstrap/css/bootstrap.css">
<script src="../resources/js/functions.js"></script>
<link rel="stylesheet" href="../resources/css/font-awesome-4.7.0/css/font-awesome.min.css"> 
    <link rel="shortcut icon" href="../resources/images/icon.png" type="image/x-icon">
</head>


<header class="header">
        <div class="dados">
            <p class="h3 text-center p-3" style="color:white;"> Teste de Dev PHP- Brudam </p>
        </div>
</header>
<main>
    <div class="pageicon d-flex justify-content-between">
        <h3>Clientes</h3>
        <div class="button">
            <a href="adicionarCliente" title="Adicionar novo pedido"> Adicionar novo cliente <i
                    class="fa fa-plus-square" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="body">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div>
                    <div>
                        <table class="table table-striped table-bordered responsive">
                            <tbody>
                                <tr class="text-uppercase text-center">
                                    <td>
                                        ID
                                    </td>
                                    <td>
                                        Name
                                    </td>
                                    <td>
                                    </td>
                                </tr>

                                <!-- Aqui deve ser preenchido automaticamente -->
                                <?php
                    use App\Models\Cliente;
                    use App\Models\Pedido; 

                    $clientes= Cliente::all(); 
                    $resultado = json_decode($clientes);
                    foreach ($resultado as $res) { 
                        echo "<tr>
                                <td id='id'> $res->id </td>
                                <td id='name'> $res->name </td> 
                                <td class='text-center acoes'> 
                                    <a href='editarCliente?id=$res->id' style='color:#ff5100'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                                    <a href='#' onclick='getAPIResponseDeleteCliente($res->id)' style='color:#ff5100'><i class='fa fa-trash' aria-hidden='true'></i></a> 
                                </td>
                            </tr>";
                    }
                ?>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <a class="btn btn-outline-dark" href="../public">Voltar</a>
                    </div>
</main>

<div class="footer">
    <p> Feito por <a href="https://www.linkedin.com/in/mateus-alves-bittencourt-gaut%C3%A9rio-2b329214a/"><b>Mateus
                Alves Bittencourt Gautério</b></a> @ Outubro de 2023
    </p>
</div>

</html>
 