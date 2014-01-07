<?php
  require_once("../lib/auth.php");
  require_once("../lib/ego.php");
  $ego = new Ego("http://ego.globo.com/famosos/noticia/2014/01/carolina-dieckmann-mostra-corpo-sequinho-em-capa-de-revista.html");
  $ego->author("Marlos Fernandes");
  $ego->title("Cássia Freitas vem com tudo");
  $ego->subtitle("Boatos apontam uma reviravolta na autoestima de Cássia Feitas, a Cassião. Familiares despistam!");
  $ego->add_image("../imgs/cassia1.jpg", "", "320", "394");
  $ego->add_paragraph("Sob olhares atentos do público presente na requintada casa de Belo Horizonte, Almanaque Choperia e Espaço Gourmet, Cássia Freitas esbanjou simpatia ao saber de comentários sobre os fortes indícios de uma cirurgia plástica que está virando febre entre as mulheres: as próteses de silicone.");
  $ego->add_paragraph("Cassia Freitas, sentindo-se desconfortável, evitou comentar sobre o assunto. O assédio da impressa era intenso! Nosso assessor especial André Lauar teve acesso ao espaço reservado à estrela e seus convidados. Lá, pôde desvendar mais sobre esta notícia que virou assunto principal entre celebridades e mídia. Vinícius Peixoto, um de seus convidados e amigo próximo, comentou \"Conhecerão uma nova Cássia, de quinta não passa!\". A revelação causou ainda mais murmurinhos entre a imprensa. \"Não sei como vocês ainda acreditam neste tipo de informação\" tentou desviar Marina Alves, aliada inseparável de Cássia Freitas.");
  $ego->add_paragraph("Agora é aguardar para ver. Está marcado! Quinta-feira, 09 de janeiro, é a data mais esperada por fãs e seguidores.  Vem ai Cássia Turbinada!!!");
  $ego->add_image("../imgs/cassia2.jpg", "", "320", "394");
  $ego->render();
?>