<?php
/*
 * This file is part of the PHPUnit_MockObject.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Interface for all mock objects which are generated by
 * PHPUnit_Framework_MockObject_MockBuilder.
 *
 * @package    PHPUnit_MockObject
 * @author     Sebastian Bergmann <sebastian@phpunit.de>
 * @copyright  Sebastian Bergmann <sebastian@phpunit.de>
 * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @version    Release: @package_version@
 * @link       http://github.com/sebastianbergmann/phpunit-mock-objects
 * @since      Interface available since Release 1.0.0
 */
interface PHPUnit_Framework_MockObject_MockObject /*extends PHPUnit_Framework_MockObject_Verifiable*/
{
    /**
     * Registers a new expectation in the mock object and returns the match
     * object which can be infused with further details.
     *
     * @param  PHPUnit_Framework_MockObject_Matcher_Invocation       $matcher
     * @return PHPUnit_Framework_MockObject_Builder_InvocationMocker
     */
    public function expects(PHPUnit_Framework_MockObject_Matcher_Invocation $matcher);

    /**
     * @return PHPUnit_Framework_MockObject_InvocationMocker
     * @since  Method available since Release 2.0.0
     */
    public function __phpunit_setOriginalObject($originalObject);

    /**
     * @return PHPUnit_Framework_MockObject_InvocationMocker
     */
    public function __phpunit_getInvocationMocker();

    /**
     * Verifies that the current expectation is valid. If everything is OK the
     * code should just return, if not it must throw an exception.
     *
     * @throws PHPUnit_Framework_ExpectationFailedException
     */
    public function __phpunit_verify();
}
