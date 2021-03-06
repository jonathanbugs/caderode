<header id="header" class="{if $sessao eq 'inicial'}headerHome{/if}">
	<section class="logoMenu">
		<div class="container">
			<div class="containerGeral clearfix">
				<h1 class="logo ir">
					<a class="logoLink" href="{$BASE_DIR}">
						<img class="logoImg" src="{$IMG_DIR}logos/logo.png" data-src2x="{$IMG_DIR}logos/logo_2x.png" alt="{$title}"/>
					</a>
				</h1>

				<div class="menu">
					<a class="btMenu" href="javascript:;"><span class="icone">Menu</span></a>

					<div class="blocoMenu">
						<div class="blocoBuscar">
							<form class="buscaProdutos" action="javascript:;">
								<div class="relative">
									<a class="fecharBusca ir" href="javascript:;">Fechar</a>
									<label class="label" for="buscaProdutos">Buscar Produtos</label>
									<input class="input" type="text" id="buscaProdutos" name="buscaProdutos">
									<button class="btBuscarProdutos" type="submit">
										<span class="icone"></span>
									</button>
								</div>
							</form>
						</div>
						<a class="btFecharMenu ir" href="javascript:;">Fechar Menu</a>

						<nav class="navMenu">
							<ul class="menuUl clearfix">
								<li class="menuLi menuLiIconeHome geralTransition">
									<a class="menuLink menuLinkHome ir" href="{$BASE_DIR}"></a>
								</li>
								<li class="menuLi menuLiHome menuLiAtivo geralTransition">
									<a class="menuLink" href="{$BASE_DIR}">Home</a>
								</li>
								<li class="menuLi menuLiFavoritos geralTransition">
									<a class="menuLink" href="{$BASE_DIR}favoritos/">Favoritos</a>
								</li>
								<li class="menuLi geralTransition">
									<a class="menuLink menuLinkDrop" href="javascript:;">
										Mobiliários
										<span class="setaDrop"></span>
									</a>
								</li>
								<li class="menuLi geralTransition">
									<a class="menuLink menuLinkDrop" href="javascript:;">
										Cadeiras
										<span class="setaDrop"></span>
									</a>
								</li>
								<li class="menuLi geralTransition">
									<a class="menuLink" href="{$BASE_DIR}caderode/">A Caderode</a>
								</li>
								<li class="menuLi geralTransition">
									<a class="menuLink" href="{$BASE_DIR}cases/">Cases</a>
								</li>
								<li class="menuLi geralTransition">
									<a class="menuLink" href="{$BASE_DIR}novidades/">Novidades</a>
								</li>
								<li class="menuLi geralTransition">
									<a class="menuLink" href="{$BASE_DIR}lojas/">Lojas</a>
								</li>
								<li class="menuLi menuLiLast geralTransition">
									<a class="menuLink" href="{$BASE_DIR}fale-conosco/">Fale Conosco</a>
								</li>
							</ul>
						</nav>
						<ul class="linksUl clearfix">
							<li class="linksLi">
								<a class="linksLink ir" href="javascript:;">Favoritos</a>
							</li>
							<li class="linksLi">
								<a class="linksLink linksLinkBuscar btBuscar ir" href="javascript:;">Buscar</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="menuProdutos">
		<ul class="tabsMenuUl clearfix">
			<li class="tabsMenuLi tabsMenuLiFirst">
				<a class="tabsMenuLink tabsMenuLinkAtivo" href="javascript:;" data-tipo="todas">Todas as linhas</a>
			</li>
			<li class="tabsMenuLi">
				<a class="tabsMenuLink" href="javascript:;" data-tipo="diretoria">Diretoria</a>
			</li>
			<li class="tabsMenuLi">
				<a class="tabsMenuLink" href="javascript:;" data-tipo="operacional">Operacional</a>
			</li>
		</ul>

		<div class="container">
			<div class="containerGeral">
				<ul id="todas" class="listaProdutosUl clearfix">
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/1.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C10</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/2.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C20</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/3.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C30</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/4.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C40</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/5.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C50</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/6.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C60</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/7.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C70</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/8.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C80</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/9.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C90</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/1.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha D10</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/2.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha D20</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/3.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha D30</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/1.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C10</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/2.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C20</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/3.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C30</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/4.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C40</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/5.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C50</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/6.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C60</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/7.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C70</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/8.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C80</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/9.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C90</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/1.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha D10</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/2.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha D20</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/3.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha D30</span>
						</a>
					</li>
				</ul>

				<ul id="diretoria" class="listaProdutosUl clearfix">
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/1.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C10</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/2.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C20</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/3.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C30</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/4.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C40</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="{$IMG_DIR}menu/5.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C50</span>
						</a>
					</li>
				</ul>

				<ul id="operacional" class="listaProdutosUl clearfix">
					<li class="listaProdutosLi">
						<span class="semProdutos">
							Não foram encontrados produtos nesta categoria.
						</span>
					</li>
				</ul>
			</div>
		</div>

		<a class="btFecharMenuDrop" href="javascript:;"><span></span></a>
	</div>

	{if $sessao eq 'inicial'}
	<section class="banner">
		<div class="blocoBanner" style="background: #fdb913">
			<ul class="bannerUl">
				<li class="bannerLi">
					<img class="bannerImg" src="{$IMG_DIR}gerais/banner1.jpg" alt="" />
					<div class="container">
						<div class="conteudoBanner clearfix">
							<div class="banner" data-cycle-fx='fade' data-cycle-log="false" data-cycle-timeout='0' data-speed="1000" data-slides='.bannerConteudo' data-cycle-pager=".pageBanner">
								<div class="bannerConteudo">
									<div class="blocoTexto">
										<span class="titulo">
											<span>Linha C10</span>
											<span class="tituloLinha">CHROMA</span>
										</span>
										<p class="bannerDescricao">
											Estrutura de metal, <br/> 
											ergonomia e acabamento <br/>
											em couro. Tudo pensado <br/>
											para a sua imaginação <br/>
											buscar o infinito.
										</p>
										<a class="btConheca" href="javascript:;">Conheça a linha</a>
									</div>

									<div class="blocoImagem">
										<img src="{$IMG_DIR}banner/1.png" alt=""/>
									</div>
								</div>

								<div class="bannerConteudo">
									<div class="blocoTexto">
										<span class="titulo">
											<span>Linha C20</span>
											<span class="tituloLinha">CHROMA</span>
										</span>
										<p class="bannerDescricao">
											O design contemporâneo<br/>
											rendeu leveza e sofisticação<br/>
											à linha MCI Master. Sua <br/>
											superioridade agrega valor<br/>
											aos espaços, levando em conta<br/> 
											a relação custo-benefício.
										</p>
										<a class="btConheca" href="javascript:;">Conheça a linha</a>
									</div>

									<div class="blocoImagem">
										<img src="{$IMG_DIR}banner/2.png" alt=""/>
									</div>
								</div>

								<div class="bannerConteudo">
									<div class="blocoTexto">
										<span class="titulo">
											<span>Linha C10</span>
											<span class="tituloLinha">CHROMA</span>
										</span>
										<p class="bannerDescricao">
											Estrutura de metal, <br/> 
											ergonomia e acabamento <br/>
											em couro. Tudo pensado <br/>
											para a sua imaginação <br/>
											buscar o infinito.
										</p>
										<a class="btConheca" href="javascript:;">Conheça a linha</a>
									</div>

									<div class="blocoImagem">
										<img src="{$IMG_DIR}banner/1.png" alt=""/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	{/if}

	{if $sessao eq 'inicial'}
	<section class="categorias">
		<div class="container">
			<div class="pageBanner"></div>
		</div>
		<ul class="categoriasUl clearfix">
			<li class="categoriasLi categoriasLiMobiliario">
				<a class="categoriasLink geralTransition" href="javascript:;">
					<span class="categoriasBt clearfix">
						<span class="categoriasIcone">
							<span class="icone geralTransition"></span>
						</span>
						<span class="categoriasBtTexto">
							<span>Estou interressado em</span>
							<span class="btTituloLinha">Mobiliário</span>
						</span>
					</span>
				</a>
			</li>
			<li class="categoriasLi">
				<a class="categoriasLink geralTransition" href="javascript:;">
					<span class="categoriasBt clearfix">
						<span class="categoriasIcone categoriasIconeCadeiras">
							<span class="icone geralTransition"></span>
						</span>
						<span class="categoriasBtTexto">
							<span>Estou interressado em</span>
							<span class="btTituloLinha">Cadeiras</span>
						</span>
					</span>
				</a>
			</li>
		</ul>
	</section>
	{/if}
</header>
