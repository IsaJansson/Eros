<?php 
include(__DIR__.'/config.php'); 
 
$eros['title'] = "Hello World";
 
$eros['header'] = <<<EOD
<img class='sitelogo' src='img/eros.png' alt='Eros Logo'/>
<span class='sitetitle'>Eros webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 
$eros['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Eros ser ut och fungerar.</p>
EOD;
 
$eros['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Isa Jansson | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
include(EROS_THEME_PATH);