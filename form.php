 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>9th高大資管營</title>
    <style>
        .header{
            width:1500px;
            height: 100px;
            margin: 0; padding: 0; border:none;
            background-color: aquamarine;
            text-align:center;
            padding:10px;
        }
        .outer{
            width: 910px;
            height: 1000px;
            padding: 300px;
            padding-top: 30px;
            padding-bottom: 30px;
            background-color:white ;
            margin: 0;  border:none;
            
        }
        .inner{
            position:absolute;z-index:999;
            top:90px;
            width: 800px;
            height: auto;
            padding: 30px 0 0 10% ;
            margin:0px auto;
            
            
        }
        .content{
            width: auto;
            height: auto;
            padding: 10px 0 0 100px;
        }
    </style>
</head>
<body>
    <div class="header"><h1>高大資管營報名表</h1></div>
    <div class="outer">
    <div class="inner">
            <div class="content">
                    <form action="submit.php" method="POST">
                        <style>
                            input{
                                margin:10px;
                            } 
                            select{
                                margin:10px;
                            } 
                            div{
                                background-color: azure;
                                margin:5px;
                            }
                        </style>
                            <div>姓名 <input type="text" name="name" placeholder="請輸入中文" ></div>
                            <div>FB <input type="text" name="FB" ></div> 
                            <div>
                                性別: <br/> 
                                男<input type="radio" name="gender" value="m">
                                女<input type="radio" name="gender" value="f">
                            </div>
                            
                            <div>出生年/月/日 <br/><input type="date" name="birthday"></div>
                            
                            <div>身分證字號 <input type="text" name="sid"></div>
                            <div>聯絡電話<input type="tel" name="telephone_num" ><br/>
                            聯絡手機<input type="tel" name="cellphone_num" ></div>
                            <div>
                            緊急聯絡人姓名<input type="text" name="name2"><br/>
                            緊急聯絡人關係<input type="text" name="name2R"><br/>
                            緊急聯絡人電話/手機<input type="tel" name="name2T" ><br/>                            
                            </div>
                            
                            <div>
                            居住縣市 <br>
                            <select name="live[]" multiple>
                                <option value="Taipie">Taipie</option>
                                <option value="Kaohsiung">Kaohsiung</option>
                                <option value="Tainan">Tainan</option>
                                <option value="other">Other</option>
                            </select>
                            </div>
                            <div>地址<input type="text" name="address" ></div>
                            
                            <div>E-mail<input type="text" name="mail"></div>
                            <div>學校<input type="text" name="school" ></div>
                            
                            <div>
                            年級
                            <select name="grade">
                                <option value="1">一年級</option>
                                <option value="2">二年級</option>
                                <option value="3">三年級</option>
                            </select>
                            </div>
                            <div>
                            感興趣的項目<br/>
                            <input type="checkbox" name="interest[]" value="info">資訊課程 <br/>
                            <input type="checkbox" name="interest[]" value="manage">管理課程<br/>
                           
                            </div>
                            

                            <div>
                            營服尺寸
                            <select name="clothsize">
                                <option value="XS">XS</option>
                                <option value="M">M</option>
                                <option value="4L">4L</option>
                            </select>
                            </div>

                            <div>
                            葷食 / 素食<br/>
                            葷<input type="radio" name="food" value="hun">
                            素<input type="radio" name="food" value="su">
                            </div>

                            <div>
                            特殊飲食習慣<input type="text" name="foodtype" ><br/>
                            特殊疾病<input type="text" name="sickness" >
                            </div>
                            <div>
                            如何前來營隊？<br/>
                            自行前往高雄大學<input type="radio" name="come" value="self">
                            搭乘火車/高鐵至新左營高鐵站<input type="radio" name="come" value="byT">
                            <br/>
                            如何回家？<br/>
                            自行從高雄大學回家<input type="radio" name="back" value="self">
                            至新左營高鐵站坐車<input type="radio" name="back" value="byT">
                            </div>
                            <br/>

                            <br/>
                            <div>
                            對營隊的期許
                            <textarea rows="20" cols="80" name="comment">Say something...</textarea>
                            </div>
                            <br/>
                        
                        
                        
                            <input type="reset" name="clear">
                            <input type="submit" name="ok"><br/>
                        
                        </form>
            </div>
        </div>
</body>

    </div>
    
</html>

