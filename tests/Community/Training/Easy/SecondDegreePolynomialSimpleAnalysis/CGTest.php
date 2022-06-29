<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\SecondDegreePolynomialSimpleAnalysis;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\SecondDegreePolynomialSimpleAnalysis\SecondDegreePolynomialSimpleAnalysis;

/**
 * Tests for the "2nd degree polynomial - simple analysis" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\SecondDegreePolynomialSimpleAnalysis\SecondDegreePolynomialSimpleAnalysis
 * @group secondDegreePolynomialSimpleAnalysis
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new SecondDegreePolynomialSimpleAnalysis();
    }

    /**
     * Test that the code can be executed for "Centered parabol, 1 intersection".
     *
     * @group secondDegreePolynomialSimpleAnalysis_centeredParabol1Intersection
     */
    public function testCanExecuteCenteredParabol1Intersection(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - centered parabol, 1 intersection.txt',
            "(0,1)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Horizontal line, 1 intersection to be rounded".
     *
     * @group secondDegreePolynomialSimpleAnalysis_horizontalLine1IntersectionToBeRounded
     */
    public function testCanExecuteHorizontalLine1IntersectionToBeRounded(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - horizontal line, 1 intersection to be rounded.txt',
            "(0,1.34)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Straight line, 2 intersections".
     *
     * @group secondDegreePolynomialSimpleAnalysis_straightLine2Intersections
     */
    public function testCanExecuteStraightLine2Intersections(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - straight line, 2 intersections.txt',
            "(0,2),(2,0)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Centered parabol, 3 intersections".
     *
     * @group secondDegreePolynomialSimpleAnalysis_centeredParabol3Intersections
     */
    public function testCanExecuteCenteredParabol3Intersections(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - centered parabol, 3 intersections.txt',
            "(-0.5,0),(0,-0.75),(0.5,0)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Parabol on the right, 2 intersections".
     *
     * @group secondDegreePolynomialSimpleAnalysis_parabolOnTheRight2Intersections
     */
    public function testCanExecuteParabolOnTheRight2Intersections(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - parabol on the right, 2 intersections.txt',
            "(0,1),(1,0)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Special case".
     *
     * @group secondDegreePolynomialSimpleAnalysis_specialCase
     */
    public function testCanExecuteSpecialCase(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - special case.txt',
            "(0,0)" . PHP_EOL
        );
    }
}
