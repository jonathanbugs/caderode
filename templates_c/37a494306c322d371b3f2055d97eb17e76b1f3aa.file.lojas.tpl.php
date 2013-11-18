<?php /* Smarty version Smarty-3.1.12, created on 2013-11-18 16:37:00
         compiled from "templates/lojas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106679615528a5e4c753616-69446522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37a494306c322d371b3f2055d97eb17e76b1f3aa' => 
    array (
      0 => 'templates/lojas.tpl',
      1 => 1383253040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106679615528a5e4c753616-69446522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ipad' => 0,
    'iphone' => 0,
    'android' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_528a5e4c78ff53_42477248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528a5e4c78ff53_42477248')) {function content_528a5e4c78ff53_42477248($_smarty_tpl) {?><!-- CASES -->
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
								<?php if (!$_smarty_tpl->tpl_vars['ipad']->value&&!$_smarty_tpl->tpl_vars['iphone']->value&&!$_smarty_tpl->tpl_vars['android']->value){?>
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
								<?php }else{ ?>
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
								<?php }?>
							</div>

							<div class="blocoSelect blocoSelectRight">
								<?php if (!$_smarty_tpl->tpl_vars['ipad']->value&&!$_smarty_tpl->tpl_vars['iphone']->value&&!$_smarty_tpl->tpl_vars['android']->value){?>
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
								<?php }else{ ?>
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
								<?php }?>
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
</section><?php }} ?>