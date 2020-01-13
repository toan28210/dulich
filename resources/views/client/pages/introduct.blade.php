@extends('client.layouts.master')
@section('content')
<div class="container-fuild">
    <div class="container rumb">
        <div class="row">
            <span>
                <a href="file:///D:/Web/Webcuoiky/text/slider.html">Trang chủ</a>
            </span>
            <i class="fas fa-angle-right"></i>
            <span>Giới thiệu
            </span>
        </div>
    </div>
</div>
<div class="container-fuild" style="background: #fff; height: auto; ">
    <div class="container">
        <div class="col-sm-3">
            <div class="sidebar">
                <div class="related-post">
                    <h3 class="related">
                        <span>TÌM KIẾM</span>
                    </h3>
                    <div class="container-fuild" style="padding: 10px; background: #ddd;">
                        <div class="container-search">
                            <div class="search-input">
                                <input type="timkiem" placeholder="Từ khóa">
                            </div>
                        </div>
                        <div class="a-timkiem"><a href="">TÌM KIẾM</a></div>
                    </div>
                    <div class="container-fuild" style="border: 1px solid #ddd; background: #fff; margin-bottom: 30px;">
                        <div class="bm-new">
                            <h3>Tin mới</h3>
                            <div class="new-ma">
                                <ul class="row">
                                    @foreach($new as $key => $value)
                                    <li class="col-md-12">
                                        <div class="belenba">
                                            <a href="#" class="img1">
                                                <img src="{{$value->thumbnail}}">
                                            </a>
                                            <div class="txt-new">
                                                <h4>{{$value->title}}</h4>
                                                <span>{{$value->created_at}}</span>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                {{ $new->links() }}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9" style="">
            <div class="hk-title">
                <h1>Giới thiệu</h1>
            </div>
            <div class="tx" style="margin-top: 50px;">
                <p>Khi vào blog cũ của rùa tại 360 yahoo, có người đã nhắc nhở rằng không nên phơi bày hết trên mạng. Tuy nhiên, chia sẻ là một cách giao lưu và chia sẻ để rồi cùng nhau kiến tạo hay phát triển những cái mới hơn, hay hơn là điều tốt. Điều tốt thì ai cũng thích thực hiện, rùa không ngoại lệ.</p>
                <p>Trở thành một nghệ nhân bánh thực thụ đòi hỏi năng khiếu và lòng tự tin cùng với kinh nghiệm thực hành. Xin đừng gọi là “nghệ nhân” hay “cao thủ”. Có lẽ rùa không bao giờ trở thành một người làm bánh chuyên nghiệp được vì thiếu năng khiếu và kinh nghiệm cũng rất ít ỏi, và cũng bởi không được qua đào tạo bài bản. Với một người nội trợ bình thường, nấu ra một món ăn ngon hay một chiếc bánh thơm lành để chồng con thưởng thức là niềm hạnh phúc, đôi khi là niềm kiêu hãnh nho nhỏ. Tôi hài lòng với vị trí bà nội trợ của chồng và hai cô con gái đáng yêu vì tự tin rằng mình có thể tự kiến tạo những niềm hạnh phúc đó, mỗi ngày, mỗi tuần. Nếu mọi người có công thức hay, cách làm mới xin hãy chia sẻ lên đây nhé!</p>
                <p>Làm bánh không giống như nấu một nồi soup, ta không thể xúc 1 thìa lên nếm và rồi thêm một chút mắm một tẹo muối. Hầu hết các nguyên vật liệu phải được cân đo đong đếm cẩn thận. Khi còn ở Seattle, đơn vị đo lường theo đơn vị của Anh và nguyên liệu sẵn có, rất thuận tiện nên cũng việc nấu nướng cũng khác. Trở về Việt nam, phải mất một thời gian lâu mới làm quen được với đơn vị đo theo đúng tiêu chuẩn. Việc sắm lại một chiếc cân đĩa nhỏ đánh dấu bước ngoặt của công việc nội trợ mà rùa đảm đương. Có lẽ đấy là cột mốc đầu tiên trên con đường đi vào “chuyên nghiệp” của một người nội trợ bình thường. Xã hội phát triển mà, rùa thì rùa, không bò lui được. Dẫu sao đi nữa, rất nhiều công thức làm bánh là “khoa học” (điều này rùa bố có vẻ không đồng tình lắm, khi nào rảnh chúng ta hãy trở lại đề tài khoa học hay không khoa học trong việc làm bánh nhé. Hãy tạm xem như rùa mẹ đã phát biểu đúng đi) mà khoa học lại đòi hỏi sự chính xác cao độ nên vì một cái cân đĩa nhỏ có giá vài chục nghìn đồng có thể làm cho một người nội trợ cảm thấy mình là “nhà khoa học trong… bếp” thì đáng giá thật.</p>
                <p>Khi bạn có một sở thích hay yêu thích một việc nào đó, hãy tin vào bản thân và cố gắng trong điều kiện cho phép. Nếu kết quả không được như mong muốn, ít ra bạn cũng học được một điều gì đấy. Lần sau cố gắng thêm một tí, một tí nữa thôi, là ổn cả.</p>
                <p>Hà nội những năm 80 của thế kỷ trước, cái ăn cái mặc còn là vấn đề đáng phải lo nhiều nên mấy ai nghĩ đến bánh với trái. Có chăng Tết gói bánh chưng, làm mấy loại mứt và mấy loại bánh truyền thống không cần lò nướng. Chỉ khi sang Mỹ tôi mới thực sự bước chân vào bếp. Lần đầu tiên làm bánh mỳ, trong bếp xuất hiện một con “quái vật” đang “bò” từ từ trong bếp từ chậu bột đang ủ chảy xuống tủ bếp, rồi xuống sàn bếp. Ấn tượng còn lưu lại hơn một năm sau đó không làm bánh mỳ. Dài dòng như vậy chỉ muốn động viên và cổ vũ những người cũng có niềm ao ước tự tay làm nên một chiếc bánh nhưng ngại khó, ngại thất bại. Ai cũng có lần đầu tiên. Lần đầu tiên của tôi cách đây gần 15 năm. Trong suốt quãng thời gian ấy, biết bao nhiêu cái mà – không – biết – nên – gọi – là – gì đã được làm ra và đi thẳng vào thùng rác!</p>
                <p>Vì thế, Bếp rùa được tạo dựng (à ha, bước thứ hai trong hành trình “chuyên nghiệp hoá” chuyện bếp núc nhà mình) không nhằm mục đích gây ấn tượng cho ai mà để nói về những món ăn, những loại bánh có thể làm ra tại nhà. Những phương pháp dùng trong các công thức không phải là duy nhất, càng không phải tối ưu. Có nhiều cách để ủ một chiếc bánh mỳ (tất nhiên cách tạo ra “quái vật trong bếp” không được khuyến khích), hay nấu một nồi soup, xào một đĩa thịt bò. Cách nào phù hợp với khẩu vị và thói quen thì ta cứ làm.</p>
                <p>Rùa sẽ cố gắng tổng hợp những điều từ cơ bản đến trên cơ bản để tiện tra cứu. Trong việc bếp núc, một nửa sự thích thú là khi ta suy nghĩ xem bữa sắp tới sẽ nấu gì, làm món gì tráng miệng. Hy vọng một số kinh nghiệm trên đây sẽ giúp ích được các bạn. Chúc mọi người có được phút giây thư giãn khi ở trong bếp nhà rùa.</p>
        </div>
    </div>
</div>
@endsection