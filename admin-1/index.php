<?php
require_once("header.php");


?>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                
            </div>

            <!-- ======================= Cards ================== -->
            <h1 align="center">Semester-I</h1>
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-I";
                            $dept="COMPUTER SCIENCE AND DESIGN";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">CSD-I</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-I";
                            $dept="ARTIFICIAL INTELLIGENCE AND DATA SCIENCE";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">AIDS-I</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-I";
                            $dept="ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">AIML-I</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-I";
                            $dept="BIO MEDICAL AND ROBOTICS";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">BMRE-I</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>
            </div>
            <h1 align="center">Semester-III</h1>
            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-III";
                            $dept="COMPUTER SCIENCE AND DESIGN";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">CSD-III</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-III";
                            $dept="ARTIFICIAL INTELLIGIENCE AND DATA SCIENCE";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">AIDS-III</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-III";
                            $dept="ARTIFICIAL INTELLIGIENCE AND MACHINE LEARNING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">AIML-III</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-III";
                            $dept="BIO MEDICAL AND ROBOTICS";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">BMRE-III</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>
            </div>
            <h1 align="center">Semester-V</h1>
            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-V";
                            $dept="COMPUTER SCIENCE AND DESIGN";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">CSD-V</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-V";
                            $dept="ARTIFICIAL INTELLIGIENCE AND DATASCIENCE";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">AIDS-V</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-V";
                            $dept="ARTIFICIAL INTELLIGIENCE AND MACHINE LEARNING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">AIML-V</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-V";
                            $dept="BIO MEDICAL AND ROBOTICS";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">BMRE-V</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>
            </div>
            <h1 align="center">Semester-VII</h1>
            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-VII";
                            $dept="COMPUTER SCIENCE AND DESIGN";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">CSD-VII</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-VII";
                            $dept="ARTIFICIAL INTELLIGIENCE AND DATA SCIENCE";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">AIDS-VII</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-VII";
                            $dept="ARTIFICIAL INTELLIGIENCE AND MACHINE LEARNING";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">AIML-VII</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php 
                            $sem="sem-VII";
                            $dept="BIO MEDICAL AND ROBOTICS";
                            $validate=0;
                            $con =mysqli_connect("localhost", "root", "", "phpform");
                            $data = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' && validate='$validate' " );
                            $result = mysqli_fetch_assoc($data);
                            $countvalue = $result['count(*)'];
                            $data1 = mysqli_query($con, "select count(*) from login WHERE loginSem='$sem' && loginDept='$dept' " );
                            $result1 = mysqli_fetch_assoc($data1);
                            $countvalue1 = $result1['count(*)'];
                            echo $countvalue ;
                            echo "/";
                            echo $countvalue1;
                            ?>
                        </div>
                        <div class="cardName">BMRE-VII</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="Checkmark-done-circle"></ion-icon>
                    </div>
                </div>
            </div>
            

            <!-- ================ Order Details List ================= -->

      

    <?php
    require_once("footer.php");
    ?>