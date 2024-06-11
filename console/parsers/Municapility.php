<?php

namespace parsers;



use PDODb;

class Municapility
{

    public function parseData($data, $instance)
    {



        foreach ($data as $item) {
            // just remove empty lines or lines with other information
            if (isset($item->ekatte) && $item->ekatte != null){
                $instance->insert('municapility', [
                    "obshtina"=>$item->obshtina,
                    "ekatte"=>$item->ekatte,
                    "name"=>$item->name,
                    "name_en"=>$item->name,
                    "document"=>$item->document,
                    "nuts1"=>$item->nuts1,
                    "nuts2"=>$item->nuts2,
                    "nuts3"=>$item->nuts3,
                    "full_name_bul"=>$item->full_name_bul,
                ]);

            }


        }


    }
}