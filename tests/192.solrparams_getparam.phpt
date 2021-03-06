--TEST--
SolrParams::getParam()
--FILE--
<?php

$params = new SolrModifiableParams();

$params
	->set('q', 'lucene')
	->addParam('fq', 'popularity:[10 TO *]')
	->addParam('fq', 'section:0')
;

var_dump($params->get('fq'));
var_dump($params->get('q'));
?>
--EXPECT--
array(2) {
  [0]=>
  string(20) "popularity:[10 TO *]"
  [1]=>
  string(9) "section:0"
}
string(6) "lucene"