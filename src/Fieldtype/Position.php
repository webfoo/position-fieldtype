<?php

namespace Webfoo\PositionFieldtype\Fieldtype;

use Statamic\Fields\Fieldtype;

class Position extends Fieldtype
{
    /**
     * Adding the https:// before saving
     *
     * @param $data
     *
     * @return string
     */
    public function process($data)
    {
        if (! $data) {
            return;
        }

        return 'https://' . $data;
    }


    /**
     * Removing the https:// before displaying in field
     *
     * @param $data
     *
     * @return mixed
     */
    public function preProcess($data)
    {
        return preg_replace('/^(http|https):\/\//i', '', $data);
    }

    /**
     * Augment the value, which will return false in
     * case it only contains the https prefix.
     *
     * @param $value
     *
     * @return mixed
     */
    public function augment($value)
    {
        if ($value === 'https://') {
            return false;
        }

        return $value;
    }
}
