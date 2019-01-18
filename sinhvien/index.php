<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />  

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.js">





    <title>Sinh Viên</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark sticky-top">
      <a class="navbar-brand font-weight-bold" href="#">Sinh Vien VNUA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-home"></i>
              Home
              <span class="sr-only">(current)</span>
              </a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link" href="#"id="navbardrop" data-toggle="dropdown">
              <i class="fa fa-envelope-o">
                <span class="badge badge-danger">11</span>
              </i>
              Messages
            </a>
            <div class="dropdown-menu">
              <div class="form-group  container-fluid ">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          
           <li class="nav-item dropdown">
            <a class="nav-link " id="navbardrop" data-toggle="dropdown" href="#">
              <i class="fa fa-bell">
                <span class="badge badge-danger">2</span>
              </i>
              Thông Báo
            </a>
            <div class="dropdown-menu">
              <div class="form-group  container-fluid ">
                
              </div>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-address-card">
                <span class="badge badge-danger"></span>
              </i>
              Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
             <i class="fa fa-book">
                <span class="badge badge-danger"></span>
              </i>
              Thư viện
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
             <i class="fa fa-object-group">
                <span class="badge badge-danger"></span>
              </i>
              Câu lạc bộ
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
             <i class="fa fa-wrench">
                <span class="badge badge-danger"></span>
              </i>
              Cài đặt
            </a>
          </li>

         
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="1900">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://www.vnua.edu.vn/DATA/0/DOCUMENTS/2018/12/host/baner%2027.11%20b.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://www.vnua.edu.vn/DATA/0/DOCUMENTS/2018/12/host/baner%2027.11%20b.png" alt="Second slide">
    </div>
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://www.vnua.edu.vn/DATA/0/DOCUMENTS/2019/01/host/BANNER%2069%20NAM%20HS%20SV.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br>
    
     <!-- /slider -->
     <!-- menu con -->
     <div class="container-fluid">
         <div class="container">
             <div class="container">
         <div class="btn-group mobile ">

              <a href="#!" class="btn btn-outline-primary">Sinh Viên</a>
              <a href="#!" class="btn btn-outline-primary">Cựu sinh viên</a>
              <a href="#!" class="btn btn-outline-primary">Văn bản, quy chế, quy định</a>
              <a href="#!" class="btn btn-outline-primary">Tạp chí</a>
              <a href="#!" class="btn btn-outline-primary">Thư viện</a>
              <a href="#!" class="btn btn-outline-primary">Đăng ký học phần</a>
              <a href="#!" class="btn btn-outline-primary">Quốc hội & cử tri</a>

        </div>
    </div>
         </div>
     </div>
     <br>
     
     <!-- /menu con -->
