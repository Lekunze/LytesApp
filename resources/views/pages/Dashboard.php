<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
</head>
<style>
  .card{
    width: 100%;
    height: 19vh;
  }


    .overlay {
    height: 0%;
    width: 50%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 30%;
    width: 80%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 30px;
    right: 35px;
  }
}

</style>
<body>
<?php
require_once('Database.php');
  ?>

 <nav>
    <div class="nav-wrapper #424242 grey darken-3">
      <h5 href="#" class="right ">Admin Panel</h5>
    </div>
  </nav>

  </br>

   <?php

    $db = Database::getInstance();
    $result = $db->prepare("SELECT vendor, count(*) as ven FROM log WHERE vendor = 'vodafone'");
    $result->execute();
    $res = $result->fetch(PDO::FETCH_ASSOC);
    $vodafone = $res['ven'];
    
    $db = Database::getInstance();
    $result = $db->prepare("SELECT vendor, count(*) as ven FROM log WHERE vendor = 'tigo'");
    $result->execute();
    $res = $result->fetch(PDO::FETCH_ASSOC);
    $tigo = $res['ven'];

    $db = Database::getInstance();
    $result = $db->prepare("SELECT vendor, count(*) as ven FROM log WHERE vendor = 'MTN'");
    $result->execute();
    $res = $result->fetch(PDO::FETCH_ASSOC);
    $mtn = $res['ven'];

    $db = Database::getInstance();
    $result = $db->prepare("SELECT vendor, count(*) as ven FROM log WHERE vendor = 'airtel'");
    $result->execute();
    $res = $result->fetch(PDO::FETCH_ASSOC);
    $airtel = $res['ven'];
    $data = json_encode([$vodafone, $mtn, $airtel, $tigo]);
?>

<header>
</header>

