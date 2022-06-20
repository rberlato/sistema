<?php
session_start();
session_destroy();
echo "<script>window.location = 'http://192.168.0.111/sistema/'</script>";
exit();