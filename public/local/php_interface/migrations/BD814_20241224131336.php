<?php

namespace Sprint\Migration;

use Sprint\Migration\Exceptions\HelperException;

class BD814_20241224131336 extends Version
{
    protected $author = "v.andreev";

    protected $description = "Миграция для свойства 'Часто ищут' инфоблока типа ИБ 'Cargonomica - Общее'";

    protected $moduleVersion = "4.15.1";

    /**
     * @return bool
     * @throws HelperException
     */
    public function up(): bool
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('CARGONOMICA_SITE_TEMPLATE_SETTINGS', 'CARGONOMICA_GENERAL');
        $helper->Iblock()->saveProperty($iblockId, [
            'NAME' => 'Часто ищут',
            'ACTIVE' => 'Y',
            'SORT' => '1100',
            'CODE' => 'FREQUENTLY_SEARCHED',
            'DEFAULT_VALUE' => '',
            'PROPERTY_TYPE' => 'G',
            'ROW_COUNT' => '1',
            'COL_COUNT' => '30',
            'LIST_TYPE' => 'L',
            'MULTIPLE' => 'N',
            'XML_ID' => NULL,
            'FILE_TYPE' => '',
            'MULTIPLE_CNT' => '5',
            'LINK_IBLOCK_ID' => 'CARGONOMICA_MENU:CARGONOMICA_FREQUENTLY_SEARCHED',
            'WITH_DESCRIPTION' => 'N',
            'SEARCHABLE' => 'N',
            'FILTRABLE' => 'N',
            'IS_REQUIRED' => 'N',
            'VERSION' => '2',
            'USER_TYPE' => 'SectionAuto',
            'USER_TYPE_SETTINGS' =>
                [
                    'VIEW' => 'E',
                    'SHOW_ADD' => 'N',
                    'MAX_WIDTH' => 0,
                    'MIN_HEIGHT' => 24,
                    'MAX_HEIGHT' => 1000,
                    'BAN_SYM' => ',;',
                    'REP_SYM' => ' ',
                    'OTHER_REP_SYM' => '',
                    'IBLOCK_MESS' => 'N',
                ],
            'HINT' => 'допускается привязывать только разделы 1 уровня',
            'FEATURES' =>
                [
                    0 =>
                        [
                            'MODULE_ID' => 'iblock',
                            'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
                            'IS_ENABLED' => 'N',
                        ],
                    1 =>
                        [
                            'MODULE_ID' => 'iblock',
                            'FEATURE_ID' => 'LIST_PAGE_SHOW',
                            'IS_ENABLED' => 'N',
                        ],
                ],
        ]);


        $helper->UserOptions()->saveElementForm($iblockId, [
            'Параметры|edit1' =>
                [
                    'ID' => 'ID',
                    'DATE_CREATE' => 'Создан',
                    'TIMESTAMP_X' => 'Изменен',
                    'ACTIVE' => 'Активность',
                    'NAME' => 'Название',
                    'CODE' => 'Символьный код',
                    'edit1_csection1' => 'Хедер',
                    'PROPERTY_LOGO_HEADER_DESKTOP_SVG' => 'Логотип в хедере - картинка (десктоп)',
                    'PROPERTY_LOGO_HEADER_TABLET_MOBILE_SVG' => 'Логотип в хедере - картинка (планшет и мобилка)',
                    'PROPERTY_LOGO_HEADER_LINK' => 'Логотип в хедере - ссылка',
                    'edit1_csection2' => 'Кнопка ЛК',
                    'PROPERTY_BUTTON_LK_TEXT' => 'Кнопка на ЛК - текст',
                    'PROPERTY_BUTTON_LK_LINK' => 'Кнопка на ЛК - ссылка',
                    'edit1_csection3' => 'Cookies',
                    'PROPERTY_COOKIES_SHOW_NOTIFICATION' => 'Cookies - выводить уведомление',
                    'PROPERTY_COOKIES_TEXT' => 'Cookies - текст',
                    'PROPERTY_COOKIES_BUTTON_TEXT' => 'Cookies - текст кнопки согласия',
                    'edit1_csection4' => 'Футер',
                    'PROPERTY_FREQUENTLY_SEARCHED' => 'Часто ищут',
                    'PROPERTY_LOGO_FOOTER_DESKTOP_SVG' => 'Логотип в футере - картинка (десктоп)',
                    'PROPERTY_LOGO_FOOTER_TABLET_MOBILE_SVG' => 'Логотип в футере - картинка (планшет и мобилка)',
                    'PROPERTY_LOGO_FOOTER_LINK' => 'Логотип в футере - ссылка',
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
        $iblockId = $helper->Iblock()->getIblockIdIfExists('CARGONOMICA_SITE_TEMPLATE_SETTINGS', 'CARGONOMICA_GENERAL');

        $helper->Iblock()->deletePropertyIfExists($iblockId, 'PROPERTY_FREQUENTLY_SEARCHED');

        $helper->UserOptions()->saveElementForm($iblockId, [
            'Параметры|edit1' =>
                [
                    'ID' => 'ID',
                    'DATE_CREATE' => 'Создан',
                    'TIMESTAMP_X' => 'Изменен',
                    'ACTIVE' => 'Активность',
                    'NAME' => 'Название',
                    'CODE' => 'Символьный код',
                    'edit1_csection1' => 'Хедер',
                    'PROPERTY_LOGO_HEADER_DESKTOP_SVG' => 'Логотип в хедере - картинка (десктоп)',
                    'PROPERTY_LOGO_HEADER_TABLET_MOBILE_SVG' => 'Логотип в хедере - картинка (планшет и мобилка)',
                    'PROPERTY_LOGO_HEADER_LINK' => 'Логотип в хедере - ссылка',
                    'edit1_csection2' => 'Кнопка ЛК',
                    'PROPERTY_BUTTON_LK_TEXT' => 'Кнопка на ЛК - текст',
                    'PROPERTY_BUTTON_LK_LINK' => 'Кнопка на ЛК - ссылка',
                    'edit1_csection3' => 'Cookies',
                    'PROPERTY_COOKIES_SHOW_NOTIFICATION' => 'Cookies - выводить уведомление',
                    'PROPERTY_COOKIES_TEXT' => 'Cookies - текст',
                    'PROPERTY_COOKIES_BUTTON_TEXT' => 'Cookies - текст кнопки согласия',
                    'edit1_csection4' => 'Футер',
                    'PROPERTY_LOGO_FOOTER_DESKTOP_SVG' => 'Логотип в футере - картинка (десктоп)',
                    'PROPERTY_LOGO_FOOTER_TABLET_MOBILE_SVG' => 'Логотип в футере - картинка (планшет и мобилка)',
                    'PROPERTY_LOGO_FOOTER_LINK' => 'Логотип в футере - ссылка',
                ],
        ]);

        return true;
    }
}
