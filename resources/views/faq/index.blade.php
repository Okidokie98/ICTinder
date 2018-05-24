@extends('adminlte::page')

<style>
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
    .boldHeadings {
        font-weight: bold;
    }
</style>

<title>FAQ</title>

@section('content')
<h1>Frequently Asked Questions</h1>
<div>
        <h2 class="boldHeadings">Safety and privacy</h2>
        <div class="row">         
                <div class="column left" >
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
                </div>
            </div>
        <h2 class="boldHeadings">General info about ICTinder</h2>
        <div class="row">                          
                <div class="column left" >
                    <h4 class="boldHeadings">What is ICTinder?</h4>
                    <p>ICTinder is a project designed by six college students that aims to help people with understanding programming languages. It's designed to match people
                    together that have the potential to help each other out. When a user is looking for a match he will be matched with someone that should have a higher level of skill then
                    the user that is looking for the match.</p>
                    <p>ICTinder exists for young and old to create an environment that allows users to help each other out. We strive for a calm but educational place.</p>
                    <h4 class="boldHeadings">Is there a minimum age to join ICTinder?</h4>
                    <p>There is no specified minimum age to be able to join ICTinder. Everyone that is interested in in programming languages can join. For the younger users we do recommend the parents
                    to keep an eye out for their child. It's important for parents to know what their child is up to and who they are talking to.</p>
                    <h4 class="boldHeadings">What are those stars about that I see next to my programming languages?</h4>
                    <p>The stars indicate what level someone has in a certain programming language. Guidelines for the how many stars someone should have 
                    can be found <a href = "/">here</a>.</p>
                </div> 
        </div>                   
        <h2 class="boldHeadings">Interact with your profile and skills</h2>
        <div class="row">                          
                <div class="column left" >                    
                    <h4 class="boldHeadings">How do I edit my profile?</h4>
                    <p>You can edit your profile by going to your "Profile" page. You can find a link to it in the navbar or by clicking <a href="/profile/1">here</a>.
                    Here you can find a blue button that says "Edit".</p>
                    <h4 class="boldHeadings">How do I delete my profile?</h4>
                    <p>You can delete your profile by going to your "Profile" page. You can find a link to it in the navbar or by clicking <a href="/profile/1">here</a>.
                    Here you can find a red button that says "Delete".</p>
                    <h4>Where can I find an overview of all my skills?</h4>
                    <p>You can find an overview of your IT skills by going to your "Skills" page. You can find a link to it in the navbar or by clicking <a href="/skills">here</a>.
                    Here you can find an overview of your skills.</p>
                </div>
        </div>
    </div>
</div>
@endsection