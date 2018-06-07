@extends('adminlte::page')

<title>FAQ Safety and Privacy</title>

<style>
    .boldHeadings {
        font-weight: bold;
    }
</style>

@section('content')
<a href="/faq" class="btn btn-primary">Go Back</a>
<hr/>
<h4 class="boldHeadings">How secure are my account details?</h4>
<p>ICTinder guarnatees that the account details of every memeber are stored in our own database and will not be spread or sold by ICTinder. They will only be used
by us to verify who you are.</p>
<h4 class="boldHeadings">How do I know if I'm matched with a user that can help me?</h4>
<p>We will have multiple ways for you to make sure that the user you are matched with can help you/teach you something. Ofcourse, our users are still people who
don't know everything. If you have an issue it's not guaranteed that the user you are matched with can help you with a problem you are having.</p>
<ol>
    <li>We allow users to leave feedback on another users profile. This will allow the users that have come before you to leave feedback on the profile
    of a user. This way you can see if the user you are matched with actually helped people in the past.</li>
    <li>We allow users to upload certificates. This will allow the user to show of what he can do and can prove to other users that he can actually do something
    by showing of the certificates our users gained.</li>
</ol>
<h4 class="boldHeadings">How do I contact you guys?</h4>
<p>You can contact us by going to the "Contact" page that is located in the navbar or by clicking <a href="/contactUS">here</a>.</p>
<hr/>
<a href="/faq" class="btn btn-primary">Go Back</a>
@endsection