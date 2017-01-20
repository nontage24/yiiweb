<table class="table table-bordered">
        <tbody>
            <tr>
                <td align="center">
                    <div style="font-weight: bold">คะแนน ADL = <span id='adl_point_top'></span></div>
                </td>
            </tr>
            <tr>
                <td>
                    <ol>
                        <li style="font-weight: bold">การเคลือนที่ภายในห้องหรือบ้าน  </li>
                        <ul>
                            <li>
                                <input type="radio" name="a1"  data-adl='0' value="0">
                                เคลื่อนที่ไปไหนไม่ได้</li>
                            <li>
                                <input type="radio" name="a1"  data-adl='1' value="1">
                                ต้องใช้รถเข็นช่วยตัวเองให้เคลื่อนที่ได้เอง (ไม่ต้องมีคนเข็นให้) และต้องเข้าออกมุมห้องได้</li>
                            <li>
                                <input type="radio" name="a1" id="radio3" data-adl='2' value="2">
                                เดินหรือเคลื่อนที่โดยมีคนช่วย เช่น พยุง หรือบอกให้ทำตาม หรือต้องให้ความสนใจดูแลเพื่อความปลอดภัย</li>
                            <li>
                                <input type="radio" name="a1"  data-adl='3' value="3">
                                เดินหรือเคลื่อนที่ได้เอง
                            </li>
                        </ul>
                        <li style="font-weight: bold">การลุกจากที่นอนหรือลุกจากเตียงไปยังเก้าอี้</li>
                        <ul>
                            <li>
                                <input type="radio" name="a2"  data-adl='0' value="0">
                                ไม่สามารถนั่งได้ (นั่งแล้วจะล้มเสมอ) หรือต้องใช้คนสองคนช่วยกันยกขึ้น</li>
                            <li>
                                <input type="radio" name="a2"  data-adl='1' value="1">
                                ต้องการความช่วยเหลืออย่างมากจึงจะนั่งได้ เช่นต้องใช้คนที่แข็งแรงหรือมีทักษะ 1 คน หรือคนทั่วไป 2 คนพยุงหรือดันขึ้นมาจึงจะนั่งได้</li>
                            <li>
                                <input type="radio" name="a2"  data-adl='2' value="2">
                                ต้องการความช่วยเหลือบ้าง เช่น บอกให้ทำตาม หรือช่วยพยุงเล็กน้อย หรือต้องการคนดูแลเพื่อความปลอดภัย</li>
                            <li>
                                <input type="radio" name="a2"  data-adl='3' value="3">
                                ทำได้เอง
                            </li>
                        </ul>
                        <li style="font-weight: bold">การขึ้นลงบันได 1 ขั้น</li>
                        <ul>
                            <li>
                                <input type="radio" name="a3"  data-adl='0' value="0">
                                ไม่สามารถทำได้</li>
                            <li>
                                <input type="radio" name="a3"  data-adl='1' value="1">
                                ต้องการคนช่วย</li>
                            <li>
                                <input type="radio" name="a3"  data-adl='2' value="2">
                                ขึ้นลงได้เอง (ถ้าต้องการเครื่องช่วยเดิน เช่นที่พยุงเดิน จะต้องเอาขึ้นลงได้ด้วย)</li>
                        </ul>
                        <li style="font-weight: bold">การใช้ห้องน้ำ</li>
                        <ul>
                            <li>
                                <input type="radio" name="a4"  data-adl='0' value="0">
                                ช่วยตัวเองไม่ได้</li>
                            <li>
                                <input type="radio" name="a4" data-adl='1' value="1">
                                ทำเองได้บ้าง (อย่างน้อยทำความสะอาดตัวเองได้เองหลังจากเสร็จธุระ) แต่ต้องการความช่วยเหลือในบางสิ่ง</li>
                            <li>
                                <input type="radio" name="a4"  data-adl='2' value="2">
                                ช่วยตัวเองได้ดี (ขึ้นและลงจากโถส้วมได้ ทำความสะอาดได้เรียบร้อยหลังเสร็จธุระ ถอดใส่เสื้อผ้าได้เรียบร้อย)
                            </li>
                        </ul>
                        <li style="font-weight: bold">การกลั้นปัสสาวะในช่วง 1 สัปดาห์ที่ผ่านา</li>
                        <ul>
                            <li>
                                <input type="radio" name="a5"  data-adl='0' value="0">
                                กลั้นไม่ได้ หรือใส่สวนปัสสาวะแต่ไม่สามารถดูแลตนเองได้</li>
                            <li>
                                <input type="radio" name="a5"  data-adl='1' value="1">
                                กลั้นไม่ได้บางครั้ง (เป็นน้อยกว่าวันละครั้ง)</li>
                            <li>
                                <input type="radio" name="a5"  data-adl='2' value="2">
                                กลั้นได้ปกติ
                            </li>
                        </ul>
                        <li style="font-weight: bold">การถ่ายอุจจาระในช่วง 1 สัปดาห์ที่ผ่านมา</li>
                        <ul>
                            <li>
                                <input type="radio" name="a6"  data-adl='0' value="0">
                                กลั้นไม่ได้ หรือต้องการสวนอุจจาระอยู่เสมอ</li>
                            <li>
                                <input type="radio" name="a6"  data-adl='1' value="1">
                                กลั้นไม่ได้บางครั้ง (เป็นน้อยกว่า1 ครั้ง ต่อสัปดาห์)</li>
                            <li>
                                <input type="radio" name="a6"  data-adl='2' value="2">
                                กลั้นได้ปกติ </li>
                        </ul>
                        <li style="font-weight: bold">การอาบน้ำ</li>
                        <ul>
                            <li>
                                <input type="radio" name="a7"  data-adl='0' value="0">
                                ต้องมีคนช่วยหรือทำให้</li>
                            <li>
                                <input type="radio" name="a7"  data-adl='1' value="1">
                                อาบน้ำได้เอง
                            </li>
                        </ul>
                        <li style="font-weight: bold">การแต่งกาย (ล้างหน้า หวีผม แปรงฟัน โกนหนวด ในระยะ 24-48 ชั่วโมงที่ผ่านมา)</li>
                        <ul>
                            <li>
                                <input type="radio" name="a8"  data-adl='0' value="0">
                                ต้องการความช่วยเหลือ</li>
                            <li>
                                <input type="radio" name="a8"  data-adl='1' value="1">
                                ทำเองได้ (รวมทั้งทำได้เอง ถ้าเตรียมอุปกรณฺ์ไว้ให้)</li>
                        </ul>
                        <li style="font-weight: bold">การสวมใส่เสื้อผ้า</li>
                        <ul>
                            <li>
                                <input type="radio" name="a9"  data-adl='0' value="0">
                                ต้องมีคนสวมใส่ให้ ช่วยตัวเองแทบไม่ได้ หรือได้น้อย</li>
                            <li>
                                <input type="radio" name="a9"  data-adl='1' value="1">
                                ช่วยตัวเองได้ประมาณร้อยละ 50 ที่เหลือต้องมีคนช่วย</li>
                            <li>
                                <input type="radio" name="a9"  data-adl='2' value="2">
                                ช่วยตัวเองได้ดี (รวมทั้งการติดกระดุม รูดซิบ หรือใช้เสื้อผ้าที่เหมาะสมก็ได้)
                            </li>
                        </ul>
                        <li style="font-weight: bold">การรับประทานอาหาร (เมื่อเตรียมสำรับไว้ให้เรียบร้อยต่อหน้า)</li> 
                            
                            <ul>
                                <li>
                                    <input type="radio" name="a10"  data-adl='0' value="0">
                                    ไม่สามารถตักอาหารเข้าปากได้ ต้องมีคนป้อนให้</li>
                                <li>
                                    <input type="radio" name="a10"  data-adl='1' value="1">
                                    ตักอาหารเองได้แต่ต้องมีคนช่วย เช่น ใช้ช้อนตักเตรียมไว้ให้หรือตัดเป็นชิ้นเล็กๆไว้ล่วงหน้า</li>
                                <li>
                                    <input type="radio" name="a10"  data-adl='2' value="2">
                                    ตักอาหารและช่วยตัวเองได้เป็นปกติ
                                </li>
                            </ul>
                        
                    </ol>
                </td>
            </tr>
            
            <tr>
                <td align='center'>
                    <div style="font-weight: bold">คะแนน ADL = <span id='adl_point_foot'></span></div>
                </td>
            </tr>
            <tr>
                <td align="left">
                    <table  border="0" align="left" cellpadding="3" cellspacing="0">
                        <tbody>
                            <tr>
                                <td>
                                    <p style="font-weight: bold">คำอธิบาย</p>
                                    <ol>
                                        <li>คะแนน 12+ :(ติดสังคม) ผู้สูงอายุที่พึ่งตนเองได้ ช่วยเหลือผู้อื่น ชุมชน สังคมได้ </li>
                                        <li>คะแนน 5-11 :(ติดบ้าน) ผู้สูงอายุที่พึ่งตนเองได้บ้าง  </li>
                                        <li>คะแนน 0-4 :(ติดเตียง) ผู้สูงอายุกลุ่มที่พึ่งตนเองไม่ได้  </li>
                                    </ol>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

<?php
$this->registerJs($this->render('adl.js'));
?>