<h3>Extensions Supported</h3>
    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="tld-prices">
      <tr>
        <th>TLD</th>
        <th>1 yr</th>
        <th>2 yrs</th>
      </tr>
	  <?php foreach($domains as $key=>$domain) {
		if (empty($tlds_info[$key]['register']) && empty($tlds_info[$key]['transfer']))
			continue;
		
		if ($GLOBALS['rp_info']['domains_info'][$key]['years'][0] != 1 and $GLOBALS['rp_info']['domains_info'][$key]['years'][0] != 2)
			continue;
		?>
      <tr>
        <td><strong class="tld"><?php if(get_option('rp_domain_names_'.$key)) echo '<a href="'.get_permalink(get_option('rp_domain_names_'.$key)).'">.'.$key.'</a>'; else echo '.'.$key; ?></strong></td>
        <td><?php if(isset($domain['prices']['period_12']) && is_array($domain['prices']['period_12'])){?><span class="tld-price-currency"><?php echo _rp_get_currency_symbol($domain['store_currency']);?></span><span class="tld-price-value"><?php echo sprintf('%0.2f',$domain['prices']['period_12'][$domain['store_currency']]); ?></span><?php }else{?>--<?php }?></td>
        <td><?php if(isset($domain['prices']['period_24']) && is_array($domain['prices']['period_24'])){?><span class="tld-price-currency"><?php echo _rp_get_currency_symbol($domain['store_currency']);?></span><span class="tld-price-value"><?php echo sprintf('%0.2f',$domain['prices']['period_24'][$domain['store_currency']]); ?></span><?php }else{?>--<?php }?></td>
      </tr>
      <?php }?>
    </table>