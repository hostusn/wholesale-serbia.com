<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace MailPoetVendor\Twig\Sandbox;

if (!defined('ABSPATH')) exit;


/**
 * Exception thrown when a not allowed class property is used in a template.
 *
 * @author Kit Burton-Senior <mail@kitbs.com>
 */
class SecurityNotAllowedPropertyError extends \MailPoetVendor\Twig\Sandbox\SecurityError
{
    private $className;
    private $propertyName;
    public function __construct($message, $className, $propertyName, $lineno = -1, $filename = null, \Exception $previous = null)
    {
        parent::__construct($message, $lineno, $filename, $previous);
        $this->className = $className;
        $this->propertyName = $propertyName;
    }
    public function getClassName()
    {
        return $this->className;
    }
    public function getPropertyName()
    {
        return $this->propertyName;
    }
}
\class_alias('MailPoetVendor\\Twig\\Sandbox\\SecurityNotAllowedPropertyError', 'MailPoetVendor\\Twig_Sandbox_SecurityNotAllowedPropertyError');
