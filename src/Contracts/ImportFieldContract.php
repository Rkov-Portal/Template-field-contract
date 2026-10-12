<?php

namespace Rkov\TemplateImportExport\Interfaces\Fields;

use RPortal\TField\Exceptions\PrepareRowException;

/**
 * @author Yakov Rochev <gitarar98@yandex.ru>
 * 
 * A field that prepare data of field for import
 */
interface ImportFieldContract
{
    /**
     * @param mixed $data
     * @return mixed
     * @throws PrepareRowException
     */
    public function prepareForImport(mixed $data): mixed;
}