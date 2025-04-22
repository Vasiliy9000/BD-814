<?php

namespace Sprint\Migration;

use Sprint\Migration\Exceptions\HelperException;

class BD814_20241223141330 extends Version
{
    protected $author = "v.andreev";

    protected $description = "Миграция инфоблока 'Часто ищут'";

    protected $moduleVersion = "4.15.1";

    /**
     * @return bool
     * @throws Exceptions\HelperException
     */
    public function up(): bool
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->saveIblock([
            'IBLOCK_TYPE_ID' => 'CARGONOMICA_MENU',
            'LID' =>
                [
                    0 => 's1',
                ],
            'CODE' => 'CARGONOMICA_FREQUENTLY_SEARCHED',
            'API_CODE' => NULL,
            'REST_ON' => 'N',
            'NAME' => 'Cargonomica - Часто ищут',
            'ACTIVE' => 'Y',
            'SORT' => '500',
            'LIST_PAGE_URL' => '',
            'DETAIL_PAGE_URL' => '',
            'SECTION_PAGE_URL' => '',
            'CANONICAL_PAGE_URL' => '',
            'PICTURE' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'RSS_TTL' => '24',
            'RSS_ACTIVE' => 'Y',
            'RSS_FILE_ACTIVE' => 'N',
            'RSS_FILE_LIMIT' => NULL,
            'RSS_FILE_DAYS' => NULL,
            'RSS_YANDEX_ACTIVE' => 'N',
            'XML_ID' => NULL,
            'INDEX_ELEMENT' => 'Y',
            'INDEX_SECTION' => 'Y',
            'WORKFLOW' => 'N',
            'BIZPROC' => 'N',
            'SECTION_CHOOSER' => 'L',
            'LIST_MODE' => '',
            'RIGHTS_MODE' => 'S',
            'SECTION_PROPERTY' => 'Y',
            'PROPERTY_INDEX' => 'N',
            'VERSION' => '1',
            'LAST_CONV_ELEMENT' => '0',
            'SOCNET_GROUP_ID' => NULL,
            'EDIT_FILE_BEFORE' => '',
            'EDIT_FILE_AFTER' => '',
            'SECTIONS_NAME' => 'Разделы',
            'SECTION_NAME' => 'Раздел',
            'ELEMENTS_NAME' => 'Элементы',
            'ELEMENT_NAME' => 'Элемент',
            'EXTERNAL_ID' => NULL,
            'LANG_DIR' => '/',
            'IPROPERTY_TEMPLATES' =>
                [],
            'ELEMENT_ADD' => 'Добавить элемент',
            'ELEMENT_EDIT' => 'Изменить элемент',
            'ELEMENT_DELETE' => 'Удалить элемент',
            'SECTION_ADD' => 'Добавить раздел',
            'SECTION_EDIT' => 'Изменить раздел',
            'SECTION_DELETE' => 'Удалить раздел',
        ]);
        $helper->Iblock()->saveIblockFields($iblockId, [
            'IBLOCK_SECTION' =>
                [
                    'NAME' => 'Привязка к разделам',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' =>
                        [
                            'KEEP_IBLOCK_SECTION_ID' => 'N',
                        ],
                    'VISIBLE' => 'Y',
                ],
            'ACTIVE' =>
                [
                    'NAME' => 'Активность',
                    'IS_REQUIRED' => 'Y',
                    'DEFAULT_VALUE' => 'Y',
                    'VISIBLE' => 'Y',
                ],
            'ACTIVE_FROM' =>
                [
                    'NAME' => 'Начало активности',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' => '',
                    'VISIBLE' => 'Y',
                ],
            'ACTIVE_TO' =>
                [
                    'NAME' => 'Окончание активности',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' => '',
                    'VISIBLE' => 'Y',
                ],
            'SORT' =>
                [
                    'NAME' => 'Сортировка',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' => '500',
                    'VISIBLE' => 'Y',
                ],
            'NAME' =>
                [
                    'NAME' => 'Название',
                    'IS_REQUIRED' => 'Y',
                    'DEFAULT_VALUE' => '',
                    'VISIBLE' => 'Y',
                ],
            'PREVIEW_PICTURE' =>
                [
                    'NAME' => 'Картинка для анонса',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' =>
                        [
                            'FROM_DETAIL' => 'N',
                            'UPDATE_WITH_DETAIL' => 'N',
                            'DELETE_WITH_DETAIL' => 'N',
                            'SCALE' => 'N',
                            'WIDTH' => '',
                            'HEIGHT' => '',
                            'IGNORE_ERRORS' => 'N',
                            'METHOD' => 'resample',
                            'COMPRESSION' => 95,
                            'USE_WATERMARK_TEXT' => 'N',
                            'WATERMARK_TEXT' => '',
                            'WATERMARK_TEXT_FONT' => '',
                            'WATERMARK_TEXT_COLOR' => '',
                            'WATERMARK_TEXT_SIZE' => '',
                            'WATERMARK_TEXT_POSITION' => 'tl',
                            'USE_WATERMARK_FILE' => 'N',
                            'WATERMARK_FILE' => '',
                            'WATERMARK_FILE_ALPHA' => '',
                            'WATERMARK_FILE_POSITION' => 'tl',
                            'WATERMARK_FILE_ORDER' => '',
                        ],
                    'VISIBLE' => 'Y',
                ],
            'PREVIEW_TEXT_TYPE' =>
                [
                    'NAME' => 'Тип описания для анонса',
                    'IS_REQUIRED' => 'Y',
                    'DEFAULT_VALUE' => 'text',
                    'VISIBLE' => 'Y',
                ],
            'PREVIEW_TEXT' =>
                [
                    'NAME' => 'Описание для анонса',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' => '',
                    'VISIBLE' => 'Y',
                ],
            'DETAIL_PICTURE' =>
                [
                    'NAME' => 'Детальная картинка',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' =>
                        [
                            'SCALE' => 'N',
                            'WIDTH' => '',
                            'HEIGHT' => '',
                            'IGNORE_ERRORS' => 'N',
                            'METHOD' => 'resample',
                            'COMPRESSION' => 95,
                            'USE_WATERMARK_TEXT' => 'N',
                            'WATERMARK_TEXT' => '',
                            'WATERMARK_TEXT_FONT' => '',
                            'WATERMARK_TEXT_COLOR' => '',
                            'WATERMARK_TEXT_SIZE' => '',
                            'WATERMARK_TEXT_POSITION' => 'tl',
                            'USE_WATERMARK_FILE' => 'N',
                            'WATERMARK_FILE' => '',
                            'WATERMARK_FILE_ALPHA' => '',
                            'WATERMARK_FILE_POSITION' => 'tl',
                            'WATERMARK_FILE_ORDER' => '',
                        ],
                    'VISIBLE' => 'Y',
                ],
            'DETAIL_TEXT_TYPE' =>
                [
                    'NAME' => 'Тип детального описания',
                    'IS_REQUIRED' => 'Y',
                    'DEFAULT_VALUE' => 'text',
                    'VISIBLE' => 'Y',
                ],
            'DETAIL_TEXT' =>
                [
                    'NAME' => 'Детальное описание',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' => '',
                    'VISIBLE' => 'Y',
                ],
            'XML_ID' =>
                [
                    'NAME' => 'Внешний код',
                    'IS_REQUIRED' => 'Y',
                    'DEFAULT_VALUE' => '',
                    'VISIBLE' => 'Y',
                ],
            'CODE' =>
                [
                    'NAME' => 'Символьный код',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' =>
                        [
                            'UNIQUE' => 'N',
                            'TRANSLITERATION' => 'N',
                            'TRANS_LEN' => 100,
                            'TRANS_CASE' => 'L',
                            'TRANS_SPACE' => '-',
                            'TRANS_OTHER' => '-',
                            'TRANS_EAT' => 'Y',
                            'USE_GOOGLE' => 'N',
                        ],
                    'VISIBLE' => 'Y',
                ],
            'TAGS' =>
                [
                    'NAME' => 'Теги',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' => '',
                    'VISIBLE' => 'Y',
                ],
            'SECTION_NAME' =>
                [
                    'NAME' => 'Название',
                    'IS_REQUIRED' => 'Y',
                    'DEFAULT_VALUE' => '',
                    'VISIBLE' => 'Y',
                ],
            'SECTION_PICTURE' =>
                [
                    'NAME' => 'Картинка для анонса',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' =>
                        [
                            'FROM_DETAIL' => 'N',
                            'UPDATE_WITH_DETAIL' => 'N',
                            'DELETE_WITH_DETAIL' => 'N',
                            'SCALE' => 'N',
                            'WIDTH' => '',
                            'HEIGHT' => '',
                            'IGNORE_ERRORS' => 'N',
                            'METHOD' => 'resample',
                            'COMPRESSION' => 95,
                            'USE_WATERMARK_TEXT' => 'N',
                            'WATERMARK_TEXT' => '',
                            'WATERMARK_TEXT_FONT' => '',
                            'WATERMARK_TEXT_COLOR' => '',
                            'WATERMARK_TEXT_SIZE' => '',
                            'WATERMARK_TEXT_POSITION' => 'tl',
                            'USE_WATERMARK_FILE' => 'N',
                            'WATERMARK_FILE' => '',
                            'WATERMARK_FILE_ALPHA' => '',
                            'WATERMARK_FILE_POSITION' => 'tl',
                            'WATERMARK_FILE_ORDER' => '',
                        ],
                    'VISIBLE' => 'Y',
                ],
            'SECTION_DESCRIPTION_TYPE' =>
                [
                    'NAME' => 'Тип описания',
                    'IS_REQUIRED' => 'Y',
                    'DEFAULT_VALUE' => 'text',
                    'VISIBLE' => 'Y',
                ],
            'SECTION_DESCRIPTION' =>
                [
                    'NAME' => 'Описание',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' => '',
                    'VISIBLE' => 'Y',
                ],
            'SECTION_DETAIL_PICTURE' =>
                [
                    'NAME' => 'Детальная картинка',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' =>
                        [
                            'SCALE' => 'N',
                            'WIDTH' => '',
                            'HEIGHT' => '',
                            'IGNORE_ERRORS' => 'N',
                            'METHOD' => 'resample',
                            'COMPRESSION' => 95,
                            'USE_WATERMARK_TEXT' => 'N',
                            'WATERMARK_TEXT' => '',
                            'WATERMARK_TEXT_FONT' => '',
                            'WATERMARK_TEXT_COLOR' => '',
                            'WATERMARK_TEXT_SIZE' => '',
                            'WATERMARK_TEXT_POSITION' => 'tl',
                            'USE_WATERMARK_FILE' => 'N',
                            'WATERMARK_FILE' => '',
                            'WATERMARK_FILE_ALPHA' => '',
                            'WATERMARK_FILE_POSITION' => 'tl',
                            'WATERMARK_FILE_ORDER' => '',
                        ],
                    'VISIBLE' => 'Y',
                ],
            'SECTION_XML_ID' =>
                [
                    'NAME' => 'Внешний код',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' => '',
                    'VISIBLE' => 'Y',
                ],
            'SECTION_CODE' =>
                [
                    'NAME' => 'Символьный код',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' =>
                        [
                            'UNIQUE' => 'N',
                            'TRANSLITERATION' => 'N',
                            'TRANS_LEN' => 100,
                            'TRANS_CASE' => 'L',
                            'TRANS_SPACE' => '-',
                            'TRANS_OTHER' => '-',
                            'TRANS_EAT' => 'Y',
                            'USE_GOOGLE' => 'N',
                        ],
                    'VISIBLE' => 'Y',
                ],
            'LOG_SECTION_ADD' =>
                [
                    'NAME' => 'LOG_SECTION_ADD',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' => NULL,
                    'VISIBLE' => 'Y',
                ],
            'LOG_SECTION_EDIT' =>
                [
                    'NAME' => 'LOG_SECTION_EDIT',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' => NULL,
                    'VISIBLE' => 'Y',
                ],
            'LOG_SECTION_DELETE' =>
                [
                    'NAME' => 'LOG_SECTION_DELETE',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' => NULL,
                    'VISIBLE' => 'Y',
                ],
            'LOG_ELEMENT_ADD' =>
                [
                    'NAME' => 'LOG_ELEMENT_ADD',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' => NULL,
                    'VISIBLE' => 'Y',
                ],
            'LOG_ELEMENT_EDIT' =>
                [
                    'NAME' => 'LOG_ELEMENT_EDIT',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' => NULL,
                    'VISIBLE' => 'Y',
                ],
            'LOG_ELEMENT_DELETE' =>
                [
                    'NAME' => 'LOG_ELEMENT_DELETE',
                    'IS_REQUIRED' => 'N',
                    'DEFAULT_VALUE' => NULL,
                    'VISIBLE' => 'Y',
                ],
        ]);
        $helper->Iblock()->saveGroupPermissions($iblockId, [
            'administrators' => 'X',
            'everyone' => 'R',
            CONTENT_EDITOR_UG_ID => 'W',
        ]);
        $helper->Iblock()->saveProperty($iblockId, [
            'NAME' => 'Текст',
            'ACTIVE' => 'Y',
            'SORT' => '500',
            'CODE' => 'TEXT',
            'DEFAULT_VALUE' => '',
            'PROPERTY_TYPE' => 'S',
            'ROW_COUNT' => '1',
            'COL_COUNT' => '30',
            'LIST_TYPE' => 'L',
            'MULTIPLE' => 'N',
            'XML_ID' => NULL,
            'FILE_TYPE' => '',
            'MULTIPLE_CNT' => '5',
            'LINK_IBLOCK_ID' => '0',
            'WITH_DESCRIPTION' => 'N',
            'SEARCHABLE' => 'N',
            'FILTRABLE' => 'N',
            'IS_REQUIRED' => 'N',
            'VERSION' => '1',
            'USER_TYPE' => NULL,
            'USER_TYPE_SETTINGS' => 'a:0:{}',
            'HINT' => '',
            'SMART_FILTER' => 'N',
            'DISPLAY_TYPE' => 'F',
            'DISPLAY_EXPANDED' => 'N',
            'FILTER_HINT' => '',
        ]);
        $helper->Iblock()->saveProperty($iblockId, [
            'NAME' => 'Ссылка',
            'ACTIVE' => 'Y',
            'SORT' => '500',
            'CODE' => 'LINK',
            'DEFAULT_VALUE' => '',
            'PROPERTY_TYPE' => 'S',
            'ROW_COUNT' => '1',
            'COL_COUNT' => '30',
            'LIST_TYPE' => 'L',
            'MULTIPLE' => 'N',
            'XML_ID' => NULL,
            'FILE_TYPE' => '',
            'MULTIPLE_CNT' => '5',
            'LINK_IBLOCK_ID' => '0',
            'WITH_DESCRIPTION' => 'N',
            'SEARCHABLE' => 'N',
            'FILTRABLE' => 'N',
            'IS_REQUIRED' => 'N',
            'VERSION' => '1',
            'USER_TYPE' => NULL,
            'USER_TYPE_SETTINGS' => 'a:0:{}',
            'HINT' => '',
            'SMART_FILTER' => 'N',
            'DISPLAY_TYPE' => 'F',
            'DISPLAY_EXPANDED' => 'N',
            'FILTER_HINT' => '',
        ]);
        $helper->UserTypeEntity()->saveUserTypeEntity([
            'ENTITY_ID' => 'IBLOCK_CARGONOMICA_MENU:CARGONOMICA_FREQUENTLY_SEARCHED_SECTION',
            'FIELD_NAME' => 'UF_TEXT',
            'USER_TYPE_ID' => 'string',
            'XML_ID' => '',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
            'SETTINGS' =>
                [
                    'SIZE' => 20,
                    'ROWS' => 1,
                    'REGEXP' => '',
                    'MIN_LENGTH' => 0,
                    'MAX_LENGTH' => 0,
                    'DEFAULT_VALUE' => '',
                ],
            'EDIT_FORM_LABEL' =>
                [
                    'en' => '',
                    'ru' => 'Текст',
                ],
            'LIST_COLUMN_LABEL' =>
                [
                    'en' => '',
                    'ru' => 'Текст',
                ],
            'LIST_FILTER_LABEL' =>
                [
                    'en' => '',
                    'ru' => 'Текст',
                ],
            'ERROR_MESSAGE' =>
                [
                    'en' => '',
                    'ru' => '',
                ],
            'HELP_MESSAGE' =>
                [
                    'en' => '',
                    'ru' => 'для разделов 1 уровня - заголовок блока; для разделов 2 уровня - название группы пунктов',
                ],
        ]);
        $helper->UserTypeEntity()->saveUserTypeEntity([
            'ENTITY_ID' => 'IBLOCK_CARGONOMICA_MENU:CARGONOMICA_FREQUENTLY_SEARCHED_SECTION',
            'FIELD_NAME' => 'UF_LINK',
            'USER_TYPE_ID' => 'string',
            'XML_ID' => '',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
            'SETTINGS' =>
                [
                    'SIZE' => 20,
                    'ROWS' => 1,
                    'REGEXP' => '',
                    'MIN_LENGTH' => 0,
                    'MAX_LENGTH' => 0,
                    'DEFAULT_VALUE' => '',
                ],
            'EDIT_FORM_LABEL' =>
                [
                    'en' => '',
                    'ru' => 'Ссылка',
                ],
            'LIST_COLUMN_LABEL' =>
                [
                    'en' => '',
                    'ru' => 'Ссылка',
                ],
            'LIST_FILTER_LABEL' =>
                [
                    'en' => '',
                    'ru' => 'Ссылка',
                ],
            'ERROR_MESSAGE' =>
                [
                    'en' => '',
                    'ru' => '',
                ],
            'HELP_MESSAGE' =>
                [
                    'en' => '',
                    'ru' => 'для разделов 2 уровня',
                ],
        ]);
        $helper->UserOptions()->saveElementForm($iblockId, [
            'Параметры|edit1' =>
                [
                    'ID' => 'ID',
                    'ACTIVE' => 'Активность',
                    'NAME' => 'Название',
                    'SORT' => 'Сортировка',
                    'PROPERTY_LINK' => 'Ссылка',
                    'PROPERTY_TEXT' => 'Текст',
                    'SECTIONS' => 'Разделы',
                ],
        ]);
        $helper->UserOptions()->saveSectionForm($iblockId, [
            'Раздел|edit1' =>
                [
                    'ID' => 'ID',
                    'ACTIVE' => 'Раздел активен',
                    'SORT' => 'Сортировка',
                    'IBLOCK_SECTION_ID' => 'Родительский раздел',
                    'NAME' => 'Название',
                    'UF_TEXT' => 'Текст',
                    'UF_LINK' => 'Ссылка',
                    'CODE' => 'Символьный код',
                ],
        ]);
        return true;
    }

    /**
     * @throws HelperException
     */
    public function down(): bool
    {
        $this->getHelperManager()->Iblock()->deleteIblockIfExists('CARGONOMICA_FREQUENTLY_SEARCHED', 'CARGONOMICA_MENU');

        return true;
    }
}
