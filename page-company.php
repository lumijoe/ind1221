<!-- company -->
<?php
/**
 * Template Name: page-company
 * Description: This is the template
 */

get_header('company');
?>
<main>
    <!-- company -->
    <div class="section-tight">
        <div id="message">
            <h2>社長メッセージ</h2>
            <p>私たちの会社は、常にお客様のニーズに応えることを大事にしています。<br>私たちの製品とサービスが、皆様のビジネスの成功に貢献できることを心より願っています。</p>
            <p>JK. Roland</p>
        </div>
        
        <section id="about">
            <h2 class="text80">会社概要</h2>
            <table class="text80">
                <tr>
                    <th>項目</th>
                    <th>内容</th>
                </tr>
                <tr>
                    <td>企業名</td>
                    <td>会社名</td>
                </tr>
                <tr>
                    <td>社長名</td>
                    <td>JK. Roland</td>
                </tr>
                <tr>
                    <td>住所</td>
                    <td>〒123-4567 東京都千代田区1-1-1</td>
                </tr>
                <tr>
                    <td>TEL</td>
                    <td><a href="tel:012-345-6789">012-345-6789</a></td>
                </tr>
                <tr>
                    <td>資本金</td>
                    <td>1,000万円</td> <!-- 資本金を追加 -->
                </tr>
            </table>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.3462899129495!2d135.47245139999998!3d34.6964447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e66222b8f343%3A0x47168739956f0e86!2z5qCq5byP5Lya56S-5LiA5ZCR56S-!5e0!3m2!1sja!2sjp!4v1735267670699!5m2!1sja!2sjp" loading="lazy" referrerpolicy="no-referrer-when-downgrade"  class="text80"></iframe>
        </section>
        
        <section id="history">
            <h2  class="text80">沿革</h2>
            <p class="text80">私たちの会社は、1949年4月に設立され、以来、様々な製品を提供してきました。以下は、主な沿革です。</p>
            <ul style="gap: 20px;">
                <li class="text80">
                    <img src="https://images.unsplash.com/photo-1570126618953-d437176e8c79?auto=format&fit=crop&q=80" alt="サステナビリティ" class="history-image">
                    <span>1949年: 会社設立</span>
                </li>
                <li class="text80">
                    <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?auto=format&fit=crop&q=80" alt="サステナビリティ" class="history-image">
                    <span>1980年: 初の製品を発売</span>
                </li>
                <li class="text80">
                    <img src="https://images.unsplash.com/photo-1627744550360-404483bac52b?auto=format&fit=crop&q=80" alt="サステナビリティ" class="history-image">
                    <span>1990年: 海外進出</span>
                </li>
                <li class="text80">
                    <img src="https://images.unsplash.com/photo-1547895749-888a559fc2a7?auto=format&fit=crop&q=80" alt="サステナビリティ" class="history-image">
                    <span>2003年: 新工場を海外にて設立</span>
                </li>
            </ul>
        </section>
    </div>

    <!-- お問い合わせ -->
    <?php get_template_part('component', 'formcontact'); ?>

</main>
<?php
    get_footer(); 
?>