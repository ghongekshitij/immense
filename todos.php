<!DOCTYPE html>
<html class="viewport" data-theme="default" >

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="library/bootstrap/jquery/jquery.min.js"></script>
  <script src="library/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="library/bootstrap/jquery/jquery.min.js"></script>
  <script src='tinymce/tinymce.min.js'></script>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/css/mdb.min.css" /> -->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/js/mdb.min.js"></script>

  <title></title>
<script>
$(document).ready(function () {
  $('.datepicker').datepicker({
       format: 'dd/mm/yyyy'
   });

  $("#CoverStartDateOtherPicker").datetimepicker({
      onSelect: function () {
          $("label[for='CoverStartDateOther']").text($(this).val());
      }
  });

  $("#CoverStartDateOther").click(function () {
      $("#CoverStartDateOtherPicker").datepicker("show");
  });

});
</script>
  <style>
  .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
  }

  .sidenav a:hover {
      color: #f1f1f1;
  }

  .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
  }

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }

  .sidenav {
      height: 30%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      right: 0;
      background:#1b6ac9;
      color: #fff;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
  }

    .panel {
      /* background-color: yellow; */
      height: 750px;
      width: 1100px;
      margin-left: 100px;
      margin-right: 150px;
      margin-top: 100px;
      /* border: 2px; */
      /* border-color: red; */

    }
    ..withImageAndIcon {
    font-weight: bold;
}

.withFolder48 {
  line-height: 48px;
  width: 20px;
  height: 30px;
  background: transparent url("images/home.svg") no-repeat;
}

 .navbar-nav {
display: inline-block;
float: none;
vertical-align: top;
}
td{
  border:none;
}
  </style>

</head>

<body style="background-color:#f7f4ea;">

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="height:40px;background-color:#f7f4ea;">
    <img src="images/favicon.png" style="height:40px">
    <div class="container">

      <div class="col-md-4">
      </div>

      <div class="col-md-8">

        <img src="images/home.svg" style="height:20px">
        <a href="#" style="color:black"><b>Home</b></a>
        <!-- <button type="button" class="btn btn-secondary" style="background-color:#f7f4ea;border-color:#f7f4ea;color:black">Home</button> -->
        <img src="images/ping.svg" style="height:20px">
        <a href="#" style="color:black"><b>Pings</b></a>
        <!-- <button type="button" class="btn btn-secondary" style="background-color:#f7f4ea;border-color:#f7f4ea;color:black">Pings</button> -->
        <img src="images/inbox.svg" style="height:20px">
        <a href="#" style="color:black"><b>Hey!</b></a>
        <!-- <button type="button" class="btn btn-secondary" style="background-color:#f7f4ea;border-color:#f7f4ea;color:black">Hey!</button> -->
        <img src="images/activity.svg" style="height:20px">
        <a href="#" style="color:black"><b>Activity</b></a>
        <!-- <button type="button" class="btn btn-secondary" style="background-color:#f7f4ea;border-color:#f7f4ea;color:black">Activity</button> -->
        <img src="images/search.svg" style="height:20px">
        <a href="#" style="color:black"><b>Find</b></a>
        <!-- <button type="button" class="btn btn-secondary" style="background-color:#f7f4ea;border-color:#f7f4ea;color:black">Find</button> -->

      </div>

    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
        <main>
          <div class="card card-body" style="margin-top:50px; height:50px;box-shadow: 0 0 2px 2px Gainsboro;">
            <center>
              <a href="home.php"><b>Deskera HQ</b></a>
            </center>
          </div>

        </main>
      </div>
      <div class="col-md-3">
      </div>
    </div>

  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">

        <main>

          <div class="card card-body" style="margin-top:1px; height:auto;box-shadow: 0 0 2px 2px Gainsboro;">
            <h1 class="card-title">
              <button id="btnTest"  style="border-radius:1.5em;background-color:#07b580;border-color:#07b580" class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                + New Item
              </button>
             To-dos

             <div id="mySidenav" class="sidenav" style="margin-top:100px;margin-right:240px">
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               <a href="#">Bookmark</a>
               <a href="#" onclick="openModal()">Get a public link</a>

             </div>

             <span style="font-size:40px;cursor:pointer;margin-left:550px" onclick="openNav()">...</span>

           </h1>

              <hr></hr>


            <!-- Card -->
            <div class="collapse" id="collapseExample1">
              <!-- Card body -->
              <div class="card card-body">

                <!-- <span class="d-inline-block" data-toggle="popover" data-content="Disabled popover">
  <button class="btn btn-primary" style="pointer-events: none;" type="button" disabled>Disabled button</button>
