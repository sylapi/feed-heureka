<?php
namespace Sylapi\Feeds\Heureka;

use Sylapi\Feeds\Abstracts\Feed as FeedAbstract;
use Sylapi\Feeds\Contracts\ProductSerializer;

class Feed extends FeedAbstract
{
    const NAME = 'heureka';

    public function getDefaultFileName(): string
    {
        return self::NAME;
    }

    public function getProductInstance(): ProductSerializer
    {
        return new Models\Product();
    }

    public function initXML(): \DOMElement
    {
        $doc = $this->getDocument();
        $node = $doc->createElement("SHOP");
        $doc->appendChild($node);
        $this->setMainXmlElement( $node);
        return $node;
    }

}