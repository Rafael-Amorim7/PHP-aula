<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>
        <center>
            <button style="margin:10px; " type="submit" class="btn btn-success" data-toggle="modal" data-target="#modalAdicionar">Adicionar</button>
        </center>
        <table class="table table-striped table-dark">
            <thead>
                <th colspan="8">
                    <center>
                        Tabela Contadora (Em produção)
                    </center>
                </th>
            <thead>
            <tbody>       

                <?php
                    $id = 0;
                    $lin = 0;
                ?>
				<?php 
					include ("conexao.php");
					$sql = "select * from pessoas"; 
					$query=$conecta->query($sql);
						
					
					
				?>
				<tr>
					<th> Nome
					</th>
					<th> CPF
					</th>
					<th> Endereço
					</th>
					<th> CEP
					</th>
					<th> e-mail
					</th>
					<th colspan="2">
						<center>
							Ações
						</center>
					</th>

				</tr>
                <?php 
					while($colunas=$query->fetch_assoc()){
						extract($colunas); 
				?>

                    <tr> 
                        <td id="<?="nome".$codigo?>"> <?=$nome?> </td>
						<td id="<?="cpf".$codigo?>"> <?=$cpf?> </td>
						<td id="<?="endereco".$codigo?>"> <?=$endereco?> </td>
						<td id="<?="cep".$codigo?>"> <?=$cep?> </td>
						<td id="<?="email".$codigo?>"> <?=$email?> </td>

                        <td style="width: 20px;">
                            <button onclick="" id="<?=$codigo?>" type="submit" data-toggle="modal" data-target="#modalExemplo" class="btn btn-success">Alterar</button>
                        </td>
                        <td style="width: 20px;">
                            <button onclick="excluir(<?php echo $codigo; ?>)" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modalDeletar">Deletar</button>
                        </td>
                        
                    </tr>
                <?php } ?>                      
            </tbody>
        </table>
        
        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome:</label>
                            <input type="text" class="form-control" id="Nome" aria-describedby="emailHelp" placeholder="Digite seu nome" required>
                        
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">CPF:</label>
                            <input type="number" class="form-control" id="cpf" placeholder="Digite seu CPF">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço:</label>
                            <input type="text" class="form-control" id="endereco" aria-describedby="endereco" placeholder="Digite seu Endereço">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">CEP:</label>
                            <input type="number" class="form-control" id="cep" placeholder="Digite seu CEP">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Digite seu E-mail">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar mudanças</button>
                    </div>
                </div>
            </div>
        </div>
		<!--popup de adicionar -->
        <div class="modal fade" id="modalAdicionar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Criar novo Registro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="include.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome:</label>
                            <input type="text" class="form-control" name="Nome" id="Nome" aria-describedby="emailHelp" placeholder="Digite seu nome" required name="">
                        
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">CPF:</label>
                            <input type="number" class="form-control" name="cpf" id="cpf" placeholder="Digite seu CPF">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço:</label>
                            <input type="text" class="form-control" name="endereco" id="endereco" aria-describedby="endereco" placeholder="Digite seu Endereço">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">CEP:</label>
                            <input type="number" class="form-control" name="cep" id="cep" placeholder="Digite seu CEP">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu E-mail">
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Adicionar Registro</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
		<!--popup de adicionar (fim) -->

		<!--confirmação de deletar -->
        <div class="modal fade" id="modalDeletar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
						<center>
                        <h5 class="modal-title" id="exampleModalLabel">Deseja realmente excluir?</h5>
						</center>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
						<center>
						<form action="excluir.php" method="POST">
							<input type="hidden" name="idRegistro" id="idRegistro">
							<button type="button" class="btn btn-success" data-dismiss="modal">Não</button>
							<button type="submit" class="btn btn-danger">Sim</button>
						</form>
						</center>
                   
                </div>
            </div>
        </div>
		<!--confirmação de deletar (fim) -->

        <script>
            function excluir(lin){
				document.getElementById("idRegistro").value=lin;
            }
        </script>
        
        
    </body>

</html>