<!-- Thông báo -->
     <div class="container-fluid">
        <h1>Thông báo</h1>
         <div class="row">
            <div class="col-md-8">
                <div class="card">
                    
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-action"> Câu hỏi viết thu hoạch Học tập, quán triệt Nghị quyết Hội nghị lần thứ Tám Ban... <img src="https://www.vnua.edu.vn/images/hot-hot.gif" alt=""></li>
                        <li class="list-group-item list-group-item-action"> Tuyển sinh đào tạo trình độ thạc sĩ đợt 1 năm 2019<img src="https://www.vnua.edu.vn/images/hot-hot.gif" alt=""></li>
                      
                      <li class="list-group-item list-group-item-action"> Tuyển sinh đào tạo trình độ thạc sĩ đợt 1 năm 2019<img src="https://www.vnua.edu.vn/images/hot-hot.gif" alt=""></li>
                      <li class="list-group-item list-group-item-action"> Tuyển sinh đào tạo trình độ thạc sĩ đợt 1 năm 2019<img src="https://www.vnua.edu.vn/images/hot-hot.gif" alt=""></li>
                      <li class="list-group-item list-group-item-action">  Tổ chức bảo vệ luận án cấp Học viện cho nghiên cứu sinh Đặng Quang Bích
 Đăng ký dự thi và ôn thi tiếng Anh</li>
                      </ul>
                    </div>
                </div>
                
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Liên kết
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-action"> Đào tạo</li>
                            <li class="list-group-item list-group-item-action"> Tuyển sinh</li>
                          
                         
                      </ul>
                      
                    </div>
                </div>

                
            </div>
             
         </div>
     </div>
    <!-- /Thông báo -->
    <div class="container-fluid">
      <!-- title -->
    <div>
      <h1>Tin tức - Sư kiện</h1>
    </div>
    <!-- /title -->
    <!-- slider -->
    <div class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000" id="carousel-2">
        <div class="carousel-inner" role="listbox">
          <!-- slide_1 -->
            <div class="carousel-item active">
              <div class="row">
                 <div class="col-md-3 ">
                    <div class="card mb">
                          <img class="card-img-top" src="https://www.vnua.edu.vn/DATA/0/IMAGES/2019/01/2019-0901-khen-thuong-bong-da002.JPG" alt="Card image cap">
                          <div class="card-body mb">
                            <h5 class="card-title "><a href="#">Lễ khen thưởng</a></h5>
                            <h6 class="text-right text-gray-dark">Date: 12/01/2019</h6>
                            <p class="card-text text-left">Lễ khen thưởng đội bóng đá Nam Học viện Nông nghiệp Việt Nam vì thành tích xuất sắc dành huy chương vàng và Cup tại Đại học Quảng Tây, Trung Quốc năm 2018</p>
                         
                          </div>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="card mb">
                        <img class="card-img-top" src="https://www.vnua.edu.vn/DATA/0/IMAGES/2019/01/2019-0801-tu-van002.jpg"  alt="Card image cap">
                        <div class="card-body mb">
                          <h5 class="card-title"><a href="#">Hội thảo “Tính toán tối ưu và ứng dụng”</a></h5>
                          <h6 class="text-right text-gray-dark">Date: 12/01/2019</h6>
                          <p class="card-text text-left">
Ngày 26/12/2018, Nhóm nghiên cứu mạnh “Ứng dụng công nghệ thông tin trong nông nghiệp” của Khoa Công nghệ thông tin đã tổ chức Hội thảo “Tính toán tối ưu và ứng dụng”.</p>
                          
                        </div>
                  </div>
                </div>
                <div class="col-md-3 ">
                  <div class="card mb">
                        <img class="card-img-top" src="https://www.vnua.edu.vn/DATA/0/IMAGES/2018/12/2018-2612-xhh001.jpg" alt="Card image cap">
                        <div class="card-body mb">
                         <h5 class="card-title text-left"><a href="#">
Semina chuyên gia của nhóm nghiên cứu về Chính sách & Phát triển xã hội nông thôn
</a></h5>
                          <h6 class="text-right text-gray-dark">Date: 12/01/2019</h6>

                          <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                  </div>
                </div>
                <div class="col-md-3 ">
                  <div class="card mb">
                        <img class="card-img-top" src="https://www.vnua.edu.vn/DATA/0/IMAGES/2018/12/2018-2612-xhh001.jpg" alt="Card image cap">
                        <div class="card-body mb">
                         <h5 class="card-title text-left"><a href="#">
