<?php

namespace Up\Dto;

use Up\Entity\Entity;

class ProductChangeDto implements Dto
{
	public function __construct(
		public readonly string $id,
		public readonly string $title,
		public readonly string $description,
		public readonly string $price,
		public readonly string $imagePath,
	){}

	public static function from(Entity $entity): void
	{
		// TODO: Implement from() method.
	}
}
