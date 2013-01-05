<?php
  require_once("./lib/auth.php");
  require_once("./lib/ego.php");

  $ego = new Ego("http://ego.globo.com/");
  $html = <<<EOD
<div class="glb-grid-4 glb-primeiro area-topo-esquerda">
  <div class="destaque destaque-principal destaque-principal-vertical-ego">
    <div class="chamada ">
      <a class="animated" href="./profiles/arthur.php" title="Arthur Bilbão na balada">
        <style type="text/css">#foto-arthur {background-image:url('./imgs/egoarthur_thumb.jpg'); background-repeat: no-repeat; background-position: top left; }</style>            
        <div id="foto-arthur" class="foto">Arthur Bilbão na balada</div>
        <div class="texto">
          <div class="wrapper-chapeu">
            <p class="chapeu">ousado</p>
            <div class="wrapper-comentarios">
              <span class="comentarios">0</span>
            </div>
          </div>

          <h2 class="wrapper-titulo">
            <div class="animated titulo">
              <span class="animated background">Arthur Bilbão na balada</span>
              <span class="foreground">Arthur Bilbão na balada</span>
            </div>
          </h2>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="glb-grid-4 glb-ultimo area-topo-meio">
  <div class="destaque destaque-secundario destaque-secundario-ego hentry">
    <div class="chamada ">
      <a class="animated" href="http://ego.globo.com/famosos/noticia/2013/01/marina-ruy-barbosa-e-klebber-toledo-ganham-caricatura.html" title="Marina Ruy Barbosa e Klebber Toledo ganham caricatura">
        <style type="text/css">#foto-b120fe51-725a-41ff-b6a6-cd5e19503dab {background-image:url('http://s2.glbimg.com/9PVys9wMI57fi2Nzc9nhwRUzi6c=/300x185/s.glbimg.com/jo/eg/f/original/2013/01/02/marina_ruy_barbosa_e_klebber_toledo.jpg'); background-repeat: no-repeat; background-position: top left; }</style>
        <div id="foto-b120fe51-725a-41ff-b6a6-cd5e19503dab" class="foto">Marina Ruy Barbosa e Klebber Toledo ganham caricatura</div>
        <div class="texto">
          <div class="wrapper-chapeu">
            <p class="chapeu">ficou parecido?</p>
            <div class="wrapper-comentarios">
              <span class="comentarios visible">1</span>
            </div>
          </div>
          
          <h2 class="wrapper-titulo">
            <div class="animated titulo">
              <span class="animated background">Marina Ruy Barbosa e Klebber Toledo ganham caricatura</span>
              <span class="foreground">Marina Ruy Barbosa e Klebber Toledo ganham caricatura</span>
            </div>
          </h2>
        </div>
      </a>
    </div>
  </div>    
	
  <div class="destaque destaque-terciario destaque-terciario-ego hentry">
    <div class="duplo esquerda">
      <div class="chamada ">
        <a class="animated" href="http://ego.globo.com/famosos/noticia/2013/01/no-caribe-isis-valverde-manda-recado-para-o-namorado-saudades.html" title="No Caribe, Isis manda recado para o namorado">
          <style type="text/css">#foto-67b46fd9-8988-441e-b5fc-6d78429d6917 {background-image:url('http://s2.glbimg.com/ek8wH7zcSL1XBal2DBNXR1rejoM=/140x185/top/s.glbimg.com/jo/eg/f/original/2013/01/02/isis_valverde_01.jpg'); background-repeat: no-repeat; background-position: top left; }</style>
          <div id="foto-67b46fd9-8988-441e-b5fc-6d78429d6917" class="foto">No Caribe, Isis manda recado para o namorado</div>
          <div class="texto">
            <div class="wrapper-chapeu">
              <p class="chapeu">‘Saudades’</p>
            </div>

            <div class="wrapper-titulo">
              <div class="animated titulo">
                <span class="animated background">No Caribe, Isis manda recado para o namorado</span>
                <span class="foreground">No Caribe, Isis manda recado para o namorado</span>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="duplo direita">
      <div class="chamada ">
        <a class="animated" href="http://ego.globo.com/famosos/noticia/2013/01/haja-disposicao-gusttavo-lima-malha-de-madrugada.html" title="Gusttavo Lima malha de madrugada (Instagram/ Reprodução)">
        <style type="text/css">#foto-88aaf8aa-9aba-463b-8c43-b827f2e1b287 {background-image:url('http://s2.glbimg.com/AIbJPjSu7babWcQCgJ5boHe7EVA=/140x185/top/s.glbimg.com/jo/eg/f/original/2013/01/02/gusttavo_lima.jpg'); background-repeat: no-repeat; background-position: top left; }</style>
        <div id="foto-88aaf8aa-9aba-463b-8c43-b827f2e1b287" class="foto">Gusttavo Lima malha de madrugada (Instagram/ Reprodução)</div>
        <div class="texto">
          <div class="wrapper-chapeu">
            <p class="chapeu">Haja disposição!</p>
          </div>

          <div class="wrapper-titulo">
            <div class="animated titulo">
              <span class="animated background">Gusttavo Lima malha de madrugada</span>
              <span class="foreground">Gusttavo Lima malha de madrugada</span>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

  <div class="destaque destaque-secundario destaque-secundario-ego hentry">
    <div class="chamada ">
      <a class="animated" href="./profiles/marlos.php" title="Marlos Fernandes molha o cabelo">
        <style type="text/css">#foto-marlos {background-image:url('./imgs/marlos_thumb.jpg'); background-repeat: no-repeat; background-position: top left; }</style>
        <div id="foto-marlos" class="foto">Marlos Fernandes molha o cabelo</div>
        <div class="texto">
          <div class="wrapper-chapeu">
            <p class="chapeu">só no shampoo</p>
            <div class="wrapper-comentarios">
              <span class="comentarios visible">2</span>
            </div>
          </div>

          <h2 class="wrapper-titulo">
            <div class="animated titulo">
              <span class="animated background">Marlos Fernandes molha o cabelo</span>
              <span class="foreground">Marlos Fernandes molha o cabelo</span>
            </div>
          </h2>
        </div>
      </a>
    </div>
  </div>
</div>
EOD;
  $ego->replace_html("div.area-topo", $html);
  $ego->render();

