<?php
function getMsg($type, $content) {
	$output = "<div class=\"notification ".$type." png_bg\">";
	$output .= "<div>".$content."</div>";
	$output .= "</div>";
	return $output;
}
function systemMsg($code) {
	switch($code) {
		case 'DeleteConfirmed':
			return "That's been deleted for you!";
			break;
		case 'Cancelled':
			return "Abort, abort abort! No worries, we've cancelled that for you!";
			break;
		default:
			return "I still have to code this bit! Was going to be a databse of messages key'd on a single word, then a function to pick each message out based on keyword";
	}
}
class ArrayToXML
{
	/**
	 * The main function for converting to an XML document.
	 * Pass in a multi dimensional array and this recrusively loops through and builds up an XML document.
	 *
	 * @param array $data
	 * @param string $rootNodeName - what you want the root node to be - defaultsto data.
	 * @param SimpleXMLElement $xml - should only be used recursively
	 * @return string XML
	 */
	public static function toXml($data, $rootNodeName = 'data', $xml=null)
	{
		// turn off compatibility mode as simple xml throws a wobbly if you don't.
		if (ini_get('zend.ze1_compatibility_mode') == 1)
		{
			ini_set ('zend.ze1_compatibility_mode', 0);
		}
		
		if ($xml == null)
		{
			$xml = simplexml_load_string("<?xml version='1.0' encoding='utf-8'?><$rootNodeName />");
		}
		
		// loop through the data passed in.
		foreach($data as $key => $value)
		{
			// no numeric keys in our xml please!
			if (is_numeric($key))
			{
				// make string key...
				$key = "unknownNode_". (string) $key;
			}
			
			// replace anything not alpha numeric
			$key = preg_replace('/[^a-z]/i', '', $key);
			
			// if there is another array found recrusively call this function
			if (is_array($value))
			{
				$node = $xml->addChild($key);
				// recrusive call.
				ArrayToXML::toXml($value, $rootNodeName, $node);
			}
			else 
			{
				// add single node.
                                $value = htmlentities($value);
				$xml->addChild($key,$value);
			}
			
		}
		// pass back as string. or simple xml object if you want!
		return $xml->asXML();
	}
}
// END
	?>
