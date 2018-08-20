<!DOCTYPE html>
<html>
<head>
  <?php include 'config/links.php'; session_start(); ?>
  <title>DelyAdmin | TRIAL</title>
</head>
<body>
  <div class="wrapper">
    <h2>Modal Example</h2>
    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
      Open modal
    </button>

    <!-- The Modal -->
    <div class="modal modal-dialog modal-dialog-centered" id="myModal" >
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Modal Heading</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            Modal body..
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

  </div>
</body>
</html>