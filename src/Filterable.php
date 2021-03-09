<?php

namespace Kodewbit\Meteor;

use Kodewbit\Meteor\Filter;
use Illuminate\Database\Eloquent\Builder;

/**
 * Trait Filterable
 *
 * @method Builder filter($filter)
 */
trait Filterable
{
    /**
     * Apply all relevant filters.
     *
     * @param Builder $builder
     * @param Filter $filter
     * @return Builder
     */
    public function scopeFilter(Builder $builder, Filter $filter)
    {
        return $filter->apply($builder);
    }
}
