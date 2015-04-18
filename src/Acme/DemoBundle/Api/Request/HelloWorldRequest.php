<?php

namespace Acme\DemoBundle\Api\Request;

use FivePercent\Component\Api\Request\RequestInterface;
use FivePercent\Component\ObjectMapper\Annotation as DataMapping;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Hello world request
 *
 * @DataMapping\Object(allProperties=true)
 */
class HelloWorldRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Assert\NotBlank
     */
    private $name;

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
