<?php
session_start();
session_destroy();

echo "<script>window.alert('Now you are Sign Out'); window.location.href='../';</script>";
