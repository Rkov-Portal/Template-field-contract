<?php

namespace RPortal\TField\Exceptions;

use RPortal\TField\Contracts\Factories\CommonFieldFactoryContract;
use Exception;

class PrepareRowException extends Exception
{
    protected CommonFieldFactoryContract $field;

    public function setField(CommonFieldFactoryContract $field): void
    {
        $this->field = $field;
    }

    public function getField(): CommonFieldFactoryContract
    {
        return $this->field;
    }
}
