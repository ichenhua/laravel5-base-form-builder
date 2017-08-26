<?php
namespace Ichenhua\BaseFormBuilder\Facades;

use Illuminate\Support\Facades\Facade;

class BaseSearch extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'base-search';
    }
}