Semina chuyên gia của nhóm nghiên cứu về Chính sách & Phát triển xã hội nông thôn
</a></h5>
                          <h6 class="text-right text-gray-dark">Date: 12/01/2019</h6>

                          <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                  </div>
                </div>
            </div>
        </div>
            <!-- slide_2 -->
            <div class="carousel-item container-fluid">
              <div class="row">
                 <div class="col-md-3 ">
                    <div class="card mb">
                          <img class="card-img-top" src="https://www.vnua.edu.vn/DATA/0/IMAGES/2019/01/2019-0801-truyen-thong-hssv001.jpg" alt="Card image cap">
                          <div class="card-body mb">
                            <h5 class="card-title"><a href="#">Hội thảo “Tính toán tối ưu và ứng dụng”</a></h5>
                          <h6 class="text-right text-gray-dark">Date: 12/01/2019</h6>

                            <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                          </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                  <div class="card mb">
                        <img class="card-img-top" src="https://www.vnua.edu.vn/DATA/0/IMAGES/2019/01/2019-0801-truyen-thong-hssv003.JPG" alt="Card image cap">
                        <div class="card-body mb">
                         <h5 class="card-title"><a href="#">Hội thảo “Tính toán tối ưu và ứng dụng”</a></h5>
                          <h6 class="text-right text-gray-dark">Date: 12/01/2019</h6>

                          <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card mb">
                        <img class="card-img-top" src="https://www.vnua.edu.vn/DATA/0/IMAGES/2019/01/2019-0801-truyen-thong-hssv004.JPG" alt="Card image cap">
                        <div class="card-body mb">
                         <h5 class="card-title"><a href="#">Hội thảo “Tính toán tối ưu và ứng dụng”</a></h5>
                          <h6 class="text-right text-gray-dark">Date: 12/01/2019</h6>

                          <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card mb">
                        <img class="card-img-top" src="https://www.vnua.edu.vn/DATA/0/IMAGES/2019/01/2019-0801-truyen-thong-hssv004.JPG" alt="Card image cap">
                        <div class="card-body mb">
                         <h5 class="card-title"><a href="#">Hội thảo “Tính toán tối ưu và ứng dụng”</a></h5>
                          <h6 class="text-right text-gray-dark">Date: 12/01/2019</h6>

                          <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                  </div>
                </div>
              </div>
            </div>
           <!-- slider 3 -->
           <div class="carousel-item container-fluid">
              <div class="row">
                 <div class="col-md-3 ">
                    <div class="card mb">
                          <img class="card-img-top" src="http://www.placehold.it/286x180" alt="Card image cap">
                          <div class="card-body mb">
                            <h5 class="card-title"><a href="#">Hội thảo “Tính toán tối ưu và ứng dụng”</a></h5>
                          <h6 class="text-right text-gray-dark">Date: 12/01/2019</h6>

                            <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           
                          </div>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="card mb">
                        <img class="card-img-top" src="http://www.placehold.it/286x180" alt="Card image cap">
                        <div class="card-body mb">
                         <h5 class="card-title"><a href="#">Hội thảo “Tính toán tối ưu và ứng dụng”</a></h5>
                          <h6 class="text-right text-gray-dark">Date: 12/01/2019</h6>

                          <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card mb">
                        <img class="card-img-top" src="http://www.placehold.it/286x180" alt="Card image cap">
                        <div class="card-body mb">
                         <h5 class="card-title"><a href="#">Hội thảo “Tính toán tối ưu và ứng dụng”</a></h5>
                          <h6 class="text-right text-gray-dark">Date: 12/01/2019</h6>

                          <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card mb">
                        <img class="card-img-top" src="http://www.placehold.it/286x180" alt="Card image cap">
                        <div class="card-body mb">
                         <h5 class="card-title"><a href="#">Hội thảo “Tính toán tối ưu và ứng dụng”</a></h5>
                          <h6 class="text-right text-gray-dark">Date: 12/01/2019</h6>

                          <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- slider 4 -->
            <div class="carousel-item container-fluid">
              <div class="row">
                 <div class="col-md-3">
                    <div class="card mb">
                          <img class="card-img-top" src="http://www.placehold.it/286x180" alt="Card image cap">
                          <div class="card-body mb">
                            <h5 class="card-title"><a href="#">Hội thảo “Tính toán tối ưu và ứng dụng”</a></h5>
                          <h6 class="text-right text-gray-dark">Date: 12/01/2019</h6>

                            <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                          </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                  <div class="card mb">
                        <img class="card-img-top" src="http://www.placehold.it/286x180" alt="Card image cap">
                        <div class="card-body mb">
                         <h5 class="card-title"><a href="#">Hội thảo “Tính toán tối ưu và ứng dụng”</a></h5>
                          <h6 class="text-right text-gray-dark">Date: 12/01/2019</h6>

                          <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card mb">
                        <img class="card-img-top" src="http://www.placehold.it/286x180" alt="Card image cap">
                        <div class="card-body mb">
                          <h5 class="card-title"><a href="#">Hội thảo “Tính toán tối ưu và ứng dụng”</a></h5>
                          <h6 class="text-right text-gray-dark">Date: 12/01/2019</h6>

                          <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card mb">
                        <img class="card-img-top" src="http://www.placehold.it/286x180" alt="Card image cap">
                        <div class="card-body mb">
                          <h5 class="card-title"><a href="#">Hội thảo “Tính toán tối ưu và ứng dụng”</a></h5>
                          <h6 class="text-right text-gray-dark">Date: 12/01/2019</h6>

                          <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /slider 4 -->
              
           
        </div>
       <br><br>
        <ol class="carousel-indicators">
            <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-2" data-slide-to="1"></li>
            <li data-target="#carousel-2" data-slide-to="2"></li>
            <li data-target="#carousel-2" data-slide-to="3"></li>
       
        </ol>
    </div>
     <script class ="bs-live-reload" data-sseport="4859" data-lastchange="1530918619334" src="/js/livereload.js"></script><br>
     <div class="container-fluid">
        <h1>Tuyển sinh</h1>
          </div><div class="row">
      <div class="col-md-6">
         <div class="card text-white bg-primary flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <h3>Đại học</h3>
               <h6 class="mb-0">
                  <a class="text-white" href="#">40 Percent of People Can’t Afford Basics</a>
               </h6>
               <div class="mb-1 text-white-50 small">Nov 12</div>
               <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
               <a class="btn btn-outline-light btn-sm" role="button" href="http://www.jquery2dotnet.com/">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="https://www.vnua.edu.vn/DATA/0/IMAGES/2019/01/2019-1101-hssv001.jpg" style="width: 350px; height: 260px;">
            <hr>
            
         </div>
         <a class="list-group-item list-group-item-action" href="#">Hướng dẫn thủ tục nhập học cho tân ...</a>
            <a class="list-group-item list-group-item-action" href="#">Hướng dẫn thủ tục nhập học cho tân ...</a>
            <a class="list-group-item list-group-item-action" href="#">Hướng dẫn thủ tục nhập học cho tân ...</a>
            


      </div>
      <div class="col-md-6">
         <div class="card text-white bg-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <h3>Cao học</h3>
               <h6 class="mb-0">
                  <a class="text-white" href="#">Food for Thought: Diet and Brain Health</a>
               </h6>
               <div class="mb-1 text-white-50 small">Nov 11</div>
               <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
               <a class="btn btn-outline-light btn-sm" href="http://www.jquery2dotnet.com/">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="https://www.vnua.edu.vn/DATA/0/IMAGES/2019/01/2019-1101-hssv001.jpg" style="width: 350px; height: 260px;">

         </div>
            <a class="list-group-item list-group-item-action" href="#">Hướng dẫn thủ tục nhập học cho tân ...</a>
            <a class="list-group-item list-group-item-action" href="#">Hướng dẫn thủ tục nhập học cho tân ...</a>

            <a class="list-group-item list-group-item-action" href="#">Hướng dẫn thủ tục nhập học cho tân ...</a>



      </div>
   </div>
     </div>


    <div class="container-fluid">
   <!-- Khối SInh viên -->
        <!-- title -->
    <div>
      <h1>Sinh Viên</h1><hr>
    </div>
    <!-- /title -->
  <div class="row">
    
      <div class="col-md-4">
        <div class="card mb">
              <a href="#"><img class="card-img-top" src="http://www.tlu.edu.vn/Portals/0/Images/2018/tlu_futurestudents_banner_vi.png" alt="Card image cap"></a>
              <div>
                
                  <a class="list-group-item list-group-item-action" href="#">Hướng dẫn thủ tục nhập học cho tân ...</a>
                  <a class="list-group-item list-group-item-action" href="#">Quy trình nhập học của tân sinh viên...</a>
                 <a class="list-group-item list-group-item-action" href="#">Kế hoạch Sinh hoạt công dân - sinh viên...</a>
                 <a class="list-group-item list-group-item-action" href="#">Những điều tân sinh viên K64 cần biết</a>
                 
                </ul>
              </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card mb">
              <a href="#"><img class="card-img-top" src="http://www.tlu.edu.vn/Portals/0/Images/2018/tlu_curentstudents_banner_vi.png" alt="Card image cap"></a>
              <div>
                
                  <a class="list-group-item list-group-item-action" href="#">Hướng dẫn thủ tục nhập học cho tân ...</a>
                  <a class="list-group-item list-group-item-action" href="#">Quy trình nhập học của tân sinh viên...</a>
                 <a class="list-group-item list-group-item-action" href="#">Kế hoạch Sinh hoạt công dân - sinh viên...</a>
                 <a class="list-group-item list-group-item-action" href="#">Những điều tân sinh viên K64 cần biết</a>
                 
                </ul>
              </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card mb">
              <a href="#"><img class="card-img-top" src="http://www.tlu.edu.vn/Portals/0/Images/2018/tlu_alumnistudents_banner_vi.png" alt="Card image cap"></a>
              <div>
                
                  <a class="list-group-item list-group-item-action" href="#">Hướng dẫn thủ tục nhập học cho tân ...</a>
                  <a class="list-group-item list-group-item-action" href="#">Quy trình nhập học của tân sinh viên...</a>
                 <a class="list-group-item list-group-item-action" href="#">Kế hoạch Sinh hoạt công dân - sinh viên...</a>
                 <a class="list-group-item list-group-item-action" href="#">Những điều tân sinh viên K64 cần biết</a>
                 
                </ul>
              </div>
            </div>
        </div>
  </div>
  <!-- /sinhvien -->
  <br><hr>
