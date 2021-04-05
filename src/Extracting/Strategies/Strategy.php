<?php

namespace Knuckles\Scribe\Extracting\Strategies;

use Knuckles\Camel\Extraction\ExtractedEndpointData;
use Knuckles\Scribe\Tools\DocumentationConfig;

abstract class Strategy
{
    /**
     * The Scribe config
     * @var \Knuckles\Scribe\Tools\DocumentationConfig
     */
    protected $config;

    /**
     * The current stage of route processing
     */
    /** @var string */
    public $stage ;

    public function __construct(DocumentationConfig $config)
    {
        $this->config = $config;
    }

    /**
     * Returns an instance of the documentation config
     *
     * @return DocumentationConfig
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param ExtractedEndpointData $endpointData
     * @param array $routeRules Array of rules for the ruleset which this route belongs to.
     *
     * @return array|null
     */
    abstract public function __invoke(ExtractedEndpointData $endpointData, array $routeRules);
}
