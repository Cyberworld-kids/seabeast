<doctype! html>
<html>

  <head>
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">

  </head>

  <body>

     <section id="app">
            <div id="div1">
              <button type="submit" @click="updateCount()" id="clickButton">
              </button>
            </div>

            <!-- Second status  -->
            <div id="status"></div>
            <h1> You clicked <b>{{ numClicks }}</b> times</h1>
            <h2> You have <b>{{ secs }}</b> secs left </h2>

      </section>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
      <script src='assets/js/jquery-ui.js'></script>
      <script src='assets/js/fastclick.js'></script>

  </body>

</html>
