<?php
  require_once("../lib/auth.php");
  require_once("../lib/ego.php");
  $ego = new Ego("http://ego.globo.com/famosos/noticia/2013/01/namorada-de-bernardo-do-bbb-13-nega-que-ele-esteja-solteiro.html");
  $ego->author("Heitor Gomide");
  $ego->title("Agora é oficial: Guilherme Fontes Baggio confirma relacionamento com novo affair");
  $ego->subtitle("Estudante se declarou apaixonado e com vários planos para o futuro");
  $ego->add_image("../imgs/egopalmito1.jpg", "Baggio está radiante com a nova namorada", "295", "400");
  $ego->add_paragraph("Depois de muitas especulações parece que finalmente Guilherme Fontes Baggio resolveu assumir o que todo mundo já sabia: o estudante está de namorada nova e se declarou um homem apaixonado. \"Realmente parece que o destino reserva coisas maravilhosas para a gente. Ela é a mulher que eu sempre sonhei para mim\" declarou Baggio, inspirado pela paixão.");
  $ego->add_paragraph("Reservado como sempre, Guilherme não quis dar maiores declarações, mas o casal foi visto junto de mãos dadas circulando nas proximidades do famoso bar mineiro \"balaio de gato\".");
  $ego->add_paragraph("A nossa reportagem apurou ainda que o nome da mulher que arrebatou o coração do famoso estudante é Marina e os dois tem sido frequentemente vistos badalando pelas noitadas da capital mineira. Será que Baggio finalmente encontrou sua amada?");
  $ego->render();
?>
