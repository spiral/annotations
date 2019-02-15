<?php
declare(strict_types=1);
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

namespace Spiral\Annotations\Tests\Node;

use Spiral\Annotations\Node;
use Spiral\Annotations\Parser;

class Matrix extends Node
{
    protected const NAME   = 'matrix';
    protected const SCHEMA = [
        'value' => [
            [Parser::INTEGER]
        ],
    ];
}