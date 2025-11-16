<?php

namespace Kir\ChatGPT\PredefinedModels;

use Kir\ChatGPT\Common\ChatModelName;

class LLMImageToText implements ChatModelName {
	public function __toString(): string {
		return 'gpt-5';
	}
}