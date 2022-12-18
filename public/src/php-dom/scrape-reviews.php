<?php
include($directory . "/public/src/php-dom/simple_html_dom.php");

$endpoint = "https://www.aliexpress.com/item/1005004059930728.html?spm=a2g0o.productlist.main.33.7b6b6064VNsRJm&algo_pvid=d269e94f-10b2-4231-a587-dbb8634eb660&algo_exp_id=d269e94f-10b2-4231-a587-dbb8634eb660-16&pdp_ext_f=%7B%22sku_id%22%3A%2212000027897723922%22%7D&pdp_npi=2%40dis%21PHP%21141.37%2141.03%21%21%21%21%21%4021227f0f16713395027872992d075e%2112000027897723922%21sea&curPageLogUid=qDaTeSVwaSkE";
//$endpoint = "https://github.com/Jtzuya/webscraper";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $endpoint);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

//$dom = new DOMDocument();
//@$dom->loadHTML($html);

//echo $response;

$html = new simple_html_dom();
$html->load($response);

foreach ($html->find('div[class="feedback-list-wrap"]') as $div) {
   //echo $div->plaintext;
}


// $html = new simple_html_dom();
// $html->load($response);


// $names = $dom->getElementsByTagName('div[class="feedback-list-wrap"]');

// echo $dom;
// echo $html;

// $listParent = $html->find('div[id="transction-feedback"] div[class="feedback-list-wrap"]', 0);
// foreach ($html->find('div[class="feedback-list-wrap"]') as $list) {
//     echo $list;
// }
// echo $listParent;


// curl_close($ch);
// // var_dump($executeCurl);

// // aliexpress reviews 'feedback-list-wrap'
// // Finding all the reviewees name 'user-name'
// $dom = new DOMDocument();
// @$dom->loadHTML($executeCurl);

// // $rewiewNames = $dom->query

// // $reviewNames = $dom->get

// $html = file_get_html($endpoint);
// $listParent = $html->find('div[class="feedback-list-wrap"]');
// echo $listParent;
// $list_array = $listParent->find('a[name="member_detail"]');

// foreach ($list_array as $list) {
//     echo $list . '<br />';
// }
