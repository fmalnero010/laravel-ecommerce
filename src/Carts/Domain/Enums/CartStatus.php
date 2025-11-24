<?php

declare(strict_types=1);

namespace Src\Carts\Domain\Enums;

enum CartStatus: string
{
    case Active = 'active';
    case Abandoned = 'abandoned';
    case Completed = 'completed';
}
