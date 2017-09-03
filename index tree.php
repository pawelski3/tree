<style>
body{
	background-color:black;
	color: white;
	
}

</style>

<?PHP

$tree=array(
	'core'=>array('1init.php'),
	'classes'=>array(
		'user',
		'hash',
		'sess'
		),
	'function'=>array(
		'security'
	),
	'template'=>array(
		'index.templ',
		'includ'=>array(
			'head',
			'footer'
		)
	),
	'index.php',
	'login.php',
	'regis.php'

);
echo gettype($tree);

function tree($tree){
	$markup='';
	foreach ($tree as $branch=>$twig){
		$markup.='<li>'.((is_array($twig))?$branch.tree($twig):$twig).'</li>';
	}
	return '<ul>'.$markup.'</ul>';
}

echo tree($tree);
$o=next($tree);
$o=next($tree);
print_r($o)."<br>";
echo "<br>";
echo count($tree);

/*echo "<pre>";
print_r ($tree);
echo "</pre>";*/
?>