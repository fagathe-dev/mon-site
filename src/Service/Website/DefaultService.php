<?php
namespace Fagathe\MonSite\Service\Website;

use Fagathe\MonSite\Service\JSON\DataService;

final class DefaultService
{

    private DataService $skillDataService;
    private DataService $projectDataService;

    public function __construct()
    {
        $this->skillDataService = new DataService('competences');
        $this->projectDataService = new DataService('projets');
    }

    /**
     * @param array $rawData
     * 
     * @return array
     */
    private function filterDataByType(array $data = []): array
    {
        $keys = [];
        foreach ($data as $d) {
            if (!in_array($d['type'], $keys)) {
                $keys = [...$keys, $d['type']];
            }
        }
        return compact('data', 'keys');
    }

    /**
     * @param array $skills
     * 
     * @return array
     */
    private function filterSkillByType(array $skills = []): array
    {
        $data = [];
        $keys = [];
        foreach ($skills as $d) {
            if (!array_key_exists($d['type'], $data)) {
                $data[$d['type']] = [];
                $keys = [...$keys, $d['type']];
            }
            array_push($data[$d['type']], $d);
        }
        return compact('data', 'keys');
    }

    /**
     * @return array
     */
    public function findProjetById(int $id): array
    {
        return $this->projectDataService->find($id);
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [
            'skills' => $this->filterSkillByType($this->skillDataService->findAll()),
            'projects' => $this->filterDataByType($this->projectDataService->findAll()),
        ];
    }

}