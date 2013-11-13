<?php
$paginaTit = 'Lojas';
$navegacao = 'Lojas';
$menu = 'lojas';

$smarty->append('css_files', CSS_DIR.$sessao.'.css');
$smarty->append('js_files', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDXmIPt9DWoFMEj8ToHZI7F9r8BPerf9jo&sensor=false');
$smarty->append('js_files', JS_DIR.'lista-lojas.js');
$smarty->append('js_files', JS_DIR.$sessao.'.js');
?>
