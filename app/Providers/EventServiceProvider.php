<?php namespace App\Providers;

use App\Refactoring;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider {

	/**
	 * The event handler mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		'event.name' => [
			'EventListener',
		],
	];

	/**
	 * Register any other events for your application.
	 *
	 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
	 * @return void
	 */
	public function boot(DispatcherContract $events)
	{
		parent::boot($events);

		Refactoring::created(function($refactoring){
			Activity::create([
				'subject_id' => $refactoring->id,
				'subject_type' => get_class($refactoring),
				'name' => $refactoring->type()->description,
				'user_id' => $refactoring->user->id,
			]);
		});
	}

}
