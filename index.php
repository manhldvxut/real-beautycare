<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/config.php';

//ページ用の変数
$page_title = 'real beautycare';
$page_description = '';
$page_keywords = '';
$page_shareurl = 'https://'.STORE_NAME.'.co.jp/'; 

?>
<!DOCTYPE html>
<html lang="ja">
<head>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/src/inc/meta.php';?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/src/inc/css.php';?>
</head>

<body class="<?php echo STORE_NAME; ?> login-page">

<div class="wrapper">

<?php
/**
 * Header
 */
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/page-hd.php'; ?>


<?php
/**
 * Main contents
 */
?>

<main class="main-contents">
  <div class="mv">
    <div class="mv__body">
      <img class="pc-only" src="/assets/images/mv-pc.png" alt="素肌は、変わる。">
      <img class="sp-only" src="/assets/images/mv-sp.png" alt="素肌は、変わる。">
      <div class="mv__body-item js-scroll-item">
        <p class="title">
          <span>素肌は</span><span>、</span><span>変わる</span><span>。</span>
          <i class="line-run"></i>
        </p>
        <div class="mv__body-item-info">
          <p class="ttl">素肌本来の美しさのために。</p>
          <p class="item-cont">肌は、 <br>お手入れをした分だけ <br>応えてくれます。 <br>そしてその先にある喜びを <br>実感していただきたい。</p>
          <p class="ttl2">素肌から、人生を変えていく。</p>
        </div>
      </div>
    </div>
  </div>

  <section class="container-bg">
    <div class="container-box">
      <div class="promise font_h2">
        <div class="ttl">
          <h2 class="h2">PROMISE</h2>
          <div class="list-item"><span class="en">3</span><span class="jp">つの約束</span></div>
        </div>
        <div class="promise__content ">
          <div class="row m-50 promise__content-box">
            <div class="col-lg-6 p-50">
              <div class="promise__content-item js-scroll-item">
                <div class="pict">
                  <img src="/assets/images/prose01.png" alt="続けるほど、実感。">
                  <div class="line"></div>
                </div>
                <div class="pict_icon">
                  <ul>
                    <li class="fuwaAnimate"><img src="/assets/images/icon-pict-two-03.svg"></li>
                    <li class="fuwaAnimate"><img src="/assets/images/icon-pict-two-02.svg"></li>
                  </ul>
                </div>
                
              </div>
            </div>
            <div class="col-lg-6 p-50">
              <div class="promise__content-item js-scroll-item">
                <div class="text-center fx-right-sp">
                  <h3 class="numb">01</h3>
                </div>
                <h3 class="title">続けるほど、実感。</h3>
                <p>まずは3ヶ月、あなたの肌で実感してください。<br>
                  リアルビューティーケアのスキンケア製品は、大人ニキビ・シミ・<br class="pc-only">
                  くすみなどあらゆる肌悩みにアプローチします。<br>
                  高い満足度・リピート率は実感の証です。</p>
              </div>
            </div>
          </div>
          <div class="row m-50 promise__content-box">
            <div class="col-lg-6 p-50">
              <div class="promise__content-item js-scroll-item">
                <div class="pict">
                  <img src="/assets/images/prose02.png" alt="続けるほど、実感。">
                  <div class="line"></div>
                </div>
                
                
              </div>
            </div>
            <div class="col-lg-6 p-50">
              <div class="promise__content-item js-scroll-item">
                <div class="text-center fx-right-sp"><span class="numb">02</span></div>
                <div class="pict_icon">
                  <ul>
                    <li class="fuwaAnimate"><img src="/assets/images/icon-pict-two-03.svg"></li>
                  </ul>
                </div>
                <h3 class="title">刺激ゼロを目指したこだわりの品質</h3>
                <p>リアルビューティーケアのスキンケア製品は多くのお客様に<br>
                  安心してお使いいただきたいから限りなく刺激ゼロを求め、<br>
                  徹底して無添加にこだわります。</p>
              </div>
            </div>
          </div>
          <div class="row m-50 promise__content-box">
            <div class="col-lg-6 p-50">
              <div class="promise__content-item js-scroll-item">
                <div class="pict">
                  <img src="/assets/images/prose03.png" alt="お客様に寄り添い、ともに悩みをサポート">
                  <div class="line"></div>
                </div>
                <div class="pict_icon">
                  <ul>
                    <li class="fuwaAnimate"><img src="/assets/images/icon-pict-two-04.svg"></li>
                  </ul>
                </div>
                
              </div>
            </div>
            <div class="col-lg-6 p-50">
              <div class="promise__content-item js-scroll-item">
                <div class="text-center fx-right-sp"><span class="numb">03</span></div>
                <h3 class="title">お客様に寄り添い、ともに悩みをサポート</h3>
                <p>お客様の声に耳を傾け、一緒に考える。<br> 本当に美しく健康な素肌を手に入れていただくためにリアルビューティーケアは、ともにお客様の悩みに寄り添います。 <br>昨日より今日、今日より明日のあなたがより素敵でいられますように。</p>
                <div class="pict_icon item-right">
                  <ul>
                    <li class="anim_wave_horizontal"><img src="/assets/images/icon-pict-two-05.svg"></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="product font_h2">
        <h2 class="h2">PRODUCT</h2>
        <div class="row m-30">
          <div class="col-lg-6 p-30 col-md-6">
            <div class="product__item js-scroll-item">
              <h3 class="ttl">メルライン</h3>
              <div class="row m-10">
                <div class="col-lg-7 product__item_wLeft p-10">
                  <div class="product__item-info">
                    <p>ニキビ・ニキビ跡・色素沈着を1本でスマートケア。 ニキビの根を断ち正常肌サイクルを作るオールインワンゲル。</p>
                    <div class="price_inline">
                      <ul>
                        <li>初回限定価格</li>
                        <li class="price">1,980</li>
                        <li class="enjp">円</li>
                        <li class="tax">(税込)</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 product__item_wRight p-10">
                  <div class="product__item-info">
                    <a href=""><img src="/assets/images/pro01.png"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 p-30 col-md-6">
            <div class="product__item js-scroll-item">
              <h3 class="ttl">メルライン</h3>
              <div class="row m-10">
                <div class="col-lg-7 product__item_wLeft p-10">
                  <div class="product__item-info">
                    <p>ニキビ・ニキビ跡・色素沈着を1本でスマートケア。 ニキビの根を断ち正常肌サイクルを作るオールインワンゲル。</p>
                    <div class="price_inline">
                      <ul>
                        <li>初回限定価格</li>
                        <li class="price">1,980</li>
                        <li class="enjp">円</li>
                        <li class="tax">(税込)</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 product__item_wRight p-10">
                  <div class="product__item-info">
                    <a href=""><img src="/assets/images/pro02.png"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 p-30 col-md-6">
            <div class="product__item js-scroll-item">
              <h3 class="ttl">メルラインシートマスク</h3>
              <div class="row m-10">
                <div class="col-lg-7 product__item_wLeft p-10">
                  <div class="product__item-info">
                    <p>贅沢な4つの成分がニキビなどのトラブルが生じにくい肌土台に導く。</p>
                    <div class="price_inline">
                      <ul>
                        <li>初回限定価格</li>
                        <li class="price">2,640</li>
                        <li class="enjp">円</li>
                        <li class="tax">(税込)</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 product__item_wRight p-10">
                  <div class="product__item-info">
                    <a href=""><img src="/assets/images/pro03.png"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 p-30 col-md-6">
            <div class="product__item js-scroll-item">
              <h3 class="ttl">セシュレル</h3>
              <div class="row m-10">
                <div class="col-lg-7 product__item_wLeft p-10">
                  <div class="product__item-info">
                    <p>優れた美白効果に加えて、肌における臨床試験で7つのエイジングケア効果を実証。</p>
                    <div class="price_inline">
                      <ul>
                        <li>初回限定価格</li>
                        <li class="price">1,200</li>
                        <li class="enjp">円</li>
                        <li class="tax">(税込)</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 product__item_wRight p-10">
                  <div class="product__item-info">
                    <a href=""><img src="/assets/images/pro04.png"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 p-30 col-md-6">
            <div class="product__item js-scroll-item">
              <h3 class="ttl">フレキュレル</h3>
              <div class="row m-10">
                <div class="col-lg-7 product__item_wLeft p-10">
                  <div class="product__item-info">
                    <p>メラニン排出＆抑制のW美白で徹底的にそばかす・シミをブロック。寝る前に塗るだけの高保湿オールインワン美白クリーム。</p>
                    <div class="price_inline">
                      <ul>
                        <li class="price">1,200</li>
                        <li class="enjp">円</li>
                        <li class="tax">(税込)</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 product__item_wRight p-10">
                  <div class="product__item-info">
                    <a href=""><img src="/assets/images/pro05.png"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 p-30 col-md-6">
            <div class="product__item js-scroll-item">
              <h3 class="ttl">メンズクレアラン</h3>
              <div class="row m-10">
                <div class="col-lg-7 product__item_wLeft p-10">
                  <div class="product__item-info">
                    <p>黒クレイ成分で、毛穴の汚れ・黒ずみをゴッソリ落とし、鼻ニキビ・いちご鼻・黒ずみケアがこれ1本で完了。</p>
                    <div class="price_inline">
                      <ul>
                        <li class="price">2,640</li>
                        <li class="enjp">円</li>
                        <li class="tax">(税込)</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 product__item_wRight p-10">
                  <div class="product__item-info">
                    <a href=""><img src="/assets/images/pro06.png"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 p-30 col-md-6">
            <div class="product__item js-scroll-item">
              <h3 class="ttl">クレアラン ノンオイルクレンジング</h3>
              <div class="row m-10">
                <div class="col-lg-7 product__item_wLeft p-10">
                  <div class="product__item-info">
                    <p>お肌に載せてくるくるするだけで、毛穴の奥のメイクも汚れもしっかりオフ。W洗顔不要</p>
                    <div class="price_inline">
                      <ul>
                        <li class="price">1,200</li>
                        <li class="enjp">円</li>
                        <li class="tax">(税込)</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 product__item_wRight p-10">
                  <div class="product__item-info">
                    <a href=""><img src="/assets/images/pro07.png"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 p-30 col-md-6">
            <div class="product__item js-scroll-item">
              <h3 class="ttl">クレアラン ビューティークレイ洗顔</h3>
              <div class="row m-10">
                <div class="col-lg-7 product__item_wLeft p-10">
                  <div class="product__item-info">
                    <p>洗い上がりはまるでスキンケアした後のようなもちもち肌に。つっぱらず、潤いが続きます。</p>
                    <div class="price_inline">
                      <ul>
                        <li class="price">1,200</li>
                        <li class="enjp">円</li>
                        <li class="tax">(税込)</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 product__item_wRight p-10">
                  <div class="product__item-info">
                    <a href=""><img src="/assets/images/pro08.png"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 p-30 col-md-6">
            <div class="product__item js-scroll-item">
              <h3 class="ttl">クレアラン CCクリーム＋</h3>
              <div class="row m-10">
                <div class="col-lg-7 product__item_wLeft p-10">
                  <div class="product__item-info">
                    <p>無添加・防腐剤フリーで、ニキビや肌荒れが気になる時の時短メイクに最適。</p>
                    <div class="price_inline">
                      <ul>
                        <li class="price">1,200</li>
                        <li class="enjp">円</li>
                        <li class="tax">(税込)</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 product__item_wRight p-10">
                  <div class="product__item-info">
                    <a href=""><img src="/assets/images/pro09.png"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container-belleza">
    <div class="belleza">
      <h2><img src="/assets/images/belleH2.png" alt="Belleza Labo"></h2>
      <div class="row m-10">
        <div class="col-lg-3 p-10 col-6">
          <div class="belleza__item js-scroll-item">
            <img src="/assets/images/bell01.png">
            <div class="belleza__item-info">
              <p class="time">2021.00.00</p>
              <h3><a href="">ニキビと粉瘤（アテローム）の違いとは?似てるようで異なる特徴を紹介</a></h3>
            </div>
            <ul class="tag">
              <li><a href="">#ニキビ</a></li>
              <li><a href="">#肌トラブル</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 p-10 col-6">
          <div class="belleza__item js-scroll-item">
            <img src="/assets/images/bell02.png">
            <div class="belleza__item-info">
              <p class="time">2021.00.00</p>
              <h3><a href="">顎にできる「しこりニキビ」の原因は？ 顎ニキビの対策とケア方法</a></h3>
            </div>
            <ul class="tag">
              <li><a href="">#シミそばかす</a></li>
              <li><a href="">#肌トラブル</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 p-10 col-6">
          <div class="belleza__item js-scroll-item">
            <img src="/assets/images/bell03.png">
            <div class="belleza__item-info">
              <p class="time">2021.00.00</p>
              <h3><a href="">ヨーグルトが美白に効く?!ヨーグルトで肌を白くする方法と注意点まとめ</a></h3>
            </div>
            <ul class="tag">
              <li><a href="">#スキンケア</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 p-10 col-6">
          <div class="belleza__item js-scroll-item">
            <img src="/assets/images/bell03.png">
            <div class="belleza__item-info">
              <p class="time">2021.00.00</p>
              <h3><a href="">生活習慣で予防できる？首ニキビの原因・治し方をドクターが解説！</a></h3>
            </div>
            <ul class="tag">
              <li><a href="">#ニキビ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="fix-btn"><a href="" class="btn_private">Belleza Labo</a></div>
  </section>

  <section class="media">
    <div class="container-media">
      <div class="row m-30">
        <div class="col-lg-6 p-30">
          <div class="media__item">
            <h2><span class="en">media listing</span>メディア掲載</h2>
            <div class="media__item-box">
              <ul class="m-12 js-scroll-item">
                <li class="thumb p-12"><img src="/assets/images/thumb01.png"></li>
                <li class="item p-12">
                  <p class="time">2021.00.00</p>
                  <h3><a href="">大人ニキビケアラボで【メルライン】を紹介いただきました。</a></h3>
                </li>
              </ul>
              <ul class="m-12 js-scroll-item">
                <li class="thumb p-12"><img src="/assets/images/thumb02.png"></li>
                <li class="item p-12">
                  <p class="time">2021.00.00</p>
                  <h3><a href="">「美ST」5月号「マスクぐすみを晴らして若返る！今、本気の”透明美肌”スキンケア」企画にウィズアウト クレイウォッシュ＆パックが紹介されました</a></h3>
                </li>
              </ul>
              <ul class="m-12 js-scroll-item">
                <li class="thumb p-12"><img src="/assets/images/thumb03.png"></li>
                <li class="item p-12">
                  <p class="time">2021.00.00</p>
                  <h3><a href="">STORY 4月号「ゆらぎ肌に優しい『美白ケア』の逸品！」企画にウィズアウト ブライト ムース セラムが紹介されました</a></h3>
                </li>
              </ul>
              <ul class="m-12 js-scroll-item">
                <li class="thumb p-12"><img src="/assets/images/thumb05.png"></li>
                <li class="item p-12">
                  <p class="time">2021.00.00</p>
                  <h3><a href="">「VoCE」4月号「ビューティカレンダー」企画にウィズアウト ブライト ムース セラムが紹介されました</a></h3>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6 p-30">
          <div class="media__item">
            <h2><span class="en">Topics</span>トピックス</h2>
            <div class="media__item-box">
              <ul class="m-12 js-scroll-item">
                <li class="thumb p-12"><img src="/assets/images/thumb06.png"></li>
                <li class="item p-12">
                  <p class="time">2021.00.00</p>
                  <h3><a href="">【お知らせ】福島県沖地震に関する配送状況について</a></h3>
                </li>
              </ul>
              <ul class="m-12 js-scroll-item">
                <li class="thumb p-12"><img src="/assets/images/thumb07.png"></li>
                <li class="item p-12">
                  <p class="time">2021.00.00</p>
                  <h3><a href="">年末年始のご案内</a></h3>
                </li>
              </ul>
              <ul class="m-12 js-scroll-item">
                <li class="thumb p-12"><img src="/assets/images/thumb08.png"></li>
                <li class="item p-12">
                  <p class="time">2021.00.00</p>
                  <h3><a href="">Instagram【#タグ＆フォトコンテスト】※終了しました</a></h3>
                </li>
              </ul>
              <ul class="m-12 js-scroll-item">
                <li class="thumb p-12"><img src="/assets/images/thumb09.png"></li>
                <li class="item p-12">
                  <p class="time">2021.00.00</p>
                  <h3><a href="">スキントリートメント ファンデーション 容器変更のお知らせ</a></h3>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <a href="" class="btn_private m-auto ">News</a>
    </div>
  </section>

  <section class="instagram">
    <h2>INSTAGRAM</h2>
    <ul class="row slick-js">
      <li><a href=""><img src="/assets/images/inst01.png"></a></li>
      <li><a href=""><img src="/assets/images/inst02.png"></a></li>
      <li><a href=""><img src="/assets/images/inst03.png"></a></li>
      <li><a href=""><img src="/assets/images/inst04.png"></a></li>
      <li><a href=""><img src="/assets/images/inst05.png"></a></li>
      <li><a href=""><img src="/assets/images/inst06.png"></a></li>
    </ul>
    <a href="" class="btn_private flow-icon">FOLLOW US</a>
  </section>
</main>





<?php
/**
 * Footer
 */
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/footer.php'; ?>

</div>

<!-- Javascript -->
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/src/inc/js.php';?>

<!-- /Javascript -->
</body>
</html>
