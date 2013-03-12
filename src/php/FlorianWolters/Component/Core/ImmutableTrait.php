<?php
namespace FlorianWolters\Component\Core;

/**
 * The trait {@see ImmutableTrait} helps to implement the **Immutable Object**
 * implementation pattern.
 *
 * The trait implements the following:
 *
 * * Avoids setting of inaccessible properties  (`$obj->value = 'foo`).
 * * Avoids calling the constructor on an object directly
 *   (`$obj->__construct()`).
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Immutable
 * @since     Trait available since Release 0.1.0
 */
trait ImmutableTrait
{
    use CloneNotSupportedTrait;

    /**
     * `true` if the object using this trait has been constructed already,
     * `false` otherwise.
     *
     * @var boolean
     * @todo It must be possible that this attribute is not be modified by
     *       client code. Find a solutions that does not require a property.
     */
    private $constructed = false;

    /**
     * Throws an {@see ImmutableException}.
     *
     * Always throws an {@see ImmutableException} when trying to set an
     * inaccessible property.
     *
     * @param string $name  The name of the property to set.
     * @param mixed  $value The value, the property with the name `$name` should
     *                      be set to.
     *
     * @return void
     * @throws ImmutableException Always.
     */
    final public function __set($name, $value)
    {
        $this->throwImmutableException();
    }

    /**
     * Throws an {@see ImmutableException}.
     *
     * @return void
     * @throws ImmutableException Always.
     */
    private function throwImmutableException()
    {
        throw new ImmutableException('The object is immutable.');
    }

    /**
     * Throws an {@see ImmutableException} if the object using this trait has
     * been constructed already.
     *
     * @return void
     * @throws ImmutableException If the object using this trait has been
     *                            constructed already.
     */
    private function throwImmutableExceptionIfConstructed()
    {
        if (true === $this->constructed) {
            $this->throwImmutableException();
        }

        $this->constructed = true;
    }
}
