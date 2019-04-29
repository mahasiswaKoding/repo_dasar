<?php

// agar dapat menggunakan properti yang telah di setting di config.php
include "config.php";

define('BASE_URL', $base_url);

// membuat fungsi untuk penggunaan url dasar
function base_url($param = NULL)
{
    return BASE_URL . $param;
}
