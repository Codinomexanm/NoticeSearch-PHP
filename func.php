<?php
function buscaNoticia($url,$hq){
    
libxml_use_internal_errors(true);

$conteudo = file_get_contents(filename: 'https://www.'.$url.'.com/');
$document = new DOMDocument;
$document->loadHTML($conteudo);

$xPath = new DOMXPath($document);
$domNodeList = $xPath->query(expression: './/div[@class="'.$hq.'"]');

echo "<table>
 <tr>Resultados:</tr>";
foreach($domNodeList as $elemento){
        $virus= $elemento->textContent;
        $xxt =$elemento->firstElementChild->getAttribute('href');

        echo "<tr></tr><td><a href='$xxt'>$virus</a></td></tr>";
         
}
    echo "</tr>";
    echo"</table>";
}
?>