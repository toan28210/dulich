$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){
    $('.edit').click(function(){
        $('.error').hide();
        let id = $(this).data('id');
        //Edit
        $.ajax({
            url :'admin/category/'+id+'/edit',
            dataType :'json',
            type: 'get',
            success :function($result){
                console.log($result);
                $('.name').val($result.name);
                $('.title').text($result.name);
            }
        });
        $('.update').click(function(){
            let ten = $('.name').val();
            $.ajax({
                url : 'admin/category/'+id,
                data:{
                    name : ten,
                },
                type: 'put',
                dataType :'json',
                success:function($result){
                    console.log($result);
                    if($result.error== 'true'){
                        $('.error').show();
                        $('.error').html($result.message.name[0]);
                    }else{
                        toastr.success($result.success, 'Thông báo', {timeOut: 2000});
                        $('#edit').modal('hide');
                        location.reload();
                    }
                }
            });
        })
    });
    //Delete
    $('.delete').click(function(){
        let id = $(this).data('id');
        $('.del').click(function(){
            $.ajax({
                url : 'admin/category/'+id,
                dataType: 'json',
                type:'delete',
                success : function($result){
                    toastr.success($result.success, 'Thông báo', {timeOut: 2000});
                    $('#delete').modal('hide');
                    location.reload();
                }
            });
        });
    });
    //Edit Producttype
    $('.editProducttype').click(function(){
        $('.error').hide();
        let id = $(this).data('id');
        $.ajax({
            url:'admin/producttype/'+id+'/edit',
            dataType: 'json',
            type: 'get',
            success: function($result){
                $('.name').val($result.producttype.name);
                var html ="";
                $.each($result.category,function($key,$value){
                   
                    if($result.producttype.idCategory == $value['id']){
                        html += '<option value='+$value['id']+' selected>';
                        html += $value['name'];
                        html += '</option>';
                    }else{
                        html += '<option value='+$value['id']+'>';
                        html += $value['name'];
                        html += '</option>';
                    }
                    
                });
                $('.idCategory').html(html);
                if($result.producttype.status == 1){
                    $('.ht').attr('selected','selected');

                }else{
                    $('.kht').attr('selected','selected');
                }
            }
        });
        $('.updateProductType').click(function(){
            let idCategory = $('.idCategory').val();
            let name = $('.name').val();
            let status = $('.status').val();
            $.ajax({
                url : 'admin/producttype/'+id,
                dataType: 'json',
                data:{
                    idCategory : idCategory,
                    name: name,
                    status: status,
                },
                type :'put',
                success:function($data){
                    if($data.error == 'true'){
                        $('.error').show();
                        $('.error').html($data.message.name[0]);
                    }else{
                        toastr.success($data.result, 'Thông báo', {timeOut: 2000});
                        $('#edit').modal('hide');
                        location.reload();
                    }
                }

            })
        });
        //Delete Product
    });
    $('.deleteProducttype').click(function(){
        let id = $(this).data('id');
        $('.delProducttype').click(function(){
            $.ajax({
                url : 'admin/producttype/' + id,
                dataType: 'json',
                type:'delete',
                success:function($data){
                    toastr.success($data.result, 'Thông báo', {timeOut: 2000});
                    $('#delete').modal('hide');
                    location.reload();
                },
            });
        });
    });

    //Lấy dữ liệu loại sản phẩm theo danh mục
    $('.cateProduct').change(function(){
        let idCate = $(this).val();
        $.ajax({
            url: 'getproducttype',
            data:{
                idCate :idCate,
            },
            type: 'get',
            dataType: 'json',
            success : function($data){
                console.log($data);
                let html = '';
                $.each($data,function($key,$value){
                    html+= '<option value='+$value['id']+'>';
                    html += $value['name'];
                    html+='</option>';
                });
                $('.proProduct').html(html);
            }
        });
    });

    //Delete Proroduct
    $('.deleteProduct').click(function(){
        let id = $(this).data('id');
        $('.delProduct').click(function(){
            $.ajax({
                url : 'admin/product/' + id,
                dataType: 'json',
                type:'delete',
                success:function($data){
                    toastr.success($data.result, 'Thông báo', {timeOut: 2000});
                    $('#delete').modal('hide');
                    location.reload();
                },
            });
        });
    });

    // Hiển thị sản phẩm lên form add
    $('.editProduct').click(function(){
        $('.error').hide();
        let id = $(this).data('id');
        $.ajax({
            url: 'admin/product/'+id+'/edit',
            dataType: 'json',
            type: 'get',
            success :function(data){
                console.log(data);
                $('#name').val(data.product.name);
                $('#soluong').val(data.product.soluong);
                CKEDITOR.instances['ck_editor'].setData(data.product.mota);
                $('#price').val(data.product.price);
                $('#km').val(data.product.km);
                $('#price').val(data.product.price);
                $('#anh').attr('src','images/upload/product/'+data.product.anh);
                let html ='';
                $.each(data.category,function($key,$value){
                   
                    if(data.product.idCategory == $value['id']){
                        html += '<option value='+$value['id']+' selected>';
                        html += $value['name'];
                        html += '</option>';
                    }else{
                        html += '<option value='+$value['id']+'>';
                        html += $value['name'];
                        html += '</option>';
                    }
                    
                });
                $('.cateProduct').html(html);
                let htmltype='';
                $.each(data.producttype,function($key,$value){
                    if(data.product.idChitiet == $value['id']){
                        html += '<option value='+$value['id']+' selected>';
                        html += $value['name'];
                        html += '</option>';
                    }else{
                        html += '<option value='+$value['id']+'>';
                        html += $value['name'];
                        html += '</option>';
                    }
                });
                $('.proProduct').html(html);
                if(data.product.status == 1){
                    $('.ht').attr('selected','selected');

                }else{
                    $('.kht').attr('selected','selected');
                }

            }
        });
        //update Product
        $('.#updatePro').on('submit',function(event){
            event.preventDefault();
            $.ajax({
                url : 'admin/updatePro/'+id,
                data : new FormData(this),
                contentType : false,
                processData : false,
                cache :false,
                type: 'post',
                success : function(data){
                    console.log(data);
                }
            });
        });
    });
    //comment
    // $('.guicommment').click(function(){
    //     let id = $(this).data('id');
    //     let name = $('.name').val();
    //     let email = $('.email').val();
    //     let content = ('.content').val();
    //     let com_product = id;
    //     $.ajax({
    //         url:'client/comment/'+id+'/create',
    //         dataType: 'json',
    //         data:{
    //             com_name : name,
    //             com_email: email,
    //             com_comment: content,
    //             com_product: id,
    //         },
    //         type:'put',
    //         success:function(data){
    //             console.log(data)
    //         }
    //     });
    // });


});