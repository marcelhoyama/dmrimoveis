<title> Pesquisar Clientes - DMR Imóveis em Cabreúva</title>
<div class="container-fluid">
    <center><h2>Pesquisar Clientes</h2></center>
    <form method="GET" >
    <div class="input-group">
        <input type="search" class="form-control" name="pesquisar" >
        <span class="input-group-btn">
            <button class="btn btn-primary" type="button">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>Pesquisar
            </button>
        </span>
    </div>
        </form>
    <br>
    <div class="table-responsive">
    <table class="table">
        <thead>

            <tr>
                <th>Nome do Cliente</th>
                <th>Telefone</th>
                <th>E-mail</th>
                 <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
             <?php echo 'fulano dfsdfsdfsdfdsfsdfdfdfds'?>
                    </td>
                <td><?php echo'66666666666' ?></td>
                <td><?php echo 'fulano@hotmail.com' ?></td>
                <td><a href="<?php BASE_URL;?>editarclientes"><button class="btn btn-success">Editar</button></a>
                <a><button class="btn btn-danger">Bloquear</button></a></td>
            </tr>
         
          
        
       
        </tbody>
    </table>
    </div>
</div>