<footer id="footer">
	<div class="container containerRodape">
		<div class="containerGeral containerGeralRodape clearfix">
			<div class="blocoRodape">
				<span class="titulo">Lojas</span>
				<div class="conteudoBloco">
					<p class="conteudoBlocoDescricao">Encontre a loja mais próxima de você</p>

					<form action="javascript:;" id="formBuscaLoja" class="formBuscaLoja">
						<div class="blocoForm clearfix">
							{if !$ipad and !$iphone and !$android}
								<div class="relative relativeEstado">
									<input value="" type="hidden" id="estado" name="estado" />
									<a class="btSelect" href="javascript:;">
										<span class="txtSelect">UF</span>
										<span class="icone geralTransition"></span>
									</a>

									<div class="listaSelectRodape">
										<ul class="selectUl scroll">
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
										<label for="estado" class="labelSelect">UF</label>
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


							{if !$ipad and !$iphone and !$android}
								<div class="relative relativeCidade">
									<input value="" type="hidden" id="cidade" name="cidade" />
									<a class="btSelect" href="javascript:;">
										<span class="txtSelect">Cidade</span>
										<span class="icone geralTransition"></span>
									</a>

									<div class="listaSelectRodape">
										<ul class="selectUl scroll">
											<li class="selectLi">
												<a class="selectLink" href="javascript:;">Cidade 1</a>
											</li>
											<li class="selectLi">
												<a class="selectLink" href="javascript:;">Cidade 2</a>
											</li>
											<li class="selectLi">
												<a class="selectLink" href="javascript:;">Cidade 3</a>
											</li>
											<li class="selectLi">
												<a class="selectLink" href="javascript:;">Cidade 4</a>
											</li>
											<li class="selectLi">
												<a class="selectLink" href="javascript:;">Cidade 5</a>
											</li>
											<li class="selectLi">
												<a class="selectLink" href="javascript:;">Cidade 6</a>
											</li>
											<li class="selectLi">
												<a class="selectLink" href="javascript:;">Cidade 7</a>
											</li>
										</ul>
									</div>
								</div>

							{else}
								<div class="relative">
									<div class="boxSelect">
										<span class="setaSelectMobile"></span>
										<label for="cidade" class="labelSelect">Cidade</label>
										<select name="cidade" id="cidade" class="selectPrs">
											<option value="" selected="selected" disabled="disabled"></option>
											<option value="">Cidade 1</option>
											<option value="">Cidade 2</option>
											<option value="">Cidade 3</option>
											<option value="">Cidade 4</option>
											<option value="">Cidade 5</option>
											<option value="">Cidade 6</option>
											<option value="">Cidade 7</option>
										</select>
									</div>
								</div>
							{/if}
						</div>
					</form>
					
					<a class="bt btAzul btAzulRodape" href="javascript:;">
						<span class="icone"></span>
						Encontrar Loja
					</a>
					<a class="bt btAzul btAzulRodape btModal" href="#modalLojista">
						<span class="icone"></span>
						Seja um Lojista Caderode
					</a>
				</div>
			</div>

			<div class="blocoRodape">
				<span class="titulo tituloNews">News</span>
				<div class="conteudoBloco">
					<p class="conteudoBlocoDescricao">Se cadastre em nossa newsletter</p>

					<form action="javascript:;" class="formNews">
						<div class="relative">
							<label class="label" for="nomeNews">Seu nome</label>
							<input class="input" type="text" id="nomeNews" name="nomeNews" />
						</div>

						<div class="relative">
							<label class="label" for="emailNews">Seu e-mail</label>
							<input class="input" type="text" id="emailNews" name="emailNews" />
						</div>

						<button class="bt btAzul btAzulRodape" type="submit">
							<span class="icone"></span>
							Cadastrar
						</button>
					</form>
				</div>
			</div>

			<div class="blocoRodape blocoRodapeInfos">
				<div class="conteudoBloco conteudoBlocoContatos">
					<a class="logoRodape ir" href="{$BASE_DIR}">{$title}</a>

					<ul class="contatosUl">
						<li class="contatosLi">
							<a href="tel:{$contato.FoneLink}">{$contato.DDD} {$contato.Fone}</a>
						</li>
						<li class="contatosLi contatosLiEmail">
							<a href="mailto:{$contato.Email}">{$contato.Email}</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<a class="spr ir" href="http://www.spr.com.br" target="_blank">SPR</a>
</footer>

