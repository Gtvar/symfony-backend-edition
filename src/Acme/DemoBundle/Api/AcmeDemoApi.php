<?php

namespace Acme\DemoBundle\Api;

use Acme\DemoBundle\Api\Request\HelloWorldRequest;
use Acme\DemoBundle\Exception\AcmeDemoException;
use FivePercent\Component\Api\Annotation\Action;
use FivePercent\Component\Api\Response\Response;

class AcmeDemoApi
{
    /**
     * Hello world API
     *
     * @Action("hello.world")
     *
     * @param HelloWorldRequest $request
     *
     * @return Response
     */
    public function helloWorld(HelloWorldRequest $request)
    {
        return new Response('Hello, ' . $request->getName());
    }

    /**
     * Action with error (Demo)
     *
     * @Action("exception")
     *
     * @throws AcmeDemoException
     */
    public function exception()
    {
        throw new AcmeDemoException('Sorry...');
    }
}
