<?php

namespace Sprint\Migration;

use Sprint\Migration\Exceptions\HelperException;

class BD814_20241224094412 extends Version
{
    protected $author = "v.andreev";

    protected $description = "Миграция для категорий элемента инфоблока 'Часто ищут'. Категория 1го уровня 'Часто ищут' и 
    категрии 2го уровня 'Cargo.Fuel' и 'Продукты'";

    protected $moduleVersion = "4.15.1";

    /**
     * @return bool
     * @throws HelperException
     */
    public function up(): bool
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'CARGONOMICA_FREQUENTLY_SEARCHED',
            'CARGONOMICA_MENU'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            [
                0 =>
                    [
                        'NAME' => 'Часто ищут',
                        'CODE' => 'MAIN',
                        'SORT' => '500',
                        'ACTIVE' => 'Y',
                        'XML_ID' => NULL,
                        'DESCRIPTION' => '',
                        'DESCRIPTION_TYPE' => 'text',
                        'UF_LINK' => NULL,
                        'UF_TEXT' => 'Часто ищут Раздел',
                        'CHILDS' =>
                            [
                                0 =>
                                    [
                                        'NAME' => 'Cargo.Fuel',
                                        'CODE' => 'Cargo.Fuel',
                                        'SORT' => '500',
                                        'ACTIVE' => 'Y',
                                        'XML_ID' => NULL,
                                        'DESCRIPTION' => '',
                                        'DESCRIPTION_TYPE' => 'text',
                                        'UF_LINK' => 'https://www.youtube.com/',
                                        'UF_TEXT' => 'Cargo.Fuel',
                                    ],
                                1 =>
                                    [
                                        'NAME' => 'Продукты',
                                        'CODE' => 'Products',
                                        'SORT' => '500',
                                        'ACTIVE' => 'Y',
                                        'XML_ID' => NULL,
                                        'DESCRIPTION' => '',
                                        'DESCRIPTION_TYPE' => 'text',
                                        'UF_LINK' => NULL,
                                        'UF_TEXT' => 'Продукты',
                                    ],
                            ],
                    ],
            ]);
        return true;
    }

    /**
     * @return bool
     * @throws HelperException
     */
    public function down(): bool
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'CARGONOMICA_FREQUENTLY_SEARCHED',
            'CARGONOMICA_MENU',
        );

        $helper->iblock()->deleteSectionIfExists($iblockId, 'MAIN');

        return true;
    }
}
