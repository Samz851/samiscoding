<?php
namespace Pastheme\Blog\Event;
use Pagekit\Application as App;
use Pastheme\Blog\UrlResolver;
use Pagekit\Event\EventSubscriberInterface;

class RouteListener implements EventSubscriberInterface
{
    /**
     * Adds cache breaker to router.
     */
    public function onAppRequest()
    {
        App::router()->setOption('dpnblog.permalink', UrlResolver::getPermalink());
    }

    /**
     * Registers permalink route alias.
     */
    public function onConfigureRoute($event, $route)
    {
        if ($route->getName() == '@dpnblog/id' && UrlResolver::getPermalink()) {
            App::routes()->alias(dirname($route->getPath()).'/'.ltrim(UrlResolver::getPermalink(), '/'), '@dpnblog/id', ['_resolver' => 'Pastheme\Blog\UrlResolver']);
        }

    }

    /**
     * Clears resolver cache.
     */
    public function clearCache()
    {
        App::cache()->delete(UrlResolver::CACHE_KEY);
    }

    /**
     * {@inheritdoc}
     */
    public function subscribe()
    {
        return [
            'request'                 => ['onAppRequest', 130],
            'route.configure'         => 'onConfigureRoute',
            'model.post.saved'        => 'clearCache',
            'model.post.deleted'      => 'clearCache'
        ];
    }
}
