<?php

declare(strict_types=1);

namespace Omnipay\Przelewy24\Message;

use Omnipay\Common\Message\RequestInterface;

class CardChargeResponse extends AbstractResponse
{
    /**
     * @var null|string
     */
    private $transactionId;

    public function __construct(RequestInterface $request, $data)
    {
        parent::__construct($request, $data);
        if (isset($data['data'])) {
            if (isset($data['data']['orderId'])) {
                $this->transactionId = (string) $data['data']['orderId'];
            }
        }
    }

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
}
