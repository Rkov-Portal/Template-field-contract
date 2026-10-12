<?php

namespace RPortal\TField\Exceptions;

use RPortal\TField\Contracts\Factories\CommonFieldFactoryContract;
use Exception;

class ExportRowException extends Exception
{
    protected CommonFieldFactoryContract $field;

    public function setRowKey(CommonFieldFactoryContract $field): void
    {
        $this->field = $field;
    }

    public function getRowKey(): CommonFieldFactoryContract
    {
        return $this->field;
    }
}