</div>
<!-- Đơn vị trực thuộc -->
<div class="container-fluid">
              <div class="row">
                <h1>Đơn vị trực thuộc</h1>
                <div class="container-fluid ">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Khoa</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Đơn vị chức năng</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Viện, Trung tâm, Công ty</a>
                    
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="container-fluid" >
                        <div class="form-row">
                          <div class="col-md-4">
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Công nghệ thông tin</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Thú Y</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Công nghệ thực phẩm</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>

                          </div>
                          <div class="col-md-4">
                             
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                          </div>
                           <div class="col-md-4">
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                          </div>

                        </div>
                      </div>
                      
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                       <div class="container-fluid" >
                        <div class="form-row">
                          <div class="col-md-4">
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>

                          </div>
                          <div class="col-md-4">
                             
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                          </div>
                           <div class="col-md-4">
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                      <div class="container-fluid" >
                        <div class="form-row">
                          <div class="col-md-4">
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>

                          </div>
                          <div class="col-md-4">
                             
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                          </div>
                           <div class="col-md-4">
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                            <a href="#" class="list-group-item list-group-item-action">Khoa Chăn nuôi</a>
                          </div>

                        </div>
                      </div>
                    </div>
                   
                  </div>
                
                </div>
              </div>
        </div>
      </div>
