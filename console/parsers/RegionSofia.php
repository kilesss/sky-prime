<?php

namespace parsers;



use PDODb;

class RegionSofia
{

    public function parseData($data, $instance)
    {



        foreach ($data as $item) {
            // just remove empty lines or lines with other information
            if (isset($item->ekatte) && $item->ekatte != null){
                $instance->insert('region_sofia', [
                    "ekatte"=>$item->ekatte,
                    "t_v_m"=>$item->t_v_m,
                    "name"=>$item->name,
                    "raion"=>$item->raion,
                    "kind"=>$item->kind,
                    "document"=>$item->document,
                    "name_en"=>$item->name_en,
                ]);

            }


        }


    }
}