<?php

setcookie("X-USER-ID", "", time() - 3600);

echo "<script>window.location.href='login.php'</script>";