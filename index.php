<?php
session_start();
if (isset($_SESSION['submitReserve']))
{
    unset($_SESSION['submitReserve']);
    echo '<script>alert("تور شما با موفقیت رزرو شد")</script>';
}
if (isset($_SESSION['successSignup']))
{
    unset($_SESSION['successSignup']);
    echo '<script>alert("به تور رجا خوش آمدید")</script>';
}
if (isset($_SESSION['successLogin']))
{
    unset($_SESSION['successLogin']);
    echo '<script>alert("به تور رجا خوش آمدید")</script>';
}
try {
    $link = mysqli_connect("localhost", "root", "", "travelagency");
} catch (Exception $exception) {
    echo $exception;
}
?>
<!DOCTYPE html>
<html lang="fa">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Travel gency site" />
    <meta name="keywords" content="تور،مسارفت،تور مسافرتی" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />

    <title>رجا سفر</title>
  </head>
  <body>
    <nav id="navbar" class="bg-dark">
      <h1 class="log">
        <a href="#"><span class="text-primary">رجا</span>سفر</a>
      </h1>
      <ul>
        <li>
          <a href="index.php"
            ><span> خانه </span><i class="fas fa-home"></i
          ></a>
        </li>
        <li>
          <a
              <?php
              if (isset($_SESSION['active']))
              {
                  ?>
                 href="reserveTour.php"
                  <?php
              }

              else{
              ?>
                  href="login.php"
            <?php
            }
            ?>

          >
              <span>
                  <?php
                  if (isset($_SESSION['active']))
                  {
                   ?>
                      شروع سفر
                      <?php
                      }

                      else{
                          ?>
                          ورود/ثبت نام
                  <?php
                      }
                  ?>
              </span>

              <i class="fas fa-user"></i
          ></a>
        </li>
      </ul>
    </nav>

    <header id="showcase">
      <div class="showcase-content">
        <h1 class="l-heading m-2">تجربه بینظیر یک سفر</h1>
        <p class="bold m-3">
          کویر؟جنگل؟کوه؟فقط انتخاب کن و به ما بگو تا یک تجربه فوق العاده برات
          رقم بزنیم
        </p>
        <a class="btn"
            <?php
            if (isset($_SESSION['active']))
            {
                ?>
                href="reserveTour.php"
                <?php
            }

            else{
                ?>
                href="login.php"
                <?php
            }
            ?>

        > ورود برای رزرو</a>
      </div>
    </header>

    <section id="section1" class="bg-light py-2">
      <div class="container">
        <h2 class="m-heading text-center">تور های مسافرتی ما</h2>
        <div class="items">
          <div class="item">
            <i class="fas fa-tree fa-2x"></i>
            <div>
              <h4 class="m-1">طبیعت بکر رو از نده</h4>
              <p>با تور های جنگل کردی ما به عمق دل طبیعت بزن</p>
            </div>
          </div>
          <div class="item">
            <i class="fas fa-star-and-crescent fa-2x"></i>
            <div>
              <h4 class="m-1">یه شب اروم و پرستاره</h4>
              <p>با تور های کویر گردی ما یه شب بینظیر رو تو کویر سپری کن</p>
            </div>
          </div>
          <div class="item">
            <i class="fas fa-mountain fa-2x"></i>
            <div>
              <h4 class="m-1">بلندترین قله هارو فتح کن</h4>
              <p>با تور های کوهنوری ما بلندترین قله ها رو فتح کن</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="v-card">
      <div class="img"></div>
      <div class="content bg-dark p-2">
        <h2 class="m-heading m-2">رجاسفر چیه؟</h2>
        <p class="py-1">
          رجا سفر یه تیم کاربلد و حرفه ای تو زمینه تور های مسافری هستش ،ویژگی هایی که رجاسفر داره حالا چیان؟
        </p>
        <ul class="list">
          <li>
            جامعه آماری بالا <span><i class="fas fa-users"></i></span>
          </li>
          <li>
            سابقه بالا <span><i class="fas fa-certificate"></i></span>
          </li>
          <li>
            تور لیدر های حرفه ای با مدرک بین المللی
            <span><i class="fas fa-graduation-cap"></i></span>
          </li>
          <li>غذای با کیفیت <span> </span><i class="fas fa-utensils"></i></li>
          <li>
            عکاس حرفه ای برای ثبت لحظات شما
            <span><i class="fas fa-camera"></i></span>
          </li>
          <li>
            قیمت های مناسب <span><i class="fas fa-dollar-sign"></i></span>
          </li>
        </ul>
      </div>
    </section>

    <section id="section3" class="bg-light my">
      <div class="container p-2">
        <h2 class="m-heading text-center">عکس های منتخب</h2>
        <h6 class="text-center">برای دیدن در سایز اصلی روی عکس کلیک کنید</h6>
        <div class="items py-1">
          <div>
            <a href="./img/pic1.jpg" target="_blank"
              ><img src="./img/pic1.jpg" alt=""
            /></a>
          </div>
          <div>
            <a href="./img/pic2.jpg" target="_blank"
              ><img src="./img/pic2.jpg" alt=""
            /></a>
          </div>
          <div>
            <a href="./img/pic3.jpg" target="_blank"
              ><img src="./img/pic3.jpg" alt=""
            /></a>
          </div>
          <div>
            <a href="./img/pic4.jpg" target="_blank"
              ><img src="./img/pic4.jpg" alt=""
            /></a>
          </div>
          <div>
            <a href="./img/pic5.jpg" target="_blank"
              ><img src="./img/pic5.jpg" alt=""
            /></a>
          </div>
        </div>
      </div>
    </section>

    <br />
    <hr class="seperator" />
    <br />
    <h2 class="text-center">تور های ما</h2>
    <br />
    <hr class="seperator" />
    <br />

    <section class="v-card">
      <div id="img-t1"></div>
      <div class="content bg-dark p-2">
        <h2 class="m-heading m-2">تور سفر به شمال</h2>
          <?php
          mysqli_query($link,"SET NAMES utf8");
          $query="SELECT * FROM home WHERE id=1";
          $result=mysqli_query($link,$query);
          $row=mysqli_fetch_array($result);
          ?>
        <p class="py-1"><?php echo $row['title']; ?></p>
        <ul class="list">
          <li>
            <span><?php echo $row['capacity']; ?></span><span> :ظرفیت(نفر)</span>
            <span><i class="fas fa-users"></i></span>
          </li>
          <li>
            <span><?php echo $row['period']; ?></span><span> :مدت(روز)</span>
            <span><i class="fas fa-clock"></i></span>
          </li>
          <li>
            <span><?php echo $row['price']; ?></span><span> :قیمت به ازای هر نفر(تومان)</span>
            <span><i class="fas fa-dollar-sign"></i></span>
          </li>
        </ul>
      </div>
    </section>

    <section class="v-card my">
      <div class="content bg-dark p-2">
        <h2 class="m-heading m-2">تور سفر به کویر</h2>
          <?php
          mysqli_query($link,"SET NAMES utf8");
          $query="SELECT * FROM home WHERE id=2";
          $result=mysqli_query($link,$query);
          $row=mysqli_fetch_array($result);
          ?>
          <p class="py-1"><?php echo $row['title']; ?></p>
          <ul class="list">
              <li>
                  <span><?php echo $row['capacity']; ?></span><span> :ظرفیت(نفر)</span>
                  <span><i class="fas fa-users"></i></span>
              </li>
              <li>
                  <span><?php echo $row['period']; ?></span><span> :مدت(روز)</span>
                  <span><i class="fas fa-clock"></i></span>
              </li>
              <li>
                  <span><?php echo $row['price']; ?></span><span> :قیمت به ازای هر نفر(تومان)</span>
            <span><i class="fas fa-dollar-sign"></i></span>
          </li>
        </ul>
      </div>
      <div id="img-t2"></div>
    </section>

    <section class="v-card my">
      <div id="img-t3"></div>
      <div class="content bg-dark p-2">
        <h2 class="m-heading m-2">سفر به بلندترین نقطه ایران</h2>
          <?php
          mysqli_query($link,"SET NAMES utf8");
          $query="SELECT * FROM home WHERE id=3";
          $result=mysqli_query($link,$query);
          $row=mysqli_fetch_array($result);
          ?>
          <p class="py-1"><?php echo $row['title']; ?></p>
          <ul class="list">
              <li>
                  <span><?php echo $row['capacity']; ?></span><span> :ظرفیت(نفر)</span>
                  <span><i class="fas fa-users"></i></span>
              </li>
              <li>
                  <span><?php echo $row['period']; ?></span><span> :مدت(روز)</span>
                  <span><i class="fas fa-clock"></i></span>
              </li>
              <li>
                  <span><?php echo $row['price']; ?></span><span> :قیمت به ازای هر نفر(تومان)</span>
            <span><i class="fas fa-dollar-sign"></i></span>
          </li>
        </ul>
      </div>
    </section>

    <footer class="bg-dark py-2 my">
      <div id="main-footer" class="container">
        <div>
          <p>Copyright &copy; 2021</p>
        </div>
        <div>
          <i class="fab fa-instagram fa-2x"></i>
          <i class="fab fa-telegram fa-2x"></i>
          <i class="fab fa-twitter fa-2x"></i>
          <i class="fab fa-facebook-square fa-2x"></i>
        </div>
      </div>
    </footer>
  </body>
</html>
