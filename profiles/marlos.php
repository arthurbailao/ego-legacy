<?php
  require_once("../lib/auth.php");
  require_once("../lib/ego.php");
  $ego = new Ego("http://ego.globo.com/famosos/noticia/2012/12/apos-voltar-ser-virgem-angela-bismarchi-se-casa-no-rio-de-janeiro.html");
  $ego->author("Heitor Gomide");
  $ego->title("Marlos Fernandes e Mayara Guimarães estão juntos e irão comemorar a passagem para 2013 em grande estilo");
  $ego->subtitle("Casal anda circulando de mãos dadas pelas ruas de Belo Horizonte.");
  $ego->add_image("../imgs/egomarlos1.jpg", "Apaixonados: o casal foi atencioso e posou para fotos", "620", "465");
  $ego->add_paragraph("Eles vêm tentando esconder o relacionamento a algum tempo, mas parece que agora o casal resolveu assumir. Tudo começou a alguns meses atrás, durante um evento em uma casa de shows na Av. Raja Gabaglia. A nossa reportagem apurou que o casal protagonizou cenas tórridas naquele dia, não se importando com os holofotes dos paparazzi que cobriam o evento. Fernando Aguiar, que viu todo o ocorrido contou que Marlos Fernandes estava fora de si: \"O Marlos falava a todo momento que tinha encontrado a sua alma gêmea, ele estava alucinado, a Mayara virou a cabeça, pescoço e se bobear até o braço dele. Foi perda total\". Por sua vez, Mayara estava radiante. O garçom do local contou com exclusividade que o único drink que foi servido durante a noite foi o famoso <em>sex on the beach</em>: \"Perdi a conta de quantas vezes servi o casal\" informou o funcionário.");
  $ego->add_paragraph("Um segurança confidenciou que houve empurra-empurra na saída da boate. A discussão teria ocorrido porque Arthur Bilbao pedia para o amigo voltar com ele, visto que tinha exagerado um pouco na bebida. No entanto, Marlos estava transtornado e, aos berros, gritava para quem quisesse ouvir: \"Sem a Mayara  eu não volto\". Envergonhados com a situação, os amigos tentavam controlar Marlos, mas só quem deu um jeito na situação foi a própria Mayara, que dizia para seu \"mozão\", apelido carinhoso pelo qual Marlos é chamado por ela, se conter.");
  $ego->add_paragraph("Desde então o casal vem se encontrando as escondidas. Mas os vizinhos de Mayara contam que Marlos praticamente mora na casa de seu affair, localizada na zona sul da cidade. Colegas de trabalho de Mayara, que atua em um grande banco privado na capital, também confirmaram que Marlos vai praticamente todos os dias da semana ao local \"verificar seu extrato\".");
  $ego->add_section("Lua de mel no Iate");
  $ego->add_image("../imgs/iate.jpg", "Revéillon será em grande estilo (Foto: EGO)", "300", "164");
  $ego->add_paragraph("Os pombinhos agora se preparam para virar o ano em grande estilo. Já confirmaram presença em uma festa que será promovida pelo CEO do Google, Lucas Diniz, que bancará do próprio bolso uma festa de gala no Pershing 115, o famoso iate de Eike Batista. Agora é esperar para ver se o casal vai se atracar no iate... ");
  $html = <<<EOD
        <p class="titulo"><strong>tudo</strong> sobre</p>

        <ul class="lista-categorias">

<!--------------------------------------------------------->

