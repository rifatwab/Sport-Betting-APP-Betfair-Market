<?php
/**
 * This file is part of the Betfair library.
 *
 * (c) Daniele D'Angeli <dangeli88.daniele@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Betfair\Factory;

use Betfair\Model\Param;

class ParamFactory implements ParamFactoryInterface
{
    public function create()
    {
        return new Param();
    }
}
