<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class EntityEdit
{
    public const DATETIME_LOCAL_FORMAT = 'Y-m-d\TH:i';

    use DefaultActionTrait;

    #[LiveProp(writable: true, updateFromParent: true)]
    public string $name;

    #[LiveProp(writable: true, format: self::DATETIME_LOCAL_FORMAT, updateFromParent: true)]
    public \DateTime $dateField;
}
