$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});

function myFunction(){

    $('#add_category').submit(function(){
        category=$('#category').val();
        url=$(this).attr('action');
        $.post(url,{'name':category},function(fb){
           if(fb.match('1')){
              $('#hamza').trigger('click');
              setTimeout(function(){
                 location.reload();
             },4000);
          }else{
              alert(fb)
          }
      });
        
        return false
    });

};

function editCatF(){

	$('#update_sub_cat').submit(function(){
		name=$('#name').val();
		url=$(this).attr('action');
		$.post(url,{'name':name},function(fb){
			if(fb.match('1')){
				$('#hamza').trigger('click');
				setTimeout(function(){
					window.location.href=BASE_URL+"school/category";
				},3000);
			}else{
				alert('Category Not Updated')
			}
		});
		return false;
	});

};

function deleteCat(){
	$('#hamza').trigger('click');
}

function addModule(){

    $('#add_class_form').submit(function(){
        name=$('#name').val();
        cat=$('#cat').val();
        url=$(this).attr('action');
        $.post(url,{'name':name,'cat':cat},function(fb){
           if(fb.match('1')){
              $('#hamza').trigger('click');
              setTimeout(function(){
                 window.location.href=BASE_URL+"school/classes";
             },4000);
          }else{
              alert(fb)
          }
      });
        
        return false
    });


};


function editClass(){

    $('#update_class').submit(function(){
        name=$('#name').val();
        cat=$('#cat').val();
        url=$(this).attr('action');

        $.post(url,{'name':name,'cat':cat},function(fb){
            if(fb.match('1')){
                $('#hamza').trigger('click');
                setTimeout(function(){
                    window.location.href=BASE_URL+"school/classes";
                },3000);
            }else{
                alert('Category Not Updated')
            }
        });
        return false;
    });

};


function addStudent(){
    $('#add_student').submit(function(){
        data={'name':$('#sname').val(),
        'prenom':$('#prenom').val(),
        'sexe':$('#sexe').val(),
        'category':$('#category').val(),
        'class':$('#class').val(),
        'dob':$('#dob').val(),
        'file':$('#file').val(),
        'join_date':$('#join_date').val(),
        'email':$('#email_user').val(),
        'lieudenaissance':$('#lieudenaissance').val(),
        'telparents':$('#mtelparents').val(),
        'adresse':$('#adresse').val(),
        'emailparents':$('emailparents').val(),
        'nomparents':$('#nomparents').val(),
    };
    url=$(this).attr('action');
    $.ajax({
        type:'POST',
        url:url,
        data:new FormData($(this)[0]),
        contentType:false,
        processData:false,
        success:function(fb)
        {
            if(fb.match('1'))
            {
                $('#hamza').trigger('click');
                setTimeout(function(){
                    location.reload();
                },4000);
            }
            else if(fb.match('2'))
                alert('only jpg and png pdf file are allowed');
            else alert('time table not upload');
        }


    });

    console.log(data);
    return false;
});
};

function editStudent(){
   $('#edit_student').submit(function(){
   // url=$(this).attr('action');
    data={'name':$('#sname').val(),
        'prenom':$('#prenom').val(),
        'sexe':$('#sexe').val(),
        'category':$('#category').val(),
        'class':$('#class').val(),
        'dob':$('#dob').val(),
        'file':$('#file').val(),
        'join_date':$('#join_date').val(),
        'email':$('#email_user').val(),
        'lieudenaissance':$('#lieudenaissance').val(),
        'telparents':$('#mtelparents').val(),
        'adresse':$('#adresse').val(),
        'emailparents':$('#emailparents').val(),
        'nomparents':$('#nomparents').val(),
};
    url=$(this).attr('action');
    $.ajax({
        type:'POST',
        url:url,
        data:new FormData($(this)[0]),
        contentType:false,
        processData:false,
        success:function(fb)
        {
            console.log(fb)
            if(fb=='1')
            {
                $('#hamza').trigger('click');
                setTimeout(function(){
                    window.location.href=BASE_URL+"student/student_registration";
                },4000);
            }
            else if(fb.match('2'))
                alert('only jpg and png pdf file are allowed');
            else alert('time table not upload'); 
        }


    });
/*$.post(url,data,function(fb){
    if(fb.match('1')){
        $('#hamza').trigger('click');
        setTimeout(function(){
            window.location.href=BASE_URL+"student/student_registration";
        },3000);
    }else{
        alert('Student Not Updated')
    }
});*/
return false;
});
};

function staff(){

   $('#add_staff_form').submit(function(){
    url=$(this).attr('action');
    data = {
        'lname':$('#staff_lname').val(),
        'fname':$('#staff_fname').val(),
        'email':$('#staff_email').val(),
        'mobile':$('#mobile_no').val(),
        'fonc':$('#staff_fonc').val(),
        'exp':$('#staff_exp').val(),
        'dob':$('#staff_dob').val(),
        'jdate':$('#join_date').val(),
        'sal':$('#staff_sal').val(), };
        $.post(url,data,function(fb){
           
            if (fb.match('1')) {
                alert('Staff Successfully Added');
                setTimeout(function() {
                  location.reload();
              },2000);
            }
            else{
                alert('Staff not Added');
            }

        });

        return false;
    });
}
function editStaff(){
    $('#edit_staff_form').submit(function(){

        url=$(this).attr('action');
        data = {
            'lname':$('#staff_lname').val(),
            'fname':$('#staff_fname').val(),
            'email':$('#staff_email').val(),
            'mobile':$('#mobile_no').val(),
            'fonc':$('#staff_fonc').val(),
            'exp':$('#staff_exp').val(),
            'dob':$('#staff_dob').val(),
            'jdate':$('#join_date').val(),
            'sal':$('#staff_sal').val(), 
        };

        $.post(url,data,function(fb){
           if(fb.match('1')){
            alert('Staff Successfully Updated');
            setTimeout(function(){
                window.location.href=BASE_URL+'staff/manage_staff';
            },2000);
        }else{

            alert('Staff Not Updated ')
        }

    })

        return false;
    });

}