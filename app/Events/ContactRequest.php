<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;
/*
 *This event is fired whenever somebody requests a contact request, so it sends informations to 2 handlers for 
*/
class ContactRequest extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

}
