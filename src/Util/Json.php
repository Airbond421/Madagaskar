<?php

namespace Up\Util;

class Json
{
	public static function encode($data, $options = null)
	{
		if ($options === null)
		{
			$options = JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_THROW_ON_ERROR;
		}

		return json_encode($data, $options);
	}
	public static function decode($data)
	{
		return json_decode($data, true);
	}
}
