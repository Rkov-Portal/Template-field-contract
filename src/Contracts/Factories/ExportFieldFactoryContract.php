<?php

namespace Rkov\TemplateImportExport\Interfaces\Factories\Fields;

use RPortal\TField\Contracts\Factories\CommonFieldFactoryContract;
use RPortal\TFields\Contracts\ExportFieldContract;

/**
 * @author Yakov Rochev <gitarar98@yandex.ru>
 * 
 * A field that exports data factory
 */
interface ExportFieldFactoryContract extends CommonFieldFactoryContract
{
    /**
     * Create the field for prepare data for export
     * 
     * @return ExportFieldContract
     */
    public function createExportField(): ExportFieldContract;
}