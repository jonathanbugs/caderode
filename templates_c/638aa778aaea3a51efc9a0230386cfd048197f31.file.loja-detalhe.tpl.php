<?php /* Smarty version Smarty-3.1.12, created on 2013-11-14 15:26:38
         compiled from "templates/loja-detalhe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1947345195528507ce7e1fd4-78329355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '638aa778aaea3a51efc9a0230386cfd048197f31' => 
    array (
      0 => 'templates/loja-detalhe.tpl',
      1 => 1383825413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1947345195528507ce7e1fd4-78329355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IMG_DIR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_528507ce7f8c29_67403110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528507ce7f8c29_67403110')) {function content_528507ce7f8c29_67403110($_smarty_tpl) {?><!-- CASES -->
<section class="conteudoLinha">
	<header class="paginaHeader">
		<div class="container">
			<div class="containerGeral">
				<span class="paginaTitulo">Lojas</span>
				<span class="tituloLoja">Caderode campinas</span>
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

					<div class="conteudoLojaDetalhe">
						<div class="blocoLoja clearfix">

							<div class="blocoLojaLeft">
								<div class="lojaDescricao">
									<p>
										This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
									</p>
								</div>
							</div>

							<div class="blocoLojaRight lojaFotos">
								<div class="fotosLoja" data-cycle-fx='scrollHorz' data-cycle-swipe='true' data-cycle-timeout='0' data-cycle-pager=".pagerFotos">
									<img src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
loja/1.jpg" alt="">
									<img src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
loja/2.jpg" alt="">
									<img src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
loja/3.jpg" alt="">
									<img src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
loja/4.jpg" alt="">
									<img src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
loja/5.jpg" alt="">
								</div>
								<div class="pagerFotos"></div>
							</div>
						</div>

						<div class="blocoLoja clearfix">
							<div class="blocoLojaLeft mapaLoja">
								<div id="mapa"></div>
							</div>
							<div class="blocoLojaRight infosLoja">
								<div class="blocoInfosLoja">
									<span class="titulo">Entre em Contato</span>
									<ul class="infosUl">
										<li class="infosLi">
											<a class="infosLink infosLinkFone" href="tel:5435336461"><span>(54)</span> 3533 6461</a>
										</li>
										<li class="infosLi">
											<a class="infosLink infosLinkEmail" href="mailto:atendimento@caderodecaxias.com.br">
												atendimento@caderodecaxias.com.br
											</a>
										</li>
										<li class="infosLi infosLiEndereco">
											Av. Therezinha Pauletti Sanvitto, nº 52 Loja 04
											Bairro Villagio Iguatemi - Caxias do Sul - RS
											<a class="linkRota" href="javascript:;">Traçar Rota</a> 
										</li>
									</ul>
								</div>
								<div class="blocoInfosLoja">
									<span class="titulo">Atendimento</span>
									<ul class="infosUl infosUlHorarios">
										<li class="infosLi">De Segunda à Sexta</li>
										<li class="infosLi">8:30 às 12:00 / 13:30 às 18:30</li>
									</ul>
									<ul class="infosUl infosUlHorarios">
										<li class="infosLi">Sábados</li>
										<li class="infosLi">8:30 às 12:00</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="blocoLoja clearfix">
							<a class="btVoltar" href="javascript:;">
								<span class="btIcone"><span></span></span>
								Voltar para a listagem de lojas
							</a>
						</div>
					</div>

				
					<!-- MAPA LOJA -->
					<!--div class="blocoMapaLojas">
						<div id="mapaLojas">
						</div>
					</div-->
				</div>
			</section>
		</div>
	</div>
</section><?php }} ?>