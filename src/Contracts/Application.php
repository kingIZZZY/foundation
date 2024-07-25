<?php

declare(strict_types=1);

namespace SwooleTW\Hyperf\Foundation\Contracts;

use SwooleTW\Hyperf\Container\Contracts\Container;
use SwooleTW\Hyperf\Support\ServiceProvider;

interface Application extends Container
{
    /**
     * Get the version number of the application.
     */
    public function version(): string;

    /**
     * Run the given array of bootstrap classes.
     */
    public function bootstrapWith(array $bootstrappers): void;

    /**
     * Determine if the application has been bootstrapped before.
     */
    public function hasBeenBootstrapped(): bool;

    /**
     * Set the base path for the application.
     *
     * @return $this
     */
    public function setBasePath(string $basePath): static;

    /**
     * Get the base path of the Laravel installation.
     */
    public function basePath(string $path = ''): string;

    /**
     * Get or check the current application environment.
     *
     * @param  string|array  ...$environments
     * @return string|bool
     */
    public function environment(...$environments): string|bool;

    /**
     * Determine if the application is in the local environment.
     *
     * @return bool
     */
    public function isLocal(): bool;

    /**
     * Determine if the application is in the production environment.
     *
     * @return bool
     */
    public function isProduction(): bool;

    /**
     * Detect the application's current environment.
     *
     * @return string
     */
    public function detectEnvironment(): string;

    /**
     * Determine if the application is running unit tests.
     *
     * @return bool
     */
    public function runningUnitTests(): bool;

    /**
     * Determine if the application is running with debug mode enabled.
     *
     * @return bool
     */
    public function hasDebugModeEnabled(): bool;

    /**
     * Register a service provider with the application.
     */
    public function register(ServiceProvider|string $provider, bool $force = false): ServiceProvider;

    /**
     * Get the registered service provider instances if any exist.
     */
    public function getProviders(ServiceProvider|string $provider): array;

    /**
     * Resolve a service provider instance from the class name.
     */
    public function resolveProvider(string $provider): ServiceProvider;

    /**
     * Determine if the application has booted.
     */
    public function isBooted(): bool;

    /**
     * Boot the application's service providers.
     */
    public function boot(): void;

    /**
     * Get the service providers that have been loaded.
     *
     * @return array<string, boolean>
     */
    public function getLoadedProviders(): array;

    /**
     * Determine if the given service provider is loaded.
     */
    public function providerIsLoaded(string $provider): bool;
}
