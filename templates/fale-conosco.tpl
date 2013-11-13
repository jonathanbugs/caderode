<!-- NOVIDADES -->
<section class="conteudoLinha">
	<header class="paginaHeader">
		<div class="container">
			<div class="containerGeral">
				<span class="paginaTitulo">Fale Conosco</span>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="containerGeral">
			<section class="conteudoPagina">
				<div class="conteudoGeral">

					<div class="blocoConteudo blocoConteudoContato clearfix">
						<div class="formulario">
							<form action="javascript:;" id="formContato">
								<div class="blocoForm clearfix">
									<div class="relative relativeLeft">
										<label class="label" for="nome">Nome</label>
										<input class="input" type="text" name="nome" id="nome">
									</div>
									<div class="relative relativeRight">
										<label class="label" for="empresa">Empresa</label>
										<input class="input" type="text" name="empresa" id="empresa">
									</div>
								</div>

								<div class="blocoForm clearfix">
									<div class="relative relativeLeft">
										<label class="label" for="telefone">Telefone</label>
										<input class="input" type="text" name="telefone" id="telefone">
									</div>
									<div class="relative relativeRight">
										<label class="label" for="email">E-mail</label>
										<input class="input" type="text" name="email" id="email">
									</div>
								</div>

								<div class="blocoForm clearfix">
									<div class="relative relativeCidade">
										<label class="label" for="cidade">Cidade</label>
										<input class="input" type="text" name="cidade" id="cidade">
									</div>

									{if !$ipad and !$iphone and !$android}
										<div class="relative relativeEstado">
											<input value="" type="hidden" id="estado" name="estado" />
											<a class="btSelect" href="javascript:;">
												<span class="txtSelect">Estado</span>
												<span class="icone geralTransition"></span>
											</a>

											<div class="listaSelect">
												<ul id="selectUl" class="scroll">
													<li class="selectLi">
														<a class="selectLink" href="javascript:;">AC</a>
													</li>
													<li class="selectLi">
														<a class="selectLink" href="javascript:;">AM</a>
													</li>
													<li class="selectLi">
														<a class="selectLink" href="javascript:;">SP</a>
													</li>
													<li class="selectLi">
														<a class="selectLink" href="javascript:;">RJ</a>
													</li>
													<li class="selectLi">
														<a class="selectLink" href="javascript:;">R0</a>
													</li>
													<li class="selectLi">
														<a class="selectLink" href="javascript:;">RS</a>
													</li>
													<li class="selectLi">
														<a class="selectLink" href="javascript:;">PA</a>
													</li>
													<li class="selectLi">
														<a class="selectLink" href="javascript:;">PR</a>
													</li>
												</ul>
											</div>
										</div>
									{else}
										<div class="relative">
											<div class="boxSelect">
												<span class="setaSelectMobile"></span>
												<label for="estado" class="labelSelect">Selecione o estado</label>
												<select name="estado" id="estado" class="selectPrs">
													<option value="" selected="selected" disabled="disabled"></option>
													<option value="AC">AC</option>
													<option value="AM">AM</option>
													<option value="SP">SP</option>
													<option value="RJ">RJ</option>
													<option value="RO">RO</option>
													<option value="RS">RS</option>
													<option value="PA">PA</option>
													<option value="PR">PR</option>
												</select>
											</div>
										</div>
									{/if}
								</div>

								<div class="blocoForm clearfix">
									<div class="relativeTexarea">
										<label class="label" for="mensagem">Mensagem</label>
										<textarea class="textarea" name="mensagem" id="mensagem"></textarea>
									</div>
								</div>

								<div class="blocoForm clearfix">
									<div class="relativeLeft">
										<button type="submit" class="btEnviarContato">
											<span class="botoesIcone botoesIconeEnviar"><span></span></span>
											Enviar
										</button>
									</div>
									<div class="relativeRight">
										<div class="errorBox">
											* Preencha os campos corretamente
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="contatos">
							<ul class="contatoUl">
								<li class="contatoLi">
									<a class="contatoLink contatoLinkFone" href="tel:{$contato.FoneLink}"><span>{$contato.DDD}</span> {$contato.Fone}</a>
								</li>
								<li class="contatoLi">
									<a class="contatoLink" href="mailto:{$contato.Email}">{$contato.Email}</a>
								</li>
								<li class="contatoLi">Rodovia RS 814 - KM 0.3</li>
								<li class="contatoLi">Caixa Postal 170 - CEP 95270-000</li>
							</ul>

							<ul class="botoesUl">
								<li class="botoesLi">
									<a class="botoesLink" href="{$BASE_DIR}lojas/">
										<span class="botoesIcone"><span></span></span>
										Encontre a loja mais próxima
									</a>
								</li>
								<li class="botoesLi">
									<a class="botoesLink btModal" href="#modalTrabalhe">
										<span class="botoesIcone botoesIconeTrabalhe"><span></span></span>
										Trabalhe Conosco
									</a>
								</li>
								<li class="botoesLi">
									<a class="botoesLink btModal" href="#modalLojista">
										<span class="botoesIcone botoesIconeLogista"><span></span></span>
										Seja um logista Caderode
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<section id="mapa"></section>
</section>