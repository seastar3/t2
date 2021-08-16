<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>申し込みフォームサンプル for Bootstrap · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.jp/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
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
      <img class="d-block mx-auto mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>申し込みフォーム</h2>
      <p class="lead">これは Bootstrap のフォーム操作によって作成されたサンプルフォームです。各フォームグループは内容を埋めずに提出しようとした際にバリデーションが行われます。</p>
    </div>

    <div class="row g-3">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">カート</span>
          <span class="badge bg-secondary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">商品名</h6>
              <small class="text-muted">簡単な説明</small>
            </div>
            <span class="text-muted">1200 円</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">2つ目の商品</h6>
              <small class="text-muted">簡単な説明</small>
            </div>
            <span class="text-muted">800 円</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">3つ目のアイテム</h6>
              <small class="text-muted">簡単な説明</small>
            </div>
            <span class="text-muted">500 円</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">プロモーションコード</h6>
              <small>EXAMPLECODE</small>
            </div>
            <span class="text-success">-500 円</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>合計金額</span>
            <strong>2000 円</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="プロモーションコード">
            <button type="submit" class="btn btn-secondary">適用する</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">請求先</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">名字</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                名字を入力してください。
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">名前</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                名前を入力してください。
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">ユーザーネーム</label>
              <div class="input-group">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
              <div class="invalid-feedback">
                ユーザーネームを入力してください。
              </div>
            </div>
          </div>

          <div class="col-12">
            <label for="email" class="form-label">メールアドレス <span class="text-muted">（オプション）</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              有効なメールアドレスを入力してください。
            </div>
          </div>

          <div class="col-12">
            <label for="address" class="form-label">送り先住所</label>
            <input type="text" class="form-control" id="address" placeholder="東京都千代田区千代田1-1" required>
            <div class="invalid-feedback">
              送り先住所を入力してください。
            </div>
          </div>

          <div class="mb-3">
            <label for="address2" class="form-label">住所2 <span class="text-muted">（オプション）</span></label>
            <input type="text" class="form-control" id="address2" placeholder="アパートやマンション名">
          </div>

          <div class="col-md-5">
            <label for="country" class="form-label">国</label>
            <select class="form-select" id="country" required>
                <option value="">選択してください</option>
                <option>日本</option>
              </select>
              <div class="invalid-feedback">
                有効な国を選択してください。
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">都道府県</label>
              <select class="form-select" id="state" required>
                <option value="">選択してください</option>
                <option>東京都</option>
              </select>
              <div class="invalid-feedback">
                有効な都道府県を入力してください。
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">郵便番号</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                郵便番号を入力してください。
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">送り先は請求先と同じ</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">保存して次回からの入力を省略する</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">支払い方法</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">クレジットカード</label>
            </div>
            <div class="form-check-label">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">デビットカード</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">ペイパル</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">カードに書かれている名前</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">カード表面に書かれているフルネーム</small>
              <div class="invalid-feedback">
                カードに書かれている名前を入力してください
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">クレジットカード番号</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                クレジットカード番号を入力してください
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">有効期限</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                有効期限を入力してください
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                セキュリティコードを入力してください
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">申込みを続ける</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2021 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">プライバシー</a></li>
      <li class="list-inline-item"><a href="#">利用規約</a></li>
      <li class="list-inline-item"><a href="#">サポート</a></li>
    </ul>
  </footer>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  </body>
</html>