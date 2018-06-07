@extends('adminlte::page')
<style>
.container {
    width: 400px;
    padding: 20px;
    overflow: hidden;
}

.container img {
    margin-right: 15px;
    float: left;
}
</style>
@section('content')



<h1>About us</h1>

<div>
    <h2>What are we?</h2>
        <p>This website is meant to help people get together, to learn programming skills from one another. The idea behind this concept is that 
        you register yourself on the site, which you can do by clicking the log in button at the top, or right <a href = "/login">here</a>.</p>
        <p> When you have created you account you will need to set up a profile with some personal information, and you need to rate yourself in 
        the skills we support. This means rating your skill-level out of 5, where 0 is no knowledge at all and 5 stars is a god at that skill, 
        so other people have an indication of your skill-levels. Using these skill-levels we can then find you a person that can help you, or 
        we can connect you to someone that could use your help.</p>
</div>
<div>
    <h2>Who are we?</h2>
        <p>This website is a groupproject of 6 first year Computer science students at the HZ university of applied sciences in the Netherlands. 
        This website is a work in progress! so please keep that in mind when using it. If you find any bugs or miss any features you would like 
        let us know by clicking the <a href = "/login">contact button</a> and sending us an email. We hope this website helps people to achieve more in whatever they 
        want to do! You can see a short introduction to our members right here:</p>
</div>
<div class="container">
    <h3>Brandon de Baat</h3>
    <img src="https://i.imgur.com/5EIh1b0.png" width="150" height="150"/>
    <h4>Student eerstejaars HBO-ICT</h4>
    <h4>Responsible for: The <a href="/contactUS">Contact</a> Page</h4>
</div>

<div class="container">
    <h3>Dennis Oosterling</h3>
    <img src="https://i.imgur.com/KXINGc2.png" width="150" height="150"/>
    <h4>Student eerstejaars HBO-ICT</h4>
    <h4>Responsible for: The Matchmaking</h4>
</div>

<div class="container">
    <h3>Jeroen Rijken</h3>
    <img src="https://i.imgur.com/YUvwI5k.jpg" width="150" height="200"/>
    <h4>Student eerstejaars HBO-ICT</h4>
    <h4>Responsible for: The <a href="/createchat">Chat</a> Page</h4>
</div>

<div class="container">
    <h3>Lesley Mulder</h3>
    <img src="https://i.imgur.com/zFL7sWO.jpg" width="150" height="250"/>
    <h4>Student eerstejaars HBO-ICT</h4>
    <h4>Responsible for: The <a href="/threads">Forum</a> Page</h4>
</div>

<div class="container">
    <h3>Rik Rödel</h3>
    <img src="https://i.imgur.com/K5vRGXd.jpg" width="150" height="150"/>
    <h4>Student eerstejaars HBO-ICT</h4>
    <h4>Responsible for: The <a href="/faq">FAQ</a>, the <a href="/aboutus">About Us</a> and the <a href="/">Home</a> Page</h4>
</div>

<div class="container">
    <h3>Stefan Douw</h3>
    <img src="https://i.imgur.com/LijsQLX.png" width="150" height="150"/>
    <h4>Student eerstejaars HBO-ICT</h4>
    <h4>Responsible for: <a href="/skills">The Skills Page</a></h4>
</div>

@endsection