<li class="box-categoria aberta">
                    <a class="float-link" style="display: block; " href="#"></a><a class="float-link" style="" href="#"></a><a class="btn-categoria ui-accordion-header ui-helper-reset ui-state-active ui-state-default" href="#" title="Fotos, vídeos e notícias de casamento" role="tab" aria-expanded="true" aria-selected="true" tabindex="0"><span class="ui-icon ui-icon-triangle-1-s"></span><span class="ui-icon ui-icon-triangle-1-e"></span>
                        <span class="thumb">
                            
                                <span class="borda-interna assunto twitter">trending topics</span>
                            
                        </span>

                        <span class="ficha">
                            <h3 class="nome-categoria">trending topics</h3>
                            
                            <span class="perfil-famoso">página do assunto »</span>
                            
                        </span>
                    </a>

                    

                        <div class="noticias-wrapper ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" role="tabpanel" style="display: block; overflow: hidden; padding-top: 0px; padding-bottom: 0px; ">

                            
                                <div class="botao-topo">
                                    <a href="#" class="inativo">Anterior</a>
                                </div>
                            

                            <div class="box-lista-noticias" style="height: 279px; overflow: hidden; ">
                                <ul class="lista-materia">

                                    
                                        <li class="noticia-plantao primeira" style="">
                                            
                                                
                                                    <div class="foto">
                                                        <a href="http://www.facebook.com/eric.ranieri?fref=ts" class="borda-interna" title="#ericInLove">
                                                            <img width="90" height="68" src="../imgs/eric.jpg" alt="#ericInLove">
                                                        </a>
                                                    </div>
                                            

                                            <div class="noticia-conteudo">
												
						                        <h4><a href="http://www.facebook.com/eric.ranieri?fref=ts" #title="#ericInLove">#ericInLove</a></h4>
						                        
                                                <p class="hora-plantao">há 12 minutos</p>
                                            </div>
                                        </li>





                                        <li class="noticia-plantao" style="">
                                            
                                                
                                                    <div class="foto">
                                                        <a href="http://www.facebook.com/gustavo.martins111?fref=ts" class="borda-interna" title="#martinsLovesLeticia">
                                                            <img width="90" height="68" src="../imgs/martins.jpg" alt="#martinsLovesLeticia">
                                                        </a>
                                                    </div>
                                            

                                            <div class="noticia-conteudo">
												
						                        <h4><a href="http://www.facebook.com/gustavo.martins111?fref=ts" title="#martinsLovesLeticia">#martinsLovesLeticia</a></h4>
						                        
                                                <p class="hora-plantao">há 12 minutos</p>
                                            </div>
                                        </li>





                                        <li class="noticia-plantao" style="">
                                            
                                                
                                                    <div class="foto">
                                                        <a href="http://www.facebook.com/guilherme.fontes.94?fref=ts" class="borda-interna" title="#palmitoRIP">
                                                            <img width="90" height="68" src="../imgs/palmito.jpg" alt="#palmitoRIP">
                                                        </a>
                                                    </div>
                                            

                                            <div class="noticia-conteudo">
												
						                        <h4><a href="http://www.facebook.com/guilherme.fontes.94?fref=ts" title="#palmitoRIP">#palmitoRIP</a></h4>
						                        
                                                <p class="hora-plantao">há 12 minutos</p>
                                            </div>
                                        </li>




                                        <li class="noticia-plantao" style="">
                                            
                                                
                                                    <div class="foto">
                                                        <a href="http://www.facebook.com/henrique.teichmann?fref=ts" class="borda-interna" title="#teichGay">
                                                            <img width="90" height="68" src="../imgs/teich.jpg" alt="#teichGay">
                                                        </a>
                                                    </div>
                                            

                                            <div class="noticia-conteudo">
												
						                        <h4><a href="http://www.facebook.com/henrique.teichmann?fref=ts" title="#teichGay">#teichGay</a></h4>
						                        
                                                <p class="hora-plantao">há 12 minutos</p>
                                            </div>
                                        </li>




                                        <li class="noticia-plantao" style="">
                                            
                                                
                                                    <div class="foto">
                                                        <a href="http://www.facebook.com/arthurbailao?fref=ts" class="borda-interna" title="#bilbaoNaBalada">
                                                            <img width="90" height="68" src="../imgs/arthur.jpg" alt="#bilbaoNaBalada">
                                                        </a>
                                                    </div>
                                            

                                            <div class="noticia-conteudo">
												
						                        <h4><a href="http://www.facebook.com/arthurbailao?fref=ts" title="#bilbaoNaBalada">#bilbaoNaBalada</a></h4>
						                        
                                                <p class="hora-plantao">há 12 minutos</p>
                                            </div>
                                        </li>


                                    
                                        
                                    

                                </ul>
                            </div>

                            
                                <div class="botao-rodape">
                                    <a href="#">Proximo</a>
                                </div>
                            
                        </div>
                    
                </li>

