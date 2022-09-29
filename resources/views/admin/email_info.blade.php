<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">
    @include('admin.css')


    <style type="text/css">

      label
      {
        display:inline-block;
        width:200px;
        font-size:15px;
        font-weight:bold;
      }

      </style>



  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
      <div class="main-panel">
        <div class="content-wrapper">

            <h1 style="text-align: center; font-size:25px;">Send Email To {{$order->email}}</h1>


            <form action="{{url('send_user_email' , $order->id)}}" method="POST">

              @csrf

            <div style="padding-left: 35%; padding-top:30px;">

                <label for="">Email Greeting : </label>

                <input style="color:black;" type="text" name="greeting">

            </div>


            
            <div style="padding-left: 35%; padding-top:30px;">

                <label for="">Email Firstline : </label>

                <input style="color:black;" type="text" name="firstline">

            </div>


             
            <div style="padding-left: 35%; padding-top:30px;">

                <label for="">Email Body : </label>

                <input style="color:black;" type="text" name="body">

            </div>


            <div style="padding-left: 35%; padding-top:30px;">

              <label for="">Button Name : </label>

              <input style="color:black;" type="text" name="button">

          </div>


          <div style="padding-left: 35%; padding-top:30px;">

            <label for="">url : </label>

            <input style="color:black;" type="text" name="url">

        </div>


        <div style="padding-left: 35%; padding-top:30px;">

          <label for="">Last Line : </label>

          <input style="color:black;" type="text" name="lastline">

      </div>



      <div style="padding-left: 35%; padding-top:30px;">

       

        <input type="submit" value="Send Email" class="btn btn-primary">

    </div>
        
        </form>

       
    
    </div>
      </div>
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
