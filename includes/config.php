<?php
  $mydomain = $_SERVER['HTTP_HOST'];
  $domaintoproxy = "https://thepiratebay.org";

  # Add your custom code here and it will be inserted before the closing </body> tag (e.g. Google Analytics)
  $footerCode = <<<EOT
<!-- <a href="https://proxybay.bet">More Pirate Bay Proxies</a><br> -->
<!-- <a href="https://proxybay.bet/setup.html">Set up your own proxy</a><br> -->
EOT;
?>
