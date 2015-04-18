<?php

namespace Acme\DemoBundle\Error;

use FivePercent\Component\Error\ErrorFactoryInterface;

class AcmeErrors implements ErrorFactoryInterface
{
    const ACME_DEMO         = 1;
    const REQUEST_NOT_VALID = 2;

    /**
     * {@inheritDoc}
     */
    public function getErrors()
    {
        return [
            self::ACME_DEMO         => 'Acme demo error',
            self::REQUEST_NOT_VALID => 'Request not valid'
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function getExceptions()
    {
        return [
            'Acme\DemoBundle\Exception\AcmeDemoException'            => self::ACME_DEMO,
            'FivePercent\Component\Exception\ViolationListException' => self::REQUEST_NOT_VALID
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function getReservedDiapason()
    {
        return [1, 99];
    }
}
