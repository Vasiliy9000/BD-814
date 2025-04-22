<?php

namespace Sprint\Migration;

class BD814_20241225204719 extends Version
{
    protected $author = "v.andreev";

    protected $description   = "Миграция для элементов разделов 2го уровня, для элемента инфоблока 'Часто ищут'";

    protected $moduleVersion = "4.15.1";

    /**
     * @return bool
     * @throws Exceptions\HelperException
     * @throws Exceptions\MigrationException
     * @throws Exceptions\RestartException
     */
    public function up(): bool
    {
        $this->getExchangeManager()
             ->IblockElementsImport()
             ->setExchangeResource('iblock_elements.xml')
             ->setLimit(20)
             ->execute(function ($item) {
                 $this->getHelperManager()
                      ->Iblock()
                      ->addElement(
                          $item['iblock_id'],
                          $item['fields'],
                          $item['properties']
                      );
             });
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
