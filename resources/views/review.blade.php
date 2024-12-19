<!DOCTYPE html>
<html lang="en">
    @include('header')
    <body>
    @include('navbar')

    <section class="review-section">
    <div class="container">
        <h2 class="text-center my-5 alata-font review-title">Review Our Salon</h2>
        
        <div class="review-input mb-3 position-relative">
            <textarea placeholder="Type your review..." class="form-control mb-2 text-area-style" style="background-color: #FFF8E1;"></textarea>
            <button class="button-review-style alata-font">Send</button>
        </div>

        <div class="d-inline-block ms-auto position-relative container-star-review">
            <img src="./image/black-star.svg" alt="" class="black-star">
            <img src="./image/orange-star.svg" class="orange-star">
        </div>
        <div class="d-inline-block ms-auto position-relative container-star-review2">
            <img src="./image/black-star.svg" alt="" class="black-star">
            <img src="./image/orange-star.svg" class="orange-star">
        </div>
        <div class="d-inline-block ms-auto position-relative container-star-review3">
            <img src="./image/black-star.svg" alt="" class="black-star">
            <img src="./image/orange-star.svg" class="orange-star">
        </div>
        <div class="d-inline-block ms-auto position-relative container-star-review4">
            <img src="./image/black-star.svg" alt="" class="black-star">
            <img src="./image/orange-star.svg" class="orange-star">
        </div>
        <div class="d-inline-block ms-auto position-relative container-star-review5">
            <img src="./image/black-star.svg" alt="" class="black-star">
            <img src="./image/orange-star.svg" class="orange-star">
        </div>

        
        
        <div class="review-list mt-5">
            <div class="review-item mb-4">
                <img src="./image/Аватарка.png" alt="Reviewer" class="review-avatar">
                <div class="review-content">
                    <h4 class="alata-font">Cici</h4>
                    <p class="alata-font">The salon has a very cozy and modern atmosphere. The interior is dominated by soft pastel colors, complemented by soothing background music. The staff are also very friendly and welcoming.</p>
                    <span class="review-date alata-font">20 November 2024</span>
                    <div class="review-rating">★★★★★</div>
                </div>
            </div>

            <div class="review-item mb-4">
                <img src="./image/Аватарка.png" alt="Reviewer" class="review-avatar">
                <div class="review-content">
                    <h4 class="alata-font">Besty</h4>
                    <p class="alata-font">Just had a haircut at HomeGlam. The result was exactly what I wanted. The stylist was friendly and patient with me. The atmosphere is also comfortable. Recommended!</p>
                    <span class="review-date alata-font">20 November 2024</span>
                    <div class="review-rating">★★★★★</div>
                </div>
            </div>

            <div class="review-item mb-4">
                <img src="./image/Аватарка.png" alt="Reviewer" class="review-avatar">
                <div class="review-content">
                    <h4 class="alata-font">Awa</h4>
                    <p class="alata-font">The facial experience at [Salon Name] was truly pampering. The therapist was very skilled and gentle in performing the treatment. The products used also feel luxurious on the skin. After the treatment, my face feels brighter and more supple. Worth it!</p>
                    <span class="review-date alata-font">20 November 2024</span>
                    <div class="review-rating">★★★★★</div>
                </div>
            </div>
        </div>
    </div>
</section>

        <footer class="footer">
            <div class="footer-content">
                <div class="footer-links">
                    <div class="footer-section">
                        <h4>About us</h4>
                    </div>
                    <div class="footer-section">
                        <h4>Quick links</h4>
                    </div>
                    <div class="footer-section">
                        <h4>Site map</h4>
                    </div>
                    <div class="footer-section">
                        <h4>Customer support</h4>
                    </div>
                </div>

                <div class="footer-secondary">
                    <div class="footer-legal">
                        <span>Terms of services</span>
                        <span>Privacy policy</span>
                    </div>

                    <div class="social-media">
                        <a href="https://facebook.com/homeglam" target="_blank">
                            <img src="./image/Facebook.png" alt="Facebook">
                        </a>
                        <a href="https://twitter.com/homeglam" target="_blank">
                            <img src="./image/Twitter.png" alt="Twitter">
                        </a>
                        <a href="https://instagram.com/homeglam" target="_blank">
                            <img src="./image/Instagram.png" alt="Instagram">
                        </a>
                    </div>
                </div>

                <div class="footer-copyright">
                    <p>(C) 2024 HomeGlam. All rights reserved.</p>
                </div>
            </div>
        </footer>


        <script>
    // Ambil semua container bintang
    const containers = [
        document.querySelector('.container-star-review'),
        document.querySelector('.container-star-review2'),
        document.querySelector('.container-star-review3'),
        document.querySelector('.container-star-review4'),
        document.querySelector('.container-star-review5')
    ];

    // Tambahkan event listener ke setiap container
    containers.forEach((container, index) => {
        container.addEventListener('click', () => {
            // Aktifkan bintang sesuai dengan indeks container yang diklik
            containers.forEach((c, i) => {
                const orangeStar = c.querySelector('.orange-star');

                if (i <= index) {
                    // Aktifkan bintang (atur opacity)
                    orangeStar.style.opacity = '1';
                } else {
                    // Nonaktifkan bintang (hapus opacity)
                    orangeStar.style.opacity = '';
                }
            });
        });
    });
</script>




    </body>
</html>