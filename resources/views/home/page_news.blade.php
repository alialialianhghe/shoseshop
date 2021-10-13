@extends('layout.layout')
@section('title','Cừa Hàng')
@section('content')

<style>
        @font-face {
        font-family: 'LeagueGothic';
        src: url('fonts/League_Gothic-webfont.eot');
        src: url('fonts/League_Gothic-webfont.eot?#iefix') format('embedded-opentype'),
            url('fonts/League_Gothic-webfont.woff') format('woff'),
            url('fonts/League_Gothic-webfont.ttf') format('truetype'),
            url('fonts/League_Gothic-webfont.svg#LeagueGothicRegular') format('svg');
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: 'SourceSansProLight';
        src: url('fonts/SourceSansPro-Light-webfont.eot');
        src: url('fonts/SourceSansPro-Light-webfont.eot?#iefix') format('embedded-opentype'),
            url('fonts/SourceSansPro-Light-webfont.woff') format('woff'),
            url('fonts/SourceSansPro-Light-webfont.ttf') format('truetype'),
            url('fonts/SourceSansPro-Light-webfont.svg#SourceSansProLight') format('svg');
        font-weight: normal;
        font-style: normal;
    }

    * {
        margin: 0;
        padding: 0;
    }
    img{
        border: none;
    }

    body{
        font-family: SourceSansProLight, Verdana, Arial, sans-serif;
        font-size: 14px;
    }

    #version{
        color: white;
        font-size: 10px;
        position: relative;
        top: 12px;
        left: 122px;
    }
    
    .current{
        background-color: #383838;
        border-radius: 3px;
    }
    #adbanner{
        margin-top: 50px;
        height: 124px;
        background-color: #dbdbdb;
        border-bottom: 1px solid #c3c3c3;
    }
    #ad{
        width: 728px;
        margin: auto;
    }
    #adbanner a{
        display: inline-block;
        border: 1px solid #c3c3c3;
        height: 90px;
        width: 728px;
        margin: 16px auto;
        color: #6b6b6b;
        text-decoration: none;
        font-family: Verdana, Arial, sans-serif;
        font-size: 14px;
        background-color: #d1d1d1;
    }
    #adbanner a:hover{
        border: 1px solid #a7a7a7;
        /*text-decoration: underline;*/
        color: #3f3f3f;
        background-color: #cacaca;
    }
    #adbanner a p{
        text-align: center;
        margin-top: 35px;
    }
    section{
        width: 1000px;
        margin: auto;
    }
    #secwrapper{
        /*background: url('images/bg.gif') fixed;
        background-color: #f47771;*/
        padding-top: 20px;
    }
    article{
        width: 280px;
        margin-right: 40px;
        display: inline-block;
        vertical-align: top;
        border: 3px solid #c8c8c8;
        margin-bottom: 20px;
        padding: 7px;
        border-radius: 3px;
        box-shadow: 0 2px 3px #ccc;
        background-color: white;
        *display:inline;
        zoom:1;
    }
    #sponsors, .rightcl{
        margin-right: 0px;
    }
    .readmore{
        background-color: #DB5660;
        padding: 5px 10px;
        color: white;
        text-decoration: none;
        border-radius: 3px;
        display: inline-block;
    }
    .readmore:hover{
        background-color: #383838;
    }
    article p{
        margin-bottom: 7px;
    }
    #photobox{
        width: 300px;
    }
    #photobox img{
        margin: 0px 0px 6px 20px;
        border: 1px solid black;
        width: 100px;
        height: 100px;
    }
    #sponsors{
        width: 300px;
    }
    #sponsors img{
        margin: 0px 0px 6px 20px;
        border: 1px solid black;
        width: 100px;
        height: 100px;
    }
    #featured{
        position: relative;
    }
    #featuredico{
        position: absolute;
        top: 0;
        left: 0;
    }

    footer{
        background-color: black;
        height: 28px;
        color: white;
        padding: 7px;
    }
    footer p{
        margin: 5px 0 0 12%;
    }

    .old_ie #adbanner a, .old_ie article, .old_ie .readmore, .old_ie #sponsors a {
        display: inline;
        zoom: 1;
    }
    article img{
        width: 280px;
        height: 170px;
    }
    article h1{
        font-size: 20px;
        color: black;
        font-weight: bold;
    }
    
</style>
<div class="collection_text" >Tin Tức</div>
<div id="secwrapper">
			<section>
				<article id="featured">
					<a href="#"><img src="{{asset('resources/images/ss4.gif')}}" /></a>
					<h1>Chọn giày chạy phù hợp tránh chấn thương</h1>
					<p>Runner nên lựa chọn giày chất lượng, độ đàn hồi cao, rộng hơn cỡ chân thông thường để giảm những chấn thương khi chạy ở cường độ cao. </p>
                    <a href="#" class="readmore">Xem Thêm</a>
				</article>
				<article>
					<a href="#"><img src="{{asset('resources/images/ss2.gif')}}" alt=""/></a>
					<h1>Test nhanh bọt xịt đánh giày và khăn giấy lau giày chỉ vài chục nghìn  </h1>
					<p>Các cụ hay bảo "Cái răng cái tóc là góc con người" nhưng với các bạn trẻ có lẽ phải cả đôi giày nữa... </p>
                    <a href="#" class="readmore">Xem Thêm</a>
				</article>
				<article class="rightcl">
					<a href="#"><img src="{{asset('resources/images/ss9.gif')}}" alt=""/></a>
					<h1>Nike tiếp tục cuộc đua công nghệ bằng bộ đệm tối ưu</h1>
					<p>Mới đây, Nike đã công bố mẫu giày chạy mới nhất của mình - Epic React FlyKnit, tâm điểm là bộ đệm React mới nhất của "Swoosh",...</p>
                    <a href="#" class="readmore">Xem Thêm</a>
				</article>
				<article id="photobox">
					<a href="#"><h1 style="color: #db5660; text-align: center;">Giày Sneaker</h1></a>
					<img src="{{asset('resources/images/ss4.jpg')}}" />
					<img src="{{asset('resources/images/ss5.jpg')}}" />
					<img src="{{asset('resources/images/ss6.jpg')}}" />
					<img src="{{asset('resources/images/ss7.jpg')}}" />
					<img src="{{asset('resources/images/ss8.jpg')}}" />
					<img src="{{asset('resources/images/ss10.jpg')}}" />
				</article>
				<article>
					<a href="#"><img src="{{asset('resources/images/ss1.gif')}}" alt=""/></a>
					<h1>Giày Air Jordan đẹp sắp ra mắt trong 2021</h1>
					<p>Mặc dù những tháng đầu năm không có gì biến chuyển khi đại dịch Covid-19 vẫn tiếp tục khiến nhiều người phải ở nhà...</p>
                    <a href="#" class="readmore">Xem Thêm</a>
				</article>
				<article id="sponsors">
					<a href="#"><h1 style="color: #db5660; text-align: center;">Giày Chạy Bộ</h1></a>
					<img src="{{asset('resources/images/run1.jpg')}}" />
					<img src="{{asset('resources/images/run2.jpg')}}" />
					<img src="{{asset('resources/images/run3.jpg')}}" />
					<img src="{{asset('resources/images/run4.jpg')}}" />
					<img src="{{asset('resources/images/run5.jpg')}}" />
					<img src="{{asset('resources/images/run6.jpg')}}" />
                </article>
			</section>
		</div>
@endsection
