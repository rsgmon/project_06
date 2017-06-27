<html>
<!--

Tala Analytics demo

 -->
<head>
<?php
//this is the main library loads (bootstrap, js and css files etc)
// it is separated out so that it can be loaded from nodejs or some other framework.
require './tala-text-header.html';

?>

</head>

<!-- *************************************************** -->

<body>
<?php 
// this is the main code for the demo.
// it is separated out so that it can be loaded from node js or some other framework as long as the header includes are exectuted first
require './tala-text-body.html';

?>
</body>
</html>