<div id="modalLojista" class="modal">
	<header class="headerModal">
		<span class="titulo">Seja um lojista Caderode</span>
	</header>
	<div class="conteudoModal">
		<div class="formularioModal">
			<form action="javascript:;" class="formModal" id="formLojista">
				<div class="blocoFormModal clearfix">
					<div class="relativeModal">
						<label class="label" for="nomeLojista">Nome</label>
						<input class="input" type="text" name="nomeLojista" id="nomeLojista">
					</div>
				</div>

				<div class="blocoFormModal clearfix">
					<div class="relativeModal relativeModalLeft">
						<label class="label" for="telefoneLojista">Telefone</label>
						<input class="input" type="text" name="telefoneLojista" id="telefoneLojista">
					</div>
					<div class="relativeModal relativeModalRight">
						<label class="label" for="emailLojista">E-mail</label>
						<input class="input" type="text" name="emailLojista" id="emailLojista">
					</div>
				</div>

				<div class="blocoFormModal clearfix">
					<div class="relativeModal relativeModalCidade">
						<label class="label" for="cidadeLojista">Cidade</label>
						<input class="input" type="text" name="cidadeLojista" id="cidadeLojista">
					</div>

					{if !$ipad and !$iphone and !$android}
						<div class="relativeModal relativeModalEstado">
							<input value="" type="hidden" id="estadoLojista" name="estadoLojista" />
							<a class="btSelectModal" href="javascript:;">
								<span class="txtSelectModal">Estado</span>
								<span class="icone geralTransition"></span>
							</a>

							<div class="listaSelectModal">
								<ul class="selectModalUl scroll">
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
						<div class="relativeModal">
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

				<div class="blocoFormModal clearfix">
					<div class="relativeModalTexarea">
						<label class="label" for="mensagemLojista">Mensagem</label>
						<textarea class="textarea" name="mensagemLojista" id="mensagemLojista"></textarea>
					</div>
				</div>

				<div class="blocoFormModal clearfix">
					<div class="relativeModalLeft">
						<button type="submit" class="btEnviarContato">
							<span class="botoesIcone botoesIconeEnviar"><span></span></span>
							Enviar
						</button>
					</div>
					<div class="relativeModalRight">
						<div class="errorBox">
							* Preencha os campos corretamente
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div id="modalTrabalhe" class="modal">
	<header class="headerModal">
		<span class="titulo">Trabalhe Conosco</span>
	</header>
	<div class="conteudoModal">
		<div class="formularioModal">
			<form action="javascript:;" class="formModal" id="formTrabalhe">
				<div class="blocoFormModal clearfix">
					<div class="relativeModal">
						<label class="label" for="nomeTrabalhe">Nome</label>
						<input class="input" type="text" name="nomeTrabalhe" id="nomeTrabalhe">
					</div>
				</div>

				<div class="blocoFormModal clearfix">
					<div class="relativeModal relativeModalLeft">
						<label class="label" for="telefoneTrabalhe">Telefone</label>
						<input class="input" type="text" name="telefoneTrabalhe" id="telefoneTrabalhe">
					</div>
					<div class="relativeModal relativeModalRight">
						<label class="label" for="emailTrabalhe">E-mail</label>
						<input class="input" type="text" name="emailTrabalhe" id="emailTrabalhe">
					</div>
				</div>

				<div class="blocoFormModal clearfix">
					<div class="relativeModal relativeModalLeft">
						<label class="label" for="cargoTrabalhe">Cargo Pretendido</label>
						<input class="input" type="text" name="cargoTrabalhe" id="cargoTrabalhe">
					</div>
				
					<div class="relativeModal relativeModalRight relativeInputFile">
						<div class="inputFile">
							<label class="label">Anexar Currículo</label>
							<input type="file" name="curriculo" id="curriculo" class="filePrs">
							<span class="btSelecionar ir">selecionar</span>
						</div>
					</div>
				</div>

				<div class="blocoFormModal clearfix">
					<div class="relativeModalTexarea">
						<label class="label" for="mensagemTrabalhe">Mensagem</label>
						<textarea class="textarea" name="mensagemTrabalhe" id="mensagemTrabalhe"></textarea>
					</div>
				</div>

				<div class="blocoFormModal clearfix">
					<div class="relativeModalLeft">
						<button type="submit" class="btEnviarContato">
							<span class="botoesIcone botoesIconeEnviar"><span></span></span>
							Enviar
						</button>
					</div>
					<div class="relativeModalRight">
						<div class="errorBox">
							* Preencha os campos corretamente
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