</div>
<footer class="footer">
<div class="container bottom_border">
<div class="row">
<div class=" col-sm-4 col-md   col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Học Viện Nông Nghiệp</h5>
<!--headin5_amrc-->
<p class="mb10">Học viện Nông nghiệp Việt Nam, trường đại học hàng đầu đào tạo và nghiên cứu, chuyển giao lĩnh vực nông nghiệp, kinh tế, phát triển nông thôn, thú y, chăn ...</p>
<p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
<p><i class="fa fa-phone"></i>  +91-9999878398  </p>
<p><i class="fa fa fa-envelope"></i> info@example.com  </p>


</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Đường dẫn nhanh</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="#">Image Rectoucing</a></li>
<li><a href="h#">Clipping Path</a></li>
<li><a href="#">Hollow Man Montage</a></li>
<li><a href="#">Ebay & Amazon</a></li>
<li><a href="#">Hair Masking/Clipping</a></li>
<li><a href="#">Image Cropping</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Đường dẫn nhanh</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="#">Remove Background</a></li>
<li><a href="#">Shadows & Mirror Reflection</a></li>
<li><a href="#">Logo Design</a></li>
<li><a href="#">Vectorization</a></li>
<li><a href="#">Hair Masking/Clipping</a></li>
<li><a href="#">Image Cropping</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Theo dõi chúng tôi</h5>
<!--headin5_amrc ends here-->

<ul class="footer_ul2_amrc">
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
</ul>
<!--footer_ul2_amrc ends here-->
</div>
</div>
</div>


<div class="container">
<ul class="foote_bottom_ul_amrc text-center">
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">Blog</a></li>

</ul>
<!--foote_bottom_ul_amrc ends here-->
<p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>


<!--social_footer_ul ends here-->
</div>

</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>