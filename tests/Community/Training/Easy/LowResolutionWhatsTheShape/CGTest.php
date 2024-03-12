<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\LowResolutionWhatsTheShape;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\LowResolutionWhatsTheShape\LowResolutionWhatsTheShape;

/**
 * Tests for the "Low resolution: what's the shape?" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\LowResolutionWhatsTheShape\LowResolutionWhatsTheShape
 * @group lowResolutionWhatsTheShape
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new LowResolutionWhatsTheShape();
    }

    /**
     * Test that the code can be executed for "Rectangle".
     *
     * @group lowResolutionWhatsTheShape_rectangle
     */
    public function testCanExecuteRectangle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - rectangle.txt',
            "Rectangle" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Square".
     *
     * @group lowResolutionWhatsTheShape_square
     */
    public function testCanExecuteSquare(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - square.txt',
            "Rectangle" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Touching top isosceles".
     *
     * @group lowResolutionWhatsTheShape_touchingTopIsosceles
     */
    public function testCanExecuteTouchingTopIsosceles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - touching top isosceles.txt',
            "Triangle" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Touching bottom non-isosceles".
     *
     * @group lowResolutionWhatsTheShape_touchingBottomNonIsosceles
     */
    public function testCanExecuteTouchingBottomNonIsosceles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - touching bottom non-isosceles.txt',
            "Triangle" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Touching left only 'X' and '.'".
     *
     * @group lowResolutionWhatsTheShape_touchingLeftOnlyXAndDot
     */
    public function testCanExecuteTouchingLeftOnlyXAndDot(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - touching left only X and dot.txt',
            "Triangle" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Touching right top - right angle".
     *
     * @group lowResolutionWhatsTheShape_touchingRightTopRightAngle
     */
    public function testCanExecuteTouchingRightTopRightAngle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - touching right top - right angle.txt',
            "Triangle" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Circle small".
     *
     * @group lowResolutionWhatsTheShape_circleSmall
     */
    public function testCanExecuteCircleSmall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - circle small.txt',
            "Ellipse" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Circle big".
     *
     * @group lowResolutionWhatsTheShape_circleBig
     */
    public function testCanExecuteCircleBig(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - circle big.txt',
            "Ellipse" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Ellipse 1".
     *
     * @group lowResolutionWhatsTheShape_ellipse1
     */
    public function testCanExecuteEllipse1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - ellipse 1.txt',
            "Ellipse" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Ellipse 2".
     *
     * @group lowResolutionWhatsTheShape_ellipse2
     */
    public function testCanExecuteEllipse2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - ellipse 2.txt',
            "Ellipse" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Ellipse 3".
     *
     * @group lowResolutionWhatsTheShape_ellipse3
     */
    public function testCanExecuteEllipse3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - ellipse 3.txt',
            "Ellipse" . PHP_EOL
        );
    }
}
