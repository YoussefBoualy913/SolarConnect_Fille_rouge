<?php

namespace App;

enum OrderStatus:string
{
    case CART = 'cart';
    case PENDIGN = 'pending';
    case CONFIRMED = 'confirmed';
    case FINISHED = 'finished';
    case REJECTED = 'rejected';
}
