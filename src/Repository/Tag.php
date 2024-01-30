<?php

namespace Up\Repository;

use Up\Repository\Repository;
use Up\Service\Database;
use Up\Models;

class Tag extends Repository
{

	public static function getAll(): array
	{
		$database = new Database();
		$connection = $database->getDbConnection();

		$sql = "select * from up_tags;";

		$result = mysqli_query($connection, $sql);

		if (!$result)
		{
			throw new Exception(mysqli_error($connection));
		}

		$tags = [];

		while ($row = mysqli_fetch_assoc($result))
		{
			$tags[$row['id']] = new Models\Tag($row['id'], $row['name']);
		}

		return $tags;
	}

	public static function getById(int $id): Models\Tag
	{
		$database = new Database();
		$connection = $database->getDbConnection();

		$sql = "select * from up_tags where id = {$id};";

		$result = mysqli_query($connection, $sql);

		if (!$result)
		{
			throw new Exception(mysqli_error($connection));
		}

		$row = mysqli_fetch_assoc($result);

		return new Models\Tag($row['id'], $row['name']);
	}

}