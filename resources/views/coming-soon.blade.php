@extends('layouts.app')

@section('main')
<div id="coming-soon-background"></div>
<div class="coming-soon">
    <div id='coming-soon'>
        <div class='title'>
            <span>Something Awesome!</span>
        </div>
        <p>coming soon</p>
        <section>
            <ul id="countdown">
                <li><span class="days timenumbers">21</span>
                    <p class="timeRefDays timedescription">days</p>
                </li>
                <li><span class="hours timenumbers">00</span>
                    <p class="timeRefHours timedescription">hours</p>
                </li>
                <li><span class="minutes timenumbers">00</span>
                    <p class="timeRefMinutes timedescription">minutes</p>
                </li>
                <li><span class="seconds timenumbers yellow-text">00</span>
                    <p class="timeRefSeconds timedescription">seconds</p>
                </li>
            </ul>
        </section>
        <p>Click here for goto</p>
        <p><a href="index.html" class="fill-btn"> Home!</a></p>
    </div>
</div>
@endsection