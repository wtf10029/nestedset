<?php


namespace wtf10029\Nestedset;



use Hyperf\Database\Schema\Blueprint;

class NestedSetServiceProvider
{
    public function register()
    {
        Blueprint::macro('nestedSet', function () {
            NestedSet::columns($this);
        });

        Blueprint::macro('dropNestedSet', function () {
            NestedSet::dropColumns($this);
        });
    }

}