
</head>
<body>

<!-- dhuwur -->


<div class="container ">
    <form class="justify-content-center mb-5" method="post" action="<?= base_url(); ?>admin/login" >
     
        <h2 class=" text-center mt-3" style="font-weight: 500; font-size:35px; ">Login  </h2>
            <p class="mb-4 text-center token" style="font-size: 14px; color:#A4A4A4; margin-bottom:150px;" > Masukkan Username dan Password Anda</p>
     
        <?php if( $this->session->flashdata('login_admin_salah') ) :?>
            <div class="alert alert-danger" role="alert" style="width: 100%;">
                  <?= $this->session->flashdata('login_admin_salah');?>
            </div>
         <?php endif;?>
        <div class="input-group mb-3">

            
            <div class="input-group-prepend">
                <span class="username" id="basic-addon1"><i class="fas fa-user"></i></span>
                
                </div>
            
            <input type="text" class="user"  placeholder="Username" name="username" id="username" aria-label="Username" aria-describedby="basic-addon1" onfocus="input()">

            <div class="input-group-prepend">
                <span class="password" id="basic-addon1"><i class="fas fa-lock"></i></span>
                
                </div>
            
            <input type="password" class="pass" placeholder="Password" name="password" id="password" aria-label="Username" aria-describedby="basic-addon1" onfocus="input2()">
        </div>



    <button class="btn mx-auto" name="submit"  id="submit" type="submit" >Login</button>

    <p class="dev mt-4 text-center" style=" color: #B9B9B9; font-size:12px;">development by : Satria Herman</p>
    </form>

    
 </div>
 

 <!-- <footer class=" justify-content-center text-center " style="padding: 20px; width:100%; background: #f0f8ff;">
    <div class="footer-container" >
        <div class="social-media">
        <h6 class="text-body mt-4" ><i class="far fa-copyright"></i> Komunitas <span style="color: #2ab7ca ;"> Teknik Informatika </span> </h6>
            <a href="http://facebook.com"><i class="fab fa-facebook-square text-dark mr-3"></i></a>
            <a href="http://instagram.com"><i class="fab fa-instagram text-dark"></i></a>
        </div>
    </div>
</footer> -->




 <style>
     body{
         background: #0DA4CB;
         font-family: 'poppins', sans-serif;
     }
     
     input{
         width: 93%;
         border: none;
         border-bottom: 2px solid #B9B9B9;
         outline: 0;
         transition: .5s;
         margin-top: 30px;
     }

     span{
         background: none;
         /* border-bottom: 2px solid #B9B9B9; */
         margin-right: 10px;
         margin-left: 3px;
         margin-top: 32px;
         color: #B9B9B9;
     }

     form{
         
         margin-top: 17%;
         margin-left: auto;
         margin-right: auto;
         background: #fff;
         width: 500px;
         padding: 40px;
         padding-top: 40px;
         padding-bottom: 50px;
         position: relative;
     }

     img{
         position: absolute;
         left: 50%;
         top: -12%;
         transform: translateX(-50%);
     }

     button.btn{
         
         width: 100%;
         margin-top: 0px;
         /* padding-top: 30px; */
         color: #fff;
         font-size: 14px;
         height: 35px;
         background-color: #1689E1;
     }

     button.btn:hover{
         background: #0c63a6;
         color: #fff;
     }

   
     /* token paragraph */
     
     /* top nav */
     .atas{
         margin-right:auto;
         margin-left: auto;
         display: flex;
        }
        
        .image{
            height: 30px;
            width: 30px;
            background-image: url('<?= base_url(); ?>assets/resources/home/smk.png');
            background-position: center center;
            background-size: cover;
            margin-top: auto;
            margin-bottom: auto;
            
            
        }

        input:focus{
            border-bottom: 2px solid #1689E1;
            transition: .2s;
        }

      
        
        @media only screen and ( max-width : 768px){
            form{
                width: 90%;
                padding: 20px;
                padding-top: 40px;
                padding-bottom: 50px;
                margin-top: 30%;
                font-weight: normal;
            }
            button{
                position: static;
                transform: translate(0,0);
            }
    
            .token{
            font-size: 14px;
            }

            input{
                width: 88%;
            }
        }
        
        </style>


<script>
    function input(){
        var input = document.querySelector('input')
        var span = document.querySelector('.username')
       

        span.style.color= '#1689E1';
        span.style.transition= '.2s'

    }

    function input2(){
        var input = document.querySelector('input')
     
        var span2 = document.querySelector('.password')


        span2.style.color= '#1689E1';
        span2.style.transition= '.2s'
    }


</script>
