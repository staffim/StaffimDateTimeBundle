<?php

namespace Staffim\DateTimeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Doctrine\ODM\MongoDB\Types\Type;

/**
 * @author Vyacheslav Salakhutdinov <megazoll@gmail.com>
 */
class StaffimDateTimeBundle extends Bundle
{
    public function __construct()
    {
    	if (class_exists('Doctrine\\ODM\\MongoDB\\Types\\Type')) {
    		Type::registerType('date', 'Staffim\DateTimeBundle\MongoDB\Type\DateType');
    	}
    }
}
