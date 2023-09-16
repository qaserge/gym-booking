<p>Hey {{ $details['userName'] }},</p>
<p>
    Sorry, your {{ $details['className'] }} class on {{ $details['classDateTime']->format('jS F') }} at
    {{ $details['classDateTime']->format('g:i a') }}
    was canceled by the instructor. <br>
    Check the schedule and book another. <br>
    Thank you
</p>
