<?php
  require_once("../lib/auth.php");
  require_once("../lib/ego.php");
  $ego = new Ego("http://ego.globo.com/famosos/noticia/2012/10/dado-nao-sera-mais-julgado-pela-lei-maria-da-penha-diz-advogado-do-ator.html");
  $ego->author("Heitor Gomide");
  $ego->title("Eric Ranieri se declara e oficializa affair com Ludmila Lopes");
  $ego->subtitle("Casal proporcionou momentos picantes na noite mineira");
  $ego->add_image("../imgs/egoludy1.jpg", "Agressiva: quem será a próxima vítima?", "256", "588");
  $ego->add_paragraph("Eric não resistiu aos encantos de Ludmila Lopes. Na última quinta feira, o que era mais uma balada com os amigos se tornou marco de um novo e promissor relacionamento. \"Eu só fui reparar quando os dois tinham virado um corpo só\" disse o espantado Guilherme Pimentel.");
  $ego->add_paragraph("Não foi só Guilherme que se assutou com a voracidade da cena. Os outros clientes da famosa casa noturna também ficaram espantados com a volúpia nas trocas de beijos. Eric, conhecido por ter uma personalidade comedida e ponderada, dessa vez perdeu a linha. Agressivo, tentou impedir registros fotográficos e até quis ir para as \"vias de fato\" com um cliente, que não se intimidou e registrou os momentos quentes.");
  $ego->add_paragraph("\"Realmente a Ludmila tirou ele do sério completamente, nunca o vi desse jeito\" foi o relato de Marlos, que registrou todo o ocorrido.");
  $ego->add_paragraph("Por sua vez, Ludmila Lopes não estava ligando para o que ocorria em sua volta. Ela só tinha olhos para seu amado, e estava mais preocupada em curtir o momento. Aos amigos, ela confidenciou que pretende levar o relacionamento adiante, custe o que custar.");
  $ego->add_paragraph("Mas a noite não acabou por aí. Testemunhas contam que o casal foi visto também em uma loja de <em>fast food</em> na Savassi ao fim da noite, tendo posteriormente deixado o local em clima de puro romance. \"Uma situação no mínimo vergonhosa\" não parava de repetir um amigo do casal, Gustavo Garcia, que pedia a todo instante para o casal se conter.");
  $ego->add_paragraph("Eric desde então está incomunicável com a imprensa enquanto Ludmila anda respondendo os repórteres de forma truculenta e sem meias palavras. Apesar disso, Eric foi visto deixando a casa de Ludmila as pressas hoje de manhã.");
  $ego->add_section("Namoro");
  $ego->add_paragraph("Ambas as assessorias de imprensa negam, mas há quem diga que o casal que anda trocando juras de amor às escondidas, planeja em futuro próximo, organizar uma coletiva de imprensa para dar fim de vez aos boatos. Talvez assim, Eric fique mais tranquilo e curta seu momento. É esperar para ver.");
  $ego->add_image("../imgs/egoericeludy1.jpg", "O clima esquentou entre o casal", "295", "353");
  $ego->add_image("../imgs/egoericeludy2.jpg", "Os dois se entregaram a paixão", "396", "264");
  $ego->add_image("../imgs/egoericeludy3.jpg", "E a galera foi ao delírio", "396", "293");
  $ego->render();
?>
