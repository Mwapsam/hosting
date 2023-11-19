<div class="domain-promo"><h3>We offer more than <?php echo $tld_count?> tlds</h3>
    <div>[domain_search tld='<?php echo $tld?>']
	<?php $pr = (@is_array($domains[$tld]['prices_register'])) ? $domains[$tld]['prices_register'] : $domains[$tld]['prices'];  ?>
<div class="prices-starts-from">Prices Starts From: <span class="tld-price"><span class="tld-currency"><?php echo _rp_get_currency_symbol($domains[$tld]['store_currency']);?></span><span class="tld-price-value"><?php echo $cheapest_tld?></span> <span class="tld-period">/yr</span></span></div>
    </div>
</div>