<?php
  require_once("../lib/auth.php");
  require_once("../lib/ego.php");
  $ego = new Ego("http://ego.globo.com/televisao/noticia/2014/01/alisson-credita-eliminacao-do-bbb-14-falta-de-um-rostinho-bonito.html");
  $ego->author("Heitor Gomide");
  $ego->title("Pancadaria! Gustavo Martins se envolve em briga e busca consolo nos braços de Ludmila Lopes");
  $ego->subtitle("\"Não vou comentar nada. Deixe que as pessoas tirem suas próprias conclusões\", disse um exaltado Martins.");
  $ego->add_image("../imgs/egogusta2.jpg", "Martins estava possesso", "418", "444");
  $ego->add_paragraph("O evento na badalada casa noturna Woods era apenas para marcar o reencontro com o sempre carismático Gustavo Lima. O \"mumuzão\" como é conhecido pelos amigos, estava fora da cidade a algum tempo e resolveu voltar em grande estilo.");
  $ego->add_paragraph("Ao chegarem à boate, os artistas foram recepcionados pela doce Bárbara por quem todos se encantaram. No entanto, coube ao atraente Heitor de Castro tomar a frente e engatar um papo ao pé do ouvido com a jovem. Os pombinhos foram vistos trocando telefones, o que deixou Eric Ranieri bastante irritado.");
  $ego->add_paragraph("Mas ali mesmo na porta da boate já dava pra saber quem seria o protagonista da noite: Gustavo Martins, que recentemente tem sido apontado como pivô da organização dos chamados \"rolezinhos\". Martins se mostrava bastante agitado mesmo antes de entrar. E não foi diferente lá dentro. Gustavo se envolveu com uma mulher comprometida, o que desencadeou uma confusão generalizada. Coube ao sempre pacato Heitor apartar a briga e acalmar os ânimos. Tranquilo e sempre calmo, ele conseguiu convencer Martins a esquecer o episódio e curtir a noite. Mesmo assim, Gustavo ameaçava \"Vou quebrar a cara desse babaca\", gritava o artista ao mesmo tempo em que apontava o dedo em direção ao seu rival.");
  $ego->add_image("../imgs/egogusta1.jpg", "Martins e Lud: As imagens falam por si só", "340", "296");
  $ego->add_paragraph("No entanto só quem conseguiu acalmar de verdade os ânimos de Martins foi Ludmila Lopes. Enquanto Eric, o rei do camarote, era visto aos beijos com Luciana Lima munido sempre de um copo de tequila, Lud cuidava com carinho de Martins, que estava com sangue nos olhos. Aos poucos, a bela foi amolecendo o coração de Gustavo, que trocou o semblante fechado por um sorriso permanente no rosto. Os boatos dão conta de que o clima ferveu entre os dois e a \"chapa esquentou\", o que foi negado por ambas as assessorias. No entanto, nossa equipe conseguiu fotos exclusivas para que nossos leitores tirem suas próprias conclusões. Será que os pombinhos ainda vão negar?");
  $ego->add_image("../imgs/egogusta3.jpg", "Luciana estava encantada por Eric Ranieri", "340", "340");
  $ego->add_paragraph("Também tentamos entrar em contato com o rei do camarote, que não quis gravar entrevista mas afirmou de forma enfática estar disposto a levar o relacionamento com Luciana adiante. Apuramos também que Luciana é estudante de direito da renomada faculdade Dom Helder Câmara.");
  $ego->add_paragraph("Mas nem tudo são flores. A noite não acabou bem para Gustavo Lima. Justo ele que organizou o evento, não conseguiu esquecer sua esposa, Lorena Alvarez que excursionava pela Europa. Tentou afogar as mágoas em doses cavalares de álcool e terminou num estado deplorável. Mais uma vez, nossa equipe conseguiu um furo de reportagem e traz com exclusividade o fim de noite de Gustavo.");
  $ego->add_image("../imgs/egogusta4.jpg", "Gustavo Lima jogado as traças", "600", "600");
  $ego->render();
?>
