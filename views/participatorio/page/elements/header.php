<?php

echo '<div class="elgg-header-itens">';


$site_url = elgg_get_site_url();

echo '<div id="accessibility-participatorio" >
 <p>Ir para: <a accesskey="1" href="#corpo"> Conteúdo </a>
 <a accesskey="2" href="#menu-participatorio"> Menu </a>
 <a accesskey="3" href="#busca"> Busca </a>
 <a accesskey="4" href="#footer"> Rodapé </a></p>
</div>';

echo '<div id="top-itens" >
    <a title="Acessibilidade" href="' . $site_url .'accessibility">Acessibilidade</a>
    <a title="Dados Abertos" href="' . $site_url . 'opendata">Dados Abertos</a>
    <a titile="Termos de Uso" href="' . $site_url . 'terms">Termos de Uso</a>
</div>';

echo elgg_view('page/elements/header_logo', $vars);

$search = elgg_view('search/search_box');
if ($search) {
    echo '<div id="header-search">' . $search . '</div>';
}

echo '<div id="sobre">
    <ul>
    <li><a href="' . $site_url . 'faq" title="Perguntas frequentes">Perguntas frequentes</a></li>
    <li><a href="' . $site_url . 'about" title="Sobre o Participatório">Sobre</a></li>
    <li class="last-item"><a href="' . $site_url . 'contact" title="Fale Conosco">Fale Conosco</a> </a></li>
    </ul>
    </div>';

echo '</div><!-- end .elgg-header-itens -->';

echo elgg_view('core/account/login_dropdown');

echo elgg_view('page/elements/toolbar', $vars);
