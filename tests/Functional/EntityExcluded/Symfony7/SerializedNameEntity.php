<?php

/*
 * This file is part of the NelmioApiDocBundle package.
 *
 * (c) Nelmio
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\Tests\Functional\EntityExcluded\Symfony7;

use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Serializer\Attribute\SerializedPath;

/**
 * @author Guilhem N. <guilhem.niot@gmail.com>
 */
class SerializedNameEntity
{
    /**
     * @var string
     */
    #[SerializedName('notfoo')]
    public $foo;

    #[SerializedPath('[some][prop]')]
    public ?bool $nestedProp;

    /**
     * Tests serialized name feature.
     */
    #[SerializedName('notwhatyouthink')]
    public function setBar(string $bar)
    {
    }

    /**
     * Tests serialized path feature.
     */
    #[SerializedPath('[some][method]')]
    public function setPath(string $x)
    {
    }

    /**
     * Tests serialized path feature.
     */
    #[SerializedPath('[some][nested][field2]')]
    public function setPath2(string $x)
    {
    }
}
