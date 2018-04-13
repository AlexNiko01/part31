<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 13.04.18
 * Time: 14:53
 */

trait Nomination
{
    public function getName()
    {
        return get_class($this);
    }
}
