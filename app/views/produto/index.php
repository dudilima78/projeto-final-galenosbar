<section class="caixa mt-4">
				<div class="titulo h5 mb-0"> <h2>Lista de Produtos</h2></div>
				<div class="base-lista">
					<div>
						<div class="text-end d-flex">
							<a href="<?php echo URL_BASE."produto/create" ?>" class="btn btn-verde d-inline-block mb-2 mx-1"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastrar Produto</a>
							<a href="" class="btn btn-azul d-inline-block mb-2 filtro"><i class="fas fa fa-filter" aria-hidden="true"></i> Filtrar</a>
						</div>
					</div>
					<div class="lst mostraFiltro" style="">
						<form action="" method="">
						<div class="rows">
								<div class="col-4">
									<select name="txt_id_empresa">
										<option selected>Selecione o valor...</option>
										<option value="1">Código</option>
										<option value="2">Produto</option>										
									</select>
								</div>
								<div class="col-6">
									<input type="text"  name="" placeholder="Valor da pesquisar..." >
								</div>
								<div class="col-2">
									<input type="submit" class="btn btn-azul" value="pesquisar">
								</div>
						</div>
						</form>
					</div>
						
				<div class="tabela-responsiva tabela">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
						<thead> 
						  <tr>
						  <th align="left">ID</th>
							<th align="left">Produto</th>
							<th align="left">Preço de Custo - R$</th>
							<th align="center">Preço de Venda - R$</th>
							<th align="center">Ação</th>
						  </tr>
						</thead> 
						<tbody>
							<?php  foreach($lista as $produto) { ?>
							<tr>
								<td align="center"><?php echo $produto->idproduto; ?></td>
								<td align="center"><?php echo $produto->produto; ?></td>
								<td align="center"><?php echo $produto->precocusto; ?></td>
								<td align="center"><?php echo $produto->precovenda; ?></td>
								<td align="center">
									<a href="<?php echo URL_BASE."produto/edit/".$produto->idproduto; ?>" class="btn btn-editar" title="Editar"></a>
									<a href="<?php echo URL_BASE."produto/excluir/".$produto->idproduto; ?>" class="btn btn-exlcuir" title="excluir"></a>
								</td>
							</tr>
							<?php } ?>	
												
						</tbody> 
					</table>
					</div>
								
					</div>
				</div>
			</section>