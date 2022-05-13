<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\OrganicCompounds;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\OrganicCompounds\OrganicCompounds;

/**
 * Tests for the "Organic compounds" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\OrganicCompounds\OrganicCompounds
 * @group organicCompounds
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new OrganicCompounds();
    }

    /**
     * Test that the code can be executed for "Saturated hydrocarbon (valid)".
     *
     * @group organicCompounds_saturatedHydrocarbonValid
     */
    public function testCanExecuteSaturatedHydrocarbonValid(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - saturated hydrocarbon (valid).txt',
            "VALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Unsaturated hydrocarbon (valid)".
     *
     * @group organicCompounds_unsaturatedHydrocarbonValid
     */
    public function testCanExecuteUnsaturatedHydrocarbonValid(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - unsaturated hydrocarbon (valid).txt',
            "VALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Hydrocarbon with 1 substituent".
     *
     * @group organicCompounds_hydrocarbonWith1Substituent
     */
    public function testCanExecuteHydrocarbonWith1Substituent(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - hydrocarbon with 1 substituent.txt',
            "VALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple substituents (invalid)".
     *
     * @group organicCompounds_multipleSubstituentsInvalid
     */
    public function testCanExecuteMultipleSubstituentsInvalid(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - multiple substituents (invalid).txt',
            "INVALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Unsaturated hydrocarbon with substituents".
     *
     * @group organicCompounds_unsaturatedHydrocarbonWithSubstituents
     */
    public function testCanExecuteUnsaturatedHydrocarbonWithSubstituents(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - unsaturated hydrocarbon with substituents.txt',
            "VALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "INVALID".
     *
     * @group organicCompounds_INVALID
     */
    public function testCanExecuteINVALID(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - INVALID.txt',
            "INVALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Cyclic hydrocarbon".
     *
     * @group organicCompounds_cyclicHydrocarbon
     */
    public function testCanExecuteCyclicHydrocarbon(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - cyclic hydrocarbon.txt',
            "VALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Cyclic hydrocarbon with substituents".
     *
     * @group organicCompounds_cyclicHydrocarbonWithSubstituents
     */
    public function testCanExecuteCyclicHydrocarbonWithSubstituents(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - cyclic hydrocarbon with substituents.txt',
            "INVALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "2 carbon cycles".
     *
     * @group organicCompounds_2CarbonCycles
     */
    public function testCanExecute2CarbonCycles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - 2 carbon cycles.txt',
            "VALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Enormous compound".
     *
     * @group organicCompounds_enormousCompound
     */
    public function testCanExecuteEnormousCompound(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - enormous compound.txt',
            "INVALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Codingame".
     *
     * @group organicCompounds_codingame
     */
    public function testCanExecuteCodingame(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - codingame.txt',
            "INVALID" . PHP_EOL
        );
    }
}
