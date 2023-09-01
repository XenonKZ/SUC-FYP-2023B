<section class="about-us">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
h2{
    text-align:center;
}
.about-us{
  height: 100vh;
  width: 100%;
  padding: 90px 0;
  background: #ddd;
}
.pic{
  height: auto;
  width:  302px;
}
.image{
    width:350px;
    height:350px;

}
.about{
  width: 1130px;
  max-width: 85%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.text{
  width: 540px;
}
.text h2{
  font-size: 90px;
  font-weight: 600;
  margin-bottom: 10px;
}
.text h5{
  font-size: 22px;
  font-weight: 500;
  margin-bottom: 20px;
}
span{
  color: #4070f4;
}
.text p{
  font-size: 18px;
  line-height: 25px;
  letter-spacing: 1px;
}
.data{
  margin-top: 30px;
}
.hire{
  font-size: 18px;
  background: #4070f4;
  color: #fff;
  text-decoration: none;
  border: none;
  padding: 8px 25px;
  border-radius: 6px;
  transition: 0.5s;
}
.hire:hover{
  background: #000;
  border: 1px solid #4070f4;
}
    </style>
    <div class="about">
     <img src="{{asset('assets/images/knlogo.png')}}" class="image" alt="">
      <div class="text">
        <h2>About Us</h2>
        <h5>Front-end Developer & <span>Designer</span></h5>
           <p>We are dedicated to providing you with the best shopping experience.</p>
      <p>Our supermarket offers a wide range of products, from fresh produce to household essentials, to cater to your everyday needs.</p>
      <p>With a friendly and knowledgeable staff, we strive to make your shopping trips convenient and enjoyable.</p>
      <p>Thank you for choosing us for all your shopping needs!</p>
        <div class="data">
        <a href="/contact-us" class="hire">Contact us</a>
        </div>
      </div>
    </div>
  </section>