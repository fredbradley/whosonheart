<?php

header ("Content-Type:text/css");

ob_flush();

if ( isset($_GET['color']) AND $_GET['color'] != '' ):

    $color = $_GET['color'];

?>

#top { background-color: #<?php echo $color; ?>; }

a,
h1 span,
h2 span,
h3 span,
h4 span,
h5 span,
h6 span { color: #<?php echo $color; ?>; }


<?php

endif;

ob_end_flush();

?>