<?php /* Smarty version Smarty-3.1.12, created on 2013-11-18 16:36:53
         compiled from "templates/fale-conosco.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1775997003528a5e453081b5-26803058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81d2ea940585d8e9b74eca1418c4ab58d11ac960' => 
    array (
      0 => 'templates/fale-conosco.tpl',
      1 => 1384434625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1775997003528a5e453081b5-26803058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ipad' => 0,
    'iphone' => 0,
    'android' => 0,
    'contato' => 0,
    'BASE_DIR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_528a5e45352082_41919893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528a5e45352082_41919893')) {function content_528a5e45352082_41919893($_smarty_tpl) {?><!-- NOVIDADES -->
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

									<?php if (!$_smarty_tpl->tpl_vars['ipad']->value&&!$_smarty_tpl->tpl_vars['iphone']->value&&!$_smarty_tpl->tpl_vars['android']->value){?>
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
									<?php }else{ ?>
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
									<?php }?>
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
									<a class="contatoLink contatoLinkFone" href="tel:<?php echo $_smarty_tpl->tpl_vars['contato']->value['FoneLink'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['contato']->value['DDD'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['contato']->value['Fone'];?>
</a>
								</li>
								<li class="contatoLi">
									<a class="contatoLink" href="mailto:<?php echo $_smarty_tpl->tpl_vars['contato']->value['Email'];?>
"><?php echo $_smarty_tpl->tpl_vars['contato']->value['Email'];?>
</a>
								</li>
								<li class="contatoLi">Rodovia RS 814 - KM 0.3</li>
								<li class="contatoLi">Caixa Postal 170 - CEP 95270-000</li>
							</ul>

							<ul class="botoesUl">
								<li class="botoesLi">
									<a class="botoesLink" href="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
lojas/">
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
										Seja um lojista Caderode
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
</section><?php }} ?>