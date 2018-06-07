<head>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<header>
    <img src="{{ asset('img/logo.png') }}" alt="ICTinder logo" width = "15%" class = "logo">
    <div class="btn-group" role="group">
        <a href="/contactUS"><button class ="btn btn-primary">Contact</button></a>
        <a href="/login"><button class ="btn btn-primary">Log in</button></a>
        <a href="/faq"><button class ="btn btn-primary">FAQ</button></a>
    </div>
</header>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ICTinder</title>
  <link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
</head>
<body>
<style>
    html {
      box-sizing: border-box;
      background:#ffc600;
      font-family:'helvetica neue';
      font-size: 20px;
      font-weight: 200;
    }
    body {
      margin: 0;
    }
    *, *:before, *:after {
      box-sizing: inherit;
    }

    .panels {
      min-height:100vh;
      overflow: hidden;
      display: flex;
    }

    .panel {
      background:#6B0F9C;
      box-shadow:inset 0 0 0 5px rgba(255,255,255,0.1);
      color:white;
      text-align: center;
      align-items:center;
      /* Safari transitionend event.propertyName === flex */
      /* Chrome + FF transitionend event.propertyName === flex-grow */
      transition:
        font-size 0.7s cubic-bezier(0.61,-0.19, 0.7,-0.11),
        flex 0.7s cubic-bezier(0.61,-0.19, 0.7,-0.11),
        background 0.2s;
      font-size: 20px;
      background-size:cover;
      background-position:center;
      flex: 1;
      justify-content: center;
      display: flex;
      flex-direction: column;
    }


    .panel1 { background-image:url(https://i.imgur.com/Xmql5G5.png); }
    .panel2 { background-image:url(https://i.imgur.com/LTwneMf.png); }
    .panel3 { background-image:url(https://i.imgur.com/EBrrkZ4.png); }
    .panel4 { background-image:url(https://i.imgur.com/GQs4tRw.png); }
    .panel5 { background-image:url(https://i.imgur.com/8KFF1aG.png); }

    /* Flex Items */
    .panel > * {
      margin:0;
      width: 100%;
      transition:transform 0.5s;
      flex: 1 0 auto;
      display:flex;
      justify-content: center;
      align-items: center;
    }

    .panel > *:first-child { transform: translateY(-100%); }
    .panel.open-active > *:first-child { transform: translateY(0); }
    .panel > *:last-child { transform: translateY(100%); }
    .panel.open-active > *:last-child { transform: translateY(0); }

    .panel p {
      text-transform: uppercase;
      font-family: 'Amatic SC', cursive;
      text-shadow:0 0 4px rgba(0, 0, 0, 0.72), 0 0 14px rgba(0, 0, 0, 0.45);
      font-size: 2em;
    }
    .panel p:nth-child(2) {
      font-size: 4em;
    }

    .panel.open {
      flex: 5;
      font-size: 30px;
    }
</style>


  <div class="panels">
    <div class="panel panel1">
      <p>Acronym for: HyperText Markup Language</p>
      <p>HTML</p>
      <p>Inventor: Tim Berners-Lee</p>
    </div>
    <div class="panel panel2">
      <p>Acronym for: Cascading Style Sheets</p>
      <p>CSS</p>
      <p>Inventor: Håkon Wium Lie</p>
    </div>
    <div class="panel panel3">
      <p>Acronym for: Hypertext Preprocessor </p>
      <p>PHP</p>
      <p>Inventor: Rasmus Lerdorf</p>
    </div>
    <div class="panel panel4">
      <p>Acronym for: JavaScript</p>
      <p>JS</p>
      <p>Inventor: Brendan Eich</p>
    </div>
    <div class="panel panel5">
      <p>Acronym for: C plus plus</p>
      <p>C++</p>
      <p>Inventor: Bjarne Stroustrup</p>
    </div>
  </div>

<script>
    const panels = document.querySelectorAll('.panel');

    function toggleOpen() {
      console.log('Hello');
      this.classList.toggle('open');
    }

    function toggleActive(e) {
      console.log(e.propertyName);
      if (e.propertyName.includes('flex')) {
        this.classList.toggle('open-active');
      }
    }

    panels.forEach(panel => panel.addEventListener('click', toggleOpen));
    panels.forEach(panel => panel.addEventListener('transitionend', toggleActive));
</script>

</body>
</html>

<footer>

</footer>

