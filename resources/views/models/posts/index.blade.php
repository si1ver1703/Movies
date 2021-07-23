<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Фильмы</title>
	<style>
	body {
	margin: 0;
	padding: 0;
	font-family: 'Roboto', sans-serif;
}

.main_card {
	color: #fff;
	width: 760px;
	height: 390px;
	margin: 50px auto;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	max-width: 770px;
	background: #00C9FF; 
	background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);
	background: -webkit-gradient(linear, left top, right top, from(#92FE9D), to(#00C9FF));
	background: -webkit-linear-gradient(left, #92FE9D, #00C9FF);
	background: -o-linear-gradient(left, #92FE9D, #00C9FF);
	background: linear-gradient(to right, #92FE9D, #00C9FF); 
	-webkit-box-shadow: 0 0 40px rgba(0,0,0,0.3); 
	        box-shadow: 0 0 40px rgba(0,0,0,0.3);
}

.card_left {
	width: 90%;
}

.card_datails {
	width: 90%;
	padding: 30px;
	margin-top: -25px;
}
.card_datails  h1 {
	font-size: 30px;
}
.card_right img {
	height: 390px;
	border-radius: 2px;
}
.card_right {
	border-radius: 2px;
}

.card_cat {
	width: 100%;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: justify;
	    -ms-flex-pack: justify;
	        justify-content: space-between;
}

.PG, .year, .genre, .time {
	color: fff;
	padding: 10px;
	font-weight: bold;
	border-radius: 15px;
}

.PG {
	background: #92FE9D;
	-webkit-box-shadow: 0 0 50px rgba(0,0,0,0.1);
	        box-shadow: 0 0 50px rgba(0,0,0,0.1);
	-webkit-transition: 300ms ease-in-out;
}

.disc {
	font-weight: 100;
	line-height: 27px;
}
a {
	color: darkcyan;
	display: block;
	text-decoration: none;
}
.social-btn {
	margin-left: -10px;
}
button {
	color: #fff;
	border: none;
	padding: 20px;
	outline: none;
	font-size: 12px;
	margin-top: 30px;
	margin-left: 10px;
	background: #92FE9D;
	border-radius: 12px;
	-webkit-box-shadow: 0 0 20px rgba(0,0,0,0.2);
	        box-shadow: 0 0 20px rgba(0,0,0,0.2);
	-webkit-transition: 300ms ease-in-out;
	-o-transition: 200ms ease-in-out;
	transition: 200ms ease-in-out;
}

button:hover {
	-webkit-transform: scale(1.1);
	    -ms-transform: scale(1.1);
	        transform: scale(1.1);
}
.play_btn {
	height: 100%;
	margin: -394px auto;
	position: relative;
	text-align: center;
	background: rgba(0, 244, 170,0.4);
	box-shadow: 0 0 50px rgba(0,0,0,0.2);
}
.fa-play-circle {
	color: #255;
	font-size: 160px;
	margin-top: 110px;
	-webkit-animation: bounce 1.0s -0.4s infinite;
	        animation: bounce 1.0s -0.4s infinite;
}

.fa-play-circle:hover {
	color: aqua;
	animation: bounce 0.4s infinite;
}
@-webkit-keyframes bounce {
  8% {
    transform: scale(0.3);
    -webkit-transform: scale(0.8);
    opacity: 1;
  }
  10% {
    transform: scale(1.8);
    -webkit-transform: scale2);
    opacity: 0;
		}
}

@keyframes bounce {
  8% {
    transform: scale(0.3);
    -webkit-transform: scale(0.8);
    opacity: 1;
  }
  20% {
    transform: scale(1.8);
    -webkit-transform: scale2);
    opacity: 0;
		}
}





/*  FOLLOW*/
.Follow {	  background:url("https://pbs.twimg.com/profile_images/959092900708544512/v4Db9QRv_bigger.jpg")no-repeat center / contain;
	width: 50px;
	height: 50px;
	bottom: 9px;
	right: 20px;
	display:block;
	position:fixed;
	border-radius:50%;
	z-index:999;
	animation:  rotation 10s infinite linear;
	}

@-webkit-keyframes rotation {
		from {
				-webkit-transform: rotate(0deg);
		}
		to {
				-webkit-transform: rotate(359deg);
		}
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

@guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif


                            @if (Route::has('register'))
                                @if(auth()->check())
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif
                            @endif
                        @else
                            <li class="nav-item">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
	
	<h1 style="text-align: center;">Фильмы</h1>

@if(auth()->check())
<a style="margin-left: 46%; background: lightgreen; padding: 20px; width: 130px; height: 80px" href="{{route('posts.create')}}">Create Post</a>
@endif

<div style="margin-top: 100px;">
<form action="" method="GET" class="search-simple">
    <div class="row">
        <div class="col-xs-10">
            <div class="form-group">
                <input type="text" class="form-control" name="search" required>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <input class="btn btn-info" type="submit" value="Искать">
            </div>
        </div>
    </div>
</form>
</div>

@if($posts->isNotEmpty())
	@foreach($posts as $post)
<div class="wrapper" style="margin-top: 250px;">
	<div class="main_card">
		<div class="card_left">
			<div class="card_datails">
				<a href="{{route('posts.show', $post)}}"><h1>{{$post->title}}</h1></a>
				<div class="card_cat">
					<p class="PG">PG - 13</p>
					<p class="year">2018</p>
					<p class="genre">Action | Adventure </p>
					<p class="time">2h 28m</p>
				</div>
				<p class="disc">{{$post->description}}</p>
				<a href="{{route('posts.show', $post)}}" target="_blank">Read More</a>
			<div class="social-btn">
        <!-- WATCH TRAILER-->
				<button>
					<i class="fas fa-play"></i> SEE TRAILER
				</button>
				<!-- GET-->
				<button>
					<i class="fas fa-download"></i> DOWNLOAD
				</button>
				<!--USERS RATINGS-->
				<button>
					<i class="fas fa-thumbs-up"></i> 97%
				</button>
			</div>	
			</div>
		</div>
		<div class="card_right">
			<div class="img_container">
				<img src="{{url(str_replace('public', 'storage', $post->image_path))}}" height="300" width="330" alt="">
				</div>
				<div class="play_btn">
					<a href="https://www.imdb.com/title/tt4912910/" target="_blank">
						<i class="fas fa-play-circle"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	@endforeach
@endif

</body>
</html>