</span> -->
                  <!-- Material form register -->
                    <form id="formABC" action="#">
                      <div class="row">
                        <!-- <div class="col-md-2">
                        </div> -->
                        <div class="col-md-12" >
                          <!-- <span>Assigned To<input type="text" id="materialFormCardNameEx" class="form-control" style="border:0" placeholder="Type names to assign..."></span>
                          <hr style="width:100%"></hr>
                          When done, notify<input type="text" id="materialFormCardNameEx" class="form-control" style="border:0" placeholder="Type names to notify...">
                          <hr style="width:100%"></hr>
                          Due on<input type="text" id="materialFormCardNameEx" class="form-control" style="border:0" placeholder="Name this list...">
                          <hr style="width:100%"></hr>
                          Notes<input type="text" id="materialFormCardNameEx" class="form-control" style="border:0" placeholder="Name this list..."> -->
                          <table class="table">

  <tbody>
    <tr align="right">

      <td>Assigned To</td>
      <td><input type="text" id="materialFormCardNameEx" class="form-control" style="border:0;height:25px" placeholder="Type names to assign..."></td>

    </tr>
    <tr align="right">

      <td>When done, notify</td>
      <td><input type="text" id="materialFormCardNameEx" class="form-control" style="border:0;height:25px" placeholder="Type names to notify..."></td>

    </tr>
    <tr align="right">

      <td>Due on</td>
      <!-- <td><input type="text" id="materialFormCardNameEx" class="form-control" style="border:0;height:25px" placeholder="Name this list..."></td> -->
      <td>
        <div class="form-check">
					<label>
						<input type="radio" name="radio" style="color:green" checked> <span class="label-text">No due date</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="radio" name="radio"> <span class="label-text">A specific date</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="radio" name="radio"> <span class="label-text">Runs from</span>
					</label>
				</div>
        <!-- <span class="spacing_10">
    <input type="text" id="CoverStartDateOtherPicker" />
    <input type="radio" id="CoverStartDateOther" name="radios" value="">
    <label for="CoverStartDateOther">Other</label>

</span> -->
			</form>
      </td>
    </tr>
    <tr align="right">

      <td>Notes</td>
      <td><textarea class="form-control" id="myTextarea1" rows="7"></textarea></td>

    </tr>

    <tr>
<td></td>
      <td><button id="btnTest" style="border-radius:1.5em;background-color:#07b580;border-color:#07b580" class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
        Add this to-do
      </button>

      <button id="btnTest" style="border-radius:1.5em;background-color:white;border-color:#07b580;color:#07b580" class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
        Cancel
      </button>
    </td>


    </tr>
  </tbody>
</table>
                        </div>
                        <!-- <div class="col-md-2">
                        </div> -->

                      </div>

                    </form>
                    <!-- Material form register -->

                </div>
                <!-- Card body -->

            </div>
            <!-- Card -->


            <!-- Card -->
            <div class="collapse" id="collapseExample">
              <!-- Card body -->
              <div class="card card-body">

                  <!-- Material form register -->
                    <form id="formABC" action="#">

                      <!-- Material input text -->
                        <div class="md-form">

                            <input type="text" id="materialFormCardNameEx" class="form-control" style="border:0" placeholder="Name this list..."><br>
                            <textarea class="form-control" id="myTextarea" rows="7"></textarea>

                        </div>

                        <!-- <div class="text-center py-4 mt-3">
                            <button class="btn btn-cyan" type="submit">Add this list</button>
                        </div> -->

                        <br>

                        <button id="btnTest" style="border-radius:1.5em;background-color:#07b580;border-color:#07b580" class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                          Add this list
                        </button>
                    </form>
                    <!-- Material form register -->

                </div>
                <!-- Card body -->

            </div>
            <!-- Card -->


            </div>
            <!-- Card -->
          </div>

        </main>
    </div>
    <div class="col-md-2">

    </div>

    <!-- Row Close -->
  </div>

  </div>
  <!-- Container Close -->

  <script src="library/bootstrap/jquery/jquery.min.js"></script>
  <script src="library/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    tinymce.init
({
    selector: '#myTextarea'
});
  </script>
  <script>
  tinymce.init
({
  selector:'#myTextarea1'
});
  </script>

</body>

</html>
