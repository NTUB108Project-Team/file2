<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset = "utf-8">
    <form class="form">
    <h2>CREATE ACCOUNT</h2>
    <p type="FIRST NAME * "><input placeholder="Enter your first name"></input></p>
    <p type="LAST NAME * "><input placeholder="Enter your last name"></input></p>
    <p type="EMAIL * "><input placeholder="Enter your password"></input></p>
    <p type="PASSWORD * "><input placeholder="Enter your password"></input></p>

    <button type = 'submit'><b>已有帳號</button></b>
    <button type = 'submit'><b>註冊</button></b>
    <div>
      <span class="fa fa-phone">聯絡我們</span>
      <span class="fa fa-envelope-o">10856034@ntub.edu.tw</span>
    </div>
    <style>
        body{
            background-image: url(5.jpg);
            margin:0;
        }
.form{
    width:340px;
    height:550px;
    background:#e3cdb9;
    border-radius:8px;
    box-shadow:0 0 40px -10px #000;
    margin:calc(50vh - 220px) auto;
    padding:20px 30px;
    max-width:calc(100vw - 40px);
    box-sizing:border-box;
    font-family:'Montserrat',sans-serif;
    position:relative;
}

h2{
    margin:10px 0;
    padding-bottom:10px;
    width:150px;
    color:#a48450;
    border-bottom:3px solid #78788c;
}
input{
    width:100%;
    padding:10px;
    box-sizing:border-box;
    background:none;
    outline:none;
    resize:none;
    border:0;
    font-family:'Montserrat',sans-serif;
    transition:all .3s;
    border-bottom:2px solid #bebed2;
}

input:focus{
    border-bottom:2px solid #78788c;
}

p:before{
    content:attr(type);
    display:block;
    margin:28px 0 0;
    font-size:14px;
    color:#5a5a5a
}

button{
    float:right, left;
    margin-left: 50px;
    padding:8px 12px;

    font-family:'Montserrat',sans-serif;

    background:1;
    color:#5a5a6e;
    cursor:pointer;
    transition:all .3s;
    background: #fff;

  /* 按鈕漸變色 */
  background-image: -webkit-linear-gradient(top, #fff, #b2c8d6);
  background-image: -moz-linear-gradient(top, #fff, #b2c8d6);
  background-image: -ms-linear-gradient(top, #fff, #b2c8d6);
  background-image: -o-linear-gradient(top, #fff, #b2c8d6);
  background-image: linear-gradient(to bottom, #fff, #b2c8d6);

  /* 按鈕造型加圓角 */
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 5px;
  text-shadow: 3px 2px 1px #9daef5;
  -webkit-box-shadow: 1px 1px 2px #666666;
  -moz-box-shadow: 1px 5px 1px #666666;
  box-shadow: 1px 15x 5px #666666;
  font-family: Arial;
  color: #000;
  font-size: 20px;
  padding: 10px;
  text-decoration: none;
}

/* 懸浮感 */

button:hover{
    background:#a5a5b3;
    color:#fff;
    background: #b2c8d6;
    background-image: -webkit-linear-gradient(top, #b2c8d6, #fff);
    background-image: -moz-linear-gradient(top, #bdd6b2, #fff);
    background-image: -ms-linear-gradient(top, #b2c8d6, #fff);
    background-image: -o-linear-gradient(top, #b2c8d6, #fff);
    background-image: linear-gradient(to bottom, #b2c8d6, #fff);
    text-decoration: none;
}


div{
    content:'Hi';
    position:absolute;
    bottom:-15px;
    right:-20px;
    background:#50505a;
    color:#fff;
    width:320px;
    padding:16px 4px 16px 0;
    border-radius:6px;
    font-size:13px;
    box-shadow:10px 10px 40px -14px #000;
}

span{
    margin:0 5px 0 15px;
}

    </style>
  </form>
</head>