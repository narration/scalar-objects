<?php

declare(strict_types=1);

/**
 * This file is part of Narration Scalar Objects.
 *
 * (c) Algolia Team <contact@algolia.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace Narration\ScalarObjects;

class Str
{
    /**
     * The string value.
     *
     * @var string
     */
    private $value;

    /**
     * Creates a new instance of Str.
     *
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Returns the string value.
     *
     * @return string
     */
    public function value(): string
    {
        return $this->value;
    }
}
