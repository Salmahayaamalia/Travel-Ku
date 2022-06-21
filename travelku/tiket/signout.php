<?php
session_start();
session_destroy();
echo "<script>window.alert('Anda telah SignOut');window.close();</script>";
