$(document).ready(function(){

var user = 1;

	var Note = {
		add: function(name,description){
			var new_note = {
				name : name,
				description : description
			};
			$.ajax({
				type : "POST",
				data : { data: new_note, action : 'add_note'},
				url : 'php/Note.php',
				success : function(data){
					Note.get(user);
					$("#addNoteModal").modal("hide");
					$("#note-title").val("");
					$("#note-description").val("");
				}
			});

		},
		get: function(user_id){
			$.ajax({
				type : "POST",
				data : { user_id: user_id, action : 'get_notes'},
				url : 'php/Note.php',
				success : function(data){
					console.log(data);
					note = jQuery.parseJSON(data);
					console.log(note);
					$(".notes_list").empty();
					$.each(note, function(index, value){
						console.log(value);
							$(".notes_list").append("<li class=\"note\"><div class=\"card\">"
					           +"<div class=\"card-header\">"+value.title+"</div>"
					           +"<div class=\"card-body clearfix\">"
					           +"<p class=\"card-text\">"+value.description+"</p>"
					           +"<button class=\"pull-right btn btn-primary m-1\"><i class=\"fa fa-edit\"></i></button>"
					           +"<button data-note_id=\""+value.id+"\" class=\"pull-right btn btn-primary m-1 delete_note\"><i class=\"fa fa-trash\"></i></button>"
					           +"</div></div></li>");
					});
				}
			})

		},
		delete: function(note_id){
			if(confirm("Are you sure? This action cannot be undone.")){

				$.ajax({
					type:"POST",
					data: {id:note_id,action:'delete_note'},
					url: 'php/Note.php',
					success:function(data){
						Note.get(user);
					}
				})

			}	
		}
	};

	Note.get(user); 

	$("#save_note").click(function(){
		Note.add( $("#note-title").val(), $("#note-description").val())
	});

	
	$(".notes_list").on('click','.delete_note',function(e){
		Note.delete(this.dataset.note_id);
	});

});