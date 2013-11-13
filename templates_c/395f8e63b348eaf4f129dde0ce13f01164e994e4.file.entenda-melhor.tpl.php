<?php /* Smarty version Smarty-3.1.12, created on 2013-08-21 18:41:22
         compiled from "templates/entenda-melhor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84857210852153402593fc7-42782653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '395f8e63b348eaf4f129dde0ce13f01164e994e4' => 
    array (
      0 => 'templates/entenda-melhor.tpl',
      1 => 1375280487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84857210852153402593fc7-42782653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'entenda' => 1,
    'e' => 1,
    'MIDIA_DIR' => 1,
    'BASE_DIR' => 0,
    'videos' => 1,
    'v' => 1,
    'jornais' => 1,
    'j' => 1,
    'link' => 1,
    'feiras' => 1,
    'f' => 1,
    'foto' => 1,
    'faq' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_521534027760b0_42569280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521534027760b0_42569280')) {function content_521534027760b0_42569280($_smarty_tpl) {?><section id="conteudo">
	<header class="headerSecao">
		<h2 class="ttSecao">Entenda Melhor</h2>
		<p class="complementoTtSecao">Compreenda detalhes técnicos e tire dúvidas sobre a Massa Dundun.</p>

		<nav id="menuLocal">
			<ul>
				<li class="liMenuLocalSobre liMenuLocalSelected">
					<a href="javascript:;" rel="aba1">
						<span class="iconSobre">Sobre a massa Dundun</span>
					</a>
				</li>
				<li class="liMenuLocalInstrucoes">
					<a href="javascript:;" rel="aba2">
						<span class="iconInstrucoes">Instruções de uso</span>
					</a>
				</li>
				<li class="liMenuLocalDuvidas">
					<a href="javascript:;" rel="aba3">
						<span class="iconDuvidas">Dúvidas frequentes</span>
					</a>
				</li>
			</ul>
		</nav>
	</header>

	<section class="sectionSecao">
		<div class="secaoSobre aba aba1">
			<h3 class="subTtSecao">Sobre a massa Dundun</h3>

			<div class="blocoInfo blocoTecnologia">
				<div class="conteudoBloco">
					<h4 class="ttBloco">Alta Tecnologia</h4>
					<p>
						A massa Dundun é uma argamassa polimérica de alta tecnologia criada para revolucionar a maneira de construir paredes. A nanotecnologia aplicada em seu desenvolvimento garante resistência, durabilidade e excelente desempenho mecânico, com uma capacidade de acomodar tensões sem paralelos no mercado.
					</p>

					<div id="galeriaTecnologia" class="galeriaVideoImagens">
						<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entenda']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['e']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['e']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
 $_smarty_tpl->tpl_vars['e']->iteration++;
 $_smarty_tpl->tpl_vars['e']->last = $_smarty_tpl->tpl_vars['e']->iteration === $_smarty_tpl->tpl_vars['e']->total;
?>
						<div class="geralTransition galeriaVideo <?php if ($_smarty_tpl->tpl_vars['e']->last){?>galeriaLast<?php }?>">
							<a class="linkModal fancybox.iframe" rel="galeria" href="http://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['e']->value['Link'];?>
" title="<?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['e']->value['Titulo'], "UTF-8", "ISO-8859-1");?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['MIDIA_DIR']->value;?>
entenda_melhor/thumbs/<?php echo $_smarty_tpl->tpl_vars['e']->value['Foto'];?>
" alt="" />
								<span class="galeriaTitulo">
									<span><?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['e']->value['Titulo'], "UTF-8", "ISO-8859-1");?>
</span>
								</span>
							</a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="blocoInfo blocoPremiacao">
				<h4 class="ttBloco">Inovadora e sustentável</h4>

				<div class="conteudoBloco clearfix">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
/img/gerais/premio_cbic_inovacao.png" alt="">
					<p>
						A Massa Dundun venceu em 2012 o Prêmio CBIC de Inovação e Sustentabilidade, na categoria novos materiais, promovido pela Câmara Brasileira da Indústria da Construção.
					</p>
				</div>

			</div>
			<div class="blocoInfo blocoFcc">
				<h4 class="ttBloco">Um produto do Grupo FCC</h4>

				<div class="conteudoBloco clearfix">
					<div class="galeriaGrupoFcc">
						<ul class="galeriaCycle" data-cycle-prev=".prevGaleriaFCC" data-cycle-next=".nextGaleriaFCC" data-cycle-slides="li">
							<li>
								<a href="javascript:;">
									<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
/img/gerais/img_grupofcc.png" alt="">
								</a>
								<div class="blocoLegenda">
									<span class="legenda">Unidade FCC Uruguai</span>
								</div>
							</li>
							<li>
								<a href="javascript:;">
									<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
/img/gerais/img_grupofcc2.png" alt="">
								</a>

								<div class="blocoLegenda">
									<span class="legenda">Unidade FCC Campo Bom</span>
								</div>
							</li>
							<li>
								<a href="javascript:;">
									<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
/img/gerais/img_grupofcc.png" alt="">
								</a>
								<div class="blocoLegenda">
									<span class="legenda">Unidade FCC Uruguai</span>
								</div>
							</li>
							<li>
								<a href="javascript:;">
									<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
/img/gerais/img_grupofcc2.png" alt="">
								</a>
								<div class="blocoLegenda">
									<span class="legenda">Unidade FCC Campo Bom</span>
								</div>
							</li>
						</ul>

						<a class="ir prevGaleriaFCC btGaleria" href="javascript:;">Anterior</a>
						<a class="ir nextGaleriaFCC btGaleria" href="javascript:;">Próxima</a>
					</div>

					<p>
						Há mais de 40 anos, o Grupo FCC é destaque por sua qualidade em termoplásticos, adesivos e vedantes. Com 7 unidades ao redor do mundo e milhares de produtos, a FCC é o maior e mais diversificado fabricante de elastômeros termoplásticos da América Latina e um dos líderes globais em tecnologia de adesivos à base d'água.
					</p>
				</div>
			</div>

			<div class="blocoInfo blocoNaMidia">
				<h4 class="ttBloco">Massa Dundun na mídia</h4>
				<div class="blocoConteudo">
					<nav id="menuAbasMidia">
						<ul>
							<li class="liMenuSelected">
								<a href="javascript:;" rel="abaVideos">
									<span class="iconVideos">Vídeos</span>
								</a>
							</li>
							<li>
								<a href="javascript:;" rel="abaJornais">
									<span class="iconJornais">Jornais e revistas</span>
								</a>
							</li>
							<li class="last">
								<a href="javascript:;" rel="abaFeiras">
									<span class="iconFeiras">Feiras</span>
								</a>
							</li>
						</ul>
					</nav>

					<div class="abaMidia abaVideos">
						<div id="galeriaVideos" class="galeriaVideoImagens">
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<div class="galeriaVideo geralTransition">
								<a class="linkModal fancybox.iframe" rel="galeria" href="http://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['v']->value['Link'];?>
" title="<?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['v']->value['Titulo'], "UTF-8", "ISO-8859-1");?>
">
									<img src="//i1.ytimg.com/vi/<?php echo $_smarty_tpl->tpl_vars['v']->value['Link'];?>
/hqdefault.jpg" alt="" />
									<span class="galeriaTitulo">
										<span><?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['v']->value['Titulo'], "UTF-8", "ISO-8859-1");?>
</span>
									</span>
								</a>
							</div>
							<?php } ?>
						</div>
					</div>
					<div class="abaMidia abaJornais">
						<div id="galeriaJornais" class="galeriaVideoImagens">
							<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jornais']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
							<div class="galeriaFoto geralTransition">
								<?php if ($_smarty_tpl->tpl_vars['j']->value['Pdf']!=''){?>
									<?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable((($_smarty_tpl->tpl_vars['MIDIA_DIR']->value).('midia_jornais/')).($_smarty_tpl->tpl_vars['j']->value['Pdf']), true, 0);?>
								<?php }else{ ?>
									<?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable(('http://').($_smarty_tpl->tpl_vars['j']->value['Link']), true, 0);?>
								<?php }?>
								<a  href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" title="<?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['j']->value['Titulo'], "UTF-8", "ISO-8859-1");?>
" target="_blank">
									<img src="<?php echo $_smarty_tpl->tpl_vars['MIDIA_DIR']->value;?>
/midia_jornais/thumbs/<?php echo $_smarty_tpl->tpl_vars['j']->value['Foto'];?>
" alt="" />
									<span class="galeriaTitulo">
										<span><?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['j']->value['Titulo'], "UTF-8", "ISO-8859-1");?>
</span>
									</span>
								</a>
							</div>
							<?php } ?>
						</div>
					</div>

					<div class="abaMidia abaFeiras">
						<div id="galeriaFeiras" class="galeriaVideoImagens">
							<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feiras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['f']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->index++;
?>
							<div class="galeriaFoto geralTransition">
								<a class="linkModal" rel="galeria_<?php echo $_smarty_tpl->tpl_vars['f']->index;?>
" href="<?php echo $_smarty_tpl->tpl_vars['MIDIA_DIR']->value;?>
/midia_feiras/<?php echo $_smarty_tpl->tpl_vars['f']->value['Capa'];?>
" title="<?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['f']->value['Titulo'], "UTF-8", "ISO-8859-1");?>
">
									<img src="<?php echo $_smarty_tpl->tpl_vars['MIDIA_DIR']->value;?>
/midia_feiras/thumbs/<?php echo $_smarty_tpl->tpl_vars['f']->value['Capa'];?>
" alt="" />
									<span class="galeriaTitulo">
										<span><?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['f']->value['Titulo'], "UTF-8", "ISO-8859-1");?>
</span>
									</span>
								</a>

								<div style="display:none">
									<?php  $_smarty_tpl->tpl_vars['foto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f']->value['Fotos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foto']->key => $_smarty_tpl->tpl_vars['foto']->value){
$_smarty_tpl->tpl_vars['foto']->_loop = true;
?>
									<a class="linkModal" rel="galeria_<?php echo $_smarty_tpl->tpl_vars['f']->index;?>
" href="<?php echo $_smarty_tpl->tpl_vars['MIDIA_DIR']->value;?>
/midia_feiras/originais/<?php echo $_smarty_tpl->tpl_vars['foto']->value['Foto'];?>
" title="<?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['f']->value['Titulo'], "UTF-8", "ISO-8859-1");?>
">

									</a>
									<?php } ?>
								</div>

							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="secaoInstrucoes aba aba2">
			<div class="containerTitulo">
				<h3 class="subTtSecao">Instruções de uso</h3>
				<!-- <a class="btImprimirInstrucoes" href="javascript:;">
					<span>Imprimir instruções de uso</span>
				</a> -->
				<p>A Massa DunDun já vem pronta para o uso, não necessitando nem mesmo de água. Não adicione cimento, cal ou qualquer outra substância ao produto.</p>
			</div>

			<div class="blocoAntesAplicacao">
				<div class="blocoTituloInstrucao">
					<h4 class="ttInstrucao">Antes da aplicação</h4>
				</div>
				<dl class="clearfix">
					<dt>Estocagem</dt>
					<dd>
						<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
/img/gerais/instrucao.jpg" alt=""> -->
						<p>Mantenha o produto armazenado em local seco, fresco e arejado, com empilhamento máximo de 5 caixas.</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>Indicação</dt>
					<dd>
						<p>A Massa DunDun é indicada para alvenarias de vedação internas ou externas, sem função estrutural ou uso refratário.</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>Blocos</dt>
					<dd>
						<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
/img/gerais/instrucao.jpg" alt=""> -->
						<p>É importante que os tijolos ou blocos utilizados atendam aos padrões de qualidade determinados pelas normas brasileiras ou possuam selos de qualidade da ABCP ou PSQ da ANICER. Diferenças de dimensões superiores a 3mm entre uma peça e outras resultarão em dificuldades de nivelamento e alinhamento dos blocos na hora da aplicação.</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>Aplicador</dt>
					<dd>
						<p>O Produto pode ser aplicado com uma bisnaga (plástico ou tecido) ou com a pistola de aplicação fornecida pelo fabricante. No caso da embalagem em sachê, insira a mesma dentro da pistola de aplicação, corte a ponta e use o aplicador normalmente.</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>Preparação</dt>
					<dd>
						<p>Os tijolos/blocos devem estar limpos, livres de areia, graxa, óleos ou pó para não comprometerem a aderência. A aplicação do produto em peças levemente úmidas aumentará o tempo de cura necessário mas não afetará negativamente a adesão do produto após sua cura. Não é recomendada aplicação do produto em peças completamente molhadas (saturadas) pois isso poderá prejudicar a adesão final.</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>Nivelamento</dt>
					<dd>
						<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
/img/gerais/instrucao.jpg" alt=""> -->
						<p>É necessário que a base esteja bem nivelada e no prumo antes da utilização do produto. Por esta razão, é recomendável que a primeira fiada seja sempe assentada com argamassa convencional, corrigindo quaisquer desníveis existentes no piso.</p>
					</dd>
				</dl>
			</div>

			<div class="blocoDuranteAplicacao">
				<div class="blocoTituloInstrucao">
					<h4 class="ttInstrucao"><span>Durante a aplicação</span></h4>
				</div>
				<dl class="clearfix">
					<dt>Dosagem</dt>
					<dd>
						<p>A aplicação deverá ser feita em dois cordões de argamassa com aproximadamente 1cm de diâmetro cada, sobre uma das superfícies a serem unidas. Para a dosagem correta, é recomendável a utilização de um dos aplicadores fornecidos pelo fabricante.</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>Distância entre os blocos</dt>
					<dd>
						<p>Na maioria dos casos, não há necessidade de "encabeçar" os tijolos ou blocos (aplicar o produto nas justas verticais). Recomenda-se apenas que se deixe um espaço lateral de 1 a 3mm entre os blocos para comportar dilatações térmicas e higroscópicas. Este espaço será posteriormente preenchido pelo reboco da alveraria.</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>Tempo em aberto</dt>
					<dd>
						<p>Após a aplicação dos cordões de Massa DunDun, é recomendável que os tijolos/blocos sejam assentados em até 10 minutos. O tempo máximo em aberto pode variar conforme condições climáticas, sendo menor em climas secos ou quentes e maior em climas frios ou úmidos.</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>Nível a prumo</dt>
					<dd>
						<p>Caso a alvenaria comece a ficar fora de nivelamento ou prumo no decorrer da aplicação, podem-se utilizar pequenos calços para fazer ajustes finos. Para maiores correções de prumo ou nivelamento, é recomendável o assentamento de uma fiada com argamassa convencional antes de prosseguir com a aplicação da Massa DunDun.</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>Encunhamento</dt>
					<dd>
						<p>A fixação ou encunhamento da parede à laje ou viga superior deve ser feita conforme determinações das normas e boas práticas de mercado, utilizando-se, por exemplo, argamassa para encunhamento (argamassa "resiliente").</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>Ancoragem</dt>
					<dd>
						<p>A ancoragem/fixação dos blocos ou tijolos pode ser feita diretamente nos pilares ou colunas laterais com Massa DunDun desde que o espaço entre as partes seja inferior a 3mm em toda a área de contato entre os blocos e a coluna. Consulte o fabricante para mais informações.</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>Altura de assentamento</dt>
					<dd>
						<p>A altura de alvenaria a ser levantada em um único dia depende do tipo e qualidade do bloco utilizado e deve ser avaliada pelo profis-sional responsável. Quando há indícios de chuva ou ventos fortes para as próxi-mas 8 horas, recomenda-se uma altura moderada para evitar que a alvenaria possa sair de prumo ou alinhamento.</p>
					</dd>
				</dl>
			</div>

			<div class="blocoAposAplicacao">
				<div class="blocoTituloInstrucao">
					<h4 class="ttInstrucao">Após a aplicação</h4>
				</div>
				<dl class="clearfix">
					<dt>Tempo de cura</dt>
					<dd>
						<p>Tempo de cura total da Massa DunDun é de 72 horas em clima seco e quente, podendo variar conforme as condições climáticas (mais lento em climas frios ou úmidos). Em casos de umidade intensa, a cura do produto apenas iniciará após os blocos assentados secarem completamente.</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>Resistência inicial</dt>
					<dd>
						<p>O produto já apresenta resistência a intempéries após 8 horas de clima seco. Em caso de chuva ou umidade intensa em menos de 8 horas após o assentamento, é recomendável cobrir ou escorar a alvenaria para que a mesma não saia do prumo.</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>Ajustes após aplicação</dt>
					<dd>
						<p>Caso haja a necessidade de remover tijolos ou blocos após o seu assentamento, é necessário retirar a massa que foi aplicada e refazer a aplicação. O descolamento e reposicionamento de blocos ou tijolos sem uma nova aplicação do produto resultará em problemas de adesão.</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>Após aberto</dt>
					<dd>
						<p>Após aberta, vede bem a embalagem plástica e utilize o produto dentro de 30 dias.</p>
					</dd>
				</dl>
			</div>

			<div class="blocoCuidados">
				<div class="divCuidados clearfix">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
/img/gerais/como_cuidar.png" alt="">

					<div>
						<h4 class="ttCuidados">Cuidados com a pistola aplicadora</h4>
						<ul id="ulCuidados">
							<li>O aplicador deve sempre ser enchido pela frente e nunca pela parte traseira (onde se encontra o êmbolo e gatilho).</li>
							<li>Após a aplicação do produto, puxe o êmbolo alguns centímetros para trás, removendo a pressão antes de abrir a ponta do aplicador. Este procedimento evitará que o mecanismo de fechamento do bico suje desnecessariamente.</li>
							<li>A limpeza do aplicador deve ser feita no mínimo uma vez ao dia (no fim do expediente), apenas com o uso de água e uma escova se necessário. Se o interior do aplicador estiver sujo, é completamente importante  remover a parte traseira do aplicador e limpar todos os componentes, principalmente o cano de PVC por onde o êmbolo desliza.</li>
							<li>Sempre que remover a parte traseira do aplicador, certifique-se que o parafuso de fixação do êmbolo na haste de metal esteja bem apertado antes de inseri-lo novamente no cano de PVC.</li>
							<li>Sempre que remover a parte traseira do aplicador, certifique-se que o parafuso de fixação do êmbolo na haste de metal esteja bem apertado antes de inseri-lo novamente no cano de PVC.</li>
						</ul>
					</div>
				</div>
				<div class="blocoAtencao">
					<div class="divAtencao clearfix">
						<span class="ttAtencao">Atenção</span>
						<ul id="ulAtencao">
							<li>A execução da alvenaria construída com Massa DunDun deve observar as normas do setor e os fundamentos orientados pela engenharia civil.</li>
							<li class="liLast">Para alcançar os resultados desejados e evitar acidentes graves é necessário seguir corretamente estas instruções de uso.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="secaoDuvidasFrequentes aba aba3">
			<h3 class="subTtSecao">Dúvidas frequentes</h3>

			<div class="blocoDuvidasFrequentes">
				<form id="formBuscarDuvidas" action="" method="">
					<div class="divIptBuscarDuvidas">
						<label for="iptBuscarDuvidas">Buscar dúvidas frequentes</label>
						<input class="input" type="text" name="iptBuscarDuvidas" id="iptBuscarDuvidas" onKeyDown="buscaFaq(this)">
						<span class="btBuscarDuvidas ir">Buscar</span>
					</div>
				</form>

				<ul id="ulDuvidasFrequentes">
					<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['faq']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['f']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->index++;
?>
					<li class="duvidaAberta">
						<a href="javascript:;">
							<span class="ttDuvida"><?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['f']->value['Pergunta'], "UTF-8", "ISO-8859-1");?>
</span>
							<span class="respostaDuvida"><?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['f']->value['Resposta'], "UTF-8", "ISO-8859-1");?>
</span>
						</a>
					</li>
					<?php } ?>
				</ul>

				<div class="blocoAindaComDuvidas">
					<h3 class="ttBloco">Ainda com dúvidas?</h3>
					<p>Envie sua pergunta que retornaremos o mais breve possível.</p>

					<form id="formEnvieDuvida" action="javascript:;" method="post">
						<div class="divFormDuvidaSac">
							<div class="campoForm">
								<label class="lbl" for="iptNome">Nome</label>
								<input class="input" type="text" id="iptNome" name="iptNome" required>
							</div>
							<div class="campoForm">
								<label class="lbl" for="iptEmail">E-mail</label>
								<input class="input" type="email" id="iptEmail" name="iptEmail" required>
							</div>
							<div class="campoForm">
								<label class="lbl" for="iptTelefone">Telefone</label>
								<input class="input" type="text" id="iptTelefone" name="iptTelefone" required>
							</div>
							<div class="campoForm campoInformeDuvida">
								<label class="lbl" for="txtAreaInformeDuvida">Informe sua dúvida</label>
								<textarea class="textarea" name="txtAreaInformeDuvida" id="txtAreaInformeDuvida" cols="30" rows="10" required></textarea>
							</div>

							<div class="campoFormSubmit">
								<input type="submit" id="btEnviarDuvida" value="Enviar">
							</div>

							<span class="sacMassaDundun">
								<span class="ttSac">Sac Massa Dundun</span>
								<span class="foneSac">(51) 2129.2223</span>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>

	</section>

</section>
<?php }} ?>