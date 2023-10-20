<!DOCTYPE html> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
    
<head> 
    <title>Adicionar Pedido</title> <link
    href="../resources/css/app.css" rel="stylesheet"> <link rel="stylesheet"
    href="../resources/css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../resources/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../resources/images/icon.png" type="image/x-icon">
</head>


<header class="header">
        <div class="dados">
            <p class="h3 text-center p-3" style="color:white;"> Teste de Dev PHP- Brudam </p>
        </div>
</header>
<main>
    <div class="pageicon">
        <h4 class="pageicon">Adicionar Pedido</h4>
    </div>
    <div class="body d-flex align-items-center justify-content-center middle-screen-card">
        <div class="space-inside shadow-lg card">
            <form id="orderForm">
                <div class="form-group row">
                    <label for="name">Cliente:</label>
                    <select name="id_cliente" class="form-select" id="id_cliente"> ';
                        <?php
                        use App\Models\Cliente;

                        $clientes = json_decode(Cliente::all());
                        foreach ($clientes as $cliente) {
                            echo "<option value='$cliente->id'> $cliente->name </option>";
                        }
                    ?>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="name">Data de Entrega:</label>
                    <input class="form-control" type="date" name="data_entrega" id="data_entrega">
                </div>
                <div class="form-group row">
                    <label for="name">Valor de Frete:</label>
                    <input class="form-control" type="number" min="0.00" step="0.01" name="valor_frete" id="valor_frete" placeholder="0.00">
                </div>
                <br />
                <button class="form-control form-button" type="submit">Cadastrar</button>
                <a class="form-control form-button return-button col-md-3" style="margin-top:5px"
                    href="../public">Voltar</a>
            </form>
        </div>
    </div>
    <div class="footer">
        <p> Feito por <a href="https://www.linkedin.com/in/mateus-alves-bittencourt-gaut%C3%A9rio-2b329214a/"><b>Mateus
                    Alves Bittencourt Gautério</b></a> @ Outubro de 2023
        </p>
    </div>
</main>
</body>

</html>

<script>
    document.getElementById("orderForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission

        var postData = new FormData(this);

        fetch("http://localhost/projetos/prova_entrevista/public/api/pedidos", {
            method: "POST",
            body: postData,
        })
            .then(response => response.json())
            .then(json => {
                var clienteResponse = json;
                if (clienteResponse.status === 200) {
                    window.location.href = "../public";
                } else if (clienteResponse.status === 422) {
                    alert("Algum conteúdo não foi adicionado");
                } else {
                    alert(clienteResponse.message);
                }
            })
            .catch(error => {
                console.error(error);
                alert("An error occurred.");
            });
    });
</script>