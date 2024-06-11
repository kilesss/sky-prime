<?php

namespace parsers;



use PDODb;

class Documents
{

    public function parseData($data, $instance)
    {



        foreach ($data as $item) {
            // just remove empty lines or lines with other information
            if (isset($item->document) && $item->document != null){
                $instance->insert('documents', [
                    "document"=>$item->document,
                    "doc_kind"=>$item->doc_kind,
                    "doc_name_en"=>$item->doc_name_en,
                    "doc_inst"=>$item->doc_inst,
                    "doc_num"=>$item->doc_num,
                    "doc_date"=>$item->doc_date,
                    "doc_act"=>$item->doc_act,
                    "dv_danni"=>$item->dv_danni,
                    "dv_date"=>$item->dv_date,
                ]);

            }


        }


    }
}