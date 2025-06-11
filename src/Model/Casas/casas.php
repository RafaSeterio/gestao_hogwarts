<?php

namespace App\Model\Casas;

class Casa
{
    public const GRIFINORIA = 'Grifinória';
    public const SONSERINA = 'Sonserina';
    public const CORVINAL = 'Corvinal';
    public const LUFA_LUFA = 'Lufa-Lufa';

    public static function todas(): array
    {
        return [
            self::GRIFINORIA,
            self::SONSERINA,
            self::CORVINAL,
            self::LUFA_LUFA
        ];
    }
}
