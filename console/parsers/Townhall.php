<?php

namespace parsers;



use PDODb;

class Townhall
{

    public function parseData($data, $instance)
    {

        foreach ($data as $item) {
            // just remove empty lines or lines with other information
            if (isset($item->ekatte) && $item->ekatte != null){
                $instance->insert('townhall', [
                    "townhall"=>$item->kmetstvo,
                    "townhall_name"=>$item->name,
                    "document"=>$item->document,
                    "category"=>$item->category,
                    "ekatte"=>$item->ekatte,
                    "townhall_name_en"=>$item->name,
                    "nuts1"=>$item->nuts1,
                    "nuts2"=>$item->nuts2,
                    "nuts3"=>$item->nuts3,
                ]);

            }


        }


    }
}