<?php /* Smarty version Smarty-3.1.12, created on 2013-11-18 10:13:51
         compiled from "templates/_topo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:453648132528a047f4af705-83245708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b9331a1b79c2af12eb8cdecd4323cbd20e19b3b' => 
    array (
      0 => 'templates/_topo.tpl',
      1 => 1384255942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '453648132528a047f4af705-83245708',
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
  'unifunc' => 'content_528a047f5110e2_18076540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528a047f5110e2_18076540')) {function content_528a047f5110e2_18076540($_smarty_tpl) {?><header id="header" class="<?php if ($_smarty_tpl->tpl_vars['sessao']->value=='inicial'){?>headerHome<?php }?>">
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
									<a class="menuLink" href="javascript:;">Mobiliários</a>
								</li>
								<li class="menuLi geralTransition">
									<a class="menuLink" href="javascript:;">Cadeiras</a>
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

	<?php if ($_smarty_tpl->tpl_vars['sessao']->value=='inicial'){?>
	<section class="banner">
		<div class="blocoBanner" style="background: #fdb913">
			<ul class="bannerUl">
				<li class="bannerLi">
					<img class="bannerImg" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
gerais/banner1.jpg" alt="" />
					<div class="container">
						<div class="conteudoBanner clearfix">
							<div class="banner" data-cycle-fx='fade' data-cycle-timeout='0' data-speed="1000" data-slides='.bannerConteudo' data-cycle-pager=".pageBanner">
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