<?php

namespace KeiKey\WhisperUtils\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\AboutCommand;

/**
 * Class WhisperUtilsServiceProvider
 *
 * @package KeiKey\WhisperUtils
 */
final class WhisperUtilsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        AboutCommand::add('Whisper Utils is a package to help you integrate with Whisper.', fn () => ['Version' => '1.0.0']);

        $this->publishes([
            __DIR__.'/../config/whisper.php' => config_path('whisper.php'),
        ]);
    }
}