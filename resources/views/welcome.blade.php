<!DOCTYPE html>
<html>
<head>
    <title>project</title>
    <meta charset="utf-8" />
    <link href="/theme/grids.css" rel="stylesheet" />
    <link href="/theme/styles.css" rel="stylesheet" />
    <link href="/theme/css/bootstrap-grid.css" rel="stylesheet" />
    <link href="/theme/css/bootstrap-grid.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">


        <link rel="stylesheet" type="text/css" href="/css/result-light.css">

      </head>
      <body>
    <!-- Final Example -->
    <div id="topmenu">
        <nav class="wrapper">
            <ul>
                <li><a href="{{ route('home') }}">خانه</a></li>
                <li><a href="{{ route('about') }}">درباره ما</a></li>
                <li><a href="{{ route('contact') }}">تماس با ما</a></li>
                <li><a href="{{ route('guide') }}">راهنما</a></li>

            </ul>
        </nav>
    </div>

    <img src="images/menu.png" id="button1" />

    <header id="header">
        <div class="wrapper">
            <div class="row">
                <div id="search" class="col-xs-12 col-sm-8">
                    <form action="{{ route('search') }}" method="post">
                        @csrf
                        <input type="search" name="search" placeholder=" جستجو کنید" />
                        <input type="submit" value="جستجو" />
                    </form>
                </div>
            </div>
        </div>
    </header>
    <div style="margin-top: 30px;background-color: white;" class="container-fluid">
        <div class="row" style="background-color: text-center">
            <div class="col-md-4">
                <div class="sec10">
                    <button style=" width: 100%; height: 50px; background-color: #6d9c3f; border: none;">دسته بندی</button>
                    @foreach ($categories as $item)
                    <div class="row">
                        <div class="col-md-12">
                            <div style="width: 100%;" class="dropdown">
                                <div style="color: white; box-shadow: 1px 1px 1px #000;" class="telegram text-right">
                                    <form action="{{ route('category', $item->id) }}" method="post">
                                        @csrf
                                            <button type="submit" style=" width: 100%; height: 50px;cursor: pointer;">{{ $item->title }}</button>
                                    </form>
                                    <div class="dropdown-content">
                                        <a href="#">#</a>
                                        <a href="#">#</a>
                                        <a href="#">#</a>
                                     </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="sec10">
                    <button style=" width: 100%; height: 50px; background-color: #6d9c3f; border: none;">میزان تخفیفات </button>
                    <div class="wrapper">
                        <div id="sidebars">
                            <div class="form-groups col-md-3 col-xs-12 col-sm-8" style="display: contents;">
                                <form>
                                    <div class="option">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">کمترین</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">خنثی</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                                        <label class="form-check-label" for="inlineRadio3">بیشترین</label>
                                    </div>

                                </form>
                            </div>
                        </div>
                </div>

            </div>
            <div class="sec10">
                <button style=" width: 100%; height: 50px; background-color: #6d9c3f; border: none;">گروه بندی استان ها</button>
                <div class="row">
                    <div class="col-md-12">
                                <div style="background-color: white; width: 100%;" id="sidebars">
                                    <div class="form-group col-md-6 col-xs-12 col-sm-8">
                                        <label >استان</label>
                                        <select id="Ostan" runat="server" onchange="Func(this.value)">
                                            <option value=""></option>
                                            <option value="  ,آذرشهر ,اسکو ,اهر ,بستان‌آباد ,بناب ,تبریز ,جلفا ,چاراویماق ,سراب ,شبستر ,عجب‌شیر ,کلیبر ,مراغه ,مرند ,ملکان ,میانه ,ورزقان ,هریس ,هشترود">آذربایجان شرقی</option>
                                            <option value="  ,ارومیه ,اشنویه ,بوکان ,پیرانشهر ,تکاب ,چالدران ,خوی ,سردشت ,سلماس ,شاهین‌دژ ,ماکو ,مهاباد ,میاندوآب ,نقده">آذربایجان غربی</option>
                                            <option value="  ,اردبیل ,بیله‌سوار ,پارس‌آباد ,خلخال ,کوثر ,گِرمی ,مِشگین‌شهر ,نَمین ,نیر">اردبیل</option>
                                            <option value="  ,آران و بیدگل ,اردستان ,اصفهان ,برخوار و میمه ,تیران و کرون ,چادگان ,خمینی‌شهر ,خوانسار ,سمیرم ,شهرضا ,سمیرم سفلی ,فریدن ,فریدون‌شهر ,فلاورجان ,کاشان ,گلپایگان ,لنجان ,مبارکه ,نائین ,نجف‌آباد ,نطنز">اصفهان</option>
                                            <option value="  ,آبدانان ,ایلام ,ایوان ,دره‌شهر ,دهلران ,شیروان و چرداول ,مهران">ایلام</option>
                                            <option value="  ,بوشهر ,تنگستان ,جم ,دشتستان ,دشتی,دیر ,دیلم ,کنگان ,گناوه">بوشهر</option>
                                            <option value="  ,اسلام‌شهر ,پاکدشت ,تهران ,دماوند ,رباط‌کریم ,ری ,ساوجبلاغ ,شمیرانات ,شهریار ,فیروزکوه ,کرج ,نظرآباد ,ورامین">تهران</option>
                                            <option value="  ,اردل ,بروجن ,شهرکرد ,فارسان ,کوهرنگ ,لردگان">چهارمحال و بختیاری</option>
                                            <option value="  ,بیرجند ,درمیان ,سرایان ,سربیشه ,فردوس ,قائنات,نهبندان">خراسان جنوبی</option>
                                            <option value="  ,بردسکن ,تایباد ,تربت جام ,تربت حیدریه ,چناران ,خلیل‌آباد ,خواف ,درگز ,رشتخوار ,سبزوار ,سرخس ,فریمان ,قوچان ,کاشمر ,کلات ,گناباد ,مشهد ,مه ولات ,نیشابور">خراسان رضوی</option>
                                            <option value="  ,اسفراین ,بجنورد ,جاجرم ,شیروان ,فاروج ,مانه و سملقان">خراسان شمالی</option>
                                            <option value="  ,آبادان ,امیدیه ,اندیمشک ,اهواز ,ایذه ,باغ‌ملک ,بندر ماهشهر ,بهبهان ,خرمشهر ,دزفول ,دشت آزادگان ,رامشیر ,رامهرمز ,شادگان ,شوش ,شوشتر ,گتوند ,لالی ,مسجد سلیمان,هندیجان ">خوزستان</option>
                                            <option value="  ,ابهر ,ایجرود ,خدابنده ,خرمدره ,زنجان ,طارم ,ماه‌نشان">زنجان</option>
                                            <option value="  ,دامغان ,سمنان ,شاهرود ,گرمسار ,مهدی‌شهر">سمنان</option>
                                            <option value="  ,ایرانشهر ,چابهار ,خاش ,دلگان ,زابل ,زاهدان ,زهک ,سراوان ,سرباز ,کنارک ,نیک‌شهر">سیستان و بلوچستان</option>
                                            <option value="  ,آباده ,ارسنجان ,استهبان ,اقلید ,بوانات ,پاسارگاد ,جهرم ,خرم‌بید ,خنج ,داراب ,زرین‌دشت ,سپیدان ,شیراز ,فراشبند ,فسا ,فیروزآباد ,قیر و کارزین ,کازرون ,لارستان ,لامِرد ,مرودشت ,ممسنی ,مهر ,نی‌ریز">فارس</option>
                                            <option value="  ,آبیک ,البرز ,بوئین‌زهرا ,تاکستان ,قزوین">قزوین</option>
                                            <option value="  ,قم">قم</option>
                                            <option value="  ,بانه ,بیجار ,دیواندره ,سروآباد ,سقز ,سنندج ,قروه ,کامیاران ,مریوان">کردستان</option>
                                            <option value="  ,بافت ,بردسیر ,بم ,جیرفت ,راور ,رفسنجان ,رودبار جنوب ,زرند ,سیرجان ,شهر بابک ,عنبرآباد ,قلعه گنج ,کرمان ,کوهبنان ,کهنوج ,منوجان">کرمان</option>
                                            <option value="  ,اسلام‌آباد غرب ,پاوه ,ثلاث باباجانی ,جوانرود ,دالاهو ,روانسر ,سرپل ذهاب ,سنقر ,صحنه ,قصر شیرین ,کرمانشاه ,کنگاور ,گیلان غرب ,هرسین">کرمانشاه</option>
                                            <option value="  ,بویراحمد ,بهمئی ,دنا ,کهگیلویه ,گچساران">کهگیلویه و بویراحمد</option>
                                            <option value="  ,آزادشهر ,آق‌قلا ,بندر گز ,ترکمن ,رامیان ,علی‌آباد ,کردکوی ,کلاله ,گرگان ,گنبد کاووس ,مراوه‌تپه ,مینودشت">گلستان</option>
                                            <option value="  ,آستارا ,آستانه اشرفیه ,اَملَش ,بندر انزلی ,رشت ,رضوانشهر ,رودبار ,رودسر ,سیاهکل ,شَفت ,صومعه‌سرا ,طوالش ,فومَن ,لاهیجان ,لنگرود ,ماسال">گیلان</option>
                                            <option value="  ,ازنا ,الیگودرز ,بروجرد ,پل‌دختر ,خرم‌آباد ,دورود ,دلفان ,سلسله ,کوهدشت">لرستان</option>
                                            <option value="  ,آمل ,بابل ,بابلسر ,بهشهر ,تنکابن ,جویبار ,چالوس ,رامسر ,ساری ,سوادکوه ,قائم‌شهر ,گلوگاه ,محمودآباد ,نکا ,نور ,نوشهر">مازندران</option>
                                            <option value="  ,آشتیان ,اراک ,تفرش ,خمین ,دلیجان ,زرندیه ,ساوه ,شازند ,کمیجان ,محلات">مرکزی</option>
                                            <option value="  ,ابوموسی ,بستک ,بندر عباس ,بندر لنگه ,جاسک ,حاجی‌آباد ,شهرستان خمیر ,رودان  ,قشم ,گاوبندی ,میناب">هرمزگان</option>
                                            <option value="  ,اسدآباد ,بهار ,تویسرکان ,رزن ,کبودرآهنگ ,ملایر ,نهاوند ,همدان">همدان</option>
                                            <option value="  ,ابرکوه ,اردکان ,بافق ,تفت ,خاتم ,صدوق ,طبس ,مهریز ,مِیبُد ,یزد">یزد</option>
                                        </select><br>
                                        <label >شهرستان</label>
                                        <select id="Shahrestan" runat="server" >
                                        </select>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                    </div>
            </div>
            <div style="margin-top: 30px;" class="">
                <button style=" width: 100%; height: 50px; background-color: #6d9c3f; border: none;">تخفیف ویژه</button>
                <div class="row">
                    <div class="col-md-12">
                        <div style="background-color: white;" class="titl1">
                            <a href="#">
                                <img src="images/images.jpg" class="img-responsive" alt="tabiat" width="100%">
                                <span class="imagelabel"></span>
                                <div class="popup">
                                    <p class="comment">متن مورد نیاز در مورد تبلیغات</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-8" >
            <main class="wrapper">
                <div class="row">
                    <div id="content" class="col-xs-12 col-lg-12">
                        <section class="group row">
                            <h2>محصولات بازارچه</h2>
                            @foreach ($products as $item)
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <article data-counter="0" class="product">
                                    <a href="#">
                                        <div class="image">
                                            <img src="{{ asset('storage/'. $item->image) }}" />
                                        </div>
                                        <h3>{{ $item->title }}</h3>
                                    </a>
                                      {{-- <span class="discount">15%</span> --}}
                                      {{-- <del> 40000 تومان </del> --}}
                                      <p class="price">{{ $item->price }} تومان </p>
                                      <br>
                                      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
                                      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

                                      <div class="shopping-cart">
                                        <div id="controls" >
                                          <button type="button" onclick="" style="font-size: 20px;">خرید نهایی</button>
                                            <button class="btnAdd" class="buttons" style="width: 25px;" >+</button>
                                            <button class="btnRemove" class="buttons"  style="width: 25px;">-</button>
                                        </div>
                                            <div id="icon_cart">
                                              <svg xmlns="http://www.w3.org/2000/svg" width= "40px"  fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" >
                                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                              </svg>
                                            </div>
                                        <div class="badge" id="badge"> 0</div>
                                      </div>
                                    <div class="share-button">
                                        <div class="share-button__back">
                                          <a class="share__link" href="#" title="twitter">
                                            <svg class="share__icon share__icon--twitter" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="49.652px" height="49.652px" viewBox="0 0 49.652 49.652" style="enable-background:new 0 0 49.652 49.652;" xml:space="preserve">
                                              <g>
                                                <g>
                                                  <path d="M24.826,0C11.137,0,0,11.137,0,24.826c0,13.688,11.137,24.826,24.826,24.826c13.688,0,24.826-11.138,24.826-24.826    C49.652,11.137,38.516,0,24.826,0z M35.901,19.144c0.011,0.246,0.017,0.494,0.017,0.742c0,7.551-5.746,16.255-16.259,16.255    c-3.227,0-6.231-0.943-8.759-2.565c0.447,0.053,0.902,0.08,1.363,0.08c2.678,0,5.141-0.914,7.097-2.446    c-2.5-0.046-4.611-1.698-5.338-3.969c0.348,0.066,0.707,0.103,1.074,0.103c0.521,0,1.027-0.068,1.506-0.199    c-2.614-0.524-4.583-2.833-4.583-5.603c0-0.024,0-0.049,0.001-0.072c0.77,0.427,1.651,0.685,2.587,0.714    c-1.532-1.023-2.541-2.773-2.541-4.755c0-1.048,0.281-2.03,0.773-2.874c2.817,3.458,7.029,5.732,11.777,5.972    c-0.098-0.419-0.147-0.854-0.147-1.303c0-3.155,2.558-5.714,5.713-5.714c1.644,0,3.127,0.694,4.171,1.804    c1.303-0.256,2.523-0.73,3.63-1.387c-0.43,1.335-1.333,2.454-2.516,3.162c1.157-0.138,2.261-0.444,3.282-0.899    C37.987,17.334,37.018,18.341,35.901,19.144z"></path>
                                                </g>
                                              </g>
                                            </svg>
                                          </a>
                                          <a class="share__link " href="#" title="facebook">
                                            <svg class="share__icon share__icon--facebook" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="49.652px" height="49.652px" viewBox="0 0 49.652 49.652" style="enable-background:new 0 0 49.652 49.652;" xml:space="preserve">
                                              <g>
                                                <g>
                                                  <path d="M24.826,0C11.137,0,0,11.137,0,24.826c0,13.688,11.137,24.826,24.826,24.826c13.688,0,24.826-11.138,24.826-24.826    C49.652,11.137,38.516,0,24.826,0z M31,25.7h-4.039c0,6.453,0,14.396,0,14.396h-5.985c0,0,0-7.866,0-14.396h-2.845v-5.088h2.845    v-3.291c0-2.357,1.12-6.04,6.04-6.04l4.435,0.017v4.939c0,0-2.695,0-3.219,0c-0.524,0-1.269,0.262-1.269,1.386v2.99h4.56L31,25.7z    "></path>
                                                </g>
                                              </g>
                                            </svg>
                                          </a>
                                          <a class="share__link" href="https://www.google.com/" title="google plus">
                                            <svg class="share__icon share__icon--google" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="49.652px" height="49.652px" viewBox="0 0 49.652 49.652" style="enable-background:new 0 0 49.652 49.652;" xml:space="preserve">
                                              <g>
                                                <g>
                                                  <g>
                                                    <path d="M21.5,28.94c-0.161-0.107-0.326-0.223-0.499-0.34c-0.503-0.154-1.037-0.234-1.584-0.241h-0.066     c-2.514,0-4.718,1.521-4.718,3.257c0,1.89,1.889,3.367,4.299,3.367c3.179,0,4.79-1.098,4.79-3.258     c0-0.204-0.024-0.416-0.075-0.629C23.432,30.258,22.663,29.735,21.5,28.94z"></path>
                                                    <path d="M19.719,22.352c0.002,0,0.002,0,0.002,0c0.601,0,1.108-0.237,1.501-0.687c0.616-0.702,0.889-1.854,0.727-3.077     c-0.285-2.186-1.848-4.006-3.479-4.053l-0.065-0.002c-0.577,0-1.092,0.238-1.483,0.686c-0.607,0.693-0.864,1.791-0.705,3.012     c0.286,2.184,1.882,4.071,3.479,4.121H19.719L19.719,22.352z"></path>
                                                    <path d="M24.826,0C11.137,0,0,11.137,0,24.826c0,13.688,11.137,24.826,24.826,24.826c13.688,0,24.826-11.138,24.826-24.826     C49.652,11.137,38.516,0,24.826,0z M21.964,36.915c-0.938,0.271-1.953,0.408-3.018,0.408c-1.186,0-2.326-0.136-3.389-0.405     c-2.057-0.519-3.577-1.503-4.287-2.771c-0.306-0.548-0.461-1.132-0.461-1.737c0-0.623,0.149-1.255,0.443-1.881     c1.127-2.402,4.098-4.018,7.389-4.018c0.033,0,0.064,0,0.094,0c-0.267-0.471-0.396-0.959-0.396-1.472     c0-0.255,0.034-0.515,0.102-0.78c-3.452-0.078-6.035-2.606-6.035-5.939c0-2.353,1.881-4.646,4.571-5.572     c0.805-0.278,1.626-0.42,2.433-0.42h7.382c0.251,0,0.474,0.163,0.552,0.402c0.078,0.238-0.008,0.5-0.211,0.647l-1.651,1.195     c-0.099,0.07-0.218,0.108-0.341,0.108H24.55c0.763,0.915,1.21,2.22,1.21,3.685c0,1.617-0.818,3.146-2.307,4.311     c-1.15,0.896-1.195,1.143-1.195,1.654c0.014,0.281,0.815,1.198,1.699,1.823c2.059,1.456,2.825,2.885,2.825,5.269     C26.781,33.913,24.89,36.065,21.964,36.915z M38.635,24.253c0,0.32-0.261,0.58-0.58,0.58H33.86v4.197     c0,0.32-0.261,0.58-0.578,0.58h-1.195c-0.322,0-0.582-0.26-0.582-0.58v-4.197h-4.192c-0.32,0-0.58-0.258-0.58-0.58V23.06     c0-0.32,0.26-0.582,0.58-0.582h4.192v-4.193c0-0.321,0.26-0.58,0.582-0.58h1.195c0.317,0,0.578,0.259,0.578,0.58v4.193h4.194     c0.319,0,0.58,0.26,0.58,0.58V24.253z"></path>
                                                  </g>
                                                </g>
                                              </g>
                                            </svg>
                                          </a>
                                          <a class="share__link" href="#" title="dribbble">
                                            <svg class="share__icon share__icon--dribbble" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 96 96" style="enable-background:new 0 0 96 96;" xml:space="preserve">
                                              <g>
                                                <path d="M49.297,47.914c0.172-0.054,0.343-0.106,0.515-0.157c-0.414-0.928-0.873-1.886-1.395-2.915   c-9.4,2.776-18.399,2.812-20.008,2.784c-0.004,0.124-0.008,0.249-0.008,0.374c0,4.728,1.698,9.271,4.79,12.835   C34.223,59.173,39.68,51.025,49.297,47.914z M60.775,33.144c-3.554-3.059-8.081-4.741-12.775-4.741   c-1.419,0-2.846,0.156-4.248,0.466c1.024,1.381,4.161,5.736,7.106,11.112C57.267,37.526,60.166,33.97,60.775,33.144z    M36.118,63.567C39.567,66.206,43.672,67.6,48,67.6c2.584,0,5.096-0.496,7.469-1.475c-0.331-1.903-1.474-7.7-4.107-14.605   C40.754,55.269,36.754,62.325,36.118,63.567z M46.524,41.325c-3.039-5.36-6.203-9.775-7.071-10.962   c-5.337,2.592-9.262,7.533-10.567,13.298h0.081C30.999,43.661,38.213,43.491,46.524,41.325z M55.566,50.487   c2.324,6.457,3.396,11.832,3.703,13.548c4.257-2.998,7.172-7.602,8.045-12.712c-0.868-0.26-4.006-1.107-7.955-1.107   C58.063,50.216,56.789,50.307,55.566,50.487z M48,0C21.489,0,0,21.49,0,48c0,26.511,21.489,48,48,48s48-21.489,48-48   C96,21.49,74.511,0,48,0z M48,71.492c-12.954,0-23.492-10.538-23.492-23.492S35.046,24.508,48,24.508S71.492,35.046,71.492,48   S60.954,71.492,48,71.492z M52.611,43.378c0.433,0.893,0.839,1.783,1.209,2.651c0.121,0.283,0.24,0.568,0.356,0.852   c1.387-0.166,2.87-0.25,4.41-0.25c4.265,0,7.818,0.627,9.001,0.862c-0.11-4.251-1.612-8.381-4.253-11.694   C62.53,36.825,59.238,40.612,52.611,43.378z"></path>
                                              </g>
                                            </svg>
                                          </a>
                                        </div>
                                        <div class="share-button__front">
                                          <p class="share-button__text">Share</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </section>

                    </div>

                </div>
            </main>
        </div>
    </div>

    <script src="/theme/scripts/jquery.js"></script>
    <script src="/theme/scripts/app.js"></script>
</body>
</html>