@extends('adminlte::page')

<title>FAQ Interactions</title>

<style>
    .boldHeadings {
        font-weight: bold;
    }
</style>

@section('content')
<a href="/faq" class="btn btn-primary">Go Back</a>
<hr/>
<h4 class="boldHeadings">How do I edit my profile?</h4>
<p>You can edit your profile by going to your "Profile" page. You can find a link to it in the navbar or by clicking <a href="/profile/1">here</a>.
Here you can find a blue button that says "Edit".</p>
<h4 class="boldHeadings">How do I delete my profile?</h4>
<p>You can delete your profile by going to your "Profile" page. You can find a link to it in the navbar or by clicking <a href="/profile/1">here</a>.
Here you can find a red button that says "Delete".</p>
<h4 class="boldHeadings">Where can I find an overview of all my skills?</h4>
<p>You can find an overview of your IT skills by going to your "Skills" page. You can find a link to it in the navbar or by clicking <a href="/skills">here</a>.
Here you can find an overview of your skills.</p>
<h4 class="boldHeadings">Where can I find my chats?</h4>
<p>You can find your chats by clicking the "Chats" tab in the navbar. This will take you to the page where you can find your chats. You can also click
<a href="/createchat">here</a>.</p>
<hr/>
<a href="/faq" class="btn btn-primary">Go Back</a>
@endsection