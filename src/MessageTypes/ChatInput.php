<?php

namespace Kir\ChatGPT\MessageTypes;

use Kir\ChatGPT\Common\ChatMessage;
use Kir\ChatGPT\Messages\ChatAttachment;

class ChatInput implements ChatMessage {
	public static function mk(string $content, string $role = 'user', ?ChatAttachment $attachment = null): ChatInput {
		return new ChatInput(content: $content, role: $role, attachment: $attachment);
	}

	public function __construct(
		public string $content,
		public string $role = 'user',
		public ?ChatAttachment $attachment = null,
	) {}
}