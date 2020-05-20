<?php

namespace Bnw\SkeletonLaravel\Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Encryption\Encrypter;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        // A aplicação padrão do Laravel está instalada como dependência do composer
        $app = require dirname(__DIR__).'/vendor/laravel/laravel/bootstrap/app.php';
        $app->make(Kernel::class)->bootstrap();

        // O kernel do laravel precisa de uma chave criptográfica para poder funcionar
        // por esse motivo, como o módulo utilizar uma instalação limpa do Laravel,
        // é preciso gerar uma chava em tempo de execução para que os testes de funcionalidade
        // possam funcionar normalmente
        $cipher = $app->make('config')->get('app.cipher');
        $key = 'base64:'.base64_encode(Encrypter::generateKey($cipher));
        $app->make('config')->set('app.key', $key);

        return $app;
    }
}
