﻿{$sms_statuses = [
		0 => 'expects',
		1 => 'processed',
		2 => 'sent',
		3 => 'delivered',
		4 => 'error',
		9 => 'postponed'
] scope='global'}

{$sms_errors = [
		'low_balance' => 'insufficient funds',
		'no_suitable_text' => 'no suitable text',
		'from_wrong' => 'invalid format sender',
		'to_wrong' => 'invalid number format of the recipient',
		'msg_empty' => 'is not defined text',
		'msg_too_long' => 'text is too long',
		'S1' => 'in line operator',
		'S0' => 'preparations for sending',
		'E1' => 'not delivered',
		'E2' => 'pending',
		'E3' => 'not known'
] scope='global'}