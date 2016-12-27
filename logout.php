<html>
<body>
<script>
alert('परिचय पोर्टल पर आने के लिए आपका धन्यवाद ');

</script>
<?php
 session_start();
 session_destroy();
 header("Location: intro.php");
exit;
?>
</body>
</html>

