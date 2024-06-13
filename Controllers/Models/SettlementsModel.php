<?php

namespace Controllers\Models;
include_once 'Core.php';

/**
 *
 */
class SettlementsModel extends Core
{

    /**
     * @var int
     */
    private $alreadyHaveWhere = 0;

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return array
     */
    public function getDataForFilters()
    {

        $municipality = [];
        $area = [];
        $kind = [];
        $category = [];
        $altitude = [];
        $data = $this->db->rawQuery('SELECT  municipality, area, kind, category, altitude FROM `settlements` GROUP by municipality;');
        $tvm = $this->db->rawQuery('SELECT  t_v_m FROM `settlements` GROUP by t_v_m;');
        foreach ($data as $row) {
            $municipality[$row['municipality']] = $row['municipality'];
            $area[$row['area']] = $row['area'];
            $kind[$row['kind']] = $row['kind'];
            $category[$row['category']] = $row['category'];
            $altitude[$row['altitude']] = $row['altitude'];
        }
        ksort($kind);
        ksort($municipality);
        ksort($area);
        ksort($category);
        ksort($altitude);
        ksort($kind);
        return [
            'municipality' => $municipality,
            'area' => $area,
            'kind' => $kind,
            'category' => $category,
            'altitude' => $altitude,
            'tvm' => $tvm
        ];
    }


    /**
     * @param $data
     * @return array|\Generator|null
     */
    public function getRequestedData($data)
    {

        $queryProperties = [];
        $query = "SELECT settlements.ekatte,t_v_m, areas.name_area,settlements.name,settlements.name_en,code_area,municapility,
            municapility.name_municapility,townhall,settlements.nuts1,settlements.nuts2,settlements.nuts3,kind,
            settlements.category,settlements.altitude,settlements.document from  `settlements`";


        $query .= " inner join areas on settlements.area = areas.code_area";
        $query .= " inner join municapility on settlements.municipality = `municapility`.`municapility`";
        if (isset($data['name_municapility']) && !empty($data['name_municapility'])) {
            $query = $this->whereExist($query);
            $query .= ' `municapility`.`name_municapility` = ?';
            $queryProperties[] = $data['name_municapility'];

        }
        if (isset($data['name_area']) && !empty($data['name_area'])) {
            $query = $this->whereExist($query);
            $query .= ' `areas`.`name_area` = ?';
            $queryProperties[] = $data['name_area'];

        }

        if (isset($data['ekatte']) && !empty($data['ekatte'])) {
            $query = $this->whereExist($query);
            $query .= 'settlements.ekatte = ?';
            $queryProperties[] = $data['ekatte'];
        }
        if (isset($data['category']) && !empty($data['category'])) {
            $query = $this->whereExist($query);
            $query .= " settlements.category = ? ";
            $queryProperties[] = $data['category'];

        }
        if (isset($data['tvm']) && !empty($data['tvm'])) {
            $query = $this->whereExist($query);
            $query .= " t_v_m = ?";
            $queryProperties[] = $data['tvm'];

        }
        if (isset($data['name']) && !empty($data['name'])) {
            $query = $this->whereExist($query);
            $query .= " name = ?";
            $queryProperties[] = $data['name'];

        }
        if (isset($data['name_en']) && !empty($data['name_en'])) {
            $query = $this->whereExist($query);
            $query .= " name_en = ?";
            $queryProperties[] = $data['name_en'];

        }
        if (isset($data['code_area']) && !empty($data['code_area'])) {
            $query = $this->whereExist($query);
            $query .= " area = ?";
            $queryProperties[] = $data['code_area'];

        }
        if (isset($data['municapility']) && !empty($data['municapility'])) {
            $query = $this->whereExist($query);
            $query .= " municipality = ?";
            $queryProperties[] = $data['municapility'];

        }
        if (isset($data['townhall']) && !empty($data['townhall'])) {
            $query = $this->whereExist($query);
            $query .= " townhall = ?";
            $queryProperties[] = $data['townhall'];

        }
        if (isset($data['nuts1']) && !empty($data['nuts1'])) {
            $query = $this->whereExist($query);
            $query .= " settlements.nuts1 = ?";
            $queryProperties[] = $data['nuts1'];

        }
        if (isset($data['nuts2']) && !empty($data['nuts2'])) {
            $query = $this->whereExist($query);
            $query .= " settlements.nuts2 = ?";
            $queryProperties[] = $data['nuts2'];

        }
        if (isset($data['nuts3']) && !empty($data['nuts3'])) {
            $query = $this->whereExist($query);
            $query .= " settlements.nuts3 = ?";
            $queryProperties[] = $data['nuts3'];

        }
        if (isset($data['kind']) && !empty($data['kind'])) {
            $query = $this->whereExist($query);
            $query .= " kind = ?";
            $queryProperties[] = $data['kind'];

        }

        if (isset($data['altitude']) && !empty($data['altitude'])) {
            $query = $this->whereExist($query);
            $query .= " altitude = ?";
            $queryProperties[] = $data['altitude'];

        }
        if (isset($data['document']) && !empty($data['document'])) {
            $query = $this->whereExist($query);
            $query .= " settlements.document = ?";
            $queryProperties[] = $data['document'];

        }
        return $this->db->rawQuery($query, $queryProperties);


    }

    /**
     * @param $query
     * @return string
     */
    private function whereExist($query)
    {
        if ($this->alreadyHaveWhere == 0) {
            $query .= ' where ';
            $this->alreadyHaveWhere = 1;
        } else {
            $query .= ' and ';
        }
        return $query;

    }

}