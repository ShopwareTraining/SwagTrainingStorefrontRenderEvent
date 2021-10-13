<?php declare(strict_types=1);

namespace SwagTraining\StorefrontRenderEvent\EventSubscriber;

use Shopware\Storefront\Event\StorefrontRenderEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AddDataToStorefront implements EventSubscriberInterface
{
    /**
     * @return string[]
     */
    public static function getSubscribedEvents(): array
    {
        return [StorefrontRenderEvent::class => 'addData'];
    }

    /**
     * @param StorefrontRenderEvent $storefrontRenderEvent
     */
    public function addData(StorefrontRenderEvent $storefrontRenderEvent)
    {
        $storefrontRenderEvent->setParameter('foo', 'bar');
    }
}