<main>
  <div class="fixed">
  <div class="row">
      <div class="col s12 m6 l3 ">
       <div class="card #c62828 #546e7a blue-grey darken-1">
    <div class="card-content white-text">
      <span class="card-title activator white-text"><a class="white-text modal-trigger" href="#modal1"><i class="material-icons right">more_vert</i><?php echo $vodafone?></span>
      <h5>Vodafone</h5>
    </div>

  <div id="modal1" class="modal">
    <div class="modal-content black-text">
      <h4>Vodafone Historic Data</h4>
      <table class="highlight responsive-table centered">
        <thead>
          <tr>
              <th>ID</th>
              <th>Sender</th>
              <th>Receiver</th>
              <th>Receivers Network</th>
              <th>Amount Transfered</th>
              <th>Date-Time</th>
          </tr>
        </thead>
        <tbody>

        <?php
      $db = Database::getInstance();
    $result = $db->prepare("SELECT * FROM log WHERE vendor = 'vodafone'");
    $result->execute();
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
          $id = $row['trans_id'];
          $receiver = $row['receiver'];
          $sender = $row['sender'];
          $vendor = $row['vendor'];
          $amount = $row['amount'];
          $date_time = $row['date_time'];
            ?>
      <tr>
            <td><?php echo $id?></td>
            <td><?php echo $sender ?></td>
            <td><?php echo $receiver?></td>
            <td><?php echo $vendor?></td>
            <td><?php echo $amount ?></td>
            <td><?php echo $date_time ?></td>
          </tr>
      <?php
      }
  ?>
        </tbody>
        </table>
    </div>
    <div class="modal-footer">
      <a class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
  </div>

      </div>

    <div class="col s12 m6 l3 ">
       <div class="card #ff9800 orange">
    <div class="card-content white-text">
      <span class="card-title activator white-text"><a class="white-text modal-trigger" href="#modal2"><i class="material-icons right">more_vert</i><?php echo $mtn?></span>
      <h5>MTN</h5>
    </div>
    <!-- // -->
   <!-- Modal Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content black-text">
      <h4>MTN Historic Data</h4>
      <table class="highlight responsive-table centered">
        <thead>
          <tr>
              <th>ID</th>
              <th>Sender</th>
              <th>Receiver</th>
              <th>Receivers Network</th>
              <th>Amount Transfered</th>
              <th>Date-Time</th>
          </tr>
        </thead>
        <tbody>

        <?php
      $db = Database::getInstance();
    $result = $db->prepare("SELECT * FROM log WHERE vendor = 'MTN'");
    $result->execute();
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
          $id = $row['trans_id'];
          $receiver = $row['receiver'];
          $sender = $row['sender'];
          $vendor = $row['vendor'];
          $amount = $row['amount'];
          $date_time = $row['date_time'];
            ?>
      <tr>
            <td><?php echo $id?></td>
            <td><?php echo $sender ?></td>
            <td><?php echo $receiver?></td>
            <td><?php echo $vendor?></td>
            <td><?php echo $amount ?></td>
            <td><?php echo $date_time ?></td>
          </tr>
      <?php
      }
  ?>
        </tbody>
        </table>
    </div>
    <div class="modal-footer">
      <a class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
  </div>

      </div>

      <div class="col s12 m6 l3 ">
       <div class="card #4e342e brown darken-3">
    <div class="card-content white-text">
      <span class="card-title activator white-text"><a class="white-text modal-trigger" href="#modal3"><i class="material-icons right">more_vert</i><?php echo $airtel?></span>
      <h5>Airtel</h5>
    </div>
    <!-- // -->
   <!-- Modal Structure -->
  <div id="modal3" class="modal">
    <div class="modal-content black-text">
      <h4>Airtel Historic Data</h4>
      <table class="highlight responsive-table centered">
        <thead>
          <tr>
              <th>ID</th>
              <th>Sender</th>
              <th>Receiver</th>
              <th>Receivers Network</th>
              <th>Amount Transfered</th>
              <th>Date-Time</th>
          </tr>
        </thead>
        <tbody>

        <?php
      $db = Database::getInstance();
    $result = $db->prepare("SELECT * FROM log WHERE vendor = 'airtel'");
    $result->execute();
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
          $id = $row['trans_id'];
          $receiver = $row['receiver'];
          $sender = $row['sender'];
          $vendor = $row['vendor'];
          $amount = $row['amount'];
          $date_time = $row['date_time'];
            ?>
      <tr>
            <td><?php echo $id?></td>
            <td><?php echo $sender ?></td>
            <td><?php echo $receiver?></td>
            <td><?php echo $vendor?></td>
            <td><?php echo $amount ?></td>
            <td><?php echo $date_time ?></td>
          </tr>
      <?php
      }
  ?>
        </tbody>
        </table>
    </div>
    <div class="modal-footer">
      <a class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
  </div>

      </div>


       <div class="col s12 m6 l3 ">
       <div class="card #c62828 #880e4f pink darken-4">
    <div class="card-content white-text">
      <span class="card-title activator white-text"><a class="white-text modal-trigger" href="#modal4"><i class="material-icons right">more_vert</i><?php echo $tigo?></span>
      <h5>Tigo</h5>
    </div>
    <!-- // -->
   <!-- Modal Structure -->
  <div id="modal4" class="modal">
    <div class="modal-content black-text">
      <h4>Tigo Historic Data</h4>
      <table class="highlight responsive-table centered">
        <thead>
          <tr>
              <th>ID</th>
              <th>Sender</th>
              <th>Receiver</th>
              <th>Receivers Network</th>
              <th>Amount Transfered</th>
              <th>Date-Time</th>
          </tr>
        </thead>
        <tbody>

        <?php
      $db = Database::getInstance();
    $result = $db->prepare("SELECT * FROM log WHERE vendor = 'tigo'");
    $result->execute();
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
          $id = $row['trans_id'];
          $receiver = $row['receiver'];
          $sender = $row['sender'];
          $vendor = $row['vendor'];
          $amount = $row['amount'];
          $date_time = $row['date_time'];
            ?>
      <tr>
            <td><?php echo $id?></td>
            <td><?php echo $sender ?></td>
            <td><?php echo $receiver?></td>
            <td><?php echo $vendor?></td>
            <td><?php echo $amount ?></td>
            <td><?php echo $date_time ?></td>
          </tr>
      <?php
      }
  ?>
        </tbody>
        </table>
    </div>
    <div class="modal-footer">
      <a class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
  </div>

      </div>
  </div>
  </div>
  
  
  <table class="highlight responsive-table centered">
        <thead>
          <tr>
              <th>ID</th>
              <th>Sender</th>
              <th>Receiver</th>
              <th>Receivers Network</th>
              <th>Amount Transfered</th>
              <th>Date-Time</th>
          </tr>
        </thead>
        <tbody>
          <?php

        $db = Database::getInstance();

        $result = $db->prepare("SELECT * FROM log");
        $result->execute();
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
          $id = $row['trans_id'];
          $receiver = $row['receiver'];
          $sender = $row['sender'];
          $vendor = $row['vendor'];
          $amount = $row['amount'];
          $date_time = $row['date_time'];
          ?>

          <tr>
            <td><?php echo $id?></td>
            <td><?php echo $sender ?></td>
            <td><?php echo $receiver?></td>
            <td><?php echo $vendor?></td>
            <td><?php echo $amount ?></td>
            <td><?php echo $date_time ?></td>
          </tr>

          <?php
            }

          ?>
        </tbody>
    </table>

    <div class="fixed-action-btn horizontal" >
    <a onclick="openNav()" class="btn waves-effect waves-light pulse" >
      <i class="material-icons right">expand_less</i>Open
    </a>
  </div>


      
      

  <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <div class="col s12 m4 l6 center">
    <div class="card-panel white">
      <span class="card-title">Application Usage</span>
      <canvas id="appUsage"></canvas>
    </div>
  </div>
  </div>
</div>

</main>

<script>
    $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
     $('#modal1').modal('open');
      $('#modal1').modal('close');
     $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        alert("Ready");
        console.log(modal, trigger);
      },
      complete: function() { alert('Closed'); } // Callback for Modal close
    }
  );
  });

    $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
     $('modal2').modal('open');
      $('modal2').modal('close');
     $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        //alert("Ready");
        console.log(modal, trigger);
      },
      //complete: function() { alert('Closed'); } // Callback for Modal close
    }
  );
  });

    $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
     $('modal3').modal('open');
      $('modal3').modal('close');
     $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        //alert("Ready");
        console.log(modal, trigger);
      },
      //complete: function() { alert('Closed'); } // Callback for Modal close
    }
  );
  });

    $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
     $('modal4').modal('open');
      $('modal4').modal('close');
     $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        //alert("Ready");
        console.log(modal, trigger);
      },
      //complete: function() { alert('Closed'); } // Callback for Modal close
    }
  );
  });
   
</script>

<!--<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";

}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
      var ctx = document.getElementById('appUsage').getContext('2d');
      var num = <?php echo $data; ?>;
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Vodafone', 'MTN', 'Airtel', 'Tigo'],
      datasets: [{
        label: 'Networks',
        data: num,
        backgroundColor: "rgba(53,64,79,0.4)"
      }]
    }
  });
  </script>


</body>

</html>