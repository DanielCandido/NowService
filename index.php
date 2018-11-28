<?php 
include_once'head.php'?>
<body>
<?php include_once'header.php' ?>

	<div class="container" style="margin-top: 20px;">
    <div  class="row" style="padding: 10px;">
		<?php
		include_once("listarprestadores.php");
		if ($total > 0) {
		 	do {
		?>
      <div class="col-sm-6" >
			<div class="card" style="width: 15rem;" id="card">
			  <img class="card-img-top" src='<?=$linha['imgprofile']?>' alt="Imagem Perfil">
			  <div class="card-body">
			    <h5 class="card-title"><?=$linha['FantasyName']?></h5>
			    <p class="card-text"><?=$linha['Cellphone']?></p>
          <p class="card-text"><?=$linha['Phone']?></p> 
          <p class="card-text"><?=$linha['Email']?></p>         
			    <p class="card-text"><?=$linha['category']?></p>
			    <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-primary">Ver Detalhes</a>
        </div>
			</div>
		</div>
			<!-- Button trigger modal -->
			<br>
			<br>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
		</div>
		<?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysqli_fetch_assoc($dados));
    // fim do if 
    	}
		?>	
	</div>
   </div> 

</body>
</html>