<?php

namespace Kir\ChatGPT\Common;

use Stringable;

interface ChatModelName extends Stringable {
	public function __toString(): string;
}