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
<p><a href="http://fridaytieday.com/">But you should get ready for next friday with some proper ties!</a></p>
<?php endif;?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37629602-2', 'isitfridaytieday.com');
  ga('send', 'pageview');

</script>

</body>
</html>