<?php /* Smarty version Smarty-3.1.12, created on 2013-07-31 13:55:08
         compiled from "templates/comparativo-resultado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178314310751f9416c145c17-16669845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f1d9a9702e0e60b3059c820f219dbbf2d948b96' => 
    array (
      0 => 'templates/comparativo-resultado.tpl',
      1 => 1375215818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178314310751f9416c145c17-16669845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IMG_DIR' => 0,
    'BASE_DIR' => 0,
    'iphone' => 0,
    'android' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51f9416c18be55_58203890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f9416c18be55_58203890')) {function content_51f9416c18be55_58203890($_smarty_tpl) {?><section id="conteudo">
	<header class="headerSecao">
		<h2 class="ttSecao">Comparativo de custos</h2>
		<p class="complementoTtSecao">Calcule o quanto você pode economizar em suas obras</p>
	</header>

	<section class="sectionPassos">
		<ul class="selecionadosUl clearfix">
			<li class="selecionadosLi">
				<div class="circulo circuloSelecionado">
					<span class="selecionadoIcone selecionadoIcone_tijolo"></span>
					<!--span class="selecionadoIcone selecionadoIcone_bloco"></span-->
				</div>
				<span class="selecionadoTxt">
					Utilizando tijolo com furo horizonal
				</span>
			</li>
			<li class="selecionadosLi">
				<div class="circulo circuloSelecionado">
					<span class="selecionadoIcone selecionadoIcone_cimento"></span>
					<!--span class="selecionadoIcone selecionadoIcone_argamassa"></span-->
				</div>
				<span class="selecionadoTxt">
					Comparando Massa Dundun com mistura de cimento, areia e cal
				</span>
			</li>
			<li class="selecionadosLi selecionadosLiLast">
				<div class="circulo circuloSelecionado">
					<span class="selecionadoIcone selecionadoIcone_construir"></span>
				</div>
				<span class="selecionadoTxt">
					Para construir uma área de 125m²
				</span>
			</li>
		</ul>
	</section>

	<section class="sectionSecao sectionSecaoComparativos">
		<section class="sectionEconomia">
			<h3 class="sectionTt">Você Economiza:</h3>

			<div class="sectionEconomiaContent clearfix">
				<ul class="economiaUl">
					<li class="economiaLi economiaLiValor">R$ 320,00</li>
					<li class="economiaLi economiaLiHoras">
						<span>6 horas</span>
						<span class="economiaLiTxt">de mão de obra</span>
					</li>
				</ul>
				<div class="economiaGrafico geralTransition">
					<!---
					360deg = 100%
					  X    = 45%;
					x = (360 * 45) / 100
					-->

					<div class="economiaGraficoTexto">
						<span class="economiaGraficoTxt economiaGraficoPorcentagem geralTransition">45%</span>
						<span class="economiaGraficoTxt economiaGraficoTxtValor geralTransition">do valor total da obra</span>
					</div>

					<div class="chart">
						<div class="hold gt50 chartBg">
							<div class="pie"></div>
							<div class="pie fill" style="-webkit-transform:rotate(180deg); -moz-transform:rotate(180deg); -0-transform:rotate(180deg); transform: rotate(180deg);"></div>
						</div>
						<div class="hold chartPercentual">
							<div class="pie" style="-webkit-transform:rotate(130deg); -moz-transform:rotate(130deg); -0-transform:rotate(130deg); transform: rotate(130deg);"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="sectionSecaoTxt">
			<div class="sectionSecaoBlocoTxt">
				<div class="circulo circuloTxt">
					<span class="icone"></span>
				</div>
				<div class="blocoTxt">
					<p>
						Os preços sugeridos referem-se à uma média de preços ao consumidor final no varejo, podendo variar consideravelmente conforme a região e o tipo de embalagens.
						No caso de construtoras, por favor, entre em contato com um de nossos representantes para receber um orçamento.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- TABELA DETALHADA DE CUSTOS -->
	<section class="sectionTabelaCustos">
		<h3 class="sectionTt">Veja a tabela detalhada de custos</h3>
		<table class="tableCustos">
			<tbody>
				<tr class="conteudoTr thead">
					<td class="conteudoTt"></td>
					<td>
						<table>
							<tr class="trConteudoBorda">
								<td class="tdConteudoBorda thTitulo">Argamassa comum</td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<td><img class="logoTabela" src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
logos/logo.jpg" alt="Massa Dundun"/></td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="trBgCinza">
					<td></td>
					<td class="tdTabela">
						<table>
							<tr class="trConteudoBorda">
								<td class="tdConteudoTitulos tdConteudoBorda">Qtde</td>
								<td class="tdConteudoTitulos">Valor Total</td>
							</tr>
						</table>
					</td>
					<td class="tdTabela">
						<table>
							<tr>
								<td class="tdConteudoTitulos tdConteudoBorda">Qtde</td>
								<td class="tdConteudoTitulos">Valor Total</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="conteudoTr">
					<td class="conteudoTt">Bloco adicional</td>
					<td>
						<table>
							<tr class="trConteudoBorda">
								<td class="tdConteudoBorda"> - </td>
								<td> - </td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<td class="tdConteudoBorda">250un</td>
								<td>R$ 200,00</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="conteudoTr conteudoTrBorda">
					<td class="conteudoTt">Argamassa</td>
					<td>
						<table>
							<tr class="trConteudoBorda">
								<td class="tdConteudoBorda"> 780kg </td>
								<td> R$ 187,00 </td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<td class="tdConteudoBorda"> - </td>
								<td> - </td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="conteudoTr conteudoTrBorda">
					<td class="conteudoTt">Massa Dundun</td>
					<td>
						<table>
							<tr class="trConteudoBorda">
								<td class="tdConteudoBorda"> - </td>
								<td> - </td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<td class="tdConteudoBorda"> 37,2kg </td>
								<td> R$ 186,00 </td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="conteudoTr conteudoTrBorda">
					<td class="conteudoTt">Cal</td>
					<td>
						<table>
							<tr class="trConteudoBorda">
								<td class="tdConteudoBorda"> 2kg </td>
								<td> R$ 4,00 </td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<td class="tdConteudoBorda"> - </td>
								<td> - </td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="conteudoTr conteudoTrBorda">
					<td class="conteudoTt">Areia</td>
					<td>
						<table>
							<tr class="trConteudoBorda">
								<td class="tdConteudoBorda"> 4kg </td>
								<td> R$ 22,00 </td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<td class="tdConteudoBorda"> - </td>
								<td> - </td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="conteudoTr conteudoTrBorda">
					<td class="conteudoTt">Perdas e desperdícios</td>
					<td>
						<table>
							<tr class="trConteudoBorda">
								<td class="tdConteudoBorda"> 156% </td>
								<td> R$ 37,46 </td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<td class="tdConteudoBorda"> - </td>
								<td> - </td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="conteudoTr conteudoTrBorda">
					<td class="conteudoTt">Pedreiro</td>
					<td>
						<table>
							<tr class="trConteudoBorda">
								<td class="tdConteudoBorda"> 9,9h </td>
								<td> R$ 212,94 </td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<td class="tdConteudoBorda"> 4,6h </td>
								<td> R$ 99,16 </td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="conteudoTr conteudoTrBorda">
					<td class="conteudoTt">Auxiliar 1</td>
					<td>
						<table>
							<tr class="trConteudoBorda">
								<td class="tdConteudoBorda"> 9,9h </td>
								<td> R$ 121,68 </td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<td class="tdConteudoBorda"> 4,6h </td>
								<td> R$ 56,68 </td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="conteudoTr conteudoTrBorda">
					<td class="conteudoTt">Auxiliar 2</td>
					<td>
						<table>
							<tr class="trConteudoBorda">
								<td class="tdConteudoBorda"> 9,9h </td>
								<td> R$ 121,68</td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<td class="tdConteudoBorda"> - </td>
								<td> - </td>
							</tr>
						</table>
					</td>
				</tr>
			</tbody>

			<tfoot>
				<tr class="trFooter">
					<td class="trFooterTitulo">Custo Total</td>
					<td class="trFooterBordaTd">R$ 681,00</td>
					<td>R$ 376,00</td>
				</tr>
				<tr class="trFooter trFooterBorda">
					<td class="trFooterTitulo">Tempo Total</td>
					<td class="trFooterBordaTd">9 horas</td>
					<td>4,6 horas</td>
				</tr>
				<tr class="trFooter">
					<td class="trFooterTitulo">Custo Total m²</td>
					<td class="trFooterBordaTd">R$ 27,24</td>
					<td>R$ 15,04</td>
				</tr>
			</tfoot>
		</table>
	</section>

	<section class="sectionSecao sectionInsumos">
		<h2 class="sectionInsumosTt">Veja a tabela detalhada de custos</h2>
		<p class="sectionInsumosComplemento">Abaixo os valores dos insumos utilizados no cálculo.</p>
		<section class="contentInsumos clearfix">
			<div class="tabelaValores">
				<table class="valores geralTransition">
					<tr>
						<td class="tdNome">Cimento</td>
						<td><img src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
icons/bolinha.png" alt=""/></td>
						<td>R$</td>
						<td class="tdValor">0,40</td>
						<td>Kg</td>
					</tr>
					<tr>
						<td class="tdNome">Cal</td>
						<td><img src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
icons/bolinha.png" alt=""/></td>
						<td>R$</td>
						<td class="tdValor">0,30</td>
						<td>Kg</td>
					</tr>
					<tr>
						<td class="tdNome">Areia</td>
						<td><img src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
icons/bolinha.png" alt=""/></td>
						<td>R$</td>
						<td class="tdValor">60,00</td>
						<td>Kg</td>
					</tr>
					<tr>
						<td class="tdNome">Tijolo / Bloco</td>
						<td><img src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
icons/bolinha.png" alt=""/></td>
						<td>R$</td>
						<td class="tdValor">0,35</td>
						<td>Kg</td>
					</tr>
					<tr>
						<td class="tdNome">Massa Dundun</td>
						<td><img src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
icons/bolinha.png" alt=""/></td>
						<td>R$</td>
						<td class="tdValor">6,00</td>
						<td>Kg</td>
					</tr>
					<tr>
						<td class="tdNome">Salário Pedreiro</td>
						<td><img src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
icons/bolinha.png" alt=""/></td>
						<td>R$</td>
						<td class="tdValor">1,400,00</td>
						<td>Kg</td>
					</tr>
					<tr>
						<td class="tdNome">Salário Auxiliar</td>
						<td><img src="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
icons/bolinha.png" alt=""/></td>
						<td>R$</td>
						<td class="tdValor">800,00</td>
						<td>Kg</td>
					</tr>
				</table>
			</div>
			<div class="novoCalculo geralTransition">
				<a class="novoCalculoBt" href="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
comparativo-de-custos/">
					<span class="circulo circuloNovoCalculoBt geralTransition">
						<span class="icone"></span>
					</span>
					<span class="novoCalculoTxt">Fazer novo cálculo</span>
				</a>
			</div>
		</section>
	</section>
	<nav id="botoesNav" class="geralTransition">
			<ul class="botoesUl clearfix">
				<li class="botoesLi geralTransition">
					<a class="botoesLink geralTransition" href="javascript:;">
						<span class="table botoestable">
							<span class="tableCell">
								<span class="botoesCenter table">
									<span class="tableCell botoesTableCell">
										<span class="circulo botoesCirculo geralTransition">
											<span class="iconeBotao iconeBotaoCompartilhar"></span>
										</span>
										<span class="botoesTxt botoesTxt1">
											<span class="txt">Compartilhar</span>
										</span>
									</span>
								</span>
							</span>
						</span>
					</a>
				</li>
				<li class="botoesLi geralTransition">
					<a class="botoesLink geralTransition linkModalEnviar" href="<?php if (!$_smarty_tpl->tpl_vars['iphone']->value&&!$_smarty_tpl->tpl_vars['android']->value){?>#enviarEmail<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
modal-enviar/<?php }?>">
						<span class="table botoestable">
							<span class="tableCell">
								<span class="botoesCenter table">
									<span class="tableCell botoesTableCell">
										<span class="circulo botoesCirculo geralTransition">
											<span class="iconeBotao iconeBotaoEnviar"></span>
										</span>
										<span class="botoesTxt botoesTxt2">
											<span class="txt">Enviar por e-mail</span>
										</span>
									</span>
								</span>
							</span>
						</span>
					</a>

					<section id="enviarEmail">
						<header class="headerEmail">
							<span>Enviar para um amigo</span>
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
					</section>
				</li>
				<li class="botoesLi geralTransition botoesLiLast">
					<a class="botoesLink geralTransition" href="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
fale-conosco/">
						<span class="table botoestable">
							<span class="tableCell">
								<span class="botoesCenter table">
									<span class="tableCell botoesTableCell">
										<span class="circulo botoesCirculo geralTransition">
											<span class="iconeBotao iconeBotaoImprimir"></span>
										</span>
										<span class="botoesTxt botoesTxt3">
											<span class="txt">Imprimir</span>
										</span>
									</span>
								</span>
							</span>
						</span>
					</a>
				</li>
			</ul>
		</nav>
</section>
<?php }} ?>