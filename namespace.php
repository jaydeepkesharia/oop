<?php 

//namespace App\Http\controller; //non bracketed namespace with sub namespaces

namespace def { // bracketed namespace
	
	class xyz {
		public function __construct()
		{
			echo "XYZ from DEF namespace<br>";
		}
	}
}

namespace {

	class xyz
	{
		
		function __construct()
		{
			echo "XYZ from global namespace<br>";
		}
	}

	use def\xyz as def;

	$def = new def();
	$global = new xyz();
}