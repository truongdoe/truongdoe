
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clock - shop</title> 
  <link rel="stylesheet" href="{{url('backend')}}/asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('backend')}}/asset/fontawesome/css/all.css">
  <link rel="stylesheet" href="{{url('backend')}}/asset/css/index.css">
</head>

<body>

@include('fe.layout.menu')
  <!--anh2-->
@yield('main')
  <!-- phancuoi -->
  <div class="footer">
    <div class="container">
      <div class="row ">

        <div class="col-md-12">
          <div class="row">

            <div class="col-md-2 footer_1">
              <img src="{{url('backend')}}/asset/image/images/images/footer_logo_1_40.png" alt="">
              <!-- <span>Alienum phaedrum torquatu prericus nihil expet in mei .Mei ula with touch markers. </span> -->
              <li>Alienum phaedrum torquatu prericus nihil expet in mei .Mei ula with touch markers.</li>
            </div>
            <div class="col-md-2 footer_2">
              <H4>Watches</H4>
              <ul>

                <li>. Men</li>
                <li>. Women</li>
                <li>. Collections</li>
                <li>. As seen un</li>
              </ul>
            </div>
            <div class="col-md-2 footer_2">
              <H4>Watches</H4>
              <ul>

                <li>. Online Catalog</li>
                <li>. FQA</li>
                <li>. Online Warranty</li>

              </ul>
            </div>
            <div class="col-md-2 footer_3">
              <H4>STAY IN TOUCH</H4>
              <ul>

                <li><i>Phone :</i>0963956023</li>
                <li><i>TIME :</i>9am - 0am</li>
                <li><i>Addres :</i>Streer No 22 town New united Stare</li>

              </ul>
            </div>
            <!-- <div class="col-md-2 footer_3" style="padding-left: 16%;">
                        <H4>STAY IN TOUCH</H4>
                        <ul>
                            <li>ADSAD </li>
                        </ul>
                        <ul>
                            <li></li>
                        </ul>
                        <ul>
                            <li></li>
                        </ul>
                    </div> -->



          </div>


        </div>

      </div>

    </div>
  </div>

</body>

</html>