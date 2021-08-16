<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>得点表示　01</title>

    <link rel="canonical" href="https://getbootstrap.jp/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>得点表示プロトタイプ</h2>
      <p class="lead">Bootstrap を取り入れた得点入力フォームのプロトタイプです。</p>
    </div>

    <div class="row g-3">
      <div class="col-md-7 col-lg-8">
        <form  method="post" action="t2.php" class="needs-validation" novalidate>
          <h4 class="mb-3">入力枠</h4>

          <div class="col-12">
            <label for="score1" class="form-label">チーム１</label>
            <input type="text" class="form-control" id="aka" placeholder="100" required>
            <div class="invalid-feedback">
              チーム１の得点を入力してください。
            </div>
          </div>

          <div class="col-12">
            <label for="score2" class="form-label">チーム２</label>
            <input type="text" class="form-control" id="ao" placeholder="100" required>
            <div class="invalid-feedback">
              チーム２の得点を入力してください。
            </div>
          </div>

          <div class="col-12">
            <label for="score3" class="form-label">チーム３</label>
            <input type="text" class="form-control" id="ki" placeholder="100" required>
            <div class="invalid-feedback">
              チーム３の得点を入力してください。
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">表示更新</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy;2021 developed by MT</p>
  </footer>
</div>
  </body>
</html>