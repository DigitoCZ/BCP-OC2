<?php
// Heading
$_['heading_title']					 = 'BitcoinPay Payment';

// Text
$_['text_payment']					 = 'Payment';
$_['text_success']					 = 'Success: You have modified BitcoinPay payment details!';
$_['text_edit']              = 'Edit BitcoinPay';
$_['text_bcp_payment']				 = '<a target="_BLANK" href="https://bitcoinpay.com"><img src="view/image/payment/bitcoinpay-small.jpg" alt="BitcoinPay payment" title="BitcoinPay payment" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']			 = 'Authorization';
$_['text_sale']						 = 'Sale';

// Entry
$_['entry_api']					 = 'API key:';
$_['entry_password']     = 'Callback password:';
$_['entry_email']				 = 'E-Mail:';
$_['entry_currency']		 = 'Payout currency:';

$_['entry_buttons']					 = 'Button:';
$_['entry_buttons_text']		 = 'only text';
$_['entry_geo_zone']				 = 'Geo Zone:';
$_['entry_status']					 = 'Status:';
$_['entry_sort_order']				 = 'Sort Order:';

// Statusy
$_['entry_confirmed_status'] = 'Confirmed Status';
$_['entry_pending_status']		 = 'Pending Status';
$_['entry_received_status']			 = 'Received Status';
$_['entry_insufficient_amount_status']			 = 'Insufficient Amount Status';
$_['entry_invalid_status']			 = 'Invalid Status';
$_['entry_timeout_status']			 = 'Timeout Status';


// Tab
$_['tab_general']					 = 'General';
$_['tab_order_status']     = 'Order Status';

// Help
$_['help_password']				= 'We recommend using a callback password. It is used as a data validation for stronger security. Callback password can be set under Settings > API in your account at BitcoinPay.com';
$_['help_email']			    = 'Email where notifications about Payment changes are sent.';
$_['help_currency']				= 'Currency of settlement. You must first set a payout for currency in your account Settings > Payout in your account at BitcoinPay.com. If the currency is not set in payout, the request will return an error.';


// Errors
$_['error_permission']				 = 'Warning: You do not have permission to modify this payment module!';
$_['error_email']					 = 'E-Mail required!';
$_['error_api']					 = 'API key required!';
$_['error_currency']					 = 'Your payout currency is not set';
$_['error_currency_invalid']					 = 'Your payout currency do not correspond with your account settings... You may choose from:';
$_['error_currency_format']					 = 'Bad currency format, use 3 letters';
?>