<?php /* Smarty version Smarty-3.1.12, created on 2013-07-31 11:24:47
         compiled from "templates/imprensa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113032722251f91e2f5407c3-73765828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aca947ba4c211f68651d84c0d3b9716eca16142' => 
    array (
      0 => 'templates/imprensa.tpl',
      1 => 1375280487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113032722251f91e2f5407c3-73765828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'releases' => 1,
    'MIDIA_DIR' => 1,
    'r' => 1,
    'imagens' => 1,
    'i' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51f91e2f595257_57973401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f91e2f595257_57973401')) {function content_51f91e2f595257_57973401($_smarty_tpl) {?><section id="conteudo">
	<header class="headerSecao">
		<h2 class="ttSecao">Imprensa</h2>
		<p class="complementoTtSecao">Obtenha informações e imagens para divulgação na mídia.</p>

		<nav id="menuLocal">
			<ul class="geralTransition">
				<li class="liMenuLocalRelease liMenuLocalSelected">
					<a class="" href="javascript:;" rel="aba1">
						<span class="iconReleases">Releases</span>
					</a>
				</li>
				<li class="liMenuLocalBancoImagens">
					<a class="" href="javascript:;" rel="aba2">
						<span class="iconBancoImagens">Banco de Imagens</span>
					</a>
				</li>
			</ul>
		</nav>
	</header>

	<section class="sectionSecao">
		<div class="secaoReleases aba aba1">
			<h3 class="subTtSecao">Releases</h3>
			<!-- <a class="btBaixarTodos" href="javascript:;">
				<span>Baixar todos os releases</span>
			</a> -->

			<ul id="listaReleases">
				<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['releases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['r']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['r']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['r']->iteration++;
 $_smarty_tpl->tpl_vars['r']->last = $_smarty_tpl->tpl_vars['r']->iteration === $_smarty_tpl->tpl_vars['r']->total;
?>
				<li class="release <?php if ($_smarty_tpl->tpl_vars['r']->last){?>releases<?php }?>">
					<a href="<?php echo $_smarty_tpl->tpl_vars['MIDIA_DIR']->value;?>
imprensa/<?php echo $_smarty_tpl->tpl_vars['r']->value['Foto'];?>
" target="_blank">
						<span class="releaseIcone" >
							<span class="circulo circuloRelease geralTransition">
								<span class="icone"></span>
							</span>
						</span>
						<span class="releaseTxt">
							<span class="ttRelease geralTransition"><?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['r']->value['Titulo'], "UTF-8", "ISO-8859-1");?>
</span>
							<span class="leadRelease">
								<?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['r']->value['Descricao'], "UTF-8", "ISO-8859-1");?>

							</span>
						</span>
					</a>
				</li>
				<?php } ?>
			</ul>
		</div>

		<div class="secaoBancoImagens aba aba2">
			<h3 class="subTtSecao">Banco de imagens</h3>
			<!-- <a class="btBaixarTodos" href="javascript:;">
				<span>Baixar todas as imagens</span>
			</a> -->

			<ul id="listaBancoImagens" class="clearfix">
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
				<li class="imagem">
					<a href="<?php echo $_smarty_tpl->tpl_vars['MIDIA_DIR']->value;?>
imprensa/<?php echo $_smarty_tpl->tpl_vars['i']->value['Foto'];?>
" target="_blank">
						<span class="blocoImagem">
							<img src="<?php echo $_smarty_tpl->tpl_vars['MIDIA_DIR']->value;?>
imprensa/thumbs/<?php echo $_smarty_tpl->tpl_vars['i']->value['Foto'];?>
" alt="" />
						</span>

						<span class="maskHover">
							<span class="iconDownload ir">Baixar Imagem</span>
						</span>

						<span class="ttImagem"><?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['i']->value['Titulo'], "UTF-8", "ISO-8859-1");?>
</span>
					</a>
				</li>
				<?php } ?>

			</ul>
		</div>
	</section>
</section>
<?php }} ?>