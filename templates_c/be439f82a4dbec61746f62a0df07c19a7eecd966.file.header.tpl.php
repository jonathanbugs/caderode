<?php /* Smarty version Smarty-3.1.12, created on 2013-11-19 15:42:23
         compiled from "templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:737039187528ba2ff96ae80-38425608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be439f82a4dbec61746f62a0df07c19a7eecd966' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1384258156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '737039187528ba2ff96ae80-38425608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'description' => 0,
    'keywords' => 0,
    'IMG_DIR' => 0,
    'tituloFinal' => 1,
    'analytics' => 0,
    'CSS_DIR' => 0,
    'css_files' => 1,
    'css_uri' => 1,
    'BASE_DIR' => 0,
    'CLIENTE' => 0,
    'ipad' => 0,
    'iphone' => 0,
    'android' => 0,
    'scriptPre' => 1,
    'js_files' => 1,
    'js_uri' => 1,
    'scriptExtra' => 1,
    'navegador' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_528ba2ffa42e28_99957761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528ba2ffa42e28_99957761')) {function content_528ba2ffa42e28_99957761($_smarty_tpl) {?><!DOCTYPE HTML>
<html dir="ltr" lang="pt-br" class="no-js">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['IMG_DIR']->value;?>
favicon.ico" />

<title><?php echo $_smarty_tpl->tpl_vars['tituloFinal']->value;?>
</title>

<?php if ($_smarty_tpl->tpl_vars['analytics']->value){?>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '<?php echo $_smarty_tpl->tpl_vars['analytics']->value;?>
']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
<?php }?>

	<link href="<?php echo $_smarty_tpl->tpl_vars['CSS_DIR']->value;?>
jquery.jscrollpane.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['CSS_DIR']->value;?>
jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<?php  $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css_uri']->key => $_smarty_tpl->tpl_vars['css_uri']->value){
$_smarty_tpl->tpl_vars['css_uri']->_loop = true;
?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="screen" />
<?php } ?>
	<script type="text/javascript">var $BASE_DIR = '<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
', $CLIENTE = '<?php echo $_smarty_tpl->tpl_vars['CLIENTE']->value;?>
', isiPad = '<?php echo $_smarty_tpl->tpl_vars['ipad']->value;?>
', isiPhone = '<?php echo $_smarty_tpl->tpl_vars['iphone']->value;?>
', isiAndroid = '<?php echo $_smarty_tpl->tpl_vars['android']->value;?>
';
	</script>
<?php echo $_smarty_tpl->tpl_vars['scriptPre']->value;?>

<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value){
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>
<?php } ?>
<?php echo $_smarty_tpl->tpl_vars['scriptExtra']->value;?>

</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ("../erro-js.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['navegador']->value){?>
		<?php echo $_smarty_tpl->getSubTemplate ("../erro-navegador.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>


	<div id="wrapper">

		<?php echo $_smarty_tpl->getSubTemplate ('_topo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		 <div id="content">
<?php }} ?>