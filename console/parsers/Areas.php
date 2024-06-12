<?php

namespace parsers;



use PDODb;

class Areas
{

    public function parseData($data, $instance)
    {



        foreach ($data as $item) {
            // just remove empty lines or lines with other information
            if (isset($item->ekatte) && $item->ekatte != null){
                $instance->insert('areas', [
                    "code_regional_center"=>$item->ekatte,
                    "fullname"=>$item->full_name_bul,
                    "code_area"=>$item->oblast,
                    "name_area"=>$item->name,
                    "name_area_latin"=>$item->name_en,
                    "NUTS1"=>$item->nuts1,
                    "NUTS2"=>$item->nuts2,
                    "NUTS3"=>$item->nuts3,
                    "document_number"=>$item->document,
                ]);

            }


        }


    }
}