<?php
declare(strict_types=1);
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Grpc\Model;

use Magento\Grpc\Api\EchoReply;
use Magento\Grpc\Api\EchoRequest;
use Spiral\GRPC;

/**
 * Greet the person
 *
 * @package Magento\Grpc\Model
 */
class EchoService implements \Magento\Grpc\Api\EchoInterface
{
    /**
     * @param GRPC\ContextInterface $ctx
     * @param EchoRequest $in
     * @return EchoReply
     *
     * @throws GRPC\Exception\InvokeException
     */
    public function Greet(GRPC\ContextInterface $ctx, EchoRequest $in): EchoReply
    {
        return new EchoReply(['greeting' => 'Hello ' . $in->getName()]);
    }
}
