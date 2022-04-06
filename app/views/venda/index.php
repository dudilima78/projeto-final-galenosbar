<section class="caixa mt-4">
				<div class="titulo h5 mb-0"> <h2>Lista de Funcionários</h2></div>
				<div class="base-lista">
					<div>
						<div class="text-end d-flex">
							<a href="<?php echo URL_BASE."venda/create" ?>" class="btn btn-verde d-inline-block mb-2 mx-1"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastrar Venda</a>
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
										<option value="2">Funcionário</option>
										<option value="3">Produto</option>										
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
							<th align="left">Data da Venda</th>
							<th align="left">Cód. do Produto</th>
							<th align="center">Cód. do Funcionário</th>
							<th align="center">Quantidade</th>
							<th align="center">Ação</th>
						  </tr>
						</thead> 
						<tbody>
							<?php  foreach($lista as $venda) { ?>
							<tr>
								<td align="center"><?php echo $venda->idvenda; ?></td>
								<td align="center"><?php echo date("d/m/y",strtotime ($venda->dtvenda)) ?></td>
								<td align="center"><?php echo $venda->idproduto; ?></td>
								<td align="center"><?php echo $venda->idfuncionario; ?></td>
								<td align="center"><?php echo $venda->qtd; ?></td>
								<td align="center">
									<a href="<?php echo URL_BASE."venda/edit/".$venda->idvenda; ?>" class="btn btn-editar" title="Editar"></a>
									<a href="<?php echo URL_BASE."venda/excluir/".$venda->idvenda; ?>" class="btn btn-exlcuir" title="excluir"></a>
								</td>
							</tr>
							<?php } ?>	
												
						</tbody> 
					</table>
					</div>
								
					</div>
				</div>
			</section>