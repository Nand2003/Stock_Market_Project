<?php include "./header.php"; ?>
<html>
    <head>
        <!--css-->
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<!--end css-->

</head>
<body>
<!--?php
$key="demo";

$url="https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=RELIANCE.BSE&outputsize=full&apikey=".$key;

//Initialize a cURL session
$ch=curl_init();

//Set an option for a cURL transfer
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

//Perform a cURL session
$result=curl_exec($ch);

//json code to transfer erray
curl_close($ch);
$result=json_decode($result,true);


//print all price
echo"RELIANCE - BSE";

if(isset($result['Time Series (Daily)'])){
    echo"<table id='customers'><tr><th>Date</th><th>Open</th><th>High</th><th>Low</th><th>Close</th><th>volume</th></tr>";
    foreach($result['Time Series (Daily)'] as $key=>$val){
        echo "<tr><td>$key</td><td>".$val['1. open']."</td><td>".$val['2. high']."</td><td>".$val['3. low']."</td><td>".$val['4. close']."</td><td>".$val['5. volume']."</td></tr>";
    }
    echo "</table>";
}else{
    echo "Somthing wont's wrong";
}
?-->


<section class="cteam">
        <img src="./image/nrt.gif" ali=""  width="100%"/>
        
</section> 

<h1>cryptocurrency Market</h1>
<div class="container" style="max-width: 50%;">
<input type="text" class="from-control" id="live-search" autocmplete="off" placeholder="search.."><button>Search</butoon>

</div><br><br>
<form  text-align= "center">
<?php 
$key="55a16a5f078459638eb2ac5f4d7ec8ca";
$link="http://api.coinlayer.com/api/live?access_key=".$key;

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$link);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
$result=json_decode($result,true);
//echo '<pre>';
//print_r($result);

if(isset($result['success'])){
    if($result['success']==1){
      echo "<table  border='1'><tr><th>Company Name</th> <th>Price</th></tr>";
      
       // $strtime=data('Y-m-d h:i:s',$result['timestamp']);
       // echo "<b>".$strtime."</b>";
        //echo "<br/>";
        foreach($result['rates'] as $key=>$val){
            echo "<tr><td>$key</td><td>.$val</td><td><button>BUY</button></td><td><button>SELL</button></td></tr>";
            //echo "<br/>";
        }
        echo"</table>";

    }else{
        echo $result['error']['type'];
        if(isset($result['error']['info'])){
            echo $result['error']['info'];
        }
    }
    
}else{
    echo "somthing went wrong";
}
?>
</form>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
<?php include "./footer.php";?>