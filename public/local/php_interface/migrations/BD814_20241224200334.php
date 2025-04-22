<?php

namespace Sprint\Migration;

use Cargonomica\Service\ConstantsService;
use CIBlockElement;
use CIBlockSection;
use Exception;

class BD814_20241224200334 extends Version
{
    protected $author = "v.andreev";

    protected $description = "Привязка к созданному разделу 1 уровня ИБ \"Cargonomica - Часто ищут\" типа ИБ \"Cargonomica - Меню\"";

    protected $moduleVersion = "4.15.1";

    /**
     * @return bool
     * @throws Exception
     */
    public function up(): bool
    {
        ConstantsService::define(true);

        $element = CIBlockElement::GetList(
            [],
            [
                'IBLOCK_ID' => CARGONOMICA_SITE_TEMPLATE_SETTINGS_IB_ID,
                'CODE' => 'CARGONOMICA_MAIN',
            ],
            false,
            ['nTopCount' => 1],
            ['ID'],
        )->Fetch() ?: [];
        $elementId = (int)($element['ID'] ?? null);
        if (!$elementId) {
            throw new Exception('Элемент с кодом CARGONOMICA_MAIN не найден в ИБ настроек шаблона сайта ');
        }

        $targetSection = CIBlockSection::GetList(
            [],
            [
                'CODE' => 'MAIN',
            ],
            false,
            false,
            [
                'ID',
            ],
        )->Fetch() ?: [];
        $targetSectionId = (int)($targetSection['ID'] ?? null);
        if (!$targetSectionId) {
            throw new Exception('Раздел с кодом MAIN не найден в ИБ Cargonomica - Часто ищут');
        }

        CIBlockElement::SetPropertyValuesEx(
            $elementId,
            CARGONOMICA_SITE_TEMPLATE_SETTINGS_IB_ID,
            ['FREQUENTLY_SEARCHED' => $targetSectionId],
        );
        return true;
    }

    /**
     * @return bool
     */
    public function down(): bool
    {
        $this->outError('Миграция необратима');

        return false;
    }
}
