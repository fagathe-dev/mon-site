<?php
namespace Fagathe\MonSite\Service\JSON;

use Fagathe\Framework\Env\Env;
use Fagathe\MonSite\Service\JSON\DataService;

final class SEOService
{

    private const DEFAULT_TAGS = 'defaultTags';
    private DataService $dataService;

    public function __construct()
    {
        $this->dataService = new DataService('seo');
    }

    /**
     * @param string $page
     * 
     * @return array|null
     */
    public function getSEO(string $page): ?array
    {
        $jsonData = $this->dataService->findAll();
        $data = array_pop($jsonData);
        $seo = $data[$page] ?? [];

        $defaultTags = $this->dataService->findAll()[self::DEFAULT_TAGS] ?? [];
        if (is_array($seo) && array_key_exists(self::DEFAULT_TAGS, $seo)) {
            $seo['tags'] = array_unique(array_merge($defaultTags, $seo['tags']));
        } else {
            $seo['tags'] = [...$seo['tags'], ...$defaultTags];
        }

        foreach ($seo['tags'] as $value) {
            if (array_key_exists('content', $value) && $value['content'] === '{{ APP_NAME }}') {
                $value['content'] = Env::getEnv('APP_NAME');
            }
            $newTags[] = $value;
        }

        $seo['tags'] = $newTags;

        return $seo;
    }
}