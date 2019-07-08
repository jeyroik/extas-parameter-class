<?php
namespace extas\components\plugins\parameters;

use extas\components\parameters\Parameter;
use extas\components\plugins\Plugin;
use extas\interfaces\parameters\IParameter;

/**
 * Class ParameterPluginClassGet
 *
 * @package extas\components\plugins\parameters
 * @author jeyroik@gmail.com
 */
class ParameterPluginClassGet extends Plugin
{
    public $preDefinedStage = 'extas.parameter.class.value.get';

    /**
     * @param IParameter $parameter
     * @param string $class
     */
    public function __invoke($parameter, &$class)
    {
        $classOptions = $parameter['template@class'] ?? [];
        $argsData = $classOptions['args'] ?? [];
        $args = [];

        foreach ($argsData as $argData) {
            $arg = new Parameter($argData);
            $args[$arg->getName()] = $arg->getValue(null);
        }

        $class = new $class($args);
    }
}
