function confirmbox(event){
	var r = confirm("Do you want confirm this action?");
	if (r == false) {
		event.preventDefault();
	}
}

function chooseFile() {
  document.getElementById("fileInput").click();
}

function showCommentInput(event,obj)
{	
		event.preventDefault(); //Stop <a> href action
		obj.parent().find("#comment").toggle(); // find parent of obj
}

function deletePost(event,obj) {
	event.preventDefault(); //Stop <a> href action

	//check user confirm
	var r = confirm("Do you want confirm this action?");
	if (r == false) {
		event.preventDefault(); //if choose no -> stop event
	} else { //if choose yes -> continue

		var id = obj.data("id"); //save data-id value to id, use to html remove
   		var token = obj.data("token"); //save data-token value to token
   		var urlroute = obj.attr("href");

		$.ajax(
        {
            url: urlroute,
            type: 'DELETE',
            dataType: "JSON",
            data: {
                // "id": id, 
                "_method": 'DELETE',
                "_token": token,
            },
            success: function (msg)
            {
            	obj.parents().find("#post-"+id).hide(500,function(){
            		this.remove(); // find #post-{id} to hide and remove
            	});
                console.log(msg); //debug
            }
        });	
	}
    
}

function editPost(event,obj) {
	event.preventDefault();
	var r = confirm('are you ok? ');
	if (r==false){
		event.preventDefault();
	} else {
		var urlroute = obj.attr("action");
		var token = obj.find("[name = _token]").val();
		var body = obj.find('#body').val();

		var data = {
			'_token': token,
			'method': 'PATCH',
			'body' : body,
		};


		$.ajax({
			type: "PATCH",
			url: urlroute,
			data: data,
			success: function (msg) {
				obj.parents(".post").find(".post-body > p").hide(500);
				obj.parents(".post").find(".post-body > p").text(msg.body);
				obj.parents(".post").find(".post-body > p").show(500);
				console.log(msg);
			},

			error: function(msg){
	        	var errors = msg.responseJSON;
	        	$("#errors > p").text(errors.body);
	        	$("#errors").fadeIn(500);
	        }
		});
	}
}

function commentCreate(event,obj) {
	event.preventDefault();

	var post_id = obj.find("#post_id").val();
	var body = obj.find("#body").val();
	var token = obj.find("[name=_token]").val();

	var urlroute = obj.attr("action");

	$.ajax({
		url: urlroute,
		type: 'POST',
		dataType: "JSON",
		data: {
			"body" : body,
			"post_id" : post_id,
			"_token" : token,
		},
		success: function (msg) 
		{
			obj.parents(".post").append(msg.html);
			console.log(msg);
		}
	})
}

function deleteComment(event,obj) {
	event.preventDefault();
	var r = confirm("Do you want confirm this action?");
	if (r == false) {
		event.preventDefault(); //if choose no -> stop event
	} else { //if choose yes -> continue

    	console.log('comment delete');

    	var urlroute = obj.attr("href");
    	var token = obj.data("token");
    	var id = obj.data("id")

    	$.ajax({
    		url: urlroute,
    		type: 'DELETE',
    		dataType: 'JSON',
    		data:{
    			"method": 'DELETE',
    			"_token": token,
    		},

    		success: function (msg) {
    			obj.parents(".comment").hide(500,function() {
    				this.remove
    			});
    			console.log(msg);
    		}
    	});
    }
}
