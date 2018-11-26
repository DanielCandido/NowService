	<?php 
			include_once("conexao.php");

			$query = "SELECT FantasyName, Cpf, category  FROM provider";

			$dados = mysqli_query($conn,$query);

			$linha = mysqli_fetch_assoc($dados);

			$total = mysqli_num_rows($dados);
		?>