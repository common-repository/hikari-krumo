<?php





class HkKrumo_Op extends HkKrumo_HkToolsOptions{

	public $debug=false;
	protected $startup = true;
	public $optionsName = 'hkKrumo';
	protected $pluginfile = HkKrumo_pluginfile;
	protected $optionsDBVersion = 1;
	
	
	public $opStructure = array(
		'skin' => array(	"name" => 'Skin',
				"desc" => "Choose which skin you want to be used for Krumo reports",
				"largeDesc" => null,
				"id" => 'skin',
				"default" => 'schablon.com',
				"type" => "radio",
				"options" => array(
						'default'	=> '<a href="http://krumo.kaloyan.info/screenshots/krumo_default_theme.png" title="Krumo: &quot;Default&quot; theme screenshot" target="_blank">default</a>',
						'blue'	=> '<a href="http://krumo.kaloyan.info/screenshots/krumo_blue_theme.png" title="Krumo: &quot;Blue&quot; theme screenshot" target="_blank">blue</a>',
						'green'	=> '<a href="http://krumo.kaloyan.info/screenshots/krumo_green_theme.png" title="Krumo: &quot;Green&quot; theme screenshot" target="_blank">green</a>',
						'orange'	=> '<a href="http://krumo.kaloyan.info/screenshots/krumo_orange_theme.png" title="Krumo: &quot;Orange&quot; theme screenshot" target="_blank">orange</a>',
						'schablon.com'	=> '<a href="http://krumo.kaloyan.info/screenshots/krumo_schablon_com_theme.png" title="Krumo: &quot;Schablon.com&quot; theme screenshot" target="_blank">schablon.com</a>'
				)
		),
		
		"enabled" => array( "name" => "Enable",
				"desc" => "Check the checkbox to enable Krumo, uncheck it to disable Krumo",
				"largeDesc" => null,
				"id" => "enabled",
				"default" => array('enabled' => true),	// even items with default value as false must be included
				"type" => "checkbox",
				"options" => array(
							array(
								'check_id'	=> 'enabled',
								'desc'		=> 'Enable it'
							)
				)
		),
		
		'view_dumps_cap' => array(	"name" => 'View Capability',
				"desc" => "Choose the capability of registered users that are able to view Krumo dumps",
				"largeDesc" => "<p class=\"description\">Users without this capability won't see dumps regardless if Krumo is enabled or disabled, while users with the capability will see sumps when Krumo is enabled</p>",
				"id" => 'view_dumps_cap',
				"default" => 'edit_plugins',
				"type" => "radio",
				"options" => array(
						'edit_plugins'	=> "edit_plugins (Administrators)",
						'unfiltered_html'	=> "unfiltered_html (Editors)",
						'edit_posts'	=> "edit_posts (Contributors)",
						'view_krumo_dumps'	=> "view_krumo_dumps (Custom)"
				)
		)
	
	);



	public function __construct(){
		parent::__construct();
		
		
		$this->uninstallArgs = array(
				'name' => $this->optionspageName,
				'plugin_basename' => HkKrumo_basename,
				'options' => array(
						array(
							'opType' => 'wp_options',
							'itemNames' => array($this->optionsDBName)
						)
					)
			);
		
	}

	public function startup(){
		if(current_user_can($this->optionsDBValue['view_dumps_cap'])){
			if($this->optionsDBValue["enabled"]["enabled"])	krumo::enable();
			else											krumo::disable();
		}else	krumo::disable();
	}


	public function options_page_middle(){
?>
<h3>Exemple</h3>
<p>Here's an exemple of krumo running, from the code <code>krumo(debug_backtrace());</code>:</p>
<?php
	krumo(debug_backtrace());
	}

}



add_action('plugins_loaded', 'HkKrumo_instance');

function HkKrumo_instance(){
	global $hkKrumo_Op;
	$hkKrumo_Op = new HkKrumo_Op();

}