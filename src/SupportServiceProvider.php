<?php

namespace Tipoff\Support;

use Tipoff\Support\View\Components\Money;

class SupportServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->hasBladeComponents([
                'money' => Money::class,
            ])
            ->name('support')
            ->hasViews()
            ->hasConfigFile('tipoff');
    }

    public function name(): string {
        return 'support';
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        $this->registerModelsAliases();
        $this->registerNovaModelsAliases();
    }

    /**
     * Add model aliases to service conainer.
     *
     * @return void
     */
    public function registerModelsAliases(): void
    {
        foreach (config('tipoff.model_class') as $alias => $class) {
            $this->app->alias($class, $alias);
        }
    }

    /**
     * Add nova model aliases to service conainer.
     *
     * @return void
     */
    public function registerNovaModelsAliases(): void
    {
        foreach (config('tipoff.nova_class') as $alias => $class) {
            $this->app->alias($class, 'nova.' . $alias);
        }
    }
}
