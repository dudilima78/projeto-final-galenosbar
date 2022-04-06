<!-- View Create (formulário de Cadastro) -->

<section class="mt-4">
			<div class="titulo h5 mb-0"><h2>Formulário de cadastro</h2></div>
				<div class="base-form">
					<div class="caixa-form">
						<form action="<?php echo URL_BASE."produto/salvar" ?>" method="POST">				
							<div class="rows">
								<div class="col-12 d-flex text-justify-center">
									<span href="" class="msg msg-verde mx-3"><i class="fas fa-check"></i> Cadastro realizado com sucesso <a href="javascrip:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
									<span href="" class="msg msg-vermelho mx-3"><i class="fas fa-exclamation-triangle"></i> O campo é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
				
								</div>				
							</div>				
							<div class="rows msg-form">	
							  								
								<div class="col-9">
								<div class="rows">
									<div class="col-8">
										<label>Produto</label>
										<input name="produto" value="<?php echo isset($produto) ? $produto->produto: "" ?>" type="text" placeholder="Insira um produto" class="form-campo">
									</div>
								<div class="col-4">
									<label>Preço de Custo - R$</label>
									<input name="precocusto" value="<?php echo isset($produto) ? $produto->precocusto: "" ?>" type="text" placeholder="Insira o preço de custo" class="form-campo">
								</div>				
											
								<div class="col-4">
									<label>Preço de Venda - R$</label>
									<input name="precovenda" value="<?php echo isset($produto) ? $produto->precovenda: "" ?>" type="text" placeholder="Insira o preço de venda" class="form-campo">
								</div>									
														
								<div class="col-4 m-auto">
									<input type="hidden" name="idproduto" value="<?php echo isset($produto) ? $produto->idproduto: null ?>" />
									<input type="submit" value="Cadastrar" class="btn btn-verde width-100">
								</div>
								
								<div class="col-4 m-auto">									
									<a href="<?php echo URL_BASE."produto" ?>" class="btn btn-azul width-100">Voltar</a> 
								</div>
								
								</div>
								</div>
								
						</form>
					</div>
				</div>
			</div>
</section>