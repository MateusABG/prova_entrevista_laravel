# Prova para Vaga: Desenvolvedor PHP [Brudam]

## O que foi feito:
Nesta prova, foi feita uma aplicação WEB que possui as seguintes características:
<ul>
    <li>
        Adição e uso de banco de dados local MySQL para registro e captura de dados
    </li>
    <li>
        Criação de APIs de criação, edição e deleção de dados de Clientes e Pedidos.
    </li>
    <li>
        Listagem de pedidos e clientes disponíveis no sistema
    </li>
</ul>
## Como adicionar banco de dados (Laravel)

Para que seja possível utilizar o banco de dados, é necessário utilizar o terminal e a ferramenta **artisan**, via comando **php artisan migrate**, via este comando, todos os programas já criados irão gerar os bancos de dados necessários para o funcionamento da aplicação.

Além disso é necessário adicionar o schema o qual será utilizado no arquivo **.env** na seção abaixo:<br>
![image](https://github.com/MateusABG/prova_entrevista_laravel/assets/50017946/f71df8ec-2228-4e16-be13-6a3d3cda390a)

Ao adicionar estes dados, será possível utilizar a aplicação, inicializando-a via servidor local. 
Para o teste desta aplicação, foi utilizado a aplicação **Laragon**: https://laragon.org/download/index.html  

## As APIs
Para o teste das APIs, encontradas no caminho **localhost/<pasta da aplicação>/public/api/<caminho da api>**, foram feitos via Postman.

As APIs encontradas nesta aplicação são, de acordo com o caminho citado abaixo:
<ul>
    <li>
        localhost/<pasta da aplicação>/public/api/cliente -> Esta API é responsável pela inserção de dados de cliente (Nome e ID) no banco de dados, através da recepção de um json com os seguintes dados, sendo executado a partir de um pedido via POST:
            <code>
                {
                    "name":<Nome aqui>
                }
            </code>
    </li>
    <li>
        localhost/<pasta da aplicação>/public/api/clientes/{id}/update -> Esta API é responsável pela atualização de dados de cliente (Nome) no banco de dados, através da recepção de um json com os seguintes dados, sendo executado a partir de um pedido via POST:
            <code>
                {
                    "name":<Nome aqui>
                }
            </code>
    </li>
    <li>
        localhost/<pasta da aplicação>/public/api/clientes/{id}/delete -> Esta API é responsável pela deleção de cliente do banco de dados, sendo este executado a partir de um pedido via DELETE
    </li>
            
    <li>
         localhost/<pasta da aplicação>/public/api/pedidos -> Esta API é responsável pela inserção de dados de Pedido (ID,ID Usuário,Data de Entrega,Valor de Frete) no banco de dados, através da recepção de um json com os seguintes dados, sendo executado a partir de um pedido via POST:
                    <code>
                        {
                            "id_cliente": {id do cliente},
                            "valor_frete": {valor do frete},
                            "data_entrega": {data de entrega}
                        }
                    </code>
    <li> 
    
         localhost/<pasta da aplicação>/public/api/pedidos -> Esta API é responsável pela ataualização de dados de Pedido (ID Usuário,Data de Entrega,Valor de Frete) no banco de dados, através da recepção de um json com os seguintes dados, sendo executado a partir de um pedido via POST:
                    <code>
                        {
                            "id_cliente": {id do cliente},
                            "valor_frete": {valor do frete},
                            "data_entrega": {data de entrega}
                        }
                    </code>
                    
    </li>
    <li>
        localhost/<pasta da aplicação>/public/api/pedidos/{id}/delete -> Esta API é responsável pela deleção de um pedido do banco de dados, sendo este executado a partir de um pedido via DELETE
    </li>

</ul>

## Páginas
As páginas encontradas nesta aplicação são:

<ul>
    <li>
        <bold> Página Inicial </bold>: Esta página é onde será encontrada a listagem de pedidos registrados e acesso a área de listagem de clientes e adição de novos pedidos. Além disso, na listagem, na ultima coluna encontrada na tabela de pedidos, se encontram duas possíveis ações: a de edição, ao qual leva o usuário a área de edição de dados do pedido, assim como a ação de deleção, o qual deleta o dado da coluna indicada.
    </li>
    <li>
        <bold> Página de Listagem de Clientes </bold>: Esta página é onde será encontrada a listagem de pedidos registrados e acesso a área de listagem de clientes e adição de novos pedidos.
    </li>
</ul>
