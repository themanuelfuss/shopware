<?php declare(strict_types=1);

namespace Shopware\Api\Media\Event\MediaAlbum;

use Shopware\Api\Media\Struct\MediaAlbumSearchResult;
use Shopware\Context\Struct\TranslationContext;
use Shopware\Framework\Event\NestedEvent;

class MediaAlbumSearchResultLoadedEvent extends NestedEvent
{
    public const NAME = 'media_album.search.result.loaded';

    /**
     * @var MediaAlbumSearchResult
     */
    protected $result;

    public function __construct(MediaAlbumSearchResult $result)
    {
        $this->result = $result;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getContext(): TranslationContext
    {
        return $this->result->getContext();
    }
}