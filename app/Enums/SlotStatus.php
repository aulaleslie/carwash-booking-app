<?php

namespace App\Enums;

enum SlotStatus: string
{
    case AVAILABLE = 'available';
    case PENDING = 'pending';
    case RESERVED = 'reserved';
}