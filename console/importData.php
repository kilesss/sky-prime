<?php
require_once "parserController.php";
require_once "../system/PDODb.php";
new parserController('ek_obl.json', 'Areas');
new parserController('ek_obst.json', 'Municapility');
new parserController('ek_kmet.json', 'Townhall');
new parserController('ek_raion.json', 'Region');
new parserController('sof_rai.json', 'RegionSofia');
new parserController('ek_reg2.json', 'Nuts2Regions');
new parserController('ek_reg1.json', 'Nuts1Regions');
new parserController('ek_atte.json', 'Settlements');
new parserController('ek_doc.json', 'Documents');
new parserController('ek_sobr.json', 'Resorts');
