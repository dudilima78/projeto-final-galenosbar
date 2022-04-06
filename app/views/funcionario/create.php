<!-- View Create (formulário de Cadastro) -->

<section class="mt-4">
			<div class="titulo h5 mb-0"><h2>Formulário de cadastro</h2></div>
				<div class="base-form">
					<div class="caixa-form">
						<form action="<?php echo URL_BASE."funcionario/salvar" ?>" method="POST">				
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
										<label>Funcionário</label>
										<input name="nome" value="<?php echo isset($funcionario) ? $funcionario->nome: "" ?>" type="text" placeholder="Insira um nome" class="form-campo">
									</div>
								<div class="col-4">
									<label>CPF</label>
									<input name="cpf" value="<?php echo isset($funcionario) ? $funcionario->cpf: "" ?>" type="text" placeholder="Insira o CPF" class="form-campo">
								</div>				
											
								<div class="col-3">
									<label>Telefone</label>
									<input name="telefone" value="<?php echo isset($funcionario) ? $funcionario->telefone: "" ?>" type="text" placeholder="Insira o telefone" class="form-campo">
								</div>
									
								<div class="col-6">
									<label>Admissão</label>
									<input name="dtadmissao" value="<?php echo isset($funcionario) ? $funcionario->dtadmissao: "" ?>" type="date" placeholder="Insira data de admissão" class="form-campo">	
								</div>									
													
								<div class="col-4 m-auto">
									<input type="hidden" name="idfuncionario" value="<?php echo isset($funcionario) ? $funcionario->idfuncionario: null ?>" />
									<input type="submit" value="Cadastrar" class="btn btn-verde width-100">									
								</div>

								<div class="col-4 m-auto">									
									<a href="<?php echo URL_BASE."funcionario" ?>" class="btn btn-azul width-100">Voltar</a> 
								</div>
								
								</div>
								</div>
								
						</form>
					</div>
				</div>
			</div>
</section>