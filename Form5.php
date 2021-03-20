<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 5</title>
</head>
<body>
    
<?php $prev=""; 
    if(isset($_POST["text"])){
        $prev= $_POST["text"]; }

?>

<form action="Form5.php" method="post">

<input type="text" name="text" value=<?php echo $prev?>>
<input type="submit">

<p>Previous Input:  </p>

</form>

<pre>
$_POST
<?php
print_r($_POST)
?>
</pre>


</body>
</html>