<?php

/**
 * This file is part of Gush.
 *
 * (c) Luis Cordova <cordoval@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Gush\Tests\Command;

use Gush\Command\IssueLabelListCommand;

/**
 * @author Daniel Gomes <me@danielcsgomes.com>
 */
class IssueLabelListCommandTest extends BaseTestCase
{
    public function testCommand()
    {
        $tester = $this->getCommandTester(new IssueLabelListCommand());
        $tester->execute(['--org' => 'gushphp', '--repo' => 'gush']);

        $this->assertEquals('bug', trim($tester->getDisplay()));
    }
}
