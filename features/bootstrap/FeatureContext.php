<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Solution\JsonRpcApiExtension\Context\JsonRpcClientContext;
use Behat\Symfony2Extension\Context\KernelAwareContext;
use Behat\Symfony2Extension\Context\KernelDictionary;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends JsonRpcClientContext implements Context, SnippetAcceptingContext, KernelAwareContext
{
    use KernelDictionary;

    /**
     * Indicate for should clean cache
     *
     * @var bool
     */
    private static $mustCleanCache = true;

    /**
     * Check and clean cache storage (powered by FivePercent) if necessary.
     * Attention: we save a flag for control cleans cache system in static variable.
     *
     * @BeforeScenario
     * @Given /^clean cache$/
     */
    public function cleanCache()
    {
        if (self::$mustCleanCache) {
            /** @var \FivePercent\Component\Cache\CacheInterface $cache */
            $container = $this->getContainer();

            if ($container->has('cache')) {
                $cache = $this->getContainer()->get('cache');
                $cache->cleanup();
                self::$mustCleanCache = false;
            }
        }
    }
}
