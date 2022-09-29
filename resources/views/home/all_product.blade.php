<!DOCTYPE html>
<html>
   <head>


      <!-- {{asset('')}} -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
            @include('home.header')
         <!-- end header section -->
        
    
    

      <!-- product section -->
      @include('home.product_view')
      <!-- end product section -->



      {{-- Comment and Reply system start here --}}


        <div style="text-align: center; padding-bottom:30px;">

            <h1 style="font-size:30px; padding-top:20px; padding-bottom:20px; text-align:center;">Comments</h1>

            <form action="{{url('add_comment')}}" method="POST">

                @csrf

                <textarea style="height: 150px; width:600px;" placeholder="Comment Something Here" name="comment"></textarea>

                <br>

                <input type="submit" class="btn btn-primary" value="Comment">

            </form>

        </div>


        <div style="padding-left: 20%;">

            <h1 style="padding-bottom:30px; font-size:20px;">All Comments</h1>


            @foreach ($comment as $comment)

                 <div style="padding-bottom:20px;">

                <b>{{$comment->name}}</b>
                <p>{{$comment->comment}}</p>

                <a style="color: blue;" href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>

                @foreach ($reply as $rep)

                @if ($rep->comment_id==$comment->id)

                        <div style="padding-left:3%; padding-bottom:10xp; padding-bottom:10xp;">

                    <b>{{$rep->name}}</b>
                    <p>{{$rep->reply}}</p>

                    <a style="color: blue;" href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>


                </div>


                @endif


                @endforeach

             

            </div>

            @endforeach

           

                        {{-- Replay TextBox --}}

        <div  style="display: none;" class="replyDiv">

            <form action="{{url('add_reply')}}" method="POST">

                @csrf

            <input type="text" id="commentId" name="commentId" hidden="">

            <textarea style="height: 100px; width:500px" placeholder="Write something here" name="reply"></textarea>
            
            <br>

            <button type="submit" class="btn btn-warning">Reply</button>


            <a class="btn" href="javascript::void(0)" onclick="replar_close(this)">Close</a>


        </form>


        </div>

        </div>







    
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

         </p>
      </div>


      <script type="text/javascript">

      function reply(caller)
      {

        document.getElementById('commentId').value=$(caller).attr('data-Commentid');

        $('.replyDiv').insertAfter($(caller));

        $('.replyDiv').show();

      }


      function replar_close(caller)
      {


        $('.replyDiv').hide();

      }


      </script>


      {{-- refreach page and keep scroll position --}}

      <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>



      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
