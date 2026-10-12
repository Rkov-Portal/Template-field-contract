<?php

namespace Rkov\TemplateImportExport\Interfaces\Factories\Fields;

use Rkov\TemplateImportExport\Interfaces\Fields\ImportFieldContract;
use RPortal\TField\Contracts\Factories\CommonFieldFactoryContract;

/**
 * @author Yakov Rochev <gitarar98@yandex.ru>
 * 
 * A field that import data 
 */
interface ImportFieldFactoryContract extends CommonFieldFactoryContract
{
    /**
     * Create the field for prepare data for import
     * 
     * @return ImportFieldContract
     */
    public function createImportField(): ImportFieldContract;
}