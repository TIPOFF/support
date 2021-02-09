<?php

declare(strict_types=1);

namespace Tipoff\Support\Models;

use Assert\Assert;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function belongsTo($related, $foreignKey = null, $ownerKey = null, $relation = null)
    {
        if (is_string($related)) {
            Assert::that($related)->classExists();
        }

        return parent::belongsTo($related, $foreignKey, $ownerKey, $relation);
    }

    /**
     * @inheritDoc
     * @psalm-suppress UnusedVariable
     */
    protected function guessBelongsToRelation()
    {
        // Account for extra stack frame!
        [$one, $two, $three, $caller] = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 4);

        return $caller['function'];
    }

    /**
     * @inheritDoc
     */
    public function hasMany($related, $foreignKey = null, $localKey = null)
    {
        if (is_string($related)) {
            Assert::that($related)->classExists();
        }

        return parent::hasMany($related, $foreignKey, $localKey);
    }
}
