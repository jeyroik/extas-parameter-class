<?php
namespace extas\components\plugins\parameters;

use extas\components\plugins\Plugin;
use extas\interfaces\parameters\IParameter;

/**
 * Class ParameterPluginClassSet
 *
 * @stage extas.parameter.class.value.set
 * @package extas\components\plugins\parameters
 * @author jeyroik@gmail.com
 */
class ParameterPluginClassSet extends Plugin
{
    /**
     * @param IParameter $parameter
     * @param mixed $value
     */
    public function __invoke($parameter, &$value)
    {
        if (is_object($value)) {
            $value = get_class($value);
        }
    }
}
