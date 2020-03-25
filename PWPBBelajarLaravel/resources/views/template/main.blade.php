<!-- Secret -->
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

            <!-- FONT AWESOME-->
            <script src="https://kit.fontawesome.com/503eca56fe.js" crossorigin="anonymous"></script>

            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
            <script src="{{ asset('js/jquery.cookie.js') }}"></script>
      <title>@yield('title')</title>
      
      
      <style>
        .alert{
          background:none;
          border-color: red;
        }

        body{
          background-image: url("{{ asset('img/sekolah.jpg') }}");
          background-size: cover;
        }

        footer{
          background: rgba(105,105,105,0.5);
          padding: 30px 0;
        }

        .footer-container{
          max-width: 1600px;
          margin: auto;
          padding: 0 20px;
          display: flex;
          justify-content: space-between;
          align-items: center;
          flex-wrap: wrap-reverse;
        }

        .logom{
          width:240px;
        }
        .social-media{
          margin: 20px 0;
        }

        .social-media a{
          color: #333;
          margin-right: 25px;
          font-size: 20px;
          text-decoration: none;
          transition: 0.3s linear;
        
        }

        .social-media a:hover{
          color: #3498db;
        }

        .fooeter-container h1{
          font-size: 26px;
        }

        .footer-container p{
          font-size: 20px;
        }

        .danger{
          color:red;
        }

        .border{
          width: 172px;
          height: 5px;
          background: #0652DD;
          margin-bottom: 10px;
          margin-top: 10px;
        }

        .newsletter-form{
          display: flex;
          justify-content: center;
          align-items: center;
          flex-wrap: wrap;
        }

        .txtb{
          flex:1;
          padding: 8px 16px;
          font-size: 16px;
          color: #333;
          background: #ddd;
          border: none;
          font-weight: 600;
          outline: none;
          border-radius: 7px;
          min-width: 260px;
        }

        .btnsub{
          padding: 8px 16px;
          font-size: 16px;
          color: #f1f1f1;
          background: #0652DD;
          border: none;
          font-weight: 200;
          outline: none;
          border-radius: 7px;
          margin-left: 20px;
          cursor: pointer;
          transition: 0.3s linear;
        }

        .btnsub:hover{
          background: #3498db;
        }

        .brdr-img:hover{
          border-radius:40%;
          color: rgba(0,191,255,0.7);
          transition:1.5s;
        }

        .brdr-img{
          transition:2s;
        }

        .navbar-brand:hover{
          transition: .3s linear;
          transform: scale(1.1);
        }

        .mt{
          margin-top:100px;
        }

        .hiddentxt{
          opacity:0;
          font-family:Courier New, monospace ;
          transition:1.5s;
        }
        .hiddentxt:hover{
          opacity:1;
          color: rgba(0,191,255,0.7);
          transition:1.5s;
        }
        
        hr{
            border: 1px solid black;
        }
      </style>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-2 mt-2" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="/"><i class="fas fa-home mx-2"></i>Home</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item  @yield('siswa')">
              <a class="nav-link " href="{{ url('/siswa') }}"><i class="fas fa-users mx-2"></i>Data Siswa</a>
            </li>
            <li class="nav-item  @yield('kelas')">
              <a class="nav-link" href="{{ url('kelas') }}"><i class="fas fa-school mx-2"></i>Data Kelas</a>
            </li>
            <li class="nav-item @yield('add')">
              <a class="nav-link" href="{{ url('/add') }}"><i class="fas fa-plus-square mx-2"></i>Tambah Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-laptop-code mx-2"></i>PWPB 2020<i class="fas fa-code mx-2"></i></a>
            </li>
            <li class="navbar-item hiddentxt">
              <a class="navbar-brand ml-4 readonly">Diazs Martiansyah</a>
            </li>
          </ul>
          
          <form class="form-inline my-2 my-lg-0" method="get" action="{{url('/search') }}">
            
            
            <div class="input-group">
              <div class="input-group-append">
              @if(session('errCat'))
                <i class="danger h5 mt-2 mr-3 fas fa-exclamation-circle"></i>
              @endif
                <select class="custom-select input-group-text mr-sm-1" id="inlineFormCustomSelect" name="kategori" onclick="playAudio4()">
                  <option selected value="null">--Pilih--</option>
                  <option class="text-center" value="siswa" {{ @$_GET[kategori]=="siswa"?"selected" : "" }}>Siswa</option>
                  <option class="text-center" value="kelas" {{ @$_GET[kategori]=="kelas"?"selected" : "" }}>Kelas</option>
                </select>
              </div>
              <input type="text" class="form-control" id="inlineFormInputGroupUsername2" value="{{ @$_GET['query'] }}" name="query" placeholder="Search...">
              <div class="input-group-prepend">
                <button class="btn btn-outline-success"> <i class="fas fa-search"></i>  </button>
              </div>
            </div>
            
          </form>
        </div>
      </nav>

      @if(session('errCat'))
      <center>
          <h4>
              <div class="mt-2 alert alert-danger col-md-2">
                  {{ session('errCat') }}
              </div>
          </h4>
      </center>
      @endif
        
      <h1 class="my-4"><center>@yield('header')</center></h1>
      

      <audio id="myAudio">
        <source src="{{ asset('audio/soda.ogg') }}" type="audio/ogg">
        <source src="{{ asset('audio/soda.mp3') }}" type="audio/mpeg">
        <source src="{{ asset('audio/soda.wav') }}" type="audio/wav">
        Your browser does not support the audio element.
      </audio>

      <audio id="myAudio2">
        <source src="{{ asset('audio/effect.ogg') }}" type="audio/ogg">
        <source src="{{ asset('audio/effect.mp3') }}" type="audio/mpeg">
        <source src="{{ asset('audio/effect.wav') }}" type="audio/wav">
        Your browser does not support the audio element.
      </audio>

      <audio id="myAudio3">
        <source src="{{ asset('audio/pop.ogg') }}" type="audio/ogg">
        <source src="{{ asset('audio/pop.mp3') }}" type="audio/mpeg">
        <source src="{{ asset('audio/pop.wav') }}" type="audio/wav">
        Your browser does not support the audio element.
      </audio>

      <audio id="myAudio4">
        <source src="{{ asset('audio/whip.ogg') }}" type="audio/ogg">
        <source src="{{ asset('audio/whip.mp3') }}" type="audio/mpeg">
        <source src="{{ asset('audio/whip.wav') }}" type="audio/wav">
        Your browser does not support the audio element.
      </audio>

      <audio id="myAudio5">
        <source src="{{ asset('audio/motherShip.ogg') }}" type="audio/ogg">
        <source src="{{ asset('audio/motherShip.mp3') }}" type="audio/mpeg">
        <source src="{{ asset('audio/motherShip.wav') }}" type="audio/wav">
        Your browser does not support the audio element.
      </audio>

      <audio id="myAudio6">
        <source src="{{ asset('audio/spaceEntity.ogg') }}" type="audio/ogg">
        <source src="{{ asset('audio/spaceEntity.mp3') }}" type="audio/mpeg">
        <source src="{{ asset('audio/spaceEntity.wav') }}" type="audio/wav">
        Your browser does not support the audio element.
      </audio>

    @yield('container')
    </body>
    <footer class="mt float-none">
      <div class="footer-container">
        <div class="left-col">
          <h1 style="font-size: 32px;" class="ml-3">Get in touch with me</h1>
          <hr>
          <div class="social-media text-light">
          <table cellpadding="5">
          <tr>
            <td><i class="fas fa-mail-bulk mr-1"></i>E-Mail</td>
            <td>:</td>
            <td><a href="#">@Diazsmartiansyah28@gmail.com</a></td>
          </tr>
          <tr>
              <td><i class="fab fa-instagram mr-2"></i>Instagram</td>
              <td>:</td>
              <td><a href="https://www.instagram.com/dzmrtsyh_/?hl=id">@dzmrtsyh_</a></td>
          </tr>
          <tr>
            <td><i class="fab fa-line mr-2"></i>Line</td>
            <td>:</td>
            <td><a href="">@Miracle</a></td>
          </tr>
          <tr>
            <td><i class="fab fa-twitter mr-1"></i>Twitter</td>
            <td>:</td>
            <td><a href="">@Twitard</a></td>
          </tr>
          </table>
          </div>

          <div class="right-text social-media brdr-img mt-3" onmouseover="playAudio5()" onmouseleave="stopAudio5()">
            <p>&copy; 2020 <img src="{{ asset('img/d.png') }}" width="90"> All Rights Reserved.</p>
          </div>

        </div>
          <div class="right-col ">
            <h1 style="font-size: 32px;">My New Update</h1>
            <hr>
            <p>Enter Your Email To Get New Updates.</p>
            <form action="gupdate" method="post" class="newsletter-form" >
              @csrf
              <input type="text" class="txtb" placeholder="Enter Your Email" name="email">
              <input type="submit" class="btnsub" value="Submit">
            </form><br><br>
          </div>
    </footer>
    <script>
      var x = document.getElementById("myAudio"); 

      var x2 =  document.getElementById("myAudio2"); 

      var x3 =  document.getElementById("myAudio3");

      var x4 =  document.getElementById("myAudio4");

      var x5 =  document.getElementById("myAudio5");

      var x6 = document.getElementById("myAudio6");

      function playAudio1() { 
        x.play(); 
      } 

      function playAudio2() { 
        x2.play(); 
      } 

      function playAudio3(){
        x3.play();
      }

      function playAudio4(){
        x4.play();
      }

      function playAudio5(){
        x5.play();
      }

      function playHalf5(){
        x5.currentTime = 7;
        x5.play();

      }

      function stopAudio5(){
        x5.pause();
        x5.currentTime = 0;
      }

      function playAudio6(){
        x6.play();
      }

    </script>
  </html>