<?php

namespace PhpDocFyi\Orchestrator;

use PhpDocFyi\Generator\DocsGenerator;
use PhpDocFyi\Generator\GenerationFailed;
use PhpDocFyi\Publisher\Publisher;
use PhpDocFyi\Publisher\PublishingFailed;
use PhpDocFyi\SourceFeed\Feed;
use PhpDocFyi\SourceFeed\NoMorePackages;

final class Orchestrator
{
    /**
     * @var Feed
     */
    private $feed;
    /**
     * @var DocsGenerator
     */
    private $generator;
    /**
     * @var Publisher
     */
    private $publisher;

    public function __construct(Feed $feed, DocsGenerator $generator, Publisher $publisher)
    {
        $this->feed = $feed;
        $this->generator = $generator;
        $this->publisher = $publisher;
    }

    public function process(): void
    {
        try {
            $package = $this->feed->nextPackage();

            $docs = $this->generator->generate($package);

            $this->publisher->publish($docs);
        } catch (NoMorePackages $e) {
            // Finished, apparently...
        } catch (GenerationFailed $e) {
            // TODO: Retry generation
        } catch (PublishingFailed $e) {
            // TODO: Retry publishing
        }
    }
}