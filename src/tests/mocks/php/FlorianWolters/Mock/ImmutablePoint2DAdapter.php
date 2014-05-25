<?php
/**
 * FlorianWolters\Mock\ImmutablePoint2DAdapter
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Immutable
 */

namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\ImmutableTrait;

/**
 * The class {@see ImmutablePoint2DAdapter} is an **Object Adapter** for the
 * mutable class {@see Point2D}.
 *
 * @since Class available since Release 0.1.0
 */
class ImmutablePoint2DAdapter implements ImmutablePoint2DInterface
{
    use ImmutableTrait {
        ImmutableTrait::__construct as constructImmutable;
    }

    /**
     * The Point2D which is wrapped by this ImmutablePoint2DAdapter.
     *
     * @var Point2D
     */
    private $point2D;

    /**
     * Initializes a new instance of the ImmutablePoint2DAdapter class.
     *
     * @param Point2D $point2D The Point2D to wrap.
     */
    public function __construct(Point2D $point2D)
    {
        $this->constructImmutable();
        $this->point2D = $point2D;
    }

    /**
     * {@inheritdoc}
     */
    public function getX()
    {
        return $this->point2D->getX();
    }

    /**
     * {@inheritdoc}
     */
    public function getY()
    {
        return $this->point2D->getY();
    }
}
