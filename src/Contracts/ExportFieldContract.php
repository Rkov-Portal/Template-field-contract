<?php

namespace RPortal\TFields\Contracts;

use RPortal\TField\Exceptions\ExportRowException;

/**
 * @author Yakov Rochev <gitarar98@yandex.ru>
 * 
 * A field that prepare data of field for export
 */
interface ExportFieldContract
{
    /**
     * @param mixed $data
     * @return mixed
     * @throws ExportRowException
     */
    public function prepareForExport(mixed $data): mixed;
}