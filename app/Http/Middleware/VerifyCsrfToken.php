<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
	'redirect.php',
	'index.php',
	'cria.php',
	'cadastroCliente.php',
	'cadastroCliente2.php',
        'cadastroPrestador.php',
        'cadastroPrestador2.php'

    ];
}
