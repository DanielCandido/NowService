<?php 
include_once 'head.php' ?>
<body>
	<?php include_once 'header-p.php' ?>
	<div class="container">
		<h4 style="margin-top: 50px;">Ordens Pendentes</h4>
			<table class="table table-hover">
				<thead>
				    <tr>
				      <th scope="col">Nº Ordem</th>
				      <th scope="col">Solicitante</th>
				      <th scope="col">Data Pedido</th>
				      <th scope="col">Status</th>
				      <th scope="col">Ações</th>
				    </tr>
 		 		</thead>
 		 		<tbody>
			<?php 
				include_once("conexao.php");
				$id = $_SESSION['p-id'];
				$query = "SELECT IdOrder, IdUser, IdProvider, DateOrder, Status FROM orderservice WHERE IdProvider = '$id' AND Status = 'Em Analise'";
				$dados = mysqli_query($conn,$query);
				$linha = mysqli_fetch_assoc($dados);
				$total = mysqli_num_rows($dados);

				if ($total > 0) {
					do {
			 ?>
			 	<tr>
			      <th scope="row"><?=$linha['IdOrder']?></th>
			      <td><?=$linha['IdUser']?></td>
			      <td><?=$linha['DateOrder']?></td>
			      <td><?=$linha['Status']?></td>
			      <td><a href="" class="btn btn-success">Aceitar</a><a href="" class="btn btn-danger">Cancelar</a></td>
			    </tr>
			
			    <?php 
			    }while ( $linha = mysqli_fetch_assoc($dados)); 
			    	
			    } else {
			    	echo "<div class='alert alert-warning' role='alert' style='margin-top: 50px;'>
				Você não possui ordens pendentes 
				</div>";
			    }
			    ?>
			        </tbody>
			</table>
			 
		</div>
	</div>
</body>