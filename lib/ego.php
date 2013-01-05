<?php

require_once "simple_html_dom.php";

class Ego
{
  private $html;

  function __construct($url) {
    $this->html = file_get_html($url);
    if(!isset($this->html))
      die("Unable to load $url");
    $this->setup();
  }

  private function starts_with($haystack, $needle) {
    return !strncmp($haystack, $needle, strlen($needle));
  }

  private function setup() {
    //apaga conteudo
    $this->remove_html("div.materia-conteudo");
    
    //corrige os links
    foreach($this->html->find("a[href]") as $element) {
      if($this->starts_with($element->href, "/") && $element->href != "/")
        $element->href = "http://ego.globo.com".$element->href;
    }
    
    //remove script para exibir em mobile
    foreach($this->html->find("script[type=\"text/javascript\"]") as $element) {
      if(preg_match("*mobile\|blackberry\|docomo\|fennec\|htc\|ip*", $element->innertext))
        $element->outertext = "";
    }
  }

  public function render() {
    echo $this->html->save();
  }

  public function replace_html($selector, $text) {
    $elements = $this->html->find($selector);
    if(!$elements)
      return NULL;
    foreach($elements as $element) {
      $element->innertext = $text;
    }
    return $this->html->find($selector);
  }

  public function append_html($selector, $text) {
    $elements = $this->html->find($selector);
    if(!$elements)
      return NULL;
    foreach($elements as $element) {
      $element->innertext .= $text;
    }
    return $this->html->find($selector);
  }

  public function prepend_html($selector, $text) {
    $elements = $this->html->find($selector);
    if(!$elements)
      return NULL;
    foreach($elements as $element) {
      $element->innertext = $text.$element->innertext;
    }
    return $this->html->find($selector);
  }

  public function remove_html($selector) {
    $elements = $this->html->find($selector);
    if(!$elements)
      return NULL;
    foreach($elements as $element) {
      $element->innertext = "";
    }
    return TRUE;
  }

  public function title($text) {
    $this->replace_html("title","EGO - $text - notícias de Famosos");
    return $this->replace_html("div.materia-titulo h1", $text);
  }

  public function subtitle($text) {
    return $this->replace_html("div.materia-titulo h2", $text);
  }

  public function author($text) {
    if(!$this->replace_html("div.materia-assinatura p.author strong", $text))
      $this->prepend_html("div.materia-assinatura p.author", "<strong class=\"fn\">$text</strong>");
    return $this->html->find("div.materia-assinatura p.author strong");
  } 

  public function add_paragraph($text) {
    return $this->append_html("div.materia-conteudo", "<p>$text</p>");
  }

  public function add_image($src, $title, $width = 600, $height = 400) {
    return $this->append_html("div.materia-conteudo", "<div class=\"foto componente_materia midia-largura-$width\">
	<img alt=\"$title\" height=\"$height\" src=\"$src\" title=\"$title\" width=\"$width\"><strong>$title</strong></div>");
  }
  
}
?>
