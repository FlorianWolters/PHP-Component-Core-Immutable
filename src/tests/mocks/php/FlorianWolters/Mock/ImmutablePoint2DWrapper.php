<?php
/**
 * FlorianWolters\Mock\ImmutablePoint2DWrapper
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Immutable
 */

namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\ImmutableException;
use FlorianWolters\Component\Core\ImmutableTrait;

/**
 * The class {@see ImmutablePoint2DWrapper} is an **Immutable Wrapper** for the
 * mutable class {@see Point2D}.
 *
 * This class is immutable, since its state cannot be changed after
 * construction:
 * * The class is declared as `final`.
 * * The class throws an exception for every mutator method ("setter").
 * * It does forbid access via the magic method `__set`.
 *
 * @since Class available since Release 0.1.0
 */
final class ImmutablePoint2DWrapper extends Point2D implements
    ImmutablePoint2DInterface
{
    use ImmutableTrait {
        ImmutableTrait::__construct as constructImmutable;
    }

    /**
     * Initializes a new instance of the ImmutablePoint2DWrapper class.
     *
     * @param integer $xCoordinate The X coordinate of the point.
     * @param integer $yCoordinate The Y coordinate of the point.
     */
    public function __construct($xCoordinate, $yCoordinate)
    {
        $this->constructImmutable();
        parent::__construct($xCoordinate, $yCoordinate);
    }

    /**
     * {@inheritdoc}
     *
     * @throws ImmutableException Always.
     */
    public function setX($xCoordinate)
    {
        // noop
        // or
        $this->throwImmutableException();
    }

    /**
     * {@inheritdoc}
     *
     * @throws ImmutableException Always.
     */
    public function setY($yCoordinate)
    {
        // noop
        // or
        $this->throwImmutableException();
    }
}
