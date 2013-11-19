<?php /* Smarty version Smarty-3.1.12, created on 2013-11-19 15:42:23
         compiled from "templates/_topo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:785632246528ba2ffa4eb37-99234540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b9331a1b79c2af12eb8cdecd4323cbd20e19b3b' => 
    array (
      0 => 'templates/_topo.tpl',
      1 => 1384797684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '785632246528ba2ffa4eb37-99234540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sessao' => 1,
    'BASE_DIR' => 0,
    'IMG_DIR' => 1,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_528ba2ffb1da46_80100892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528ba2ffb1da46_80100892')) {function content_528ba2ffb1da46_80100892($_smarty_tpl) {?><header id="header" class="<?php if ($_smarty_tpl->tpl_vars['sessao']->value=='inicial'){?>headerHome<?php }?>">
	<section class="logoMenu">
		<div class="container">
			<div class="containerGeral clearfix">
				<h1 class="logo ir">
					<a class="logoLink" href="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
">
						<img class="logoImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
logos/logo.png" data-src2x="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
logos/logo_2x.png" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"/>
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
									<a class="menuLink menuLinkHome ir" href="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
"></a>
								</li>
								<li class="menuLi menuLiHome menuLiAtivo geralTransition">
									<a class="menuLink" href="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
">Home</a>
								</li>
								<li class="menuLi menuLiFavoritos geralTransition">
									<a class="menuLink" href="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
favoritos/">Favoritos</a>
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
									<a class="menuLink" href="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
caderode/">A Caderode</a>
								</li>
								<li class="menuLi geralTransition">
									<a class="menuLink" href="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
cases/">Cases</a>
								</li>
								<li class="menuLi geralTransition">
									<a class="menuLink" href="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
novidades/">Novidades</a>
								</li>
								<li class="menuLi geralTransition">
									<a class="menuLink" href="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
lojas/">Lojas</a>
								</li>
								<li class="menuLi menuLiLast geralTransition">
									<a class="menuLink" href="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
fale-conosco/">Fale Conosco</a>
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
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/1.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C10</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/2.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C20</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/3.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C30</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/4.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C40</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/5.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C50</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/6.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C60</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/7.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C70</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/8.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C80</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/9.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C90</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/1.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha D10</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/2.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha D20</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/3.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha D30</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/1.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C10</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/2.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C20</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/3.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C30</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/4.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C40</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/5.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C50</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/6.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C60</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/7.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C70</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/8.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C80</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/9.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C90</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/1.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha D10</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/2.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha D20</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/3.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha D30</span>
						</a>
					</li>
				</ul>

				<ul id="diretoria" class="listaProdutosUl clearfix">
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/1.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C10</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/2.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C20</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/3.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C30</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/4.jpg" alt=""/>
							</span>
							<span class="listaProdutosTitulo">Linha C40</span>
						</a>
					</li>
					<li class="listaProdutosLi">
						<a href="javascript:;" class="listaProdutosLink">
							<span class="listaProdutosImagem">
								<img class="listaProdutosImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
menu/5.jpg" alt=""/>
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

	<?php if ($_smarty_tpl->tpl_vars['sessao']->value=='inicial'){?>
	<section class="banner">
		<div class="blocoBanner" style="background: #fdb913">
			<ul class="bannerUl">
				<li class="bannerLi">
					<img class="bannerImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
gerais/banner1.jpg" alt="" />
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
										<img src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
banner/1.png" alt=""/>
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
										<img src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
banner/2.png" alt=""/>
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
										<img src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
banner/1.png" alt=""/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['sessao']->value=='inicial'){?>
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
	<?php }?>
</header>
<?php }} ?>