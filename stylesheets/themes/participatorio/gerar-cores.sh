# main;888a85;555753;babdb6;2e3436;cinza
# activity;c2f711;64c700;d9ec50;458a00;verdeclaro
# discussion;c2f711;64c700;d9ec50;458a00;verdeclaro
# groups;75507b;542760;ad7fa8;3a0d47;roxo
# members;f57900;ce5c00;ffbe0f;a04700;laranja
# blog;d3479b;c4187c;ff52b8;841555;rosa
# videos;3465a4;204a87;729fcf;142f56;azul
# videos_plumi;3465a4;204a87;729fcf;142f56;azul
# file;19882c;025310;05b322;00420c;verde
# bookmarks;cc0000;a40000;ef2929;5d0000;vermelho
# pages;19882c;025310;05b322;00420c;verde
# blog-bloco discussion-bloco groups-bloco

CSS_TEMPLATE='#AREABODY-bloco .elgg-head,
body.AREABODY .elgg-button {
    border-color: #COR01;
}

body.AREABODY .elgg-menu-page li.elgg-state-selected > a:first-child,
body.AREABODY .elgg-menu-page li > a:first-child:hover,
body.AREABODY .elgg-menu-owner-block li.elgg-state-selected > a:first-child,
body.AREABODY .elgg-menu-owner-block li > a:first-child:hover,
body.AREABODY .elgg-button,
body.AREABODY .elgg-page-header {
background-color: #COR01;
background-color: #COR02;
background-image: -moz-radial-gradient(center, ellipse cover,  #COR01 1%, #COR02 100%);
background-image: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(1%,#COR01), color-stop(100%,#COR02));
background-image: -webkit-radial-gradient(center, ellipse cover,  #COR01 1%,#COR02 100%);
background-image: -o-radial-gradient(center, ellipse cover,  #COR01 1%,#COR02 100%);
background-image: -ms-radial-gradient(center, ellipse cover,  #COR01 1%,#COR02 100%);
background-image: radial-gradient(ellipse at center,  #COR01 1%,#COR02 100%);
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#COR01", endColorstr="#COR02",GradientType=1 );
}
body.AREABODY .elgg-pagination li.elgg-state-selected > *,
body.AREABODY .elgg-pagination li a:hover,
body.AREABODY .elgg-button.elgg-button-submit:hover,
body.AREABODY .elgg-button.elgg-button-submit:focus,
body.AREABODY .elgg-menu-site .elgg-menu-site-more > .elgg-state-selected,
body.AREABODY .elgg-menu-site .elgg-menu-site-more > li:hover,
body.AREABODY .elgg-search,
body.AREABODY .elgg-page-toolbar {
    background: #COR04;
}
#AREABODY-bloco .elgg-head h3,
#AREABODY-bloco a,
body.AREABODY a {
    color: #COR01;
    transition: 0.3s;
}
#AREABODY-bloco a:focus,
body.AREABODY .elgg-heading-main,
body.AREABODY .elgg-heading-main:hover,
body.AREABODY a:hover,
body.AREABODY a:focus {
    color: #COR04;
}
body.AREABODY .elgg-page-header a {
    color: #FFFFFF;
    transition: 0.3s;
}
#AREABODY-bloco a:hover,
body.AREABODY .elgg-pagination li a:hover,
body.AREABODY .elgg-heading-main,
body.AREABODY .elgg-heading-main:hover,
body.AREABODY .elgg-page-header a:hover,
body.AREABODY .elgg-page-header a:focus {
    color: #COR03;
}
'
function gerar_css {
VERMELHO="cc0000 a40000 ef2929 5d0000"
VERDE="19882c 025310 05b322 00420c"
AZUL="3465a4 204a87 729fcf 142f56"
ROSA="d3479b c4187c ff52b8 841555"
LARANJA="f57900 ce5c00 ffbe0f a04700"
ROXO="B175C9 63346b ad7fa8 3a0d47"
VERDECLARO="6CAD30 5BA016 59B306 458a00"
CINZA="888a85 555753 babdb6 2e3436"
COUNT=0
corfile=$( mktemp )
echo $CSS_TEMPLATE > $corfile
CORSELECT=$(echo $2)
for cor in `echo ${!CORSELECT}` ; do
   let COUNT++
   sed -i s/COR0$COUNT/$cor/g $corfile
done
   sed -i s/AREABODY/$1/g $corfile
   cat $corfile
   rm $corfile
}

echo "/***************** INICIO CUSTOM COLORS **************/"
gerar_css main CINZA
gerar_css activity VERDECLARO
gerar_css discussion VERDECLARO
gerar_css groups ROXO
gerar_css members LARANJA
gerar_css blog ROSA
gerar_css videos ROXO
gerar_css videos_plumi ROXO
gerar_css file LARANJA
gerar_css bookmarks LARANJA
gerar_css pages CINZA
echo "/**************** FIM CUSTOM COLORS *********************/"
