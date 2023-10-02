<x-client>

    <section id="accueil">
        <h2>Notre galerie Instagram</h2>

        <div class="imgBox"><img src="images/insta_img1.png" alt=""></div>

        <ul class="thumbnails">
            <li>
                <a href="images/insta_img1.png" target="imgBox">
                    <img src="images/insta_img1.png" alt="" width="184">
                </a>
            </li>
            <li>
                <a href="images/insta_img2.png" target="imgBox">
                    <img src="images/insta_img2.png" alt="" width="184">
                </a>
            </li>
            <li>
                <a href="images/insta_img3.png" target="imgBox">
                    <img src="images/insta_img3.png" alt="" width="184">
                </a>
            </li>
            <li>
                <a href="images/insta_img4.png" target="imgBox">
                    <img src="images/insta_img4.png" alt="" width="184">
                </a>
            </li>
            <li>
                <a href="images/insta_img5.png" target="imgBox">
                    <img src="images/insta_img5.png" alt="" width="184">
                </a>
            </li>
            <li>
                <a href="images/insta_img6.png" target="imgBox">
                    <img src="images/insta_img6.png" alt="" width="184">
                </a>
            </li>
        </ul>
    </section>


    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.thumbnails a').click(function(e) {
                e.preventDefault();
                $('.imgBox img').attr("src", $(this).attr("href"))
            })
        })
    </script>

</x-client>
