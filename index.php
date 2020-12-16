<!DOCTYPE html>
<html>
<head>
	<title>Notes Application</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/script.js"></script>	

	<!-- BOOTSTRAP -->
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
		<!-- JS -->
		<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
		<script type="text/javascript" src="js/js/bootstrap.bundle.min.js"></script>
	<!-- BOOTSRAP END -->

	<!-- ICON -->
		<link rel="stylesheet" type="text/css" href="icons/fontawesome-free-5.15.1-web/css/all.css">

</head> 		
<body>
	<h1 class="heading">My Notes</h1>
	<div class="container">
		<div class="row">
			<button class="btn btn-primary col-1 offset-10">
				<i class="fa fa-plus" data-toggle="modal" data-target="#addNoteModal"></i>
			</button>
		</div>
	</div>

<!-- MODALS -->
<div class="modal fade" id="addNoteModal" tabindex="-1" role="dialog" aria-labelledby="addNoteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNoteModalLabel">New Note</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="not-title" class="col-form-label">Title:</label>
            <input type="text" class="form-control" id="not-title">
          </div>
          <div class="form-group">
            <label for="note-description" class="col-form-label">Description:</label>
            <textarea class="form-control" id="note-description"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Note</button>
      </div>
    </div>
  </div>
</div>

<!-- MODALS -->
</body>
</html>