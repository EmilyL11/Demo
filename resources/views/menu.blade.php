@extends('layouts.app')

@section('main')
    <div class='font3'> MENU </div>
    <div id="product">
        <form action=" " method="get">      
            <div class="div1">
                <?php
                    $toamtoQty = DB::table('mycart')->where('item', "tomato")->count('item');
                    $margaretQty = DB::table('mycart')->where('item', "margaret")->count('item');
                    $latteQty = DB::table('mycart')->where('item', "latte")->count('item');
                    $butterQty = DB::table('mycart')->where('item', "butter")->count('item');
                    $sausageQty = DB::table('mycart')->where('item', "sausage")->count('item');
                    $teaQty = DB::table('mycart')->where('item', "tea")->count('item');
                ?>
                <ul class="faceul">
                    <li>
                        <img src="{{asset('images/pasta1.jpg')}}"/><br>
                        <dl>
                            <dt class="font1">番茄義大利麵</dt>
                            <dd class="font2"> 380 元</dd>
                        </dl>
                        <button class="btn1" type="submit" value="380" name="tomato">加入購物車</button>
                        <?php
                            if (isset($_GET["tomato"])) {
                                $item = "tomato";
                                $price = $_GET['tomato'];
                                DB::table('mycart')->insert(['item' => $item, 'price' => $price, 'qty' => 1]);
                               
                            }                           
                        ?>
                    </li>
                    <li>
                        <img src="{{asset('images/pizza2.jpg')}}"/>
                        <dl>
                            <dt class="font1" >瑪格莉特披薩</dt>
                            <dd class="font2"> 380 元</dd>
                        </dl>
                        <button class="btn1" type="submit" value="380" name="margaret">加入購物車</button>
                        <?php
                            if (isset($_GET["margaret"])) {
                                $item = "margaret";
                                $price = $_GET['margaret'];
                                DB::table('mycart')->insert(['item' => $item, 'price' => $price, 'qty' => 1]);
                            }                           
                        ?>
                    </li>
                    <li>
                        <img src="{{asset('images/Latte1.jpg')}}"/>
                        <dl>
                            <dt class="font1">拿鐵</dt>
                            <dd class="font2"> 240 元</dd>
                        </dl>
                        <button class="btn1" type="submit" value="240" name="latte">加入購物車</button>
                        <?php
                            if (isset($_GET["latte"])) {
                                $item = "latte";
                                $price = $_GET['latte'];
                                DB::table('mycart')->insert(['item' => $item, 'price' => $price, 'qty' => 1]);
                            }                           
                        ?>
                    </li>
                    <li>
                        <img src="{{asset('images/pasta2.jpg')}}"/>
                        <dl>
                            <dt class="font1">奶油義大利麵</dt>
                            <dd class="font2"> 380 元</dd>
                        </dl>
                        <button class="btn1" type="submit" value="380" name="butter">加入購物車</button>
                        <?php
                            if (isset($_GET["butter"])) {
                                $item = "butter";
                                $price = $_GET['butter'];
                                DB::table('mycart')->insert(['item' => $item, 'price' => $price, 'qty' => 1]);
                            }                           
                        ?>
                    </li>
                    <li>
                        <img src="{{asset('images/pizza1.jpg')}}"/>
                        <dl>
                            <dt class="font1">美式臘腸披薩</dt>
                            <dd class="font2"> 380 元</dd>
                        </dl>
                        <button class="btn1" type="submit" value="380" name="sausage">加入購物車</button>
                        <?php
                            if (isset($_GET["sausage"])) {
                                $item = "sausage";
                                $price = $_GET['sausage'];
                                DB::table('mycart')->insert(['item' => $item, 'price' => $price, 'qty' => 1]);
                            }                           
                        ?>
                    </li>
                    <li>
                        <img src="{{asset('images/tea1.jpg')}}"/>
                        <dl>
                            <dt class="font1">紅茶</dt>
                            <dd class="font2"> 80 元</dd>
                        </dl>
                        <button class="btn1" type="submit" value="80" name="tea">加入購物車</button>
                        <?php
                            if (isset($_GET["tea"])) {
                                $item = "tea";
                                $price = $_GET['tea'];
                                DB::table('mycart')->insert(['item' => $item, 'price' => $price, 'qty' => 1]);
                            }                           
                        ?>
                    </li>
                </ul>
            </div>
        </form>
    </div>
@endsection


   