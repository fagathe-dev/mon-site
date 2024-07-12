<?php 
namespace Fagathe\MonSite\Service\Website;
use Fagathe\MonSite\Service\JSON\DataService;

final class DefaultService
{

    private DataService $skillDataService;

    public function __construct() {
        $this->skillDataService = new DataService('competences');
    }

    /**
     * @param array $skills
     * 
     * @return array
     */
    private function filterSkillByType(array $skills = []):array 
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
    public function getData():array {
        return [
            'skills' => $this->filterSkillByType($this->skillDataService->findAll()),
        ];
    }

}