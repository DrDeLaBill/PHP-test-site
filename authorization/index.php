<?php

    if (isset($_COOKIE['last_page'])) {
        exit("<meta http-equiv='refresh' content='0; url= /phpsite/authorization/templates/{$_COOKIE['last_page']}.php'>");
    } else {
        exit("<meta http-equiv='refresh' content='0; url= /phpsite/authorization/register.php'>");
    }
