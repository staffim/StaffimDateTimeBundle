<?php

namespace Staffim\DateTimeBundle\MongoDB\Type;

use Doctrine\ODM\MongoDB\Types\DateType as BaseDateType;

/**
 * The Date type with milliseconds.
 */
class DateType extends BaseDateType
{
    public function convertToDatabaseValue($value)
    {
        if (!($value instanceof \Staffim\DateTime\DateTime)) {
            return parent::convertToDatabaseValue($value);
        }

        // The 2nd argument to MongoDate is in µ-seconds
        return new \MongoDate($value->format('U'), $value->format('u'));
    }

    public function convertToPHPValue($value)
    {
        if (!($value instanceof \MongoDate)) {
            return parent::convertToPHPValue($value);
        }

        $date = new \DateTime();
        $date->setTimestamp($value->sec);

        $dateString = $date->format('Y-m-d\TH:i:s') . '.' . str_pad($value->usec, 6, '0', STR_PAD_LEFT) . $date->format('O');
        $date = \Staffim\DateTime\DateTime::createFromFormat(
            \Staffim\DateTime\DateTime::FULL_ISO8601,
            $dateString
        );

        return $date;
    }

    public function closureToPHP()
    {
        return 'if ($value instanceof \MongoDate) {
            $date = new \DateTime();
            $date->setTimestamp($value->sec);
            $dateString = $date->format(\'Y-m-d\TH:i:s\') . \'.\' . str_pad($value->usec, 6, \'0\', STR_PAD_LEFT) . $date->format(\'O\');
            $return = \Staffim\DateTime\DateTime::createFromFormat(\Staffim\DateTime\DateTime::FULL_ISO8601, $dateString);
        } else {
            $return = new \Staffim\DateTime\DateTime($value);
        }';
    }
}
