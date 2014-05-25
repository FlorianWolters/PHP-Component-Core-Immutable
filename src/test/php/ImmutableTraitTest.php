<?php
/**
 * FlorianWolters\Component\Core\ImmutableTraitTest
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Immutable
 */

namespace FlorianWolters\Component\Core;

use FlorianWolters\Example\Planet;

/**
 * Test class for {@see ImmutableTrait}.
 *
 * @since  Class available since Release 0.1.0
 * @covers FlorianWolters\Component\Core\ImmutableTrait
 */
class ImmutableTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * The object under test.
     *
     * @var object
     */
    private $traitObject;

    /**
     * Sets up the fixture.
     *
     * This method is called before a test is executed.
     *
     * @return void
     */
    public function setUp()
    {
        $this->traitObject = $this->createObjectForTrait();
    }

    /**
     * *Creation Method* to create an object for the trait under test.
     *
     * @return object The newly created object.
     */
    private function createObjectForTrait()
    {
        $traitName = __NAMESPACE__ . '\ImmutableTrait';

        return $this->getObjectForTrait($traitName);
    }

    /**
     * @return void
     *
     * @coversDefault __set
     * @coversDefault throwImmutableException
     * @expectedException FlorianWolters\Component\Core\ImmutableException
     * @test
     */
    public function testMagicSetThrowsException()
    {
        $this->traitObject->foo = 'bar';
    }

    /**
     * @return void
     *
     * @coversDefault throwImmutableException
     * @covers FlorianWolters\Example\Planet::__construct
     * @expectedException FlorianWolters\Component\Core\ImmutableException
     * @test
     */
    public function testDirectCallOfConstructorThrowsException()
    {
        // The mars was never really "discovered".
        $planet = new Planet(
            'Mars',
            (6.4185 * 10^23),
            $this->getMock('\DateTime')
        );

        $planet->__construct('WTF', 13, $this->getMock('\DateTime'));
    }

    /**
     * @return void
     *
     * @covers FlorianWolters\Component\Core\ImmutableTrait::__clone
     * @expectedException FlorianWolters\Component\Core\CloneNotSupportedException
     * @test
     */
    public function testCloneNotSupported()
    {
        clone $this->traitObject;
    }
}
