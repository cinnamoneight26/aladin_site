<?php
/* Copyright (C) NAVER <http://www.navercorp.com> */

class JSONDisplayHandler
{

	/**
	 * Produce JSON compliant content given a module object.\n
	 * @param ModuleObject $oModule the module object
	 * @return string
	 */
	function toDoc(&$oModule)
	{
		$variables = $oModule->getVariables();
		$variables['error'] = $oModule->getError();
		$variables['message'] = $oModule->getMessage();

		$json = json_encode2($variables);
		$json = str_replace(array("\r\n", "\n", "\t"), array('\n', '\n', '\t'), $json);
		$json = filter_var($json, FILTER_UNSAFE_RAW, FILTER_FLAG_ENCODE_LOW);

		return $json;
	}

}
/* End of file JSONDisplayHandler.class.php */
/* Location: ./classes/display/JSONDisplayHandler.class.php */
