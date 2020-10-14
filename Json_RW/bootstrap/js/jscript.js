$(document).ready(function(){
    $('#edit_std').hide();
    getStudentlist();

    $('tbody').on('click','.edit',function(){
        $('#edit_std').show();
        $('#new_std').hide();
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
                                <button class="detail btn btn-success btn-sm">Detail</button>
                                <button class="edit btn btn-warning btn-sm">Edit</button>
                                <button class="delete btn btn-danger btn-sm">Delete</button></td>
                            </td>
                        </tr>`;
            });

            $('tbody').html(html);

        });
    }
});