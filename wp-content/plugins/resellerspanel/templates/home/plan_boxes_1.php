<?php
if(count($index_plans) == 1 or count($index_plans) > 4)
{
	foreach($index_plans as $single_plan){
		$plan = $single_plan['value'];
		$plan['page_url'] = $single_plan['page_url'];
		require RSP_PATH.'/templates/home/plan_box_'.$single_plan['type'].'_big_'.(int)$variant.'.php';
	}
}elseif(count($index_plans) == 2){
	$plan = $index_plans[0]['value']; $floating = ' class="left"';
	$plan['page_url'] = $index_plans[0]['page_url'];
	require RSP_PATH.'/templates/home/plan_box_'.$index_plans[0]['type'].'_small_'.(int)$variant.'.php';
	
	$plan = $index_plans[1]['value']; $floating = ' class="right"';
	$plan['page_url'] = $index_plans[1]['page_url'];
	require RSP_PATH.'/templates/home/plan_box_'.$index_plans[1]['type'].'_small_'.(int)$variant.'.php';
	
	echo '<br clear="all" /><br />';
}elseif(count($index_plans) == 3){
	$plan = $index_plans[0]['value']; $floating = ' class="left"';
	$plan['page_url'] = $index_plans[0]['page_url'];
	require RSP_PATH.'/templates/home/plan_box_'.$index_plans[0]['type'].'_small_'.(int)$variant.'.php';
	
	$plan = $index_plans[1]['value']; $floating = ' class="right"';
	$plan['page_url'] = $index_plans[1]['page_url'];
	require RSP_PATH.'/templates/home/plan_box_'.$index_plans[1]['type'].'_small_'.(int)$variant.'.php';
	
	echo '<br clear="all" /><br />';
	
	$plan = $index_plans[2]['value'];
	$plan['page_url'] = $index_plans[2]['page_url'];
	require RSP_PATH.'/templates/home/plan_box_'.$index_plans[2]['type'].'_big_'.(int)$variant.'.php';
}elseif(count($index_plans) == 4){
	$plan = $index_plans[0]['value']; $floating = ' class="left"';
	$plan['page_url'] = $index_plans[0]['page_url'];
	require RSP_PATH.'/templates/home/plan_box_'.$index_plans[0]['type'].'_small_'.(int)$variant.'.php';
	
	$plan = $index_plans[1]['value']; $floating = ' class="right"';
	$plan['page_url'] = $index_plans[1]['page_url'];
	require RSP_PATH.'/templates/home/plan_box_'.$index_plans[1]['type'].'_small_'.(int)$variant.'.php';
	
	echo '<br clear="all" /><br />';
	
	$plan = $index_plans[2]['value']; $floating = ' class="left"';
	$plan['page_url'] = $index_plans[2]['page_url'];
	require RSP_PATH.'/templates/home/plan_box_'.$index_plans[2]['type'].'_small_'.(int)$variant.'.php';
	
	$plan = $index_plans[3]['value']; $floating = ' class="right"';
	$plan['page_url'] = $index_plans[3]['page_url'];
	require RSP_PATH.'/templates/home/plan_box_'.$index_plans[3]['type'].'_small_'.(int)$variant.'.php';
	
	echo '<br clear="all" /><br />';
}
?>
    
