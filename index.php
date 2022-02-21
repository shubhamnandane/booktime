<?php
$conn = new mysqli("localhost", "root", "", "crimoson");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Crimoson Test</title>
  </head>
  <body>
  
    <div class="container">
      <div>&nbsp;</div>
      <div class="row">
        <div class="col-xs-12 col-md-8 col-lg-8">
          <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <label><b>Morning Slot</b></label>
            <br>
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '10:30 AM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '10:30 AM')
                {
                  echo '<input class="btn btn-secondary" value="10:30 AM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="10:30 AM" readonly>';
                } 
                ?> 
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '11:30 AM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '11:30 AM')
                {
                  echo '<input class="btn btn-secondary" value="11:30 AM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="11:30 AM" readonly>';
                } 
                ?> 
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '12:30 PM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '12:30 PM')
                {
                  echo '<input class="btn btn-secondary" value="12:30 PM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="12:30 PM" readonly>';
                } 
                ?> 
              </div>
            </div>

            <div>&nbsp;</div>

            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '01:30 PM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '01:30 PM')
                {
                  echo '<input class="btn btn-secondary" value="01:30 PM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="01:30 PM" readonly>';
                } 
                ?> 
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '02:30 PM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '02:30 PM')
                {
                  echo '<input class="btn btn-secondary" value="02:30 PM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="02:30 PM" readonly>';
                } 
                ?> 
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql7 = "SELECT * FROM time_table where Disabled_time = '03:30 PM'";
                $result7 = $conn->query($sql7);
                $row7 = $result7->fetch_assoc();
                if($row7['Disabled_time'] == '03:30 PM')
                {
                  echo '<input class="btn btn-secondary" id="aftclick7" value="03:30 PM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" id="aftclick7" value="03:30 PM" readonly>';
                } 
                ?>
              </div>
            </div>

            <hr>
            <label><b>Evening Slot</b></label>
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '04:30 PM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '04:30 PM')
                {
                  echo '<input class="btn btn-secondary" value="04:30 PM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="04:30 PM" readonly>';
                } 
                ?> 
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '05:30 PM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '05:30 PM')
                {
                  echo '<input class="btn btn-secondary" value="05:30 PM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="05:30 PM" readonly>';
                } 
                ?> 
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '06:30 PM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '06:30 PM')
                {
                  echo '<input class="btn btn-secondary" value="06:30 PM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="06:30 PM" readonly>';
                } 
                ?> 
              </div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '07:30 PM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '07:30 PM')
                {
                  echo '<input class="btn btn-secondary" value="07:30 PM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="07:30 PM" readonly>';
                } 
                ?> 
              </div>

              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '08:30 PM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '08:30 PM')
                {
                  echo '<input class="btn btn-secondary" value="08:30 PM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="08:30 PM" readonly>';
                } 
                ?> 
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '09:30 PM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '09:30 PM')
                {
                  echo '<input class="btn btn-secondary" value="09:30 PM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="09:30 PM" readonly>';
                } 
                ?> 
              </div>
            </div>
            
            <div>&nbsp;</div>
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '10:30 PM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '10:30 PM')
                {
                  echo '<input class="btn btn-secondary" value="10:30 PM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="10:30 PM" readonly>';
                } 
                ?> 
              </div>

              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '11:30 PM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '11:30 PM')
                {
                  echo '<input class="btn btn-secondary" value="11:30 PM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="11:30 PM" readonly>';
                } 
                ?> 
              </div>
            </div>

            <hr>
            <label><b>Night Slot</b></label>
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '12:30 AM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '12:30 AM')
                {
                  echo '<input class="btn btn-secondary" value="12:30 AM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="12:30 AM" readonly>';
                } 
                ?> 
              </div>

              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '01:30 AM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '01:30 AM')
                {
                  echo '<input class="btn btn-secondary" value="01:30 AM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="01:30 AM" readonly>';
                } 
                ?> 
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '02:30 AM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '02:30 AM')
                {
                  echo '<input class="btn btn-secondary" value="02:30 AM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="02:30 AM" readonly>';
                } 
                ?> 
              </div>
            </div>
            
            <div>&nbsp;</div>

            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '03:30 AM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '03:30 AM')
                {
                  echo '<input class="btn btn-secondary" value="03:30 AM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="03:30 AM" readonly>';
                } 
                ?> 
              </div>

              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '04:30 AM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '04:30 AM')
                {
                  echo '<input class="btn btn-secondary" value="04:30 AM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="04:30 AM" readonly>';
                } 
                ?> 
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '05:30 AM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '05:30 AM')
                {
                  echo '<input class="btn btn-secondary" value="05:30 AM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="05:30 AM" readonly>';
                } 
                ?> 
              </div>
            </div>

            <div>&nbsp;</div>

            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '06:30 AM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '06:30 AM')
                {
                  echo '<input class="btn btn-secondary" value="06:30 AM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="06:30 AM" readonly>';
                } 
                ?> 
              </div>

              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '07:30 AM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '07:30 AM')
                {
                  echo '<input class="btn btn-secondary" value="07:30 AM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="07:30 AM" readonly>';
                } 
                ?> 
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '08:30 AM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '08:30 AM')
                {
                  echo '<input class="btn btn-secondary" value="08:30 AM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="08:30 AM" readonly>';
                } 
                ?> 
              </div>
            </div>

            <div>&nbsp;</div>

            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-6">
                <?php
                $sql = "SELECT * FROM time_table where Disabled_time = '09:30 AM'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if($row['Disabled_time'] == '09:30 AM')
                {
                  echo '<input class="btn btn-secondary" value="09:30 AM" disabled>';  
                }else
                {
                  echo '<input class="btn btn-primary" value="09:30 AM" readonly>';
                } 
                ?> 
              </div>
            </div>

          </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $(".btn").click(function() {
            var seltime = $(this).val();
            $.ajax ({
                type: "POST",
                url: "getdata.php",
                data: { seltime : seltime },
                success: function(result) {
                alert(result);
             location.reload();
                }
            });
        });
    });
    </script>
  </body>
</html>