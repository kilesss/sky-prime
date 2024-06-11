<?php

namespace parsers;



use PDODb;

class Resorts
{

    public function parseData($data, $instance)
    {



        foreach ($data as $item) {
            // just remove empty lines or lines with other information
            if (isset($item->ekatte) && $item->ekatte != null){
                $instance->insert('resorts', [
                    "ekatte"=>$item->ekatte,
                    "kind"=>$item->kind,
                    "area1"=>$item->area1,
                    "area2"=>$item->area2,
                    "document"=>$item->document,
                    "abc"=>$item->abc,
                    "name_en"=>$item->name_en,
                ]);

            }


        }


    }
}