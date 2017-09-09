<?php
/**
 * User: Nine
 * Date: 2017/9/4
 * Time: 下午9:26
 */

namespace dd\render;


/**
 * Class DumpArray
 * @package dd\render
 */
class DumpArray extends AbstractDump
{

    public function __construct($value)
    {
        parent::__construct($value);
        $this->value = "array:" . count($this->value);
    }

    public function render()
    {
        $this->span($this)->addClass('nine-span')->addDecorator(['withQuota' => false])->display();
    }
}