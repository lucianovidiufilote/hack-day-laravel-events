# hack-day-laravel-events

#### The best Laravel architecture yet ( that I have made )

### What do we want to achieve?

> Have a number of **independent actions** that can be triggered from **anywhere**, **anytime**.
>
> They might or might not receive **context** at startup.

> Have a number of **flows** that are have to run certain **actions** in a **pre-defined order**

> Have the ability to **stop**, **restart** and **resume** a flow

> **Restrict multiple jobs** running for the same flow ( with a configurable **unique key** )


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
