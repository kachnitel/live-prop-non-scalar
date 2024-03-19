<?php

namespace App\Twig\Components;

use App\Entity;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class Container
{
    use DefaultActionTrait;

    // #[LiveProp(writable: ['name', 'dateField'])] // Is not allowed
    #[LiveProp(writable: ['name'])]
    public Entity $entity;
}
