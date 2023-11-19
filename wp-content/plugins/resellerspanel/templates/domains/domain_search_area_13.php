<div id="domain-search-area-fp">
	<div id="domain-search-form-fp">
    [domain_search tld='<?php echo $tld?>']
    </div>
    <div id="promo-tlds-fp">
    <?php foreach($domains as $key=>$domain){
		$pr = (@is_array($domain['prices_register'])) ? $domain['prices_register'] : $domain['prices'];  ?>
        <div id="tld-box"><div class="tld">.<?php echo $key;?></div>
        <div class="tld-price"><span class="tld-currency"><?php echo _rp_get_currency_symbol($domain['store_currency']);?></span><span class="tld-price-value"><?php echo sprintf('%0.2f',($GLOBALS['rp_info']['domains_info'][$key]['years'][0]==1) ? $pr['period_'.$GLOBALS['rp_info']['domains_info'][$key]['years'][0]*12][$domain['store_currency']] : $pr['period_'.$GLOBALS['rp_info']['domains_info'][$key]['years'][0]*12][$domain['store_currency']]/$GLOBALS['rp_info']['domains_info'][$key]['years'][0]); ?></span><span class="tld-period">/yr</span></div></div>
    <?php }?>
    </div>
</div>