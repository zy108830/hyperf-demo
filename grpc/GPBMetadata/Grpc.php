<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

# source: grpc.proto

namespace GPBMetadata;

class Grpc
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            '0aa8010a0a677270632e70726f746f12046772706322230a064869557365' .
            '72120c0a046e616d65180120012809120b0a037365781802200128052236' .
            '0a0748695265706c79120f0a076d657373616765180120012809121a0a04' .
            '7573657218022001280b320c2e677270632e486955736572322f0a026869' .
            '12290a0873617948656c6c6f120c2e677270632e4869557365721a0d2e67' .
            '7270632e48695265706c792200620670726f746f33'
        ), true);

        static::$is_initialized = true;
    }
}
