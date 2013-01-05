<?php
  require_once("../lib/auth.php");
  require_once("../lib/ego.php");
  $ego = new Ego("http://ego.globo.com/famosos/noticia/2013/01/geisy-arruda-emagrece-quatro-quilos-em-spa.html");
  $ego->author("Heitor Gomide");
  $ego->title("Boatos se confirmam e Fernando Aguiar assume: \"Não jogo mais no time dos solteiros\"");
  $ego->subtitle("Namoro foi oficializado em clima de puro romance");
  $ego->add_image("../imgs/egobuiu1.jpg", "Buiú era pura felicidade ao lados dos amigos", "337", "346");
  $ego->add_paragraph("Em noite de gala na última quinta feira, Fernando Aguiar, o Buiú, reuniu os amigos e a imprensa para informar o que todos já sabiam. Agora ele é um homem compromissado. \"Queria dizer a todos que encontrei a mulher da minha vida\" disse Fernando, com os olhos marejados.");
  $ego->add_paragraph("A bola da vez é a estudante Paula Meireles: \"O chamo de meu pequeno Drácula, e posso dizer que temos muitos planos para o futuro\". Os dois se conheceram quando Paula foi divulgar a nova marca de Band-Aid na cidade de Conselheiro Lafaiete. Foi paixão a primeira vista.");
  $ego->add_paragraph("Bastante sorridente, Fernando foi muito solícito aos paparazzi durante toda a celebração. Os amigos mais próximos garantem que Buiú, como é conhecido no meio, nunca esteve tão apaixonado.");
  $ego->add_paragraph("O \"pequeno Drácula\" de Paula, já garantiu a presença em um famoso estabelecimento da capital no próximo Domingo e já planeja entrar com unhas e dentes no projeto de expansão da famosa marca divulgada por Paula.");
  $ego->add_image("../imgs/egobuiu2.jpg", "Foto de divulgação da campanha publicitária da nova marca", "403", "299");
  $ego->render();
?>
