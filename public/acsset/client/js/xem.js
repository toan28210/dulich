$(document).ready(() => {
    dem()
});
function dem(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let id = $('#id').val();
    let soluotxem =  $('#soluotxem').val();
    $.ajax({
        method: 'post',
        url:'client/dem',
        data:{
            id: id,
            soluotxem:soluotxem
        }
    })
    console.log(id)
    console.log(soluotxem)
}