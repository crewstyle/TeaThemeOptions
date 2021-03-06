<?php

namespace crewstyle\TeaThemeOptions\Core\Field\Date;

use crewstyle\TeaThemeOptions\TeaThemeOptions;
use crewstyle\TeaThemeOptions\Core\Field\Field;

/**
 * TTO DATE FIELD
 *
 * To add this field, simply make the same as follow:
 * array(
 *     'type' => 'date',
 *     'title' => 'Once uppon a time...',
 *     'id' => 'my_date_field_id',
 *     'description' => 'A white rabbit was running...',
 *     'format' => 'mm.dd.yyyy', //optional, "YYYY/mm/dd" by default
 *     'default' => '04.24.2012'
 * )
 *
 */

if (!defined('TTO_CONTEXT')) {
    die('You are not authorized to directly access to this page');
}

//----------------------------------------------------------------------------//

/**
 * TTO Field Date
 *
 * Class used to build Date field.
 *
 * @package Tea Theme Options
 * @subpackage Core\Field\Date
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 3.3.0
 *
 */
class Date extends Field
{
    /**
     * @var string
     */
    public static $faicon = 'fa-clock-o';

    /**
     * Constructor.
     *
     * @since 3.0.0
     */
    public function __construct(){}

    /**
     * Display HTML component.
     *
     * @param array $content Contains all field data
     * @param array $details Contains all field options
     *
     * @since 3.0.0
     */
    public function prepareField($content, $details = array())
    {
        //Build details
        $post = isset($details['post']) ? $details['post'] : 0;
        $prefix = isset($details['prefix']) ? $details['prefix'] : '';
        $tpl = empty($prefix) ? 'pages' : 'terms';

        //Build defaults data
        $template = array(
            'id' => $content['id'],
            'title' => isset($content['title']) ? $content['title'] : TeaThemeOptions::__('Tea Date'),
            'default' => isset($content['default']) ? $content['default'] : '',
            'description' => isset($content['description']) ? $content['description'] : '',
            'format' => isset($content['format']) ? $content['format'] : 'mm.dd.yyyy',

            //details
            'post' => $post,
            'prefix' => $prefix,
            'template' => $tpl,
        );

        //Retrieve field value
        $template['val'] = $this->getFieldValue($details, $template['default'], $content['id']);

        //Get template
        return $this->renderField('fields/date.html.twig', $template);
    }
}
