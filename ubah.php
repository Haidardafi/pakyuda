<?php 
require 'functions.php';
( isset ( $_POST ["tekan"] ) ) 
if ( tambah ($_POST) > 0) {
       echo "
                 <script>
                 alert ('data berhasil ditambah')
                 document.location.href = 'index.php';
                 </script>
        ";
} else {
  echo "
               <script>
               alert ('data gagal ditambahkan');
               </script>
";
}
?>