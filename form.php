<?php


?>


<style>
/* Google Fonts Import Links */
@import url('https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Creepster&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap');



:root{

    /* Colors */
    --white: #fff;
    --form: #ffffff;
    --black: #000;
    --ash: #e5e5e5;
    --purple: purple;
    --list: #fff;
    --green: rgb(104, 218, 104);
    --crim: crimson;

    /* Fonts */
    --ktp: 'Kdam Thmor Pro';
    --roboto: 'Roboto';
    --creep: 'Creepster';
    --ps2p: 'Press Start 2P';
    --ss: 'Silkscreen';

    /* Exceptions */
}



*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
html{
    scroll-behavior: smooth;
}
.max-width{
    max-width: 1330px;
    padding: 0 30px;
    margin: 0;
}



/* Form Styling */
.form{
    position: absolute;
    top: 50%;
    left: 50%;
    right: 0;
    transform: translate(-50%, -50%);
    width: 100vw;
    height: 100vh;
}
.form form{
    background-color: var(--white);
    width: 50vw;
    height: 84vh;
    margin: 5% 0 0 25%;
    border: 2px solid var(--black);
    /* box-shadow: 0px 10px 50px rgba(252, 252, 252, 0.5); */
}
.form form h3{
    display: block;
    width: 100%;
    background-color: var(--black);
    font-size: 20px;
    padding: 10px;
    text-align: center;
    font-family: var(--ktp);
    color: var(--white);
}
.form form .max-width .inputs{
    padding: 25px;
    display: block;
    justify-content: space-between;
    align-items: center;
    /* background-color: var(--white); */
}
.form form .max-width .inputs input, select, textarea{
    margin: 20px 0 0 0;
    padding: 8px;
    border-radius: 5px;
}
.form form .max-width .inputs input, textarea{
    width: 100%;
    font-size: 20px;
    font-family: var(--roboto);
}
.form form .btn{
    padding: 10px 20px;
    font-size: 20px;
    font-family: var(--ktp);
    border: 2px solid var(--purple);
    color: var(--purple);
    background: var(--form);
    margin: 0 0 0 2.9%;
}

</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List || By pHanToMcaNCoDE</title>

    <!-- Linking Css File -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <!-- Link from Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/0d3e4186a7.js" crossorigin="anonymous"></script>

</head>
<body>




  <!-- Form For creating Lists -->
  
  <section class="form">
        <!-- <i class="fa-solid fa-xmark" id="x"></i>    -->
    <form action="ops.php?success=created" method="post" id="form">
            <h3>Let's create a list!</h3>
        <div class="max-width">
        <div class="inputs">
            <input type="text" name="title" id="title" placeholder="Title of your list">
            <span style="color: crimson;">
                    <?php

                            // if(empty($ttl)){
                            //     echo "* This field is required!";
                            // }else{
                            //     $_POST['title'] = $ttl;
                            //     // echo "*";
                            // }

                            // echo $ttErr;
                    ?>
            </span>
            <div class="date">
                <select name="day" id="day">
                    <option>...Day...</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select name="month" id="month">
                    <option>...Month...</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                <select name="year" id="year">
                    <option>...Year...</option>
                    <option value="1940">1940</option>
                    <option value="1941">1941</option>
                    <option value="1942">1942</option>
                    <option value="1943">1943</option>
                    <option value="1944">1944</option>
                    <option value="1945">1945</option>
                    <option value="1946">1946</option>
                    <option value="1947">1947</option>
                    <option value="1948">1948</option>
                    <option value="1949">1949</option>
                    <option value="1950">1950</option>
                    <option value="1951">1951</option>
                    <option value="1952">1952</option>
                    <option value="1953">1953</option>
                    <option value="1954">1954</option>
                    <option value="1955">1955</option>
                    <option value="1956">1956</option>
                    <option value="1957">1957</option>
                    <option value="1958">1958</option>
                    <option value="1959">1959</option>
                    <option value="1960">1960</option>
                    <option value="1961">1961</option>
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>
                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
                <br>

            <span style="color: crimson;">
                    <?php

                            // if(empty($ttl)){
                            //     echo "* These fields are required!";
                            // }else{
                            //     $_POST['title'] = $ttl;
                            // }

                            // echo $ttErr;
                    ?>
            </span>
            </div>
            <textarea name="details" id="details" cols="30" rows="10" placeholder="What to do!"></textarea>

            <span style="color: crimson;">
                    <?php

                            // if(empty($ttl)){
                            //     echo "* This field is required!";
                            // }else{
                            //     $_POST['title'] = $ttl;
                            // }

                            // echo $ttErr;
                    ?>
            </span>
        </div>
        <button type="submit" class="btn">Create List</button>
        </div>
    </form>
    </section>

    </body>
</html>
