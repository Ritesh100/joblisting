<?php
function callback_veg_suppliers_kalimati_rate($request) {
    
    $url = 'https://kalimatimarket.gov.np/index.php/price';


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    $output = curl_exec($ch);

    $html = str_get_html($output);

    $table_data = $html->find("#commodityPriceParticular tbody tr");

    $rates = array();
    foreach($table_data as $key=>$tr) {
        $name = $tr->find('td', 0)->innertext;
        $unit = $tr->find('td', 1)->innertext;
        $minimum = $tr->find('td', 2)->innertext;
        $maximum = $tr->find('td', 3)->innertext;
        $average = $tr->find('td', 4)->innertext;
        $rates[] = array(
            'name'  => $name,
            'unit'  => $unit,
            'minimum'  => $minimum,
            'maximum'  => $maximum,
            'average'  => $average
        );
    }
    // print_r($rates);exit;
    return json_encode($rates, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}
