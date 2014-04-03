<?php

echo '<div class="elgg-header-itens">';


$site_url = elgg_get_site_url();

echo '<ul id="accessibility">
    <li><a accesskey="1" href="#corpo" id="link-conteudo">Ir para o conteúdo<span>1</span></a></li>
	<li><a accesskey="2" href="#menu" id="link-navegacao">Ir para o menu<span>2</span></a></li>
	<li><a accesskey="3" href="#busca" id="link-buscar">Ir para a busca<span>3</span></a></li>
	<li class="last-item"><a accesskey="4" href="#rodape" id="link-rodape">Ir para o rodapé<span>4</span></a></li>
</ul>

<ul id="actionitens">
    <li><a title="Acessibilidade" href="' . $site_url .'accessibility">Acessibilidade</a></li>
    <li><a title="Dados Abertos" href="' . $site_url . 'opendata">Dados Abertos</a></li>
    <li><a titile="Termos de Uso" href="' . $site_url . 'terms">Termos de Uso</a></li>
</ul>';

echo elgg_view('page/elements/header_logo', $vars);

$search = elgg_view('search/search_box');
if ($search) {
    echo '<a name="busca"></a><div id="header-search">' . $search . '</div>';
}

echo '<div id="social-icons">
   <ul>
      <li id="redes-facebook">
           <a href="https://www.facebook.com/Participatorio">
           <span>Facebook</span>
          </a>
      </li>
      <li id="redes-twitter">
          <a href="https://twitter.com/Participatorio">
               <span>Twitter</span>
          </a>
      </li>
      <li id="redes-youtube">
          <a href="http://www.youtube.com/user/participatoriojovem/videos">
               <span>YouTube</span>
          </a>
      </li>
    </ul>
</div>
<div id="sobre">
    <ul>
    <li><a href="' . $site_url . 'faq" title="Perguntas frequentes">Perguntas frequentes</a></li>
    <li><a href="' . $site_url . 'about" title="Sobre o Participatório">Sobre</a></li>
    <li class="last-item"><a href="' . $site_url . 'contact" title="Fale Conosco">Fale Conosco</a> </a></li>
    </ul>
    </div>
 </div><!-- end .elgg-header-itens -->';

echo elgg_view('page/elements/toolbar', $vars);
