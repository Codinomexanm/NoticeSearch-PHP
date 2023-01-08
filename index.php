<?php
$html = file_get_contents('https://www.globo.com/');

libxml_use_internal_errors(true);

$domDocument = new DOMDocument();
$domDocument->loadHTML($html);

$linkTags = $domDocument -> getElementsByTagName('a');
$linkList ='';
$clasList ='';

echo "<table>
<tr>Resultados</tr>";
foreach($linkTags as $link){
    $href = $link -> getAttribute('href');
    
    echo "<tr>";
    if(!empty($href)){
        $linkList = $link->getAttribute('href');
        $clasList = $link-> getAttribute('title');
    }
    echo "<tr></tr><td><a href='$linkList'>$clasList</a></td></tr>";
}
echo "</tr>";
echo"</table>";

?>
