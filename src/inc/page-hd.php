<header class="header" id="topHeader">
  <div class="container-fluid">
    <div class="row header__body">
      <div class="col-lg-3 header__left">
        <h1><a href="" class="logo"><img src="/assets/images/logo.svg" alt="Real Beauty Care"></a></h1>
      </div>
      <div class="col-lg-6 header__center">
        <div class="menu__sp-head">
          <div class="search-item-top">
              <div class="search__input"><input type="search" name="" placeholder="何かお探しですか？"> <button><img src="/assets/images/icon-search.svg"></button></div>
          </div>
          <div aria-pressed="true" class="close_nav"><img src="/assets/images/close.svg"> <!-- <span>閉じる</span> --></div>
      </div>
        <ul>
          <li class="login sp-only"><a href="">
            <img src="/assets/images/icon-login.svg">
            <span>MY PAGE</span>
          </a></li>
          <li><a href="/">ホーム</a></li>
          <li><a href="/products/">商品一覧</a></li>
          <li><a href="/voice/">お客様の声</a></li>
          <li><a href="/column/">お役立ちコンテンツ一覧</a></li>
          <li><a href="/faq/">よくあるご質問</a></li>
          <li><a href="/contact/">お問い合わせ</a></li>
        </ul>
      </div>
      <div class="col-lg-3 header__right">
        <div class="header__right-body">
          <ul>
            <li>
              <button data-bs-toggle="modal" data-bs-target="#search" type="button" >
                <img src="/assets/images/icon-search.svg">
                <span>search</span>
              </button>
            </li>
            <li>
              <form action="https://real-beautycare.com/shop/customers/sign_in">
                <button>
                  <img src="/assets/images/icon-login.svg">
                  <span>my page</span>
                </button>
              </form>
            </li>
          </ul>
          <div class="sp-ony line-btn">
            <span></span>
            <span></span>
            <p>Menu</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- modal-search -->
<div class="head_modal modal fade" id="search" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
              <div class="search__input">
                <input type="text" name="" placeholder="何かお探しですか？" />
                <button><img src="/assets/images/icon-search.svg"></button>
              </div>
              <div class="btn_click">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">閉じる</button>
              </div>
            </div>
        </div>
    </div>
</div>