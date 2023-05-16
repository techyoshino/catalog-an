<?php
/**
 * Version    : 1.2.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php get_header(); ?>



<?php get_template_part( 'modules/page-header' ); ?>


<div class="container-fluid">
	<div class="row">
		<main id="main" role="main">



<?php
/*

<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// do our header
get_header();

// call our API (make sure API is set up)
$url = 'https://search.kikaicatalog.com/api/products?page=1'; //just a test , we will implement new url for categories lvl 1 and nested lvl 2
$products = wp_remote_get('https://search.kikaicatalog.com/api/products?page=1');

// if there is no data from the API
if (!$products || $products == 'null') {

    echo 'No result. ';

// if there is data from API, output it
} else {
    var_dump(json_decode($products['body']));
    //we can implement UI with this data

	
}
?>

*/

?>


<?php
/*


<?php
// APIアクセスURL
$url = 'https://search.kikaicatalog.com/api/products?page=1';

// ストリームコンテキストのオプションを作成
$options = array(
    // HTTPコンテキストオプションをセット
    'http' => array(
        'method'=> 'GET',
        'header'=> 'Content-type: application/json; charset=UTF-8' //JSON形式で表示
    )
);

// ストリームコンテキストの作成
$context = stream_context_create($options);

$raw_data = file_get_contents($url, false,$context);

// debug
//var_dump($raw_data);

// json の内容を連想配列として $data に格納する
$data = json_decode($raw_data,true);
?>
<table>
    <tr>
        <th>name</th>
        <th>note</th>
    </tr>
    <?php foreach($data as $key => $value){ // 連想配列を取り出す ?>
        <?php if(is_array($value)){ // 値が配列のみループで回して表示 ?>
            <?php foreach($value as $column){ ?>
            <tr>
                <td><?php echo $column['maker_name_ja']; ?></td>
                <td><?php echo $column['note']; ?></td>
            </tr>
           <?php } ?>
        <?php } ?>
    <?php } ?>
</table>






<?php get_footer(); ?>

*/
?>

<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// do our header
get_header();

// call our API (make sure API is set up)
$url = 'http://search.kikaicatalog.com/api/wordpress/getCategories'; //just a test , we will implement new url for categories lvl 1 and nested lvl 2
$products = wp_remote_get('http://search.kikaicatalog.com/api/wordpress/getCategories');
$url2 = 'https://search-beta.kikaicatalog.com/products?type=1&category=';

// if there is no data from the API
if (!$products || $products == 'null') {

    echo 'No result. ';

// if there is data from API, output it
} else {

	

    var_dump(json_decode($products['body']));
    //we can implement UI with this data

}




$arr = json_decode($products['body']);
foreach ($arr->categories as $value) {
echo $value->name_ja ."<br>";
echo $value->name_en ."<br>";

}


foreach ($arr->categories as $value) {

	echo $value->name_ja ."<br>";
    echo '<a href="'.$url2.''.$value->name_ja.'">'.$value->name_ja.'</a>'.'<br />';

	
	foreach ($value->lvl2 as $value2) {
	
	echo  '<a href="'.$url2.''.$value2->name_ja.'">'.$value2->name_ja.'</a>' ;
    
	}
	
	echo "<br>";
	
}

// do our footer
get_footer();
?>