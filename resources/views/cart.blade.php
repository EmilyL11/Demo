@extends('layouts.app')

@section('main')
<div id="cart1"> 
    My Shopping Cart 
</div>
 
    <div id="cart2"> 
        <table id='table1' cellpadding="3" border="1">
            <tr>
                <td style="width: 200px">Item</td>
                <td style="width: 120px">Price</td>
                <td style="width: 120px">Quantity</td>
            </tr>
        </table>
        <table id='table2' cellpadding="3" border="1">
            <?php 
                $toamto = DB::table('mycart')->where('item', "tomato")->pluck('item');
                $margaret = DB::table('mycart')->where('item',"margaret")->pluck('item');
                $latte = DB::table('mycart')->where('item',"latte")->pluck('item');
                $butter = DB::table('mycart')->where('item',"butter")->pluck('item');
                $sausage = DB::table('mycart')->where('item',"sausage")->pluck('item');
                $tea = DB::table('mycart')->where('item',"tea")->pluck('item');
                $toamtoQty = DB::table('mycart')->where('item', "tomato")->count('item');
                $margaretQty = DB::table('mycart')->where('item', "margaret")->count('item');
                $latteQty = DB::table('mycart')->where('item', "latte")->count('item');
                $butterQty = DB::table('mycart')->where('item', "butter")->count('item');
                $sausageQty = DB::table('mycart')->where('item', "sausage")->count('item');
                $teaQty = DB::table('mycart')->where('item', "tea")->count('item');
                $totalQty = DB::table('mycart')->count('item');
                $price = DB::table('mycart')->sum('price');           
            ?>
            <tr>    
                <?php                            
                    if(isset($toamto[0]))
                    {
                        echo '<td style="width: 200px"> 番茄義大利麵 </td>';
                        echo '<td style="width: 120px"> 380 </td>';
                        echo '<td style="width: 120px">'. $toamtoQty.'</td>';
                    }   
                ?>
            </tr>
            <tr>    
                <?php                            
                    if(isset($butter[0]))
                    {
                        echo '<td> 奶油義大利麵 </td>';
                        echo '<td> 380 </td>';
                        echo '<td>'. $butterQty.'</td>';
                        
                    }   
                ?>    
            </tr>
            <tr>            
                <?php
                if(isset($margaret[0]))
                {
                    echo '<td> 瑪格莉特披薩 </td>';
                    echo '<td> 380 </td>';
                    echo '<td>'. $margaretQty.'</td>';
                      
                }
                ?>
            </tr>
            <tr>    
                <?php                            
                    if(isset($sausage[0]))
                    {
                        echo '<td> 美式臘腸披薩 </td>';
                        echo '<td> 380 </td>';
                        echo '<td>'. $sausageQty.'</td>';
                    }   
                ?>    
            </tr>
            <tr>    
                <?php                            
                    if(isset($latte[0]))
                    {
                        echo '<td> 拿鐵 </td>';
                        echo '<td> 240 </td>';
                        echo '<td>'. $latteQty.'</td>';
                    }   
                ?>    
            </tr>
            <tr>    
                <?php                            
                    if(isset($tea[0]))
                    {
                        echo '<td> 紅茶 </td>';
                        echo '<td> 80 </td>';
                        echo '<td>'. $teaQty.'</td>';
                    }   
                ?>    
            </tr>
              
        </table>
        <div style="margin:5px 0px 0px 620px; background:rgba(0, 0, 0, 0.6); width:140px;font-weight: bold 2px;">
            <?php
            echo "商品數量:".$totalQty;
            echo "<br>";
            echo "總金額:".$price;
            ?>
            
        </div>
        <form action="./cart" method="get">
            <!-- <button style="background: rgba(0, 0, 0, 0.6); color:white; margin: 5px 0px 0px 620px;" 
            type="submit" name="clear" value="clear"  onclick="location.reload()">
            Clear Cart</button> 
            <?php
                if(isset($_GET["clear"])){
                    DB::table('mycart')->delete();
                }
            ?> -->
            <input type="hidden" name="clear" value="clear" >
            <?php
                if(isset($_GET["clear"])){
                    DB::table('mycart')->delete();
                }
            ?>
            <input type="submit" style="background: rgba(0, 0, 0, 0.6); color:white; margin: 5px 0px 0px 620px;"  name="clear Cart" value="Clear Cart" onclick="location.reload()">
            
            
        </form>
    </div>
@endsection