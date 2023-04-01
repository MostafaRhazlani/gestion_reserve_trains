<?php

  if(isset($_COOKIE['success'])) {
    echo "<script>
            Swal.fire({
            title: 'Success!',
            text: '".$_COOKIE['success']."',
            icon: 'success',
            confirmButtonText: 'OK'
            });
          </script>";
    
  }

  if(isset($_COOKIE['error'])) {
    echo "<script>
            Swal.fire({
            title: 'Error!',
            text: '".$_COOKIE['error']."',
            icon: 'error',
            confirmButtonText: 'OK'
            });
          </script>";
  }

  if(isset($_COOKIE['info'])) {
    echo "<script>
            Swal.fire({
            title: 'Alert!',
            text: '".$_COOKIE['info']."',
            icon: 'info',
            confirmButtonText: 'OK'
            });
          </script>";
  }

?>