<!--------------------------------------------------------->

            
   
            
                <li class="box-categoria fechada">
                    <a class="float-link" style="display: none; " href="http://ego.globo.com/assuntos/casamento.html"></a><a class="btn-categoria ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" href="http://ego.globo.com/assuntos/casamento.html" title="Fotos, vídeos e notícias de casamento" role="tab" aria-expanded="false" aria-selected="false" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-e"></span>
                        <span class="thumb">
                            
                                <span class="borda-interna assunto casamento">casamento</span>
                            
                        </span>

                        <span class="ficha">
                            <h3 class="nome-categoria">casamento</h3>
                            
                            <span class="perfil-famoso">página do assunto »</span>
                            
                        </span>
                    </a>

                    

                        <div class="noticias-wrapper ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none; ">

                            
                                <div class="botao-topo">
                                    <a href="#" class="inativo">Anterior</a>
                                </div>
                            

                            <div class="box-lista-noticias" style="height: 279px; overflow: hidden; ">
                                <ul class="lista-materia">

                                    
                                        <li class="noticia-plantao primeira" style="">
                                            
                                                
                                                    <div class="foto">
                                                        <a href="http://ego.globo.com/famosos/fotos/2012/12/angela-bismarchi-se-casa-na-cidade-do-samba-no-rio.html" class="borda-interna" title="Ângela Bismarchi se casa na Cidade do Samba, no Rio">
                                                            <img width="90" height="68" src="http://s2.glbimg.com/g2iB28WdrDT-L2rbBGSoNq7t5jY=/90x68/smart/s.glbimg.com/jo/eg/f/original/2012/12/29/dsc_8537.jpg" alt="Ângela Bismarchi se casa na Cidade do Samba, no Rio">
                                                        </a>
                                                    </div>
                                            

                                            <div class="noticia-conteudo">
												
						                        <h4><a href="http://ego.globo.com/famosos/fotos/2012/12/angela-bismarchi-se-casa-na-cidade-do-samba-no-rio.html" title="Ângela Bismarchi se casa na Cidade do Samba, no Rio">Ângela Bismarchi se casa na Cidade do Samba, no Rio</a></h4>
						                        
                                                <p class="hora-plantao">há 12 minutos</p>
                                            </div>
                                        </li>
                                    
                                        <li class="noticia-plantao">
                                            
                                                
                                                    
                                                        <div class="foto">
                                                            <a href="http://ego.globo.com/famosos/noticia/2012/12/com-direito-banheira-e-massagem-angela-bismarchi-tem-dia-de-noiva.html" class="borda-interna" title="Com direito a banheira e massagem, Ângela Bismarchi tem dia de noiva">
                                                                <img width="90" height="68" src="http://s2.glbimg.com/MKHDKI-CGSjSD81nLJxtP8bVXDA=/90x68/smart/s.glbimg.com/jo/eg/f/original/2012/12/29/making_of_angela_bismarchi-0001.jpg" alt="Com direito a banheira e massagem, Ângela Bismarchi tem dia de noiva">
                                                            </a>
                                                        </div>
                                                    
                                                
                                            

                                            <div class="noticia-conteudo">
												
						                        <h4><a href="http://ego.globo.com/famosos/noticia/2012/12/com-direito-banheira-e-massagem-angela-bismarchi-tem-dia-de-noiva.html" title="Com direito a banheira e massagem, Ângela Bismarchi tem dia de noiva">Com direito a banheira e massagem, Ângela Bismarchi tem dia ...</a></h4>
						                        
                                                <p class="hora-plantao">há 4 horas</p>
                                            </div>
                                        </li>
                                    
                                        <li class="noticia-plantao">
                                            
                                                
                                                    
                                                        <div class="foto">
                                                            <a href="http://ego.globo.com/famosos/noticia/2012/12/angela-bismarchi-posta-foto-da-prova-de-seu-vestido-de-noiva.html" class="borda-interna" title="Ângela Bismarchi posta foto da prova de seu vestido de noiva">
                                                                <img width="90" height="68" src="http://s2.glbimg.com/fX9xXMbZiygHcXT8g1bXcxJrlbU=/90x68/smart/s.glbimg.com/jo/eg/f/original/2012/12/29/angela.jpg" alt="Ângela Bismarchi posta foto da prova de seu vestido de noiva">
                                                            </a>
                                                        </div>
                                                    
                                                
                                            

                                            <div class="noticia-conteudo">
												
						                        <h4><a href="http://ego.globo.com/famosos/noticia/2012/12/angela-bismarchi-posta-foto-da-prova-de-seu-vestido-de-noiva.html" title="Ângela Bismarchi posta foto da prova de seu vestido de noiva">Ângela Bismarchi posta foto da prova de seu vestido de noiva</a></h4>
						                        
                                                <p class="hora-plantao">há 11 horas</p>
                                            </div>
                                        </li>
                                    
                                        <li class="noticia-plantao">
                                            
                                                
                                                    
                                                        <div class="foto">
                                                            <a href="http://ego.globo.com/famosos/noticia/2012/12/em-cerimonia-secreta-kate-winslet-se-casa-pela-terceira-vez-diz-site.html" class="borda-interna" title="Em cerimônia secreta, Kate Winslet se casa pela terceira vez, diz jornal">
                                                                <img width="90" height="68" src="http://s2.glbimg.com/PmzwNDCn-bcXTh2cW1e0e8xbrXY=/90x68/smart/s.glbimg.com/jo/eg/f/original/2012/02/25/katewinslet_getty.jpg" alt="Em cerimônia secreta, Kate Winslet se casa pela terceira vez, diz jornal">
                                                            </a>
                                                        </div>
                                                    
                                                
                                            

                                            <div class="noticia-conteudo">
												
						                        <h4><a href="http://ego.globo.com/famosos/noticia/2012/12/em-cerimonia-secreta-kate-winslet-se-casa-pela-terceira-vez-diz-site.html" title="Em cerimônia secreta, Kate Winslet se casa pela terceira vez, diz jornal">Em cerimônia secreta, Kate Winslet se casa pela terceira vez...</a></h4>
						                        
                                                <p class="hora-plantao">há 2 dias</p>
                                            </div>
                                        </li>
                                    
                                        <li class="noticia-plantao">
                                            
                                                
                                                    
                                                        <div class="foto">
                                                            <a href="http://ego.globo.com/famosos/noticia/2012/12/tres-dias-do-casamento-angela-bismarchi-faz-cha-de-lingerie.html" class="borda-interna" title="A três dias do casamento, Ângela Bismarchi faz chá de lingerie">
                                                                <img width="90" height="68" src="http://s2.glbimg.com/M-P9trN7V5S8tvwYpgynLPgvfPc=/90x68/smart/s.glbimg.com/jo/eg/f/original/2012/12/27/juliane_almeida_e_angela_bismarchi_instagram.jpg" alt="A três dias do casamento, Ângela Bismarchi faz chá de lingerie">
                                                            </a>
                                                        </div>
                                                    
                                                
                                            

                                            <div class="noticia-conteudo">
												
						                        <h4><a href="http://ego.globo.com/famosos/noticia/2012/12/tres-dias-do-casamento-angela-bismarchi-faz-cha-de-lingerie.html" title="A três dias do casamento, Ângela Bismarchi faz chá de lingerie">A três dias do casamento, Ângela Bismarchi faz chá de linger...</a></h4>
						                        
                                                <p class="hora-plantao">há 2 dias</p>
                                            </div>
                                        </li>
                                    
                                        <li class="noticia-plantao">
                                            
                                                
                                                    
                                                        <div class="foto">
                                                            <a href="http://ego.globo.com/famosos/noticia/2012/12/luciano-e-flavia-mostram-celebracao-de-9-anos-de-casado-para-revista.html" class="borda-interna" title="Luciano e Flávia mostram celebração de 9 anos de casado para revista">
                                                                <img width="90" height="68" src="http://s2.glbimg.com/I02kil7XemEnEnmvnNoOKI2Rg-A=/90x68/smart/s.glbimg.com/jo/eg/f/original/2012/12/26/luciano.jpg" alt="Luciano e Flávia mostram celebração de 9 anos de casado para revista">
                                                            </a>
                                                        </div>
                                                    
                                                
                                            

                                            <div class="noticia-conteudo">
												
						                        <h4><a href="http://ego.globo.com/famosos/noticia/2012/12/luciano-e-flavia-mostram-celebracao-de-9-anos-de-casado-para-revista.html" title="Luciano e Flávia mostram celebração de 9 anos de casado para revista">Luciano e Flávia mostram celebração de 9 anos de casado para...</a></h4>
						                        
                                                <p class="hora-plantao">há 3 dias</p>
                                            </div>
                                        </li>
                                    
                                        <li class="noticia-plantao">
                                            
                                                
                                                    
                                                        <div class="foto">
                                                            <a href="http://ego.globo.com/famosos/noticia/2012/12/angela-bismarchi-sobre-casamento-estou-agitadinha.html" class="borda-interna" title="Ângela Bismarchi sobre casamento: 'Estou agitadinha'">
                                                                <img width="90" height="68" src="http://s2.glbimg.com/dH9_z8zq_iLYN9XIYrF_vKbYhKw=/90x68/smart/s.glbimg.com/jo/eg/f/original/2012/12/13/angela_620.jpg" alt="Ângela Bismarchi sobre casamento: 'Estou agitadinha'">
                                                            </a>
                                                        </div>
                                                    
                                                
                                            

                                            <div class="noticia-conteudo">
												
						                        <h4><a href="http://ego.globo.com/famosos/noticia/2012/12/angela-bismarchi-sobre-casamento-estou-agitadinha.html" title="Ângela Bismarchi sobre casamento: 'Estou agitadinha'">Ângela Bismarchi sobre casamento: 'Estou agitadinha'</a></h4>
						                        
                                                <p class="hora-plantao">há 3 dias</p>
                                            </div>
                                        </li>
                                    
                                        <li class="noticia-plantao ultima">
                                            
                                                
                                                    
                                                        <div class="foto">
                                                            <a href="http://ego.globo.com/famosos/noticia/2012/12/kaka-comemora-7-anos-de-casamento-com-foto-em-rede-social.html" class="borda-interna" title="Kaká comemora 7 anos de casamento com foto em rede social">
                                                                <img width="90" height="68" src="http://s2.glbimg.com/zhsQ0MN4bK-UK4B4HWBpWHyVWpU=/90x68/smart/s.glbimg.com/jo/eg/f/original/2012/12/23/kaka_instagram.jpg" alt="Kaká comemora 7 anos de casamento com foto em rede social">
                                                            </a>
                                                        </div>
                                                    
                                                
                                            

                                            <div class="noticia-conteudo">
												
						                        <h4><a href="http://ego.globo.com/famosos/noticia/2012/12/kaka-comemora-7-anos-de-casamento-com-foto-em-rede-social.html" title="Kaká comemora 7 anos de casamento com foto em rede social">Kaká comemora 7 anos de casamento com foto em rede social</a></h4>
						                        
                                                <p class="hora-plantao">há 6 dias</p>
                                            </div>
                                        </li>
                                    

                                </ul>
                            </div>

                            
                                <div class="botao-rodape">
                                    <a href="#">Proximo</a>
                                </div>
                            
                        </div>
                    
                </li>
            
        </ul>                  
EOD;
  $ego->replace_html("div#plantao-por-contexto", $html);
  $ego->render();
?>
