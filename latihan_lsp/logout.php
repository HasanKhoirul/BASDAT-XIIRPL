<?php

session_start();

// Menghapusn semua sesi
session_destroy();

//  Mngarahkan kehalaman dan memberikan pesan LogOut
header("location:../latihan_lsp/index.php?pesan=logout")
?>