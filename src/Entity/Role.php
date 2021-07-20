<?php

namespace Jetimob\BirdSign\Entity;

final class Role
{
    public const SIGN = 1;
    public const APPROVE = 2;
    public const ACKNOWLEDGE = 3;
    public const WITNESS = 4;
    public const ACKNOWLEDGE_RECEIPT = 5;
    public const ENDORSE_IN_BLACK = 6;
    public const ENDORSE_IN_WHITE = 7;
    public const OTHER = 8;

    public const TO_TEXT = [
        self::SIGN => 'Assinar',
        self::APPROVE => 'Aprovar',
        self::ACKNOWLEDGE => 'Reconhecer',
        self::WITNESS => 'Testemunhar',
        self::ACKNOWLEDGE_RECEIPT => 'Acusar Recebimento',
        self::ENDORSE_IN_BLACK => 'Endossar em preto',
        self::ENDORSE_IN_WHITE => 'Endossar em branco',
        self::OTHER => 'Outro',
    ];

    public static function toText(int $role): string
    {
        return self::TO_TEXT[$role] ?? 'Desconhecido';
    }
}
