<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
</head>

<body style="/*background: url(&quot;design.jpg&quot;);*/background-position: 0 -60px;">
    <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                        <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
                        <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                    </svg></span><span>Brand</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" style="font-size:12px"; id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">جدول الصفوف الدراسية</a></li>
                    <li class="nav-item"><a class="nav-link" href="index1.php">جدول الطلاب</a></li>
                    <li class="nav-item"><a class="nav-link" href="index2.php">جدول الفصول</a></li>
                    <li class="nav-item"><a class="nav-link" href="index3.php">جدول الفصول والمدرسين</a></li>
                    <li class="nav-item"><a class="nav-link" href="index4.php">جدول المدرسين</a></li>
                    <li class="nav-item"><a class="nav-link" href="index5.php">جدول المواد الدراسية</a></li>                    
                    <li class="nav-item"><a class="nav-link" href="index6.php">جدول درجات مواد الطلاب</a></li>
            </div>
        </div>
    </nav>
    <header class="bg-primary-gradient">
        <div class="container pt-4 pt-xl-5">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
      <th>رقم المدرس</th>
      <th>اسم المدرس</th>
      <th>العنوان</th>
      <th>رقم التليفون</th>
      <th>تاريخ التعين</th>
      <th>المرتب</th>
      <th>رقم المادة الدراسية</th>                          
                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        </tr>
                        <tbody>
							 <?php 
    include "admin/connection.php";
    $sql= "select * from teachersdata";
    $result = $conn->query($sql);
    if(!$result){
        die("invalid query!");
    }
    while($row=$result->fetch_assoc()){
    echo "
    <tr>
      <th>$row[id]</th>
      <td>$row[name]</td>
      <td>$row[address]</td>
      <td>$row[phone]</td>
      <td>$row[ta3yeen]</td>
      <td>$row[salary]</td>
      <td>$row[codemada]</td>
      <td>
      

      </td>
    </tr>
    ";
    }
    ?>
                        </tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </header>
    <section></section>
    <section class="py-5 mt-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Our Team</p>
                    <h2 class="fw-bold"><strong>Special thanks to my team</strong></h2>
                    <p class="text-muted w-lg-50">No matter the project, our team can handle it.&nbsp;</p>
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
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bold-and-bright.js"></script>
</body>

</html>
