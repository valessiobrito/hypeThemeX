<div>
	<label>
		<?php
			$options = array(
				'name' => 'terms',
				'value' => $vars['entity']->method ? $vars['entity']->method : "delete",
				'options' => array(
					elgg_echo('registration:terms1') . elgg_echo('registration:terms2') => 1,
					elgg_echo('accept_terms:deleteaccount') => 0
				),
			);
			echo elgg_view('input/radio', $options);
		?>
	</label>
</div>

<div>
    <?php echo elgg_view('input/submit', array('value' => elgg_echo('save'))); ?>
</div>

<br/>

<div>
	<?php 
		echo "<h2>" . elgg_echo("policypages:terms") . "</h2>";
		echo elgg_view("policypages/terms");
	?>
</div>
