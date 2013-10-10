<?php
date_default_timezone_set('Europe/Stockholm');
?>
<!DOCTYPE html>
<html>
<head>

    <title>Is it Friday Tieday?</title>
    <meta name="description" content="We let you know if it's Friday Tieday or if it's just a regular tie day.">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<?php if (date('l') == 'Friday'):?>
<h1>Yes, it's Friday Tieday!</h1>
<p><a href="http://fridaytieday.com/">Wear a Friday Tieday tie or GTFO!</a></p>
<?php else:?>
<h1>It's not Friday Tieday yet!</h1>
<p><a href="http://fridaytieday.com/">But should get ready for next friday with some proper ties!</a></p>
<?php endif;?>

</body>
</html>