<?php

declare(strict_types=1);

namespace Tipoff\Support\Contracts\Models;

interface UserInterface extends BaseModelInterface
{
    public function hasRole($roles, string $guard = null): bool;

    public function hasPermissionTo($permission, $guardName = null): bool;
}
