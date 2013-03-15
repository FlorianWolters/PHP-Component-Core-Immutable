<?php
namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\ImmutableTrait;

/**
 * The class {@see ImmutablePoint2DWrapper} is an **Immutable Wrapper** for the
 * mutable class {@see Point2D}.
 *
 * This class is immutable, since its state cannot be changed after
 * construction.
 *
 * * It is declared as `final`.
 * * It does throw an exception mutator methods ("setters").
 * * It does not forbid access with the magic method `__set`.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Immutable
 * @since     Class available since Release 0.1.0
 */
final class ImmutablePoint2DWrapper
    extends Point2D
    implements ImmutablePoint2DInterface
{
    use ImmutableTrait {
        ImmutableTrait::__construct as constructImmutable;
    }

    /**
     * @param integer $x
     * @param integer $y
     */
    public function __construct($x, $y)
    {
        $this->constructImmutable();
        parent::__construct($x, $y);
    }

    /**
     * @param integer $x
     *
     * @return void
     */
    public function setX($x)
    {
        // noop
        // or
        $this->throwImmutableException();
    }

    /**
     * @param integer $y
     *
     * @return void
     */
    public function setY($y)
    {
        // noop
        // or
        $this->throwImmutableException();
    }
}
