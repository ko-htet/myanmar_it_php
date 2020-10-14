$(document).ready(function(){
    $('#edit_std').hide();
    getStudentlist();

    $('tbody').on('click','.edit',function(){
        $('#edit_std').show();
        $('#new_std').hide();

        var id = $(this).data('id');
        
        $.get('studentlist.json', function(response){
            var studentObjectArray = response;
            var name = studentObjectArray[id].name;
            var email = studentObjectArray[id].email;
            var gender = studentObjectArray[id].gender;
            var profile = studentObjectArray[id].profile;
            var address = studentObjectArray[id].address;
            
            $("#edit_name").val(name);
            $("#edit_email").val(email);
            $("#edit_address").val(address);

            if(gender == "Male"){
                $("#edit_male").attr('checked', 'checked');
            }else{
                $("#edit_female").attr('checked', 'checked');
            }

            $("#showOldPhoto").attr('src', profile);
            $("#edit_id").val(id);
            $("#edit_oldprofile").val(profile);
        });
    });

    $('tbody').on('click', '.detail', function(){
        $("#detailModal").modal('show');
        var id = $(this).data('id');
        
        $.get('studentlist.json', function(response){
            var studentObjectArray = response;
            var name = studentObjectArray[id].name;
            var email = studentObjectArray[id].email;
            var gender = studentObjectArray[id].gender;
            var profile = studentObjectArray[id].profile;
            var address = studentObjectArray[id].address;

            $("#detail_name").text(name);
            $("#detail_email").text(email);
            $("#detail_gender").text(gender);
            $("#detail_address").text(address);
            $("#detail_profile").attr('src', profile);
        });
    });

    $('tbody').on('click', '.delete', function(){
        var id = $(this).data('id');
        var ans = confirm('Are you sure want to delete?');

        if (ans) {
            $.post(
                'deletestudent.php', {sid:id},
                function(data){
                    getStudentlist();
                }
            )
        }
    });

    function getStudentlist(){
        $.get('studentlist.json', function(response){
            
            // console.log(typeof(response)); // output ka string or not
            // string
	    	// var studentObjArray = JSON.parse(response);
            // !string
            var studentObjArray = response;

            var html='';
            var j = 1;

            $.each(studentObjArray, function(i,v){
                var name = v.name;
                var gender = v.gender;
                var email = v.email;

                html += `<tr> 
                            <td> ${j++} </td>
                            <td> ${name} </td>
                            <td> ${gender} </td>
                            <td> ${email} </td>
                            <td>
                                <button class="detail btn btn-success btn-sm" data-id="${i}">Detail</button>
                                <button class="edit btn btn-warning btn-sm" data-id="${i}">Edit</button>
                                <button class="delete btn btn-danger btn-sm" data-id="${i}">Delete</button></td>
                            </td>
                        </tr>`;
            });

            $('tbody').html(html);

        });
    }
});