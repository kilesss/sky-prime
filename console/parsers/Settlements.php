<?php

namespace parsers;


use PDODb;

class Settlements
{

    public function parseData($data, $instance)
    {
        foreach ($data as $item) {
            // just remove empty lines or lines with other information
            if (isset($item->ekatte) && $item->ekatte != null) {
                $instance->insert('settlements', [
                    "ekatte" => $item->ekatte,
                    "t_v_m" => $item->t_v_m,
                    "name" => $item->name,
                    "area" => $item->oblast,
                    "municipality" => $item->obshtina,
                    "townhall" => $item->kmetstvo,
                    "kind" => $item->kind,
                    "category" => $item->category,
                    "altitude" => $item->altitude,
                    "document" => $item->document,
                    "abc" => $item->abc,
                    "name_en" => $item->name_en,
                    "nuts1" => $item->nuts1,
                    "nuts2" => $item->nuts2,
                    "nuts3" => $item->nuts3,
                    "text" => $item->text,
                    "oblast_name" => $item->oblast_name,
                    "obshtina_name" => $item->obshtina_name,
                ]);

            }


        }


    }
}