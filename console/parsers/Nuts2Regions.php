<?php

namespace parsers;



use PDODb;

class Nuts2Regions
{

    public function parseData($data, $instance)
    {



        foreach ($data as $item) {
            // just remove empty lines or lines with other information
            if (isset($item->region) && $item->region != null){
                $instance->insert('nuts2_regions', [
                    "region"=>$item->region,
                    "nuts1"=>$item->nuts1,
                    "nuts2"=>$item->nuts2,
                    "name"=>$item->name,
                    "name_en"=>$item->name_en,
                    "document"=>$item->document,
                ]);

            }


        }


    }
}