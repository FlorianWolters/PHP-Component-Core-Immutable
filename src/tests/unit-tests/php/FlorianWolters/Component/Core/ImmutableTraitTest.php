<?php
namespace FlorianWolters\Component\Core;

use FlorianWolters\Mock\Planet;

/**
 * Test class for {@see ImmutableTrait}.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Immutable
 * @since     Class available since Release 0.1.0
 *
 * @covers    FlorianWolters\Component\Core\ImmutableTrait
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
     * @coversDefaultClass __set
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
     * @coversDefaultClass __construct
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
     * @coversDefaultClass __clone
     * @expectedException FlorianWolters\Component\Core\CloneNotSupportedException
     * @test
     */
    public function testCloneNotSupported()
    {
        clone $this->traitObject;
    }
}
