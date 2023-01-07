<?php
    $title = "Contact";
    include "../common/header.php";
?>
    <div class="contact_all">
        <form id="contact" action="contact_insert.php" method="post">
            <div class="contact_bg"></div>
            <div class="contact_text wow fadeInUp">We hope you come with us!!</div>
            <p class="contact_context wow fadeInUp" data-wow-delay="0.2s">웹사이트 제작 및 개발에 대한 데이터베이스와 노하우로<br class="mobile"> 가치있는 사이트를 만듭니다.<br>
                고객의 니즈를 저희만의 경험과 소통을 통해<br>
                최고, 최선의 결과를 선사해드리겠습니다.
            </p>
            <p class="call wow fadeInUp" data-wow-delay="0.3s">내용을 작성해주시면<br class="mobile"> 담당자가 빠른 시간 내에 연락드리겠습니다.</p>
            <div class="contact_info">
                <div class="contact_about">
                    <label for="userName">의뢰자 성명</label>
                    <input type="text" id="userName" name="userName" placeholder="의뢰자 성명">
                    <span class="error_msg"></span>
                </div>
                <div class="contact_about">
                    <label for="userPhone">연락처</label>
                    <input type="text" id="userPhone" name="userPhone" placeholder="받으실 연락처">
                    <span class="error_msg"></span>
                </div>
                <div class="contact_about">
                    <label for="userMail">메일 주소</label>
                    <input type="text" id="userMail" name="userMail" placeholder="받으실 메일주소">
                    <span class="error_msg"></span>
                </div>
                <div class="contact_about">
                    <label for="userName">문의내용</label>
                    <textarea id="userContext" name="userContext" placeholder="500자 이내로 작성해주세요"></textarea>
                    <span class="error_msg bot"></span>
                </div>
            </div>
            <button type="submit">문의하기</button>
        </form>
        <div class="contact_menu">
            <ul class="menu_gnb">
                <li>
                    <a href="#">
                        <i class="fas fa-phone-alt"></i>
                        <h3>연락 방법</h3>
                        <p>070-4212-3595</p>
                        <p>www@hanbom.com</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-clock"></i>
                        <h3>업무시간</h3>
                        <p>월-금(토,일, 공휴일 휴무)</p>
                        <p>오전 10시 - 오후 6시</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>주소</h3>
                        <p>서울 강남구 언주로 106길 21, B1</p>
                        <p>B1. 21,EONJU-RO 106 GIL, GANGNAM-GU,<br>SEOUL, REPUBLIC OF KOREA</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="brochure">
            <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/hanbom/hanbom_brochure.pdf'; ?>" class="bro_text" download>Brochure</a>
        </div>
    </div>
    <?php 
        $contact = "contact";
        include "../common/footer.php";
    ?>