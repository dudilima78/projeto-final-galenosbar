<!-- View Create (formulário de Cadastro) -->

<section class="mt-4">
			<div class="titulo h5 mb-0"><h2>Formulário de cadastro</h2></div>
				<div class="base-form">
					<div class="caixa-form">
						<form action="<?php echo URL_BASE."venda/salvar" ?>" method="POST">				
							<div class="rows">
								<div class="col-12 d-flex text-justify-center">
									<span href="" class="msg msg-verde mx-3"><i class="fas fa-check"></i> Cadastro realizado com sucesso <a href="javascrip:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
									<span href="" class="msg msg-vermelho mx-3"><i class="fas fa-exclamation-triangle"></i> O campo é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
				
								</div>				
							</div>				
							<div class="rows msg-form">	
							  								
								<div class="col-9">
								<div class="rows">
									<div class="col-3">
										<label>Data da Venda</label>
										<input name="dtvenda" value="<?php echo isset($venda) ? $venda->dtvenda: "" ?>" type="date" placeholder="Insira a data da venda" class="form-campo">
									</div>
								<div class="col-6">
									<label>Código do Produto</label>
									<input name="idproduto" value="<?php echo isset($venda) ? $venda->idproduto: "" ?>" type="text" placeholder="Insira o código do produto" class="form-campo">
								</div>	
								
								<div class="col-6">
									<label>Código do Funcionário</label>
									<input name="idfuncionario" value="<?php echo isset($venda) ? $venda->idfuncionario: "" ?>" type="text" placeholder="Insira o código do funcionário" class="form-campo">
								</div>											
								
								<div class="col-6">
									<label>Quantidade</label>
									<input name="qtd" value="<?php echo isset($venda) ? $venda->qtd: "" ?>" type="text" placeholder="Insira a quantidade vendida" class="form-campo">	
								</div>										
																			
								<div class="col-4 m-auto">
									<input type="hidden" name="idvenda" value="<?php echo isset($venda) ? $venda->idvenda: null ?>" />
									<input type="submit" value="Cadastrar" class="btn btn-verde width-100">
								</div>
								
								<div class="col-4 m-auto">									
									<a href="<?php echo URL_BASE."venda" ?>" class="btn btn-azul width-100">Voltar</a> 
								</div>
								
								</div>
								</div>
								
						</form>
					</div>
				</div>
			</div>
</section>