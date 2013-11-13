<!-- CASES -->
<section class="conteudoLinha">
	<header class="paginaHeader">
		<div class="container">
			<div class="containerGeral">
				<span class="paginaTitulo">Lojas</span>
				<p class="paginaDescricao">
					Navegue pelo mapa ou selecione sua região e encontre a Caderode mais próxima de você.
				</p>
				<a class="btLojista" href="javascript:;">
					<span class="btIcone botoesIconeLogista"><span></span></span>
					Seja um logista Caderode
				</a>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="containerGeral">
			<section class="conteudoPagina conteudoPaginaDescricao">
				<div class="conteudoGeral">

					<!-- FILTRO -->
					<div class="filtro clearfix">
						<form action="javascript:;" class="formFiltroLojas">
							<div class="blocoSelect">
								{if !$ipad and !$iphone and !$android}
									<div class="relative relativeEstado">
										<input value="" type="hidden" id="estado" name="estado" />
										<a class="btSelect" href="javascript:;">
											<span class="txtSelect">Selecione um estado</span>
											<span class="icone geralTransition"></span>
										</a>

										<div class="listaSelect">
											<ul id="selectUl" class="scroll">
												<li class="selectLi">
													<a class="selectLink" href="javascript:;">Acre</a>
												</li>
												<li class="selectLi">
													<a class="selectLink" href="javascript:;">Amazonas</a>
												</li>
												<li class="selectLi">
													<a class="selectLink" href="javascript:;">São Paulo</a>
												</li>
												<li class="selectLi">
													<a class="selectLink" href="javascript:;">Rio de Janeiro</a>
												</li>
												<li class="selectLi">
													<a class="selectLink" href="javascript:;">Roraima</a>
												</li>
												<li class="selectLi">
													<a class="selectLink" href="javascript:;">Rio Grande do Sul</a>
												</li>
												<li class="selectLi">
													<a class="selectLink" href="javascript:;">Pará</a>
												</li>
												<li class="selectLi">
													<a class="selectLink" href="javascript:;">Paraná</a>
												</li>
											</ul>
										</div>
									</div>
								{else}
									<div class="relative">
										<div class="boxSelect">
											<span class="setaSelectMobile"></span>
											<label for="estado" class="labelSelect">Selecione um estado</label>
											<select name="estado" id="estado" class="selectPrs">
												<option value="" selected="selected" disabled="disabled"></option>
												<option value="AC">Acre</option>
												<option value="AM">Amazonas</option>
												<option value="SP">São Paulo</option>
												<option value="RJ">Rio de Janeiro</option>
												<option value="RO">Roraima</option>
												<option value="RS">Rio Grande do Sul</option>
												<option value="PA">Pará</option>
												<option value="PR">Paraná</option>
											</select>
										</div>
									</div>
								{/if}
							</div>

							<div class="blocoSelect blocoSelectRight">
								{if !$ipad and !$iphone and !$android}
									<div class="relative relativeCidade">
										<input value="" type="hidden" id="cidade" name="cidade" />
										<a class="btSelect" href="javascript:;">
											<span class="txtSelect">Selecione uma cidade</span>
											<span class="icone geralTransition"></span>
										</a>

										<div class="listaSelect">
											<ul id="selectUl" class="scroll">
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
												<li class="selectLi">
													<a class="selectLink" href="javascript:;">Cidade 8</a>
												</li>
											</ul>
										</div>
									</div>
								{else}
									<div class="relative">
										<div class="boxSelect">
											<span class="setaSelectMobile"></span>
											<label for="estado" class="labelSelect">Selecione uma cidade</label>
											<select name="estado" id="estado" class="selectPrs">
												<option value="" selected="selected" disabled="disabled"></option>
												<option value="">Cidade 1</option>
												<option value="">Cidade 2</option>
												<option value="">Cidade 3</option>
												<option value="">Cidade 4</option>
												<option value="">Cidade 5</option>
												<option value="">Cidade 6</option>
												<option value="">Cidade 7</option>
												<option value="">Cidade 8</option>
											</select>
										</div>
									</div>
								{/if}
							</div>
						</form>
					</div>


					<!-- MAPA LOJAS -->
					<div class="blocoMapaLojas">
						<span class="introMapaLojas">
							Para acessar o perfil da loja, clique no botão “Mais informações” na janela de  detalhes
						</span>

						<div id="mapaLojas">
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>