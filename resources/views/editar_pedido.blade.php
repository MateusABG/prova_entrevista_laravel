<!DOCTYPE html> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
    

<head> 
    <title>Editar Pedido</title> 
    <link href="../resources/css/app.css" rel="stylesheet"> 
    <link rel="stylesheet" href="../resources/css/bootstrap/css/bootstrap.css">
    <script src="../resources/js/functions.js"></script>
    <link rel="stylesheet" href="../resources/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../resources/images/icon.png" type="image/x-icon">
</head>

<body>

    <header class="header">
        <div class="dados">
            <p class="h3 text-center p-3" style="color:white;"> Teste de Dev PHP- Brudam </p>
        </div>
    </header>
    <main>
        <div class="pageicon d-flex justify-content-between">
            <h3>Editar Pedido</h3>
        </div>
        <div class="body d-flex align-items-center justify-content-center middle-screen-card">
            <div class="space-inside shadow-lg card">
                <form id="orderForm" action="javascript:getAPIResponseEditarPedido()">
                    <?php
            
            use App\Models\Cliente;
            use App\Models\Pedido;

            $id = $_GET['id'];
            
                        $pedido=Pedido::find($id);
                        $clientes = json_decode(Cliente::all());
                        echo '
                        <div class="form-group row">
                            <label for="name">Cliente:</label>
                                <input type="hidden" name="id" id="id" value="'.$pedido->id.'">
                              <select class="form-control form-select" name="id_cliente" id="id_cliente"> ';
                        foreach ($clientes as $cliente) {
                            if($cliente->id === $pedido->id_cliente){
                                echo "<option value='$cliente->id' selected='selected'> $cliente->name </option>";
                            }else{
                                echo "<option value='$cliente->id'> $cliente->name </option>";
                            } 
                        }
                        echo '</select> </div>
                        <div class="form-group row">
                            <label for="name">Data de Entrega:</label>
                        <input type="date" class="form-control" name="data_entrega" id="data_entrega" value="'.$pedido->data_entrega.'">
                        </div>';
                        echo '
                        <div class="form-group row">
                            <label for="name">Valor de Frete:</label>
                        <input type="number" class="form-control" min="0.00" step="any" name="valor_frete" id="valor_frete" value="'.$pedido->valor_frete.'">
                        </div>'; 
                    ?>
                    <BR>
                    <button class="form-control form-button" type="submit">Cadastrar</button>
                    <a class="form-control form-button return-button col-md-3" style="margin-top:5px"
                        href="../public">Voltar</a>
                </form>
            </div>
    </main>
    <div class="footer">
        <p> Feito por <a href="https://www.linkedin.com/in/mateus-alves-bittencourt-gaut%C3%A9rio-2b329214a/"><b>Mateus Alves Bittencourt Gautério</b></a> @ Outubro de 2023
        </p>
    </div>
</body>

</html>