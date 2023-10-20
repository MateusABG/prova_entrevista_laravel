<!DOCTYPE html> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
    
<head> 
    <title>Cadastrar Cliente</title>
    <link href="../resources/css/app.css" rel="stylesheet"> <link rel="stylesheet"
    href="../resources/css/bootstrap/css/bootstrap.css">
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
        <div class="pageicon">
            <h4 class="pageicon">Cadastrar Cliente</h4>
        </div>
        <div class="body d-flex align-items-center justify-content-center middle-screen-card">
            <div class="space-inside shadow-lg card">
                <form id="orderForm" action="javascript:getAPIResponsePOSTClientes()" method="POST">
                    <p id="msg"></p>
                    <div class="form-group row">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <br>
                    <button class="form-control form-button" type="button"
                        onclick="getAPIResponsePOSTClientes()">Cadastrar</button>
                    <a class="form-control form-button return-button col-md-3" style="margin-top:5px"
                        href="paginaDeClientes">Voltar</a>
                </form>
            </div>
        </div>
    </main>
    <div class="footer">
        <p> Feito por <a href="https://www.linkedin.com/in/mateus-alves-bittencourt-gaut%C3%A9rio-2b329214a/"><b>Mateus Alves Bittencourt Gautério</b></a> @ Outubro de 2023
        </p>
    </div>
</body>

</html>