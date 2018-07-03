<?php
    $string = '{"pay_amount":"1.63","pay_applydate":"2018-06-12 15:07:23","pay_bankcode":"ALIPAY","pay_memberid":"33915","pay_notifyurl":"http:\/\/a00.gczhifu.com\/index.php\/callback\/ebao\/callbackurl","pay_orderid":"39680612150723193733915","pay_md5sign":"85C223E457D5B251EEFFA108B3491DF7","pay_reserved1":"ALIPAY","ip":"127.0.0.1"}';

    $data = json_decode($string,true);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <form method="post"  action="http://sapi.eboopay.com/Pay_Index.html" enctype="multipart/form-data">
      <table>

              <?php
              foreach($data as $k=>$v){
                  echo   "<tr><td>".$k."<input name='".$k."' value='".$v."'></td></tr>";
              }
              ?>
          <tr><td><input type="submit" value="提交" /></tr>
      </table>
  </form>

</body>
</html>
