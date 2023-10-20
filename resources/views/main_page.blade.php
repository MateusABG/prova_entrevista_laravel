<!DOCTYPE html> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
    
<head> 
    <title>Página Inicial</title> 
    <link href="../resources/css/app.css" rel="stylesheet"> 
    <link rel="stylesheet" href="../resources/css/bootstrap/css/bootstrap.css">
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
        <h3>Pedidos</h3>
        <div class="button">
            <a href="fazer_pedido" title="Adicionar novo pedido"> Adicionar novo pedido <i class="fa fa-plus-square"
                    aria-hidden="true"></i></a>
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
                                    <th>
                                        ID Pedido
                                    </th>
                                    <th>
                                        Cliente
                                    </th>
                                    <th>
                                        Data de Entrega
                                    </th>
                                    <th>
                                        Valor Frete
                                    </th>
                                    <th>
                                    </th>
                            </tbody>
                            <!-- Aqui deve ser preenchido automaticamente -->
                            <?php
                    use App\Models\Pedido;
                    use App\Models\Cliente;
                    $pedidos= Pedido::all();
                    $resultado = json_decode($pedidos);
                    foreach ($resultado as $res) { 
                        $cliente = json_decode(Cliente::find($res->id_cliente)); 

                        $dateString_To_date = strtotime($res->data_entrega);
                        $data = date("d/m/Y",$dateString_To_date);
                        echo "
                        <tr>
                            <td> $res->id </td>
                            <td> $cliente->name </td>
                            <td>".$data."</td>
                            <td> R$ ". number_format($res->valor_frete,2) ."</td> 
                            <td class='text-center acoes'> 
                            <a href='editarPedido?id=$res->id'  style='color:#ff5100'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                             <a href='#' onclick='getAPIResponseDeletePedido($res->id)' style='color:#ff5100'><i class='fa fa-trash' aria-hidden='true'></i></a> 
                             </td>
                        </tr>";
                    }
                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="text-end">
                        <a class="btn btn-outline-dark" href="paginaDeClientes">Ver
                            Clientes</a>
                    </div>
                    <div class="footer">
                        <p> Feito por <a
                                href="https://www.linkedin.com/in/mateus-alves-bittencourt-gaut%C3%A9rio-2b329214a/"><b>Mateus
                                    Alves Bittencourt Gautério</b></a> @ Outubro de 2023
                        </p>
                    </div>
</main>

</html>