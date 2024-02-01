<?php
// timezone.php

// Establecer la zona horaria a Santiago
add_filter('option_gmt_offset', function ($offset) {
    return -3; // Ajusta el valor según la diferencia horaria de Santiago
});
?>