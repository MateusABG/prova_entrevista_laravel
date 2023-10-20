
function getAPIResponsePOSTClientes() {
    var postData = new FormData(document.getElementById("orderForm"));

    fetch("http://localhost/projetos/prova_entrevista/public/api/clientes", {
        method: "POST",
        body: postData,
    })
        .then(response => response.json())
        .then(json => {
            var clienteResponse = json;
            if (clienteResponse.status === 200) {
                window.location.href = "paginaDeClientes";
            } else if (clienteResponse.status === 422) {
                alert(clienteResponse.message.name);
            } else {
                alert(clienteResponse.message);
            }
        })
        .catch(error => {
            console.error(error);
            alert("An error occurred.");
        });
}


function getAPIResponseEditarCliente() {
    var postData = new FormData(document.getElementById("orderForm"));

    var id = document.getElementById("id").value;
    fetch("http://localhost/projetos/prova_entrevista/public/api/clientes/" + id + "/update", {
        method: "POST",
        body: postData,
    })
        .then(response => response.json())
        .then(json => {
            var clienteResponse = json;
            if (clienteResponse.status === 200) {
                window.location.href = "paginaDeClientes";
            } else if (clienteResponse.status === 422) {
                alert(clienteResponse.message.name);
            } else {
                alert(clienteResponse.message);
            }
        })
        .catch(error => {
            console.error(error);
            alert("An error occurred.");
        });
}


function getAPIResponsePedidosEditar() {
    var postData = new FormData(document.getElementById("orderForm"));

    var id = document.getElementById("id").value;
    fetch("http://localhost/projetos/prova_entrevista/public/api/pedidos/" + id + "/update", {
        method: "POST",
        body: postData,
    })
        .then(response => response.json())
        .then(json => {
            var clienteResponse = json;
            if (clienteResponse.status === 200) {
                window.location.href = "../public";
            } else if (clienteResponse.status === 422) {
                alert(clienteResponse.message.name);
            } else {
                alert(clienteResponse.message);
            }
        })
        .catch(error => {
            console.error(error);
            alert("An error occurred.");
        });
}


function getAPIResponseDeletePedido(id) {
    var postData = new FormData();

    fetch("http://localhost/projetos/prova_entrevista/public/api/pedidos/" + id + "/delete", {
        method: "DELETE",
    })
        .then(response => response.json())
        .then(json => {
            var clienteResponse = json;
            if (clienteResponse.status === 200) {
                window.location.href = "../public";
            } else {
                alert(clienteResponse.message);
            }

        })
        .catch(error => {
            console.error(error);
            alert("An error occurred.");
        });
}


function getAPIResponseEditarPedido() {
    var postData = new FormData(document.getElementById("orderForm"));

    var id = document.getElementById("id").value;
    fetch("http://localhost/projetos/prova_entrevista/public/api/pedidos/" + id + "/update", {
        method: "POST",
        body: postData,
    })
        .then(response => response.json())
        .then(json => {
            var clienteResponse = json;
            if (clienteResponse.status === 200) {
                window.location.href = "../public";
            } else if (clienteResponse.status === 422) {
                alert(clienteResponse.message.name);
            } else {
                alert(clienteResponse.message);
            }
        })
        .catch(error => {
            console.error(error);
            alert("An error occurred.");
        });
}


function getAPIResponseDeleteCliente(id) {
    var postData = new FormData();

    fetch("http://localhost/projetos/prova_entrevista/public/api/clientes/" + id + "/delete", {
        method: "DELETE",
    })
        .then(response => response.json())
        .then(json => {
            var clienteResponse = json;
            if (clienteResponse.status === 200) {
                window.location.href = "paginaDeClientes";
            } else {
                alert(clienteResponse.message);
            }

        })
        .catch(error => {
            console.error(error);
            alert("An error occurred.");
        });
}