<?php

declare(strict_types=1);

namespace Src\Authorization\Domain\Enums;

enum Role: string
{
    case Administrator = 'Administrator';
    case Customer = 'Customer';
}
