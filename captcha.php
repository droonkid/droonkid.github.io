<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="1894.6">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 12.0px 0.0px; font: 12.0px Times; color: #000000; -webkit-text-stroke: #000000; min-height: 14.0px}
    span.s1 {font-kerning: none}
  </style>
</head>
<body>
<?php $digits = str_split("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz?!")?>

<?php foreach(range(0,100) as $blank):?>
  <?php $s = ""?>
  <?php foreach(range(0,8) as $blank2) {$s = $s.$digits[array_rand($digits)]}?>
  <p><?=$s?></p>
<?php endforeach; ?>

</body>
</html>
