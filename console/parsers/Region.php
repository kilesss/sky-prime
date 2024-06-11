<?php

namespace parsers;



use PDODb;

class Region
{

    public function parseData($data, $instance)
    {



        foreach ($data as $item) {
            // just remove empty lines or lines with other information
            if (isset($item->raion) && $item->raion != null){
                $instance->insert('region', [
                    "raion"=>$item->raion,
                    "name"=>$item->name,
                    "name_en"=>$item->name_en,
                    "document"=>$item->document,
                ]);

            }


        }


    }
}