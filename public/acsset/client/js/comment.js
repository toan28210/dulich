
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#submit').click(function(){
        var post = $('#con_comment').val();
        var email = $('#email').val();
        var name = $('#name').val();
        var idTour = $('#idTour').val();
        if(post==''){
            alert('Please write a Post first!');
            $('#con_comment').focus();
        }
        else{
            var postForm = $('#form-comment').serialize();
            $.ajax({
                type: 'POST',
                url: 'client/comment',
                data: postForm,
                dataType: 'json',
                success: function(data){
                    console.log(data)
                    $('#commentContainer').prepend('<div class="form-group" id="postList">'
                    +'<div class="journalrow" style="padding: 10px 0;">'
                        +'<div class="author" style="overflow: hidden;float: left;">'
                            +'<img style="max-width:40px;" src="" alt="Author">'
                            +'<span class="cmreply">Trả lời</span>'
                        +'</div>'
                        +'<div style="margin-left: 60px;">'
                            +'<div class="journalsummary" style="padding:5px;border:1px solid #d8d8d8;position:relative;">'
                                +'<i style="position:absolute; top:5px;left:-7px; font-size:20px;line-height: 11px;background-color:#fff; color: #d8d8d8;" class="fa fa-angle-left"></i>'
                                +'<span style="font-weight:700;color:#03f;font-size:13px;" class="authorname">' + data.name + '</span>'
                                +'<span style="background:none; border:1px solid #209cee;color:#209cee;font-size: 11px;font-weight: 400;margin-left: 5px;padding: 1px 4px;border-radius: 3px;" class="member">Thành viên</span>'
                                +'<abbr title="15/12/2019 6:49:18 SA">'
                                    +'<i class="fa fa-clock-o"></i> '
                                +'</abbr>'
                                +'<div class="summary">' + data.con_comment + '</div>'
                            +'</div>'
                        +'</div>'
                    +'</div>'
                +'</div>')
                    // showPost();
                    // $('#form-comment')[0].reset();
                },
            });
        }
    });
    function showPost(){
        
    }

    $(document).on('click', '#submit', function(){
        let id = $(this).data('idTour');
        console.log(id);
    })
});