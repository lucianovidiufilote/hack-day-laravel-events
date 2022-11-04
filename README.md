# hack-day-laravel-events

#### The best Laravel architecture yet ( that I have made )

### What do we want to achieve?

> Have a number of **independent actions** that can be triggered from **anywhere**, **anytime**.
>
> They might or might not receive **context** at startup.

> Have a number of **flows** that have to run certain **actions** in a **pre-defined order**

> Have the ability to **stop**, **restart** and **resume** a flow

> **Restrict multiple jobs** running for the same flow ( with a configurable **unique key** )

> Trigger a flow either from an API call, either from scheduled job


#### Naming:
- Job -> 
- Event -> Something that has happened
- (Event) Listener -> An action that runs then an event happens

### Prerequisites:
- Laravel 9
- PHP 8.1
- MySQL
- Redis

### Resources:
- https://laravel.com/docs/9.x/redis
- https://laravel.com/docs/9.x/broadcasting
- https://laravel.com/docs/9.x/events
- https://laravel.com/docs/9.x/contracts
- https://laravel.com/docs/9.x/queues
- https://laravel.com/docs/9.x/scheduling



Example case implementation

Flow 1:
1. Feed is added by the user in the controller
2. Feed is saved
3. Feed is validated   
   1. If invalid -> message
   2. If valid -> import_job


Flow 2:
1. Feed import hourly -> import_job


import_job:
1. Download
2. Validate
3. Detect settings
4. Check
5. Import
