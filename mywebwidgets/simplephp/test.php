<?php

exec("mkdir testo2 2>&1", $output, $resultCode);
if ($resultCode) {
  echo "Result: " . $resultCode . "\n";
   echo implode("My Test \n", $output);
 }
 exec("cd testo 2>&1", $output, $resultCode);
 if ($resultCode) {
   echo "Result: " . $resultCode . "\n";
    echo implode("My Test \n", $output);
  }
$responseCMD = system('pwd', $retval3);
//
// exec("javac test.java 2>&1", $output, $resultCode);
//
// if ($resultCode) {
//   echo "Result: " . $resultCode . "\n";
//   echo implode("My Test \n", $output);
// }
//
// $responseCMD = system('java test', $retval3);

?>
