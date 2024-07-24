
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.carousel img');
            const prevButton = document.getElementById('prev');
            const nextButton = document.getElementById('next');
            let currentIndex = 0;

            function showImage(index) {
                images.forEach((img, i) => {
                    img.classList.toggle('active', i === index);
                });
            }

            function prevImage() {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
                showImage(currentIndex);
            }

            function nextImage() {
                currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
                showImage(currentIndex);
            }

            prevButton.addEventListener('click', prevImage);
            nextButton.addEventListener('click', nextImage);

            // Auto-rotate every 5 seconds
            setInterval(nextImage, 5000);
        });
