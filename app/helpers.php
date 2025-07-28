<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('site')) {
    /**
     * Accede a configuraciones definidas en config/site.php
     *
     * @param string $key La clave (ej: admin.title)
     * @param mixed $default Valor por defecto si no se encuentra
     * @return mixed
     */
    function site(string $key, $default = null)
    {
        return config("site.$key", $default);
    }
}

if (!function_exists('user_has_role')) {
    /**
     * Verifica si el usuario autenticado tiene un rol específico
     *
     * @param string $roleName Nombre del rol (ej. 'admin')
     * @return bool
     */
    function user_has_role(string $roleName = 'admin')
    {
        $user = Auth::user();
        if (!$user || !$user->roles->contains('name', $roleName)) {
            redirect()->route('home');
        }
    }
}
