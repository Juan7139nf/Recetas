<?php

if (!function_exists('site')) {
    /**
     * Accede a configuraciones definidas en config/site.php
     *
     * @param string $key La clave (ej: admin.title)
     * @param mixed $default Valor por defecto si no se encuentra
     * @return mixed
     */
    function site(string $key, $default = null) {
        return config("site.$key", $default);
    }
}
