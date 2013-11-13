<?php /* Smarty version Smarty-3.1.12, created on 2013-07-31 13:56:36
         compiled from "templates/modal-enviar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4527570451f941c42c3459-43534551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d9e553eaaca96a0928f46d281f6ce42c6a9c3b0' => 
    array (
      0 => 'templates/modal-enviar.tpl',
      1 => 1375215818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4527570451f941c42c3459-43534551',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51f941c42c6045_86561949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f941c42c6045_86561949')) {function content_51f941c42c6045_86561949($_smarty_tpl) {?><section id="enviarEmail">
	<header class="headerEmail">
		<span>Enviar para um amigo</span>
		<a class="btVoltar ir" href="javascript:history.back(1);">voltar</a>
	</header>
	<form id="formEmail" action="" method="">
		<ul class="formUl">
			<li class="formLi liFloat clearfix">
				<div class="relativeFloat relativeFloatNome relativeInput">
					<label for="nome" class="label">Seu nome</label>
					<input class="input" type="text" name="nome" id="nome" />
				</div>
				<div class="relativeFloat relativeFloatEmail relativeInput">
					<label for="email" class="label">Seu E-mail</label>
					<input class="input" type="email" name="email" id="email" />
				</div>
			</li>
			<li class="formLi liFloat clearfix">
				<div class="relativeFloat relativeFloatNome relativeInput">
					<label for="nomeAmigo" class="label">Nome do amigo</label>
					<input class="input" type="text" name="nomeAmigo" id="nomeAmigo" />
				</div>
				<div class="relativeFloat relativeFloatEmail relativeInput">
					<label for="emailAmigo" class="label">E-mail do amigo</label>
					<input class="input" type="email" name="emailAmigo" id="emailAmigo" />
				</div>
			</li>
			<li>
				<div class="relative relativeTextarea">
					<label for="textAreaMensagem" class="label" style="opacity: 1;">Mensagem</label>
					<textarea name="textAreaMensagem" id="textAreaMensagem" class="textarea"></textarea>
				</div>
			</li>
		</ul>
		<span class="ttCamposObrigatorios">* Todos os campos são obrigatórios.</span>

		<input type="submit" id="btEnviar" value="Enviar" />
	</form>
</section><?php }} ?>