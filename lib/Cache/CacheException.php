<?php

/*
 * This file is part of the `src-run/arthur-doctrine-exception-library` project.
 *
 * (c) Rob Frawley 2nd <rmf@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace SR\Doctrine\Exception\Cache;

use Doctrine\ORM\Cache\CacheException as DoctrineCacheException;
use SR\Doctrine\Exception\ExceptionInterface;
use SR\Doctrine\Exception\ExceptionTrait;

class CacheException extends DoctrineCacheException implements ExceptionInterface
{
    use ExceptionTrait;
}
