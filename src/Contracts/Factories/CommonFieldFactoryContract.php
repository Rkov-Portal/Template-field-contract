<?php

namespace RPortal\TField\Contracts\Factories;


/**
 * @author Yakov Rochev <gitarar98@yandex.ru>
 * 
 * Common interface field
 */
interface CommonFieldFactoryContract
{
    /**
     * Return the key of the field
     * 
     * @return string
     */
    public function createKey(): string;

    /**
     * Return the title of the field key
     * 
     * @return string
     */
    public function createTitle(): string;
}