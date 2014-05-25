<?php
/**
 * FlorianWolters\Mock\Planet
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Immutable
 */

namespace FlorianWolters\Mock;

use \DateTime;

use FlorianWolters\Component\Core\ImmutableInterface;
use FlorianWolters\Component\Core\ImmutableTrait;

/**
 * The class {@see Planet} is an immutable class, since there is no way to
 * change its state after construction.
 *
 * @since Class available since Release 0.1.0
 */
final class Planet implements ImmutableInterface
{
    use ImmutableTrait {
        __construct as constructImmutable;
    }

    /**
     * The name of this planet.
     *
     * @var string
     */
    private $name;

    /**
     * The mass of this planet.
     *
     * @var float
     */
    private $mass;

    /**
     * The date of discovery of this planet.
     *
     * @var DateTime
     */
    private $dateOfDiscovery;

    /**
     * Initializes a new instance of the Planet class with the specified name,
     * the specified mass and the specified date of discovery.
     *
     * @param string   $name            The name of the planet.
     * @param float    $mass            The mass of the planet.
     * @param DateTime $dateOfDiscovery The date of discovery of the planet.
     */
    public function __construct($name, $mass, DateTime $dateOfDiscovery)
    {
        // Make sure that a call to the magic method __construct (via
        // $obj->__construct()) throws an exception of class
        // FlorianWolters\Component\Core\ImmutableException.
        $this->constructImmutable();

        $this->name = $name;
        $this->mass = $mass;

        // Make a private copy of $dateOfDiscovery. This is the only way to keep
        // the $dateOfDiscovery field private, and shields this class from any
        // changes that the caller may make to the original $dateOfDiscovery
        // object.
        $this->dateOfDiscovery = clone $dateOfDiscovery;
    }

    /**
     * Returns the name of this planet.
     *
     * The caller can do whatever they want with the return value, without
     * affecting the internals of this class. Why? Because this is a primitive
     * value. The caller sees its "own" double that simply has the
     * same value as $name.
     *
     * @return string The name.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the mass of this planet.
     *
     * @return float The mass.
     */
    public function getMass()
    {
        return $this->mass;
    }

    /**
     * Returns the date of discovery of this planet.
     *
     * Returns a defensive copy of the field. The caller of this method can do
     * nything they want with the returned \DateTime object, without affecting
     * the internals of this class in any way. Why? Because they do not have a
     * reference to $dateOfDiscovery. Rather, they are playing with a second
     * \DateTime that initially has the same data as $dateOfDiscovery.
     *
     * @return DateTime The date of discovery.
     */
    public function getDateOfDiscovery()
    {
        return clone $this->dateOfDiscovery;
    }
}
