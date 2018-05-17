@extends('adminlte::page')

<style>
    #mainbody { 
        padding-left: 30px;
    }
    .column {
        float: left;
        width: 50%;
    }
    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    .row {
        display: flex;
    }
    .left {
        width: 50%;
    }
    .right {
        width: 50%;
    }
</style>

<title>FAQ</title>

@section('content')
<div>
    <div id="mainbody">
        <h1>Frequently Asked Questions</h1>
        <hr>
        <h2>Safety and privacy</h2>
            <div class="row pl-1 ml-1 mb-1" >
                <div class="column left" >
                <hr>
                    <h3>How secure are my account details?</h3>
                    <p>ICTinder guarnatees that the account details of every memeber are stored in our own database and will not be spread or sold by ICTinder. They will only be used
                    by us to verify who you are.</p>
                    <hr>
                    <h3>How do I know if I'm matched with a user that can help me?</h3>
                    <p>We will have multiple ways for you to make sure that the user you are matched with can help you/teach you something. Ofcourse, our users are still people who
                    don't know everything. If you have an issue it's not guaranteed that the user you are matched with can help you with a problem you are having.</p>
                    <ol>
                        <li>We allow users to leave feedback on another users profile. This will allow the users that have come before you to leave feedback on the profile
                        of a user. This way you can see if the user you are matched with actually helped people in the past.</li>
                        <li>We allow users to upload certificates. This will allow the user to show of what he can do and can prove to other users that he can actually do something
                        by showing of the certificates.</li>
                    </ol>
                    <hr>
                    <h3>How do I contact you guys?</h3>
                </div>
                <div class="column right" >
                </div>
            </div>
    </div>
</div>
@endsection