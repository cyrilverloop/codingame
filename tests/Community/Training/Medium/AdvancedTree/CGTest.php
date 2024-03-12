<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\AdvancedTree;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\AdvancedTree\AdvancedTree;

/**
 * Tests for the "Advanced tree" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\AdvancedTree\AdvancedTree
 * @group advancedTree
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new AdvancedTree();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group advancedTree_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "In a directory test".
     *
     * @group advancedTree_inADirectoryTest
     */
    public function testCanExecuteInADirectoryTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - in a directory test.txt',
            file_get_contents(__DIR__ . '/output/02 - in a directory test.txt')
        );
    }

    /**
     * Test that the code can be executed for "Also in a directory test".
     *
     * @group advancedTree_alsoInADirectoryTest
     */
    public function testCanExecuteAlsoInADirectoryTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - also in a directory test.txt',
            file_get_contents(__DIR__ . '/output/03 - also in a directory test.txt')
        );
    }

    /**
     * Test that the code can be executed for "Gap end of tree handling test".
     *
     * @group advancedTree_gapEndOfTreeHandlingTest
     */
    public function testCanExecuteGapEndOfTreeHandlingTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - gap end of tree handling test.txt',
            file_get_contents(__DIR__ . '/output/04 - gap end of tree handling test.txt')
        );
    }

    /**
     * Test that the code can be executed for "Hidden directories w/o -a test".
     *
     * @group advancedTree_hiddenDirectoriesWOATest
     */
    public function testCanExecuteHiddenDirectoriesWOATest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - hidden directories wo -a test.txt',
            file_get_contents(__DIR__ . '/output/05 - hidden directories wo -a test.txt')
        );
    }

    /**
     * Test that the code can be executed for "Dots in filenames test".
     *
     * @group advancedTree_dotsInFilenamesTest
     */
    public function testCanExecuteDotsInFilenamesTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - dots in filenames test.txt',
            file_get_contents(__DIR__ . '/output/06 - dots in filenames test.txt')
        );
    }

    /**
     * Test that the code can be executed for "Limit flag test".
     *
     * @group advancedTree_limitFlagTest
     */
    public function testCanExecuteLimitFlagTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - limit flag test.txt',
            file_get_contents(__DIR__ . '/output/07 - limit flag test.txt')
        );
    }

    /**
     * Test that the code can be executed for "Hidden files w/o -a test".
     *
     * @group advancedTree_hiddenFilesWOATest
     */
    public function testCanExecuteHiddenFilesWOATest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - hidden files wo -a test.txt',
            file_get_contents(__DIR__ . '/output/08 - hidden files wo -a test.txt')
        );
    }

    /**
     * Test that the code can be executed for "Hidden files with -a test".
     *
     * @group advancedTree_hiddenFilesWithATest
     */
    public function testCanExecuteHiddenFilesWithATest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - hidden files with -a test.txt',
            file_get_contents(__DIR__ . '/output/09 - hidden files with -a test.txt')
        );
    }

    /**
     * Test that the code can be executed for "Directory flag test".
     *
     * @group advancedTree_directoryFlagTest
     */
    public function testCanExecuteDirectoryFlagTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - directory flag test.txt',
            file_get_contents(__DIR__ . '/output/10 - directory flag test.txt')
        );
    }

    /**
     * Test that the code can be executed for "Multiple flags test".
     *
     * @group advancedTree_multipleFlagsTest
     */
    public function testCanExecuteMultipleFlagsTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - multiple flags test.txt',
            file_get_contents(__DIR__ . '/output/11 - multiple flags test.txt')
        );
    }

    /**
     * Test that the code can be executed for "All flags test".
     *
     * @group advancedTree_allFlagsTest
     */
    public function testCanExecuteAllFlagsTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - all flags test.txt',
            file_get_contents(__DIR__ . '/output/12 - all flags test.txt')
        );
    }

    /**
     * Test that the code can be executed for "Error handling 1 test".
     *
     * @group advancedTree_errorHandling1Test
     */
    public function testCanExecuteErrorHandling1Test(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - error handling 1 test.txt',
            file_get_contents(__DIR__ . '/output/13 - error handling 1 test.txt')
        );
    }

    /**
     * Test that the code can be executed for "Error handling 2 test".
     *
     * @group advancedTree_errorHandling2Test
     */
    public function testCanExecuteErrorHandling2Test(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/14 - error handling 2 test.txt',
            file_get_contents(__DIR__ . '/output/14 - error handling 2 test.txt')
        );
    }

    /**
     * Test that the code can be executed for "Error handling 3 test".
     *
     * @group advancedTree_errorHandling3Test
     */
    public function testCanExecuteErrorHandling3Test(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/15 - error handling 3 test.txt',
            file_get_contents(__DIR__ . '/output/15 - error handling 3 test.txt')
        );
    }

    /**
     * Test that the code can be executed for "Wrong flag test".
     *
     * @group advancedTree_wrongFlagTest
     */
    public function testCanExecuteWrongFlagTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/16 - wrong flag test.txt',
            file_get_contents(__DIR__ . '/output/16 - wrong flag test.txt')
        );
    }

    /**
     * Test that the code can be executed for "Big test 1".
     *
     * @group advancedTree_bigTest1
     */
    public function testCanExecuteBigTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/17 - big test 1.txt',
            file_get_contents(__DIR__ . '/output/17 - big test 1.txt')
        );
    }

    /**
     * Test that the code can be executed for "Not starting in .".
     *
     * @group advancedTree_notStartingIn
     */
    public function testCanExecuteNotStartingIn(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/18 - not starting in.txt',
            file_get_contents(__DIR__ . '/output/18 - not starting in.txt')
        );
    }
}
