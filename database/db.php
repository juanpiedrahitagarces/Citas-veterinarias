<?php

if (!isset($_SESSION)) {
    session_start();
}
$conn = mysqli_connect(
    'localhost',

    'root',

    '',

    'reto_citas_veterinarias'
);
  // 'sql113.epizy.com',
   // 'epiz_31289733',
   // '1Bls0XE8ZQmbZ',
    //'epiz_31289733_reto_citas_veterinarias'
