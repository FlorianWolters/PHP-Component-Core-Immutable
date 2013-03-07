<?php
namespace FlorianWolters\Mock;

/**
 * The class {@see ImmutablePoint2DAdapter} is an **Object Adapter** for the
 * mutable class {@see Point2D}.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Immutable
 * @since     Class available since Release 0.1.0
 */
class ImmutablePoint2DAdapter implements ImmutablePoint2DInterface
{
    /**
     * @var Point2D
     */
    private $point2D;

    /**
     * @param Point2D $point2D
     */
    public function __construct(Point2D $point2D)
    {
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
