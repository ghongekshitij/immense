<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="library/bootstrap/jquery/jquery.min.js"></script>
    <script src="library/bootstrap/js/bootstrap.min.js"></script>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/css/mdb.min.css" /> -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/js/mdb.min.js"></script>
    <script>
    ::-webkit-input-placeholder {
       color: red;
    }
    </script>
    <style>
.body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 50%;
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
</style>
    <title></title>
  </head>
  <body>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Launch demo modal
    </button>

<a href="sam.php">click</a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button style="font-size: 1.3rem;padding-top: 0.425em;padding-bottom: 0.425em;" type="button" class="btn btn1 btn-success">+New Item</button> -->
            <p>
              <button id="btnTest" class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                + New Item
              </button>
            </p>

            <h5 style="text-align:center;margin-left:200px;margin-right:auto;font-size:40px;font-family:'Lato'" class="modal-title" id="exampleModalLabel"><b>To-dos</b></h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button> -->

            <!--Sidebar  -->
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="#">Bookmark</a>
              <a href="#" onclick="openModal()">Get a public link</a>

            </div>

            <span style="font-size:30px;cursor:pointer" onclick="openNav()">...</span>

          </div>
          <!-- <hr style="width: 100%;height:20px solid black"></hr> -->
          <div class="modal-body" style="font-family:'Lato'">

          <!-- Card -->
          <div class="collapse" id="collapseExample">
            <!-- Card body -->
            <div class="card card-body">
                <!-- Material form register -->
                  <form id="formABC" action="#">
                    <!-- Material input text -->
                      <div class="md-form">
                          <i class="fa fa-user prefix grey-text"></i>
                          <input type="text" id="materialFormCardNameEx" class="form-control" placeholder="Name this list...">
                          <textarea class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>

                      </div>


                      <div class="text-center py-4 mt-3">
                          <button class="btn btn-cyan" type="submit">Add this list</button>
                      </div>
                  </form>
                  <!-- Material form register -->

              </div>
              <!-- Card body -->

          </div>
          <!-- Card -->

          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>


    <script>
      function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
      }

      function openModal(){
          document.getElementById("exampleModal").style.width = "700px";
      }

      function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
      }
    </script>
  </body>
</html>
