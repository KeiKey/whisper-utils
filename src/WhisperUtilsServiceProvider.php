<?php

namespace KeiKey\WhisperUtils;

use Illuminate\Support\ServiceProvider;

/**
 * Class WhisperUtilsServiceProvider
 *
 * @package KeiKey\WhisperUtils
 */
final class WhisperUtilsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/whisper.php' => config_path('whisper.php'),
        ]);
    }
}