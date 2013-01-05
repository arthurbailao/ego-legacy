<?php
  require_once("../lib/auth.php");
  require_once("../lib/ego.php");
  $ego = new Ego("http://ego.globo.com/famosos/noticia/2013/01/carol-belli-posa-sem-sutia-e-exibe-marquinha.html");
  $ego->author("Heitor Gomide");
  $ego->title("Novela: Arthur Bilbão e Mariana Leite reatam relacionamento e mais uma vez fazem planos para o futuro. Será?");
  $ego->subtitle("\"Não importa o que foi dito sobre nós. As mais lindas palavras de amor são ditas no silêncio de um olhar\" disse o sempre galeanteador Arthur.");
  $ego->add_image("../imgs/egoarthur1.jpg", "O galã dessa vez resolveu deixar o berrante em casa.", "428", "570");
  $ego->add_paragraph("Durou pouco a separação do casal mais badalado dos últimos tempos. Entre muitas idas e vindas, discussões e trocas de farpa pela imprensa, o fazendeiro Arthur Bilbão e Mariana Leite novamente deixaram o sentimento falar mais alto e reataram o affair.");
  $ego->add_paragraph("Por volta das 23:30, Arthur chegou a uma famosa boate do interior de Minas da maneira que lhe é peculiar, atraindo flashes. Os paparazzi lutavam entre si para conseguir o melhor ângulo de Bilbao, que dessa vez estava desprovido de seu famoso berrante. Arthur parecia ignorar os repórteres, mas uma pergunta a respeito de Mariana Leite fez com que Arthur parasse, e com um sorriso no canto da boca dissesse \"Saí de Goiás para ver a mulher que eu amo e só saio daqui com ela\".");
  $ego->add_paragraph("Dentro da boate, Arthur estava acompanhado de vários amigos, entre eles Marlos Fernandes e Talita Pimentel, esposa de Guilherme Pimentel, que dessa vez esteve ausente do evento. Muito animado, Arthur aparentava estar bem a vontade.");
  $ego->add_paragraph("E finalmente, no meio do show, a coisa ferveu. Arthur e Mariana protagonizaram tórridas cenas de pura paixão. A troca de beijos era tão intensa, que chamava a atenção de todos no local. \"Parecia até que o show era ali, porque ninguém mais olhava para o palco\" disse o sorridente Marlos que estava contente com a reconciliação do casal de amigos.");
  $ego->add_paragraph("Depois disso aconteceu o que todo mundo já sabe. Juras de amor, carinhos e muita badalação do casal. Mas quem também conhece a fama de Arthur sabe que ele sempre apronta alguma, nem que seja pelo puro prazer de ver seu nome nas manchetes.");
  $ego->add_paragraph("Pela manhã, vários hóspedes do hotel em que Arthur estava alojado acordaram assustados. Aos berros, ainda com a roupa da noite anterior, e aparentando estar bastante cansado, o fazendeiro dizia que não iria pagar a conta relativa a sua estadia, já que ele não teria passado a noite nela.");
  $ego->add_paragraph("Após a situação ser controlada, Bilbao, sempre junto de sua amada, e visivelmente apaixonado disse a um repórter local: \"Eu a amo e como todos vocês sabem, eu nunca consigo me afastar dela por muito tempo. Resolvi mergulhar de cabeça nessa paixão\".");
  $ego->add_paragraph("Quanto ao problema no hotel, Arthur não quis prestar esclarecimentos. Mas onde será então que ele passou a noite? Mistério...");
  $ego->add_image("../imgs/egoarthur2.jpg", "Bilbao sabia muito bem o que ela queria...", "454", "542");
  $ego->add_image("../imgs/egoarthur3.jpg", "Amor: o casal não se desgrudou mais o resto da noite.", "564", "404");
  $ego->render();
?>
