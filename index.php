<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>書籍データ登録</title>
  <link rel="stylesheet" href="style.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <style>div{padding: 10px;font-size:16px;}</style>

</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default" align="center">
    <div class="container-fluid" >
    <div class="navbar-header" ><a class="navbar-brand" href="select.php" >書籍データ登録</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div class="container">
<form action="insert.php" method="post">
<table class="table">
<div class="title"><p>BookMark</p></div>
   <tr>
      <th>書籍名：</th>
      <td><input type="text" name="bookname" class="form-control"></td>
   </tr>
   <tr>
      <th>著者：</th>
      <td><input type="text" name="author" class="form-control"></td>
   </tr>
   <tr>
      <th>カテゴリー</th>
      <td><select name="bookcategory" id="bookcategory" class="form-control">
         <option value="文学・評論">文学・評論</option>
         <option value="ノンフィクション">ノンフィクション</option>
         <option value="ビジネス・経済">ビジネス・経済</option>
         <option value="歴史・地理">歴史・地理</option>
         <option value="健康・医療">健康・医療</option>
      </select>
      </td>
   </tr>
   <tr>
      <th>書籍URL：</th>
      <td><input type="text" name="bookurl" class="form-control"></td>
   </tr>
   <tr>
      <th>読了日：</th>
      <td><input type="date" name=finishdate class="form-control"></td>
   </tr>
   <tr>
      <th>コメント：</th>
      <td>
      <textArea name="bookcomment" rows="4" cols="40" class="form-control"></textArea>
      </td>
   </tr>
   <tr>
      <th>評価</th>
      <td><select name="rating" id="rating" class="form-control">
         <option value="★★★★★">★★★★★</option>
         <option value="★★★★">★★★★</option>
         <option value="★★★">★★★</option>
         <option value="★★">★★</option>
         <option value="★">★</option>
      </select>
      </td>
   </tr>
   <tr>
      <div class="button">
         <th></th>
         <td style="text-align:right;">
            <button typu="submit" value="登録"  class="btn btn-primary">登録</button>
         </td>
      </div>
   </tr>
</table>
</form>


</div>

<!-- <form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>BookMark</legend>
     <label>書籍名：<input type="text" name="bookname"></label><br>
     <label>作者：</label>
     <label>書籍URL：<input type="text" name="bookurl"></label><br>
     <label><textArea name="bookcomment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form> -->
<!-- Main[End] -->


</body